<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate">
	<meta name='og:image' content='{{ asset('backend_frontend/assets/images/assets/ogg.png') }}'>
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#0D1A1C">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#0D1A1C">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#0D1A1C">
	<title>Homy-Real Estate</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('backend_frontend/assets/images/fav-icon/icon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend_frontend/assets/css/bootstrap.min.css') }}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend_frontend/assets/css/style.min.css') }}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend_frontend/assets/css/responsive.css') }}" media="all">

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js') }}"></script>
			<script src="vendor/html5shiv.js') }}"></script>
			<script src="vendor/respond.js') }}"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		@include('frontend.home.preloader')


		<!--
		=============================================
			Theme Main Menu
		============================================== 
		-->
		@include('frontend.home.header')
		<!-- /.theme-main-menu -->



		@yield('index')
	



        <!--
		=====================================================
			Footer Three
		=====================================================
		-->
		@include('frontend.home.footer')


		<!-- ################### Login Modal ####################### -->
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="user-data-form modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<div class="form-wrapper m-auto">
							<ul class="nav nav-tabs w-100" role="tablist">
								<li class="nav-item" role="presentation">
									<button class="nav-link active" data-bs-toggle="tab" data-bs-target="#fc1" role="tab">Login</button>
								</li>
								<li class="nav-item" role="presentation">
									<button class="nav-link" data-bs-toggle="tab" data-bs-target="#fc2" role="tab">Register</button>
								</li>
							</ul>
							<div class="tab-content mt-30">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Welcome Back!</h2>
										{{-- <p class="fs-20 color-dark">Still don't have an account? <a href="#">Sign up</a></p> --}}
									</div>

									{{-- @if ($errors->any())
									<div class="alert alert-danger">
										@foreach ($errors->all() as $error)
										<p class="mb-0">{{ $error }}</p>
										@endforeach
									</div>
									@endif --}}


									<form method="POST" action="{{ route('login') }}">
										@csrf
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" id="email" placeholder="Youremail@gmail.com" name="email" required autofocus>
													@error('email')
														<span class="text-danger">{{ $message }}</span>
                                					@enderror
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" id="password" placeholder="Enter Password" class="pass_log_id" name="password" required autocomplete="current-password">
													<span class="placeholder_icon"><span class="passVicon"><img src="{{ asset('backend_frontend/assets/images/icon/icon_68.svg') }}" alt=""></span></span>
													@error('password')
                                        				<span class="text-danger">{{ $message }}</span>
                                    				@enderror
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember_me" name="remember">
														<label for="remember">Keep me logged in</label>
													</div>
													<a href="#">Forget Password?</a>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button type="submit" class="btn-two w-100 text-uppercase d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" role="tabpanel" id="fc2">
									<div class="text-center mb-20">
										<h2>Register</h2>
										{{-- <p class="fs-20 color-dark">Already have an account? <a href="#">Login</a></p> --}}
									</div>
									<form method="POST" action="{{ route('register') }}">
										@csrf
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Name*</label>
													<input type="text" placeholder="John Doe" name="name" required autofocus autocomplete="name">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input type="email" placeholder="johndoe@gmail.com" name="email" required autofocus autocomplete="email">
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" placeholder="Enter Password" name="password" class="pass_log_id" required autocomplete="new-password">
													<span class="placeholder_icon"><span class="passVicon"><img src="{{ asset('backend_frontend/assets/images/icon/icon_68.svg') }}" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Confirm Password*</label>
													<input type="password" placeholder="Confirm Password" class="pass_log_id" name="password_confirmation" required autocomplete="new-password">
													<span class="placeholder_icon"><span class="passVicon"><img src="{{ asset('backend_frontend/assets/images/icon/icon_68.svg') }}" alt=""></span></span>
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember2" required>
														<label for="remember2">By hitting the "Register" button, you agree to the <a href="#">Terms conditions</a> & <a href="#">Privacy Policy</a></label>
													</div>
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button type="submit" class="btn-two w-100 text-uppercase d-block mt-20">Sign Up</button>
											</div>
										</div>
									</form>
								</div>
								<!-- /.tab-pane -->
							</div>
							
							<div class="d-flex align-items-center mt-30 mb-10">
								<div class="line"></div>
								<span class="pe-3 ps-3 fs-6">OR</span>
								<div class="line"></div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="{{ asset('backend_frontend/assets/images/icon/google.png') }}" alt="">
										<span class="ps-3">Signup with Google</span>
									</a>
								</div>
								<div class="col-sm-6">
									<a href="#" class="social-use-btn d-flex align-items-center justify-content-center tran3s w-100 mt-10">
										<img src="{{ asset('backend_frontend/assets/images/icon/facebook.png') }}" alt="">
										<span class="ps-3">Signup with Facebook</span>
									</a>
								</div>
							</div>
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>
            </div>
        </div>



		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('backend_frontend/assets/vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('backend_frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('backend_frontend/assets/vendor/wow/wow.min.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('backend_frontend/assets/vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('backend_frontend/assets/vendor/fancybox/fancybox.umd.js') }}"></script>
		<!-- Lazy -->
		<script src="{{ asset('backend_frontend/assets/vendor/jquery.lazy.min.js') }}"></script>
		<!-- js Counter -->
		<script src="{{ asset('backend_frontend/assets/vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('backend_frontend/assets/vendor/jquery.waypoints.min.js') }}"></script>
		<!-- Nice Select -->
		<script src="{{ asset('backend_frontend/assets/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
		<!-- validator js -->
		<script src="{{ asset('backend_frontend/assets/vendor/validator.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('backend_frontend/assets/js/theme.js') }}"></script>
	</div> <!-- /.main-page-wrapper -->

	@if ($errors->any())
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		const loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
		loginModal.show();
	});
	</script>
	@endif



</body>

</html>