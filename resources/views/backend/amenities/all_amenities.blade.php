@extends('admin.admin_dashboard')
@section('admin')


<h2 class="main-title d-block d-lg-none">All Amenities</h2>

<a href="{{ route('add.amenitie') }}" class="dash-btn-two tran3s me-3 mb-10">Add Amenitie</a>

				<div class="bg-white card-box p0 border-20">
                    <div class="table-responsive pt-25 pb-25 pe-4 ps-4">
                        <table id="savedSearchTable" class="table saved-search-table nowrap" style="width:100%">

                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Amenitie Name</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-0"> 
                                @foreach ($amenities as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->amenities_name }}</td>
                                    <td>
										<div class="d-flex justify-content-end btns-group">
											<a href="{{ route('edit.amenitie', $item->id) }}"><i class="fa-sharp fa-regular fa-eye" data-bs-toggle="tooltip" title="Edit"></i></a>
											<a href="{{ route('delete.amenitie', $item->id) }}" id="delete" title="Delete"><i class="fa-regular fa-trash"></i></a>
										</div>
									</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <!-- /.table saved-search-table -->
                    </div>                    
                </div>



@endsection