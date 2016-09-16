<div class="container">

	<section id="login">

		<div class="row">

			<h1 class="header-title">Edit Account</h1>

			<div class="col-md-6 col-md-offset-3">

				<p>Please fill out the information below so we can update your account.</p>
				<?php if (isset($_SESSION['ERROR_MESSAGE'])) : ?>
	                <div class="alert alert-danger">
	                    <p class="error"><?= $_SESSION['ERROR_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['ERROR_MESSAGE']); ?>
	            <?php endif; ?>
	            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])) : ?>
	                <div class="alert alert-success">
	                    <p class="success"><?= $_SESSION['SUCCESS_MESSAGE']; ?></p>
	                </div>
	                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
	            <?php endif; ?>

				<form method="POST" action="" data-validation data-required-message="This field is required">

					<div class="form-group">
					    <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" value="<?= $user->name; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $user->email; ?>" data-required>
					</div>
					<div class="form-group">
					    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= $user->username; ?>" data-required>
					</div>

					<!-- Add images -->
					<div class="form-group">
						<label for="name" class="make-white">Attach Profile Image</label>
						<input type="file" id="file-select" name="documents" class="form-control">
					</div>
					<div class="form-group">
						<label for="name" class="make-white">Attach Banner Image</label>
						<input type="file" id="file-select" name="documents" class="form-control">
					</div>

					<!-- Add facts -->
					<div class="form-group">
					    <input type="text" class="form-control" id="attrOne" name="attrOne" placeholder="Tell us about yourself!" value="<?= $user->username; ?>" data-required>
					</div>

					<button type="submit" class="btn btn-primary">Update Account</button>

				</form>

			</div>

		</div>

	</section>

</div>