@extends('admin.admin_dashboard')
@section('admin')


<h2 class="main-title d-block d-lg-none">Edit Property Types</h2>

<div>
    {{-- <h2 class="main-title d-block d-lg-none">Profile</h2> --}}
            <form method="post" action="{{ route('update.type') }}">
                @csrf

                <input type="hidden" name="id" value="{{ $types->id }}">

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Edit Property Type</h4>
                    
					<div class="row">
						
						<div class="col-sm-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">Type Name</label>
								<input type="text" name="type_name" class="@error('type_name') is-invalid @enderror" value="{{ $types->type_name }}">
                                @error('type_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

                        <div class="col-sm-12">
							<div class="dash-input-wrapper mb-30">
								<label for="">Type Icon</label>
								<input type="text" name="type_icon" class="@error('type_icon') is-invalid @enderror" value="{{ $types->type_icon }}">
                                @error('type_icon')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
							</div>
							<!-- /.dash-input-wrapper -->
						</div>

					</div>
                    
                    
                </div>
				<!-- /.card-box -->

				<div class="button-group d-inline-flex align-items-center mt-30">
					<button type="submit" class="dash-btn-two tran3s me-3">Update Property Type</button>
				</div>
            </form>
</div>



@endsection