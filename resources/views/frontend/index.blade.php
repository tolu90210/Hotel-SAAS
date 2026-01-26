@extends('frontend.main')
@section('index')

<!-- 
		=============================================
			Hero Banner
		============================================== 
		-->
		@include('frontend.home.banner')
		<!-- /.hero-banner-one -->

        <!-- 
		=============================================
			Category Section One
		============================================== 
		-->
		@include('frontend.home.category')
		<!-- /.category-section-one -->


        <!--
		=====================================================
			Featured Property Listing Four
		=====================================================
		-->
		@include('frontend.home.feature')
		<!-- /.property-listing-four -->

		<!-- 
		=============================================
			BLock Feature Eleven
		============================================== 
		-->
		@include('frontend.home.block')
		<!-- /.block-feature-eleven -->



		<!-- 
		=============================================
			Deals
		============================================== 
		-->
		@include('frontend.home.deals')
		<!-- /.deals -->



		<!--
		=====================================================
			Testimonial Section Four
		=====================================================
		-->
		@include('frontend.home.testimonial')
		<!-- /.testimonial-section-four -->


		<!--
		=====================================================
			Choose us Feature Fourteen
		=====================================================
		-->
		@include('frontend.home.chooseus')
		<!-- /.Choose us-fourteen -->
		
		


		<!--
		=====================================================
			location Feature Three
		=====================================================
		-->
		@include('frontend.home.location')
		<!-- /.location-feature-three -->




		<!--
		=====================================================
			Agent Section One
		=====================================================
		-->
		@include('frontend.home.agent')
		<!-- /.agent-section-one -->



		<!--
		=====================================================
			CTA
		=====================================================
		-->
		@include('frontend.home.cta')
		<!-- /.CTA -->



		<!--
		=====================================================
			Blog Section Two
		=====================================================
		-->
		@include('frontend.home.blog')
		<!-- /.blog-section-two -->

		<!--
		=====================================================
			Fancy Banner Eight
		=====================================================
		-->
		@include('frontend.home.becomeagent')
		<!-- /.fancy-banner-eight -->
@endsection