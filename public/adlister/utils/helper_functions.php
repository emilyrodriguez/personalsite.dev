<?php
// List of helper functions used throughout the application.
// Primarily used within the PageController function.

require_once 'Auth.php';
require_once '../controllers/PageController.php';
require_once '../models/Items.php';
// takes image from form submission and moves it into the uploads directory
function saveUploadedImage($input_name)
{
	$target_dir = "img/uploads/";
	$filename = basename($_FILES[$input_name]["name"]);
	$target_file = $target_dir . $filename;
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is an actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES[$input_name]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES[$input_name]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES[$input_name]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}
	return $filename;
}
//show items function
function showInventory() {
	$items = Items::all();
	return $items;
}


//Featured Item List

function featuredItems() {
	$items = Items::Features(); 
	return $items;
}


// //input functions

//  $username = Input::has('email_user') ? Input::get('email_user') : null;
//  $password = Input::has('password') ? Input::get('password') : null;
//  $name = Input::has('name') ? Input::get('name') : null;
//  $email = Input::has('email') ? Input::get('email') : null;

//  //first time page load
// if($username == null && $password == null && $name == null && $email == null){
// 	return null;
// }






function createUser (){
	if (Input::has('name')) {
			$user = new User();


			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->password = Input::get('password');
			$user->profileImgSrc = 'default-profile.png';
			$user->bannerImgSrc = 'default-background.jpg';
			$user->save();	
	}
}


function loginController(){
	if(Auth::check()){
		$request = '/account';
		header("Location: $request");
		exit();
	}

	$username = Input::has('email_user') ? Input::get('email_user') : null;
 	$password = Input::has('password') ? Input::get('password') : null;

	if (Auth::attempt($username, $password)){
		$request = '/account';	
		header("Location: $request");
		exit();
	} 
}



