<section class="h-100">
	<div class="container h-100">
		<div class="row justify-content-md-center h-100">
			<div class="card-wrapper">
				<div class="brand">
					<img src="<?= base_url("/assets/") ?>img/logo.jpg" alt="logo">
				</div>
				<div class="card fat">
					<div class="card-body">
						<div class="alert alert-danger d-none my-alert" role="alert">
							<!-- Displaying errors -->
						</div>
						<h4 class="card-title">Login</h4>

						<form id="form-login" class="my-login-validation" novalidate="">
							<div class="form-group">
								<label for="email">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="" required autofocus>
								<div class="invalid-feedback">
									Email is invalid
								</div>
							</div>

							<div class="form-group">
								<label for="password">Password
									<!-- <a href="forgot.html" class="float-right">
											Forgot Password?
										</a> -->
								</label>
								<input id="password" type="password" class="form-control" name="password" required data-eye>
								<div class="invalid-feedback">
									Password is required
								</div>
							</div>

							<div class="form-group m-0">
								<button type="submit" id="btn-form" class="btn btn-primary btn-block">
									<span>Login</span>
									<div class="spinner-border text-warning d-none" role="status">
										<span class="sr-only">Loading...</span>
									</div>
								</button>
							</div>
							<div class="mt-4 text-center">
								Don't have an account? <a href="<?= base_url() ?>register">Create One</a>
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