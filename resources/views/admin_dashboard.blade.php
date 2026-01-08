<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="keywords" content="Real estate, Property sale, Property buy">
	<meta name="description" content="Homy is a beautiful website template designed for Real Estate Agency.">
    <meta property="og:site_name" content="Homy">
    <meta property="og:url" content="https://creativegigstf.com">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Homy-Real Estate HTML5 Template & Dashboard">
	<meta name='og:image' content='{{ asset('backend/assets/images/assets/ogg.png') }}'>
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
	<title>Homy Hotel Management Dashboard</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="{{ asset('backend/assets/images/fav-icon/icon.png') }}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/bootstrap.min.css') }}" media="all">
	<!-- Main style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.min.css') }}" media="all">
	<!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}" media="all">

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
				<div class="icon"><img src="{{ asset('backend/assets/images/loader.gif') }}" alt="" class="m-auto d-block" width="64"></div>
			</div>
		</div>

		<!-- 
		=============================================
			Dashboard Aside Menu
		============================================== 
		-->
		@include('body.sidebar')
		<!-- /.dash-aside-navbar -->

		<!-- 
		=============================================
			Dashboard Body
		============================================== 
		-->
		<div class="dashboard-body">
			<div class="position-relative">
				<!-- ************************ Header **************************** -->
				@include('body.header')
				<!-- End Header -->

                @yield('admin')
			</div>
		</div>
		<!-- /.dashboard-body -->



		<!-- Modal -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen modal-dialog-centered">
                <div class="container">
                    <div class="remove-account-popup text-center modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						<img src="{{ asset('backend/assets/images/lazy.svg') }}" data-src="{{ asset('backend/assets/images/icon/icon_22.svg') }}" alt="" class="lazy-img m-auto">
						<h2>Are you sure?</h2>
						<p>Are you sure to delete your account? All data will be lost.</p>
						<div class="button-group d-inline-flex justify-content-center align-items-center pt-15">
							<a href="#" class="confirm-btn fw-500 tran3s me-3">Yes</a>
							<button type="button" class="btn-close fw-500 ms-3" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
						</div>
                    </div>
                    <!-- /.remove-account-popup -->
                </div>
            </div>
        </div>
		


		<button class="scroll-top">
			<i class="bi bi-arrow-up-short"></i>
		</button>




		<!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('backend/assets/vendor/jquery.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('backend/assets/vendor/wow/wow.min.js') }}"></script>
		<!-- Slick Slider -->
		<script src="{{ asset('backend/assets/vendor/slick/slick.min.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('backend/assets/vendor/fancybox/fancybox.umd.js') }}"></script>
		<!-- Lazy -->
		<script src="{{ asset('backend/assets/vendor/jquery.lazy.min.js') }}"></script>
		<!-- js Counter -->
		<script src="{{ asset('backend/assets/vendor/jquery.counterup.min.js') }}"></script>
		<script src="{{ asset('backend/assets/vendor/jquery.waypoints.min.js') }}"></script>
		<!-- Nice Select -->
		<script src="{{ asset('backend/assets/vendor/nice-select/jquery.nice-select.min.js') }}"></script>
		<!-- validator js -->
		<script src="{{ asset('backend/assets/vendor/validator.js') }}"></script>
		<!-- Chart js -->
		<script src="{{ asset('backend/assets/vendor/chart.js') }}"></script>

		<!-- Theme js -->
		<script src="{{ asset('backend/assets/js/theme.js') }}"></script>

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