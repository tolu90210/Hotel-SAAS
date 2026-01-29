@extends('user.user_dashboard')
@section('user')


<div>
    {{-- <h2 class="main-title d-block d-lg-none">Profile</h2> --}}
            <form method="post" action="{{ route('user.update.password') }}">
                @csrf

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Change Password</h4>
                    
					<div class="row">
						
						<div class="col-sm-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">Old Password</label>
								<input type="password" name="old_password" id="oldpassword" class="@error('old_password') is-invalid @enderror">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

						<div class="col-sm-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">New Password</label>
								<input type="password" name="new_password" id="newpassword" class="@error('new_password') is-invalid @enderror">
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

                        <div class="col-sm-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">Confirm New Password</label>
								<input type="password" name="new_password_confirmation" id="confirmnewpassword">
							</div>
							<!-- /.dash-input-wrapper -->
						</div>
						
					</div>
                    
                    
                </div>
				<!-- /.card-box -->

				<div class="button-group d-inline-flex align-items-center mt-30">
					<button type="submit" class="dash-btn-two tran3s me-3">Update Password</button>
				</div>
            </form>
</div>




@endsection