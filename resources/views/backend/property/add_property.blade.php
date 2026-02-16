@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <h2 class="main-title d-block d-lg-none">Add Property</h2>

    <div>
        <form id="myForm" method="POST" action="{{ route('store.property') }}" enctype="multipart/form-data">
            @csrf

            <div class="bg-white card-box border-20 mt-40">

                <h4 class="dash-title-three">Overview</h4>

                <div class="row align-items-end">

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Property Name*</label>
                            <input type="text" placeholder="Your Property Name" name="property_name" class="form-control" required>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Property Status*</label>
                            <select class="nice-select form-control" name="property_status" required>
                                <option selected="" disabled="">Select Status</option>
                                <option value="rent">For Rent</option>
                                <option value="sale">For Sale</option>
                            </select>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Lowest Price*</label>
                            <input type="text" placeholder="Lowest Price" name="lowest_price" class="form-control" required>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Max Price*</label>
                            <input type="text" placeholder="Max Price" name="max_price" class="form-control" required>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Main Thumbnail*</label>
                            <div class="user-avatar-setting d-flex align-items-center mb-30">
                                <img id="mainThmb" src="">

                                <div class="upload-btn position-relative tran3s ms-4 me-3">
                                    Upload main thumbnail
                                    <input type="file" id="image" name="property_thumbnail" onchange="mainThamUrl(this)" class="form-control" required>
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
                            {{-- <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click
                                here
                                to get latitude from address</a> --}}
                            <div class="info-text d-sm-flex align-items-center justify-content-between mt-5">
                                <p class="m0"><a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                        target="_blank">Click here to get latitude from address</a></p>
                            </div>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Longitude*</label>
                            <input type="text" placeholder="Ex: 90.5201" name="longitude">
                            {{-- <a href="https://www.latlong.net/convert-address-to-lat-long.html" target="_blank">Click
                                here
                                to get longitude from address</a> --}}
                            <div class="info-text d-sm-flex align-items-center justify-content-between mt-5">
                                <p class="m0"><a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                        target="_blank">Click here to get longitude from address</a></p>
                            </div>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Property Type*</label>
                            <select class="nice-select" name="ptype_id">
                                <option selected="" disabled="">Select Type</option>
                                @foreach ($propertytype as $ptype)
                                    <option value="{{ $ptype->id }}">{{ $ptype->type_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Agent*</label>
                            <select class="nice-select" name="agent_id">
                                <option selected="" disabled="">Select Agent</option>
                                @foreach ($activeAgent as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-12">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Short Description*</label>
                            <textarea name="short_desc" class="size-md" placeholder="Write a short description about property..."></textarea>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->

                    <div class="col-md-12">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Long Description*</label>
                            <textarea name="long_desc" class="size-lg" placeholder="Write a long description about property..."></textarea>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->

                    <hr>
                </div>
            </div>
            <!-- /.card-box -->


            <div class="bg-white card-box border-20 mt-40">

                <h4 class="dash-title-three m0 pb-5">Select Amenities</h4>

                <ul class="style-none d-flex flex-wrap filter-input">
                    @foreach ($amenities as $amen)
                        <li>
                            <input type="checkbox" name="amenities_id[]" value="{{ $amen->id }}" id="amenity_{{ $amen->id }}">
                            <label for="amenity_{{ $amen->id }}">{{ $amen->amenities_name }}</label>
                        </li>
                    @endforeach
                </ul>

            </div>
            <!-- /.card-box -->


            <div class="bg-white card-box border-20 mt-40">

                <h4 class="dash-title-three m0 pb-5">Select Tag/Badge</h4>

                <ul class="style-none d-flex flex-wrap filter-input">

                    <li>
                        <input type="checkbox" name="featured" value="1" id="checkInline1">
                        <label for="checkInline1">Featured Property</label>
                    </li>

                    <li>
                        <input type="checkbox" name="hot" value="1" id="checkInline2">
                        <label for="checkInline2">Hot Property</label>
                    </li>
                </ul>

            </div>
            <!-- /.card-box -->


            <div class="bg-white card-box border-20 mt-40">

                <h4 class="dash-title-three">Select Facility</h4>

                <div class="row align-items-end add_item">

                    <div class="col-md-4">

                        <div class="dash-input-wrapper mb-30">

                            <label for="facility_name">Facilities*</label>

                            <select class="nice-select" name="facility_name[]" id="facility_name">
                                <option value="">Select Facility</option>
                                <option value="Hospital">Hospital</option>
                                <option value="SuperMarket">Super Market</option>
                                <option value="School">School</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Airport">Airport</option>
                                <option value="Railways">Railways</option>
                                <option value="Bus Stop">Bus Stop</option>
                                <option value="Beach">Beach</option>
                                <option value="Mall">Mall</option>
                                <option value="Bank">Bank</option>
                            </select>

                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-4">

                        <div class="dash-input-wrapper mb-30">
                            <label for="distance">Distance*</label>
                            <input type="text" name="distance[]" id="distance" placeholder="Distance (Km)">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-4">

                        <div class="dash-input-wrapper mb-30" style="padding-top: 30px;">
                            <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add More..</a>
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

    </div>



    <!--========== Start of add multiple class with ajax ==============-->
    <div style="visibility: hidden">
        <div class="whole_extra_item_add" id="whole_extra_item_add">
            <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                <div class="container mt-2">
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label for="facility_name">Facilities</label>
                            <select name="facility_name[]" id="facility_name" class="form-control">
                                <option value="">Select Facility</option>
                                <option value="Hospital">Hospital</option>
                                <option value="SuperMarket">Super Market</option>
                                <option value="School">School</option>
                                <option value="Entertainment">Entertainment</option>
                                <option value="Pharmacy">Pharmacy</option>
                                <option value="Airport">Airport</option>
                                <option value="Railways">Railways</option>
                                <option value="Bus Stop">Bus Stop</option>
                                <option value="Beach">Beach</option>
                                <option value="Mall">Mall</option>
                                <option value="Bank">Bank</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="distance">Distance</label>
                            <input type="text" name="distance[]" id="distance" class="form-control"
                                placeholder="Distance (Km)">
                        </div>
                        <div class="form-group col-md-4" style="padding-top: 20px">
                            <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle">Add</i></span>
                            <span class="btn btn-danger btn-sm removeeventmore"><i
                                    class="fa fa-minus-circle">Remove</i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!----For Section-------->
    <script type="text/javascript">
        $(document).ready(function () {
            var counter = 0;
            $(document).on("click", ".addeventmore", function () {
                var whole_extra_item_add = $("#whole_extra_item_add").html();
                $(this).closest(".add_item").append(whole_extra_item_add);
                counter++;
            });
            $(document).on("click", ".removeeventmore", function (event) {
                $(this).closest("#whole_extra_item_delete").remove();
                counter -= 1
            });
        });
    </script>
    <!--========== End of add multiple class with ajax ==============-->



    <script type="text/javascript">
        $(document).ready(function () {
            $('#myForm').validate({
                rules: {
                    property_name: {
                        required: true,
                    },

                    property_status: {
                        required: true,
                    },

                    lowest_price: {
                        required: true,
                    },

                    max_price: {
                        required: true,
                    },

                    ptype_id: {
                        required: true,
                    },

                },
                messages: {
                    property_name: {
                        required: 'Please Enter Property Name',
                    },

                    property_status: {
                        required: 'Please Select Status',
                    },

                    lowest_price: {
                        required: 'Please Enter Lowest Price',
                    },

                    max_price: {
                        required: 'Please Enter Max Price',
                    },

                    ptype_id: {
                        required: 'Please Select Property Type',
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