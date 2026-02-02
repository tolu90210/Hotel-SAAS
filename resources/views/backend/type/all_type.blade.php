@extends('admin.admin_dashboard')
@section('admin')


<h2 class="main-title d-block d-lg-none">All Property Types</h2>

<a href="{{ route('add.type') }}" class="dash-btn-two tran3s me-3 mb-10">Add Property Type</a>

				<div class="bg-white card-box p0 border-20">
                    <div class="table-responsive pt-25 pb-25 pe-4 ps-4">
                        <table id="savedSearchTable" class="table saved-search-table nowrap" style="width:100%">

                            <thead>
                                <tr>
                                    <th scope="col">SL</th>
                                    <th scope="col">Property Type Name</th>
                                    <th scope="col">Property Type Icon</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody class="border-0"> 
                                @foreach ($types as $key => $item )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $item->type_name }}</td>
                                    <td>{{ $item->type_icon }}</td>
                                    <td>
										<div class="d-flex justify-content-end btns-group">
											<a href="{{ route('edit.type', $item->id) }}"><i class="fa-sharp fa-regular fa-eye" data-bs-toggle="tooltip" title="Edit"></i></a>
											<a href="{{ route('delete.type', $item->id) }}" id="delete" title="Delete"><i class="fa-regular fa-trash"></i></a>
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