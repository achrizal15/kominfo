<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
					<!-- <img src="<?= base_url("/assets/") ?>img/logo.jpg" alt="logo"> -->
					</div>
					<div class="card fat">
						<div class="card-body">
						<div class="alert alert-danger d-none my-alert" role="alert">
				<!-- ERROR MEsSAGE -->
						</div>
							<h4 class="card-title">Register</h4>
						
							<form method="POST" class="my-login-validation" id="form-register" novalidate>
								<div class="form-group">
									<label for="name">Name</label>
									<input id="name" type="text" class="form-control" name="name" required autofocus>
									<div class="invalid-feedback">
										What's your name?
									</div>
								</div>

								<div class="form-group">
									<label for="email">E-Mail Address</label>
									<input id="email" type="email" class="form-control" name="email" required>
									<div class="invalid-feedback">
										Your email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
									<div class="invalid-feedback">
										Password is required
									</div>
								</div>
								<div class="form-group m-0">
								<button type="submit" id="btn-form" class="btn btn-primary btn-block">
									<span>Register</span>
									<div class="spinner-border text-warning d-none" role="status">
										<span class="sr-only">Loading...</span>
									</div>
								</button>
							</div>
								<div class="mt-4 text-center">
									Already have an account? <a href="<?=base_url()?>login">Login</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; Your Company 
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="<?= base_url("/assets") ?>/bootstrap/js/jquerybuts.js"></script>
	<script src="<?= base_url("/assets") ?>/bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url("/assets") ?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= base_url("/assets") ?>/js/my-login.js"></script>
</body>
