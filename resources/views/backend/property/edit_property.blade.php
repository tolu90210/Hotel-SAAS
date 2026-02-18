@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

    <h2 class="main-title d-block d-lg-none">Edit Property</h2>

    <div>
        <form id="myForm" method="POST" action="{{ route('update.property') }}" enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="id" value="{{ $property->id }}">

            <div class="bg-white card-box border-20 mt-40">

                <h4 class="dash-title-three">Edit Property</h4>

                <div class="row align-items-end">

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Property Name*</label>
                            <input type="text" placeholder="Your Property Name" name="property_name" class="form-control" required value="{{ $property->property_name }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Property Status*</label>
                            <select class="nice-select form-control" name="property_status" required>
                                <option selected="" disabled="">Select Status</option>
                                <option value="rent" {{ $property->property_status == 'rent' ? 'selected' : '' }}>For Rent</option>
                                <option value="sale" {{ $property->property_status == 'sale' ? 'selected' : '' }}>For Sale</option>
                            </select>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Lowest Price*</label>
                            <input type="text" placeholder="Lowest Price" name="lowest_price" class="form-control" required value="{{ $property->lowest_price }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="form-group dash-input-wrapper mb-30">
                            <label for="">Max Price*</label>
                            <input type="text" placeholder="Max Price" name="max_price" class="form-control" required value="{{ $property->max_price }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    

                    

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">BedRooms*</label>
                            <input type="text" name="bedrooms" placeholder="Ex: 1" value="{{ $property->bedrooms }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">BathRooms*</label>
                            <input type="text" name="bathrooms" placeholder="Ex: 1" value="{{ $property->bathrooms }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Garage*</label>
                            <input type="text" name="garage" placeholder="Ex: 1" value="{{ $property->garage }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Garage Size*</label>
                            <input type="text" name="garage_size" placeholder="Ex: 1,230 sqft" value="{{ $property->garage_size }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Address*</label>
                            <input type="text" name="address" placeholder="No 8, Ayobo Street, Lagos, Nigeria" value="{{ $property->address }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">City*</label>
                            <input type="text" name="city" placeholder="Ikeja" value="{{ $property->city }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">State*</label>
                            <input type="text" name="state" placeholder="Lagos" value="{{ $property->state }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-3">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Postal Code*</label>
                            <input type="text" name="postal_code" placeholder="Ex: 11021" value="{{ $property->postal_code }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-4">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Property Size*</label>
                            <input type="text" name="property_size" placeholder="Ex: 1,230 sqft" value="{{ $property->property_size }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-4">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Property Video*</label>
                            <input type="text" name="property_video" placeholder="https::www.youtube.com" value="{{ $property->property_video }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-4">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Neighborhood*</label>
                            <input type="text" name="neighborhood" placeholder="Ex: Anchor" value="{{ $property->neighborhood }}">
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-6">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Latitude*</label>
                            <input type="text" placeholder="Ex: 28.1592" name="latitude" value="{{ $property->latitude }}">
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
                            <input type="text" placeholder="Ex: 90.5201" name="longitude" value="{{ $property->longitude }}">
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
                                    <option value="{{ $ptype->id }}" {{ $ptype->id == $property->ptype_id ? 'selected' : '' }}>{{ $ptype->type_name }}</option>
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
                                    <option value="{{ $agent->id }}" {{ $agent->id == $property->agent_id ? 'selected' : '' }}>{{ $agent->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- /.dash-input-wrapper -->
                    </div>

                    <div class="col-md-12">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Short Description*</label>
                            <textarea name="short_desc" class="size-md" placeholder="Write a short description about property...">{{ $property->short_desc }}</textarea>
                        </div>
                    </div>
                    <!-- /.dash-input-wrapper -->

                    <div class="col-md-12">
                        <div class="dash-input-wrapper mb-30">
                            <label for="">Long Description*</label>
                            <textarea name="long_desc" class="size-lg" placeholder="Write a long description about property...">{!! $property->long_desc !!}</textarea>
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
                            <input type="checkbox" name="amenities_id[]" value="{{ $amen->id }}" id="amenity_{{ $amen->id }}" {{  (in_array($amen->id,$property_amenities)) ? 'checked' :  ''}}>
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
                        <input type="checkbox" name="featured" value="1" id="checkInline1" {{ $property->featured == '1' ? 'checked' : '' }}>
                        <label for="checkInline1">Featured Property</label>
                    </li>

                    <li>
                        <input type="checkbox" name="hot" value="1" id="checkInline2" {{ $property->hot == '1' ? 'checked' : '' }}>
                        <label for="checkInline2">Hot Property</label>
                    </li>
                </ul>

            </div>
            <!-- /.card-box -->





            <div class="button-group d-inline-flex align-items-center mt-30">
                <button type="submit" class="dash-btn-two tran3s me-3">Update Property</button>
            </div>
        </form>

    </div>






    



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