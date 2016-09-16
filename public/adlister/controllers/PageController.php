<?php
require_once __DIR__ . '/../utils/helper_functions.php';

function pageController()
{

	// defines array to be returned and extracted for view
	$data = [];
	// finds position for ? in url so we can look at the url minus the get variables
	$request = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	//if shit goes south, visit helper_functions.php
	// switch that will run functions and setup variables dependent on what route was accessed
	switch ($request) {

		case '/':
			$data["items"] = featuredItems();
			$main_view = '../views/home.php';
			break;
		case '/account':
			$user = Auth::user();
			$data['user'] = $user;
			if (Auth::check()){
				$main_view = '../views/users/account.php';
			} else {
				$main_view = '../views/users/login.php';
			}
			break;
		case '/inventory':
			$data["items"] = showInventory();
			$main_view = '../views/ads/index.php';
			break;
		case '/search':
		var_dump(input::get("searchbtn"));
			$data["items"] = items::searchItem(input::get("searchbtn"));
			$main_view = '../views/ads/index.php';
			break;
		case '/create_ad':
			if ($_POST) {
				$imageName = saveUploadedImage("documents");
		        $item = new Items();
		        $item->name = Input::get('name');
		        $item->price = Input::get('price');
		        $item->description = Input::get('description');
		        $item->keywords = Input::get('keywords');
		        $item->username = $_SESSION["IS_LOGGED_IN"];
		        $item->img_url = $imageName ? $imageName : '';
		        $item->featured = 0;
		        $item->save();
		   	}
			$main_view = '../views/ads/create.php';
			break;
		case '/signup':
			$main_view = '../views/users/signup.php';
			if ($_POST){
				createUser();
				$request = '/login';
				header("Location: $request");
				exit();
			}
			break;
		case '/login':
			Auth::logout();
			if ($_POST) {
				loginController();
			}
			$main_view = '../views/users/login.php';
			break;
		case '/item':
			$name = input::get('name');
			$item = items::singleItem($name);
			$data ['item'] = $item;
			$main_view = '../views/ads/show.php';
			break;
		case '/logout':
			Auth::logout();
			$main_view = '../views/users/login.php';
			break;
		case '/noticemesenpai':
			$main_view = '../views/ads/missed_connections.php';
			break;
		case '/edit_ad':
			$main_view = '../views/ads/edit.php';
			break;
		// case '/delete_ad':
		// 	if () {
		//
		// 	} else {
		// 		echo "Only the item seller can delete this ad";
		// 	}
		// 	break;
		// case '/contact_ad':
		// 	break;
		default:    // displays 404 if route not specified above
			$main_view = '../views/404.php';
			break;
	}
	$data['main_view'] = $main_view;
	return $data;
}
extract(pageController());
