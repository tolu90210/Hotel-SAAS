<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate Admin Login">
	<meta name='og:image' content='{{ asset('../assets/images/assets/ogg.png') }}'>
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
	<title>Homy Admin Management Login</title>
	<!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{ asset('../assets/images/fav-icon/icon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/bootstrap.min.css') }}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/style.min.css') }}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('../assets/css/responsive.css') }}" media="all">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

	<!-- Fix Internet Explorer ______________________________________-->
	<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->
</head>

<body>
	<div class="main-page-wrapper">
		<!-- ===================================================
			Loading Transition
		==================================================== -->
		<div id="preloader">
			<div id="ctn-preloader" class="ctn-preloader">
				<div class="icon"><img src="{{ asset('../assets/images/loader.gif') }}" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div>


                <div class="container">
                    <div class="user-data-form modal-content">

						<div class="form-wrapper m-auto">
							
							<div class="tab-content mt-100">
								<div class="tab-pane show active" role="tabpanel" id="fc1">
									<div class="text-center mb-20">
										<h2>Admin Sign In</h2>
										{{-- <p class="fs-20 color-dark">Still don't have an account? <a href="#">Sign up</a></p> --}}
									</div>
									<form method="POST" action="{{ route('login') }}">
                                        @csrf
										<div class="row">
											<div class="col-12">
												<div class="input-group-meta position-relative mb-25">
													<label>Email*</label>
													<input class="form-control @error('email') is-invalid @enderror" type="email" id="email" placeholder="Youremail@gmail.com" name="email" required>
                                                    @error('email')
														<span class="text-danger">{{ $message }}</span>
                                					@enderror
												</div>
											</div>
											<div class="col-12">
												<div class="input-group-meta position-relative mb-20">
													<label>Password*</label>
													<input type="password" id="password" name="password" placeholder="Enter Password" class="pass_log_id @error('password') is-invalid @enderror" required>
													<span class="placeholder_icon"><span class="passVicon"><img src="{{ asset('../assets/images/icon/icon_68.svg') }}" alt=""></span></span>
                                             	
													@error('password')
                                        				<span class="text-danger">{{ $message }}</span>
                                    				@enderror
												</div>
											</div>
											<div class="col-12">
												<div class="agreement-checkbox d-flex justify-content-between align-items-center">
													<div>
														<input type="checkbox" id="remember_me" name="remember">
														<label for="remember_me">Keep me logged in</label>
													</div>
													{{-- <a href="#">Forget Password?</a> --}}
												</div> <!-- /.agreement-checkbox -->
											</div>
											<div class="col-12">
												<button class="btn-two w-100 text-uppercase d-block mt-20">Login</button>
											</div>
										</div>
									</form>
								</div>
								
							</div>
							
						</div>
						<!-- /.form-wrapper -->
                    </div>
                    <!-- /.user-data-form -->
                </div>






		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('../assets/vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('../assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('../assets/vendor/wow/wow.min.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('../assets/vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('../assets/vendor/fancybox/fancybox.umd.js') }}"></script>
		<!-- Lazy -->
		<script src="{{ asset('../assets/vendor/jquery.lazy.min.js') }}"></script>
		<!-- js Counter -->
		<script src="{{ asset('../assets/vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('../assets/vendor/jquery.waypoints.min.js') }}"></script>
		<!-- Nice Select -->
		<script src="{{ asset('../assets/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
		<!-- validator js -->
		<script src="{{ asset('../assets/vendor/validator.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('../assets/js/theme.js') }}"></script>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
        @if(Session::has('message'))
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
            case 'info':
                toastr.info(" {{ Session::get('message') }} ");
            break;
            
            case 'success':
                toastr.success(" {{ Session::get('message') }} ");
            break;
            
            case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
            break;
            
            case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
        }
        @endif 
        </script>

	</div> <!-- /.main-page-wrapper -->
</body>

</html>