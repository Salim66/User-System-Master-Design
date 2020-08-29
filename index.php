<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Three Sixty Degree</title>
	<!-- CSS LINK -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	
	<div class="container">

		<!-- Login Form Start -->
		<div class="row justify-content-center wrapper" id="login-box">
			<div class="col-lg-10 my-auto">
				<div class="card-group  myShadow">
					<div class="card rounded-left p-4" style="flex-grow: 1.4;">
						<h1 class="text-center font-weight-bold text-primary">Sign in to Account</h1>
						<hr class="my-3">
						<form action="#" method="POST" class="px-4" id="login-form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" id="email" placeholder="E-Mail" class="form-control rounded-0" required>
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="password" placeholder="Password" class="form-control rounded-0" required>
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox float-left">
									<input type="checkbox" name="rem" class="custom-control-input" id="customCheck">
									<label for="customCheck" class="custom-control-label">Remember</label>
								</div>
								<div class="forgot float-right">
									<a href="#" id="forgot-link">Forgot Password</a>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="form-group">
								<input type="submit" value="Sign In" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
							</div>
						</form>
					</div>
					<div class="card justify-content-center rounded-right myColor p-4">
						<h1 class="text-center font-weight-bold text-white">Hello Friend!</h1>
						<hr class="my-3 bg-light myHr">
						<p class="text-center font-weight-bolder text-light lead">Enter your parsonal details and start your journey with us!</p>
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder myLinkBtn mt-4" id="register-link">Sign Up</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Form End -->

		<!-- Register Form start -->
		<div class="row justify-content-center wrapper" id="register-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group  myShadow">
					<div class="card justify-content-center rounded-left myColor p-4">
						<h1 class="text-center font-weight-bold text-white">Welcome Back!</h1>
						<hr class="my-3 bg-light myHr">
						<p class="text-center font-weight-bolder text-light lead">To keep connect with us please login with your personal info.</p>
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder myLinkBtn mt-4" id="login-link">Sign In</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow: 1.4;">
						<h1 class="text-center font-weight-bold text-primary">Create Account</h1>
						<hr class="my-3">
						<form action="#" method="POST" class="px-4" id="register-form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-user fa-lg"></i>
									</span>
								</div>
								<input type="text" name="name" placeholder="Full Name" class="form-control rounded-0" required>
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" placeholder="E-Mail" class="form-control rounded-0" required>
							</div>

							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="password" id="rpassword" placeholder="Password" class="form-control rounded-0" required minlength="5">
							</div>

							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>
								</div>
								<input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" class="form-control rounded-0" required minlength="5">
							</div>

							<div class="form-group">
								<input type="submit" value="Sign Up" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Register Form End -->

		<!-- Forgot Form Start -->
		<div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group  myShadow">
					<div class="card justify-content-center rounded-left myColor p-4">
						<h1 class="text-center font-weight-bold text-white">Forgot Password!</h1>
						<hr class="my-3 bg-light myHr">
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder myLinkBtn mt-4" id="back-link">Back</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow: 1.4;">
						<h1 class="text-center font-weight-bold text-primary">Forgot Your Password</h1>
						<hr class="my-3">
						<p class="lead text-center text-secondary">To reset your password, enter the registered e-mail address and we will send you the reset instructions on your e-mail</p>
						<form action="#" method="POST" class="px-4" id="login-form">
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>
								</div>
								<input type="email" name="email" id="femail" placeholder="E-Mail" class="form-control rounded-0" required>
							</div>
							
							<div class="form-group">
								<input type="submit" value="Reset Password" class="btn btn-primary btn-lg btn-block myBtn" id="forgot-btn">
							</div>
						</form>
					</div>
					
				</div>
			</div>
		</div>
		<!-- Forgot Form End -->
	</div>

	<!-- JS LINK -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>