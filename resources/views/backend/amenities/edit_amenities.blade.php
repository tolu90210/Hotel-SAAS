@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<h2 class="main-title d-block d-lg-none">Edit Amenitie</h2>

<div>
    {{-- <h2 class="main-title d-block d-lg-none">Profile</h2> --}}
            <form id="myForm" method="post" action="{{ route('update.amenitie') }}">
                @csrf

                <input type="hidden" name="id" value="{{ $amenitie->id }}">

				<div class="bg-white card-box border-20">
                    <h4 class="dash-title-three">Edit Amenitie</h4>
                    
					<div class="row">
						
						<div class="col-sm-12 form-group">
							<div class="dash-input-wrapper mb-30">
								<label for="">Amenitie Name</label>
								<input type="text" name="amenities_name" value="{{ $amenitie->amenities_name }}">
                               
							</div>
							<!-- /.dash-input-wrapper -->
						</div>


					</div>
                    
                    
                </div>
				<!-- /.card-box -->

				<div class="button-group d-inline-flex align-items-center mt-30">
					<button type="submit" class="dash-btn-two tran3s me-3">Update Amenitie</button>
				</div>
            </form>
</div>



<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                amenities_name: {
                    required : true,
                }, 
                
            },
            messages :{
                amenities_name: {
                    required : 'Please Enter Amenitie Name',
                }, 
                 

            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>



@endsection