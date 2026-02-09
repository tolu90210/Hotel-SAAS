@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <h2 class="main-title d-block d-lg-none">Add Property</h2>

    <form action="">

        <div class="bg-white card-box border-20 mt-40">
            <h4 class="dash-title-three">Overview</h4>
            <div class="row align-items-end">
                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Name*</label>
                        <input type="text" placeholder="Your Property Name" name="property_name">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Status*</label>
                        <select class="nice-select" name="property_status">
                            <option selected="" disabled="">Select Status</option>
                            <option value="rent">For Rent</option>
                            <option value="sale">For Sale</option>
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Lowest Price*</label>
                        <input type="text" placeholder="Lowest Price" name="lowest_price">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Max Price*</label>
                        <input type="text" placeholder="Max Price" name="max_price">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Main Thumbnail*</label>
                        <div class="user-avatar-setting d-flex align-items-center mb-30">
                            <img id="mainThmb" src="">

                            <div class="upload-btn position-relative tran3s ms-4 me-3">
                                Upload main thumbnail
                                <input type="file" id="image" name="property_thumbnail" onchange="mainThamUrl(this)">
                            </div>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>


                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Multiple Images*</label>
                        <div class="user-avatar-setting d-flex align-items-center mb-30">
                            
                            <div class="row" id="preview_img"></div>

                            <div class="upload-btn position-relative tran3s ms-4 me-3">
                                Upload Property Images
                                <input type="file" id="multiImg" name="multi_img[]" multiple="">
                            </div>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>


                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">BedRooms*</label>
                        <input type="text" name="bedrooms" placeholder="Ex: 1">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">BathRooms*</label>
                        <input type="text" name="bathrooms" placeholder="Ex: 1">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Garage*</label>
                        <input type="text" name="garage" placeholder="Ex: 1">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Garage Size*</label>
                        <input type="text" name="garage_size" placeholder="Ex: 1,230 sqft">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>


                



                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Address*</label>
                        <input type="text" name="address" placeholder="No 8, Ayobo Street, Lagos, Nigeria">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">City*</label>
                        <input type="text" name="city" placeholder="Ikeja">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">State*</label>
                        <input type="text" name="state" placeholder="Lagos">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-3">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Postal Code*</label>
                        <input type="text" name="postal_code" placeholder="Ex: 11021">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>




                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Size*</label>
                        <input type="text" name="property_size" placeholder="Ex: 1,230 sqft">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Video*</label>
                        <input type="text" name="property_video" placeholder="https::www.youtube.com">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Neighborhood*</label>
                        <input type="text" name="neighborhood" placeholder="Ex: Anchor">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>


                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Latitude*</label>
                        <input type="text" placeholder="Ex: 28.1592" name="latitude">
                        {{-- <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click here to get latitude from address</a> --}}
                        <div class="info-text d-sm-flex align-items-center justify-content-between mt-5">
                            <p class="m0"><a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click here to get latitude from address</a></p>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-md-6">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Longitude*</label>
                        <input type="text" placeholder="Ex: 90.5201" name="longitude">
                        {{-- <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click here to get longitude from address</a> --}}
                        <div class="info-text d-sm-flex align-items-center justify-content-between mt-5">
                            <p class="m0"><a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click here to get longitude from address</a></p>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                

                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Type*</label>
                        <input type="text" name="property_size" placeholder="Ex: 1,230 sqft">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Property Amenities*</label>
                        <input type="text" name="property_video" placeholder="https::www.youtube.com">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>

                <div class="col-md-4">
                    <div class="dash-input-wrapper mb-30">
                        <label for="">Agent*</label>
                        <input type="text" name="neighborhood" placeholder="Ex: Anchor">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>




            </div>
        </div>
        <!-- /.card-box -->

        <div class="bg-white card-box border-20 mt-40">
            <h4 class="dash-title-three">Photo & Video Attachment</h4>
            <div class="dash-input-wrapper mb-20">
                <label for="">File Attachment*</label>

                <div class="attached-file d-flex align-items-center justify-content-between mb-15">
                    <span>PorpertyImage_01.jpg</span>
                    <a href="#" class="remove-btn"><i class="bi bi-x"></i></a>
                </div>
                <div class="attached-file d-flex align-items-center justify-content-between mb-15">
                    <span>PorpertyImage_02.jpg</span>
                    <a href="#" class="remove-btn"><i class="bi bi-x"></i></a>
                </div>
            </div>
            <!-- /.dash-input-wrapper -->
            <div class="dash-btn-one d-inline-block position-relative me-3">
                <i class="bi bi-plus"></i>
                Upload File
                <input type="file" id="uploadCV" name="uploadCV" placeholder="">
            </div>
            <small>Upload file .jpg, .png, .mp4</small>
        </div>
        <!-- /.card-box -->

        <div class="bg-white card-box border-20 mt-40">
            <h4 class="dash-title-three m0 pb-5">Select Amenities</h4>
            <ul class="style-none d-flex flex-wrap filter-input">
                <li>
                    <input type="checkbox" name="Amenities" value="01">
                    <label>A/C & Heating</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="02" placeholder="">
                    <label>Garages</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="03">
                    <label>Swimming Pool</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="04">
                    <label>Parking</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="05">
                    <label>Lake View</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="06">
                    <label>Garden</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="07">
                    <label>Disabled Access</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="08">
                    <label>Pet Friendly</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="09">
                    <label>Ceiling Height</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="10">
                    <label>Outdoor Shower</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="11">
                    <label>Refrigerator</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="12">
                    <label>Fireplace</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="13">
                    <label>Wifi</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="14">
                    <label>TV Cable</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="15">
                    <label>Barbeque</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="16">
                    <label>Laundry</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="17">
                    <label>Dryer</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="18">
                    <label>Lawn</label>
                </li>
                <li>
                    <input type="checkbox" name="Amenities" value="19">
                    <label>Elevator</label>
                </li>
            </ul>
        </div>
        <!-- /.card-box -->

        <div class="bg-white card-box border-20 mt-40">
            <h4 class="dash-title-three">Address & Location</h4>
            <div class="row">
                <div class="col-12">
                    <div class="dash-input-wrapper mb-25">
                        <label for="">Address*</label>
                        <input type="text" placeholder="145/A, Ranchview">
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-lg-4">
                    <div class="dash-input-wrapper mb-25">
                        <label for="">Country*</label>
                        <select class="nice-select">
                            <option value="0">Select Country</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                            <option>Andorra</option>
                            <option>Angola</option>
                            <option>Antigua and Barbuda</option>
                            <option>Argentina</option>
                            <option>Armenia</option>
                            <option>Australia</option>
                            <option>Austria</option>
                            <option>Azerbaijan</option>
                            <option>Bahamas</option>
                            <option>Bahrain</option>
                            <option>Bangladesh</option>
                            <option>Barbados</option>
                            <option>Belarus</option>
                            <option>Belgium</option>
                            <option>Belize</option>
                            <option>Benin</option>
                            <option>Bhutan</option>
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-lg-4">
                    <div class="dash-input-wrapper mb-25">
                        <label for="">City*</label>
                        <select class="nice-select">
                            <option value="0">Select City</option>
                            <option>Dhaka</option>
                            <option>Tokyo</option>
                            <option>Delhi</option>
                            <option>Shanghai</option>
                            <option>Mumbai</option>
                            <option>Bangalore</option>
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-lg-4">
                    <div class="dash-input-wrapper mb-25">
                        <label for="">State*</label>
                        <select class="nice-select">
                            <option value="0">Select State</option>
                            <option>Dhaka</option>
                            <option>Tokyo</option>
                            <option>Delhi</option>
                            <option>Shanghai</option>
                            <option>Mumbai</option>
                            <option>Bangalore</option>
                        </select>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
                <div class="col-12">
                    <div class="dash-input-wrapper mb-25">
                        <label for="">Map Location*</label>
                        <div class="position-relative">
                            <input type="text" placeholder="XC23+6XC, Moiran, N105">
                            <button class="location-pin tran3s"><img src="../images/lazy.svg"
                                    data-src="images/icon/icon_16.svg" alt="" class="lazy-img m-auto"></button>
                        </div>
                        <div class="map-frame mt-30">
                            <div class="gmap_canvas h-100 w-100">
                                <iframe class="gmap_iframe h-100 w-100"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=dhaka collage&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->
                </div>
            </div>
        </div>
        <!-- /.card-box -->
        <div class="button-group d-inline-flex align-items-center mt-30">
            <button type="submit" class="dash-btn-two tran3s me-3">Submit Property</button>
        </div>
    </form>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#myForm').validate({
                rules: {
                    amenities_name: {
                        required: true,
                    },

                },
                messages: {
                    amenities_name: {
                        required: 'Please Enter Amenitie Name',
                    },


                },
                errorElement: 'span',
                errorPlacement: function (error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>

    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            $('#multiImg').on('change', function () { //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function (index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function (file) { //trigger function on successful read
                                return function (e) {
                                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(100)
                                        .height(80); //create image element 
                                    $('#preview_img').append(img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });
                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });

    </script>
@endsection