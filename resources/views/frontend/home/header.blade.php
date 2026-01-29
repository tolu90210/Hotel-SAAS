        <header class="theme-main-menu menu-overlay menu-style-one sticky-menu">
			<div class="alert-wrapper text-center">
				<p class="fs-16 m0 text-white">The <a href="listing_01.html" class="fw-500">flash sale</a> go on. The offer will end in — <span>This Sunday</span></p>
			</div>
			<!-- /.alert-wrapper -->
			<div class="inner-content gap-one">
				<div class="top-header position-relative">
					<div class="d-flex align-items-center justify-content-between">
						<div class="logo order-lg-0">
							<a href="index.html" class="d-flex align-items-center">
								<img src="{{ asset('backend_frontend/assets/images/logo/logo_01.svg') }}" alt="">
							</a>
						</div>
						<!-- logo -->
						<div class="right-widget ms-auto ms-lg-0 me-3 me-lg-0 order-lg-3">
							<ul class="d-flex align-items-center style-none">


								@auth
								<li>
									<a href="{{ route('dashboard') }}" class="btn-one" target="_blank"><i class="fa-regular fa-dashboard"></i> <span>Dashboard</span></a>
                                </li>

								<li class="d-none d-md-inline-block ms-3">
                                    <a href="{{ route('user.logout') }}" class="btn-two"><span>Logout</span> <i class="fa-regular fa-lock"></i></a>
                                </li>
								@else
								<li>
									<a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" class="btn-one"><i class="fa-regular fa-lock"></i> <span>Login</span></a>
                                </li>
								<li class="d-none d-md-inline-block ms-3">
                                    <a href="dashboard/add-property.html" class="btn-two" target="_blank"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
                                </li>
								@endauth
							</ul>
						</div>
						<nav class="navbar navbar-expand-lg p0 order-lg-2">
							<button class="navbar-toggler d-block d-lg-none" type="button" data-bs-toggle="collapse"
								data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
								aria-label="Toggle navigation">
								<span></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarNav">
								<ul class="navbar-nav align-items-lg-center">
									<li class="d-block d-lg-none"><div class="logo"><a href="index.html" class="d-block"><img src="{{ asset('backend_frontend/assets/images/logo/logo_01.svg') }}" alt=""></a></div></li>
									<li class="nav-item dashboard-menu">
										<a class="nav-link" href="dashboard/dashboard-index.html" target="_blank">Dashboard</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Home
										</a>
										<ul class="dropdown-menu">
											<li><a href="index.html" class="dropdown-item"><span>Home 01</span></a></li>
											<li><a href="index-2.html" class="dropdown-item"><span>Home 02</span></a></li>
											<li><a href="index-3.html" class="dropdown-item"><span>Home 03</span></a></li>
											<li><a href="index-4.html" class="dropdown-item"><span>Home 04</span></a></li>
											<li><a href="index-5.html" class="dropdown-item"><span>Home 05</span></a></li>
											<li><a href="index-6.html" class="dropdown-item"><span>Home 06</span></a></li>
											<li><a href="index-7.html" class="dropdown-item"><span>Home 07</span></a></li>
											<li><a href="index-8.html" class="dropdown-item"><span>Home 08</span></a></li>
										</ul>
									</li>
									<li class="nav-item dropdown mega-dropdown-sm">
							        	<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">Listing
										</a>
						                <ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Listing Type</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_01.html" class="dropdown-item"><span>Grid Sidebar-1</span></a></li>
															<li><a href="listing_05.html" class="dropdown-item"><span>Grid Sidebar-2</span></a></li>
															<li><a href="listing_02.html" class="dropdown-item"><span>List Sidebar-1</span></a></li>
															<li><a href="listing_06.html" class="dropdown-item"><span>List Sidebar-2</span></a></li>
															<li><a href="listing_03.html" class="dropdown-item"><span>Grid Top Filter-1</span></a></li>
															<li><a href="listing_07.html" class="dropdown-item"><span>Grid Top Filter-2</span></a></li>
															<li><a href="listing_04.html" class="dropdown-item"><span>List Top Filter-1</span></a></li>
															<li><a href="listing_08.html" class="dropdown-item"><span>List Top Filter-2</span></a></li>
															<li><a href="listing_09.html" class="dropdown-item"><span>Grid Banner Filter-1</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Listing Type</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_11.html" class="dropdown-item"><span>Grid Banner Filter-2</span></a></li>
															<li><a href="listing_10.html" class="dropdown-item"><span>List Banner Filter-1</span></a></li>
															<li><a href="listing_12.html" class="dropdown-item"><span>List Banner Filter-2</span></a></li>
															<li><a href="listing_13.html" class="dropdown-item"><span>Grid Fullwidth</span></a></li>
															<li><a href="listing_14.html" class="dropdown-item"><span>Grid Fullwidth Map-1</span></a></li>
															<li><a href="listing_16.html" class="dropdown-item"><span>Grid Fullwidth Map-2</span></a></li>
															<li><a href="listing_15.html" class="dropdown-item"><span>List Fullwidth Map-1</span></a></li>
															<li><a href="listing_17.html" class="dropdown-item"><span>List Fullwidth Map-2</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Single Listing</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="listing_details_01.html" class="dropdown-item"><span>Listing Details-1</span></a></li>
															<li><a href="listing_details_02.html" class="dropdown-item"><span>Listing Details-2</span></a></li>
															<li><a href="listing_details_03.html" class="dropdown-item"><span>Listing Details-3</span></a></li>
															<li><a href="listing_details_04.html" class="dropdown-item"><span>Listing Details-4</span></a></li>
															<li><a href="listing_details_05.html" class="dropdown-item"><span>Listing Details-5</span></a></li>
															<li><a href="listing_details_06.html" class="dropdown-item"><span>Listing Details-6</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
						            </li>
									<li class="nav-item dropdown mega-dropdown-sm">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Pages
										</a>
										<ul class="dropdown-menu">
							                <li class="row gx-1">
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Essential</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="about_us_01.html" class="dropdown-item"><span>About us -1</span></a></li>
															<li><a href="about_us_02.html" class="dropdown-item"><span>About us -2</span></a></li>
															<li><a href="agency.html" class="dropdown-item"><span>Agency</span></a></li>
															<li><a href="agency_details.html" class="dropdown-item"><span>Agency Details</span></a></li>
															<li><a href="agent.html" class="dropdown-item"><span>Agent</span></a></li>
															<li><a href="agent_details.html" class="dropdown-item"><span>Agent Details</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Features</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="project_01.html" class="dropdown-item"><span>Project -1</span></a></li>
															<li><a href="project_02.html" class="dropdown-item"><span>Project -2</span></a></li>
															<li><a href="project_03.html" class="dropdown-item"><span>Project -3</span></a></li>
															<li><a href="project_04.html" class="dropdown-item"><span>Project -4</span></a></li>
															<li><a href="project_details_01.html" class="dropdown-item"><span>Project Details</span></a></li>
															<li><a href="service_01.html" class="dropdown-item"><span>Services -1</span></a></li>
															<li><a href="service_02.html" class="dropdown-item"><span>Services -2</span></a></li>
															<li><a href="service_details.html" class="dropdown-item"><span>Service Details</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
												<div class="col-lg-4">
													<div class="menu-column">
														<h6 class="mega-menu-title">Others</h6>
														<ul class="style-none mega-dropdown-list">
															<li><a href="compare.html" class="dropdown-item"><span>Property Compare</span></a></li>
															<li><a href="pricing_01.html" class="dropdown-item"><span>Pricing -1</span></a></li>
															<li><a href="pricing_02.html" class="dropdown-item"><span>Pricing -2</span></a></li>
															<li><a href="contact.html" class="dropdown-item"><span>Contact Us</span></a></li>
															<li><a href="faq.html" class="dropdown-item"><span>FAQ's</span></a></li>
															<li><a href="404.html" class="dropdown-item"><span>404-Error</span></a></li>
														</ul>
													</div> <!--/.menu-column -->
												</div>
											</li>
						                </ul>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
											data-bs-auto-close="outside" aria-expanded="false">Blog
										</a>
										<ul class="dropdown-menu">
											<li><a href="blog_01.html" class="dropdown-item"><span>Blog Grid</span></a></li>
											<li><a href="blog_02.html" class="dropdown-item"><span>Blog List</span></a></li>
											<li><a href="blog_03.html" class="dropdown-item"><span>Blog 2 column</span></a></li>
											<li><a href="blog_details.html" class="dropdown-item"><span>Blog Details</span></a></li>
										</ul>
									</li>
									<li class="d-md-none ps-2 pe-2 mt-20">
										<a href="dashboard/add-property.html" class="btn-two w-100" target="_blank"><span>Add Listing</span> <i class="fa-thin fa-arrow-up-right"></i></a>
									</li>
								</ul>
							</div>
						</nav>
					</div>
				</div> <!--/.top-header-->
			</div> <!-- /.inner-content -->
		</header>