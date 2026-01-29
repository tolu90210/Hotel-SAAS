@extends('user.user_dashboard')
@section('user')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>




<div>
    {{-- <h2 class="main-title d-block d-lg-none">Profile</h2> --}}
            <form method="post" action="{{ route('user.profile.store') }}" enctype="multipart/form-data">
                @csrf

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Personal Info</h4>
                    <div class="user-avatar-setting d-flex align-items-center mb-30">
                        <img id="showImage" src="{{ (!empty($userProfileData->photo)) ? url('upload/user_image/'.$userProfileData->photo) : url('upload/no_image.jpg') }}" data-src="{{ (!empty($userProfileData->photo)) ? url('upload/user_image/'.$userProfileData->photo) : url('upload/no_image.jpg') }}" alt="" class="lazy-img user-img">

                        <div class="upload-btn position-relative tran3s ms-4 me-3">
                            Upload new photo
                            <input type="file" id="image" name="photo">
                        </div>
                    </div>
                    <!-- /.user-avatar-setting -->
					<div class="row">
						
						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Name*</label>
								<input type="text" value="{{ $userProfileData->name }}" name="name" id="name" required>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Email*</label>
								<input type="email" value="{{ $userProfileData->email }}" name="email" id="email" required>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Phone Number*</label>
								<input type="tel" value="{{ $userProfileData->phone }}" name="phone" id="phone" required>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

						<div class="col-sm-6">
							<div class="dash-input-wrapper mb-30">
								<label for="">Address*</label>
								<input type="text" value="{{ $userProfileData->address }}" name="address" id="address" required>
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						
					</div>
                    
                    
                </div>
				<!-- /.card-box -->

				<div class="button-group d-inline-flex align-items-center mt-30">
					<button type="submit" class="dash-btn-two tran3s me-3">Update Profile Details</button>
				</div>
            </form>
</div>



<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

@endsection