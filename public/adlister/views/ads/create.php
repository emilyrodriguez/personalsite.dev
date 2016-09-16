<div class="container">
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<h1 class="h1">Create an Ad</h1>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div>
				<form id="FormEnvioCorreo" enctype="multipart/form-data" method="post">
					<div class="row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="name" class="make_white">Name</label>
								<input type="text" id="subject" name="name" class="form-control" required autofocus>
							</div>
							<div class="form-group">
								<label for="price" class="make_white">Price, whole numbers only</label>
								<input type="text" id="subject" name="price" class="form-control" required autofocus placeholder="Ex: 150">
							</div>
							<div class="form-group">
								<label for="keywords" class="make_white">Keywords, seperated by a ( , )</label>
								<input type="text" id="keywords" name="keywords" class="form-control" required autofocus>
							</div>
							<div class="form-group">
								<label for="name" class="make_white">Attach</label>
								<input type="file" id="fileselect" name="documents" class="form-control"  style="  width: 310px;" >
							</div>
						</div>
					</div>
							<div class="form-group">
								<label for="subject" class="make_white">Description</label>
								<textarea type="text" id="description" name="description" class="form-control" required="required" autofocus rows="10"></textarea>
							</div>
							<div class="col-md-12">
								<div class="control-group">
									<label class="control-label" for="button1id"></label>
									<div class="controls">
										<button id="button1id" name="button1id" class="btn btn-success">Submit</button>
										<button id="button2id" name="button2id" class="btn btn-danger">Clear</button>
									</div>
								</div>
							</div>
						</div>
				</form>
			</div>
		</div>
		<div class="col-md-4">
	</div>
	</div>
</div>