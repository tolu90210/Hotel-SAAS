<aside class="dash-aside-navbar">
    <div class="position-relative">
        <div class="logo d-md-block d-flex align-items-center justify-content-between plr bottom-line pb-30">
            <a href="{{ url('/') }}">
                <img src="{{ asset('backend_frontend/assets/images/logo/logo_01.svg') }}" alt="">
            </a>
            <button class="close-btn d-block d-md-none"><i class="fa-light fa-circle-xmark"></i></button>
        </div>
        <nav class="dasboard-main-nav pt-30 pb-30 bottom-line">
            <ul class="style-none">
                <li class="plr"><a href="{{ route('admin.dashboard') }}"
                        class="d-flex w-100 align-items-center active">
                        <img src="{{ asset('backend_frontend/assets/images/icon/icon_1_active.svg') }}" alt="">
                        <span>Dashboard</span>
                    </a></li>
                {{-- <li class="plr"><a href="message.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_2.svg') }}" alt="">
							<span>Message</span>
						</a></li> --}}
                <li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
                <li>
                    <div class="nav-title">RealEstate</div>
                </li>



                <li class="plr side-item" style="list-style:none;">
                    <a href="javascript:void(0)" class="d-flex w-100 align-items-center side-toggle"
                        style="padding:10px 15px; font-weight:500; cursor:pointer;">

                        <img src="{{ asset('backend_frontend/assets/images/icon/icon_17.svg') }}" alt="">
                        <span style="margin-left:10px;">Property Type</span>

                        <span class="side-arrow"
                            style="margin-left:auto; width:3px; height:3px; border-right:1px solid #666; border-bottom:1px solid #666; transform:rotate(45deg); transition:0.3s;"></span>
                    </a>

                    <ul class="side-submenu" style="display:none; padding:0; margin:5px 0 0 0;">

                        <li style="list-style:none;">
                            <a href="{{  route('all.type') }}"
                                style="display:block; padding:8px 15px 8px 45px; font-size:14px; color:#666; text-decoration:none;">
                                All Type
                            </a>
                        </li>

                        <li style="list-style:none;">
                            <a href="{{ route('add.type') }}"
                                style="display:block; padding:8px 15px 8px 45px; font-size:14px; color:#666; text-decoration:none;">
                                Add Type
                            </a>
                        </li>
                    </ul>
                </li>


				<li class="plr side-item" style="list-style:none;">
                    <a href="javascript:void(0)" class="d-flex w-100 align-items-center side-toggle"
                        style="padding:10px 15px; font-weight:500; cursor:pointer;">

                        <img src="{{ asset('backend_frontend/assets/images/icon/icon_6.svg') }}" alt="">
                        <span style="margin-left:10px;">Amenities</span>

                        <span class="side-arrow"
                            style="margin-left:auto; width:3px; height:3px; border-right:1px solid #666; border-bottom:1px solid #666; transform:rotate(45deg); transition:0.3s;"></span>
                    </a>

                    <ul class="side-submenu" style="display:none; padding:0; margin:5px 0 0 0;">

                        <li style="list-style:none;">
                            <a href="{{  route('all.amenitie') }}"
                                style="display:block; padding:8px 15px 8px 45px; font-size:14px; color:#666; text-decoration:none;">
                                All Amenities
                            </a>
                        </li>

                        <li style="list-style:none;">
                            <a href="{{ route('add.amenitie') }}"
                                style="display:block; padding:8px 15px 8px 45px; font-size:14px; color:#666; text-decoration:none;">
                                Add Amenities
                            </a>
                        </li>
                    </ul>
                </li>



                {{-- <li class="plr"><a href="account-settings.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_4.svg') }}" alt="">
							<span>Account Settings</span>
						</a></li>
						<li class="plr"><a href="membership.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_5.svg') }}" alt="">
							<span>Membership</span>
						</a></li>
						<li class="bottom-line pt-30 lg-pt-20 mb-40 lg-mb-30"></li>
						<li><div class="nav-title">Listing</div></li>
						<li class="plr"><a href="properties-list.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_6.svg') }}" alt="">
							<span>My Properties</span>
						</a></li>
						<li class="plr"><a href="add-property.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_7.svg') }}" alt="">
							<span>Add New Property</span>
						</a></li>
						<li class="plr"><a href="favourites.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_8.svg') }}" alt="">
							<span>Favourites</span>
						</a></li>
						<li class="plr"><a href="saved-search.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/icon_9.svg') }}" alt="">
							<span>Saved Search</span>
						</a></li>
						<li class="plr"><a href="review.html" class="d-flex w-100 align-items-center">
							<img src="{{ asset('backend_frontend/assets/images/icon/Dicon_10.svg') }}" alt="">
							<span>Reviews</span>
						</a></li> --}}
            </ul>
        </nav>
        <!-- /.dasboard-main-nav -->
        <div class="profile-complete-status bottom-line pb-35 plr">
            <div class="progress-value fw-500">82%</div>
            <div class="progress-line position-relative">
                <div class="inner-line" style="width:80%;"></div>
            </div>
            <p>Profile Complete</p>
        </div>
        <!-- /.profile-complete-status -->

        <div class="plr">
            <a href="{{ route('admin.logout') }}" class="d-flex w-100 align-items-center logout-btn">
                <div class="icon tran3s d-flex align-items-center justify-content-center rounded-circle"><img
                        src="{{ asset('backend_frontend/assets/images/icon/icon_41.svg') }}" alt=""></div>
                <span>Logout</span>
            </a>
        </div>
    </div>
</aside>
