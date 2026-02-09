@extends('admin.admin_dashboard')
@section('admin')


    <h2 class="main-title d-block d-lg-none">All Properties</h2>

    <a href="{{ route('add.property') }}" class="dash-btn-two tran3s me-3 mb-10">Add Property</a>


    

    <div class="bg-white card-box p0 border-20">
        <div class="table-responsive pt-25 pb-25 pe-4 ps-4">
            <table class="table property-list-table nowrap" id="propertyTable" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Sl</th>
                        <th scope="col">Property</th>
                        <th scope="col">Property Type</th>
                        <th scope="col">Status Type</th>
                        <th scope="col">City</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="border-0">
                    @foreach ($property as $key => $item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        
                        <td>
                            <div class="d-lg-flex align-items-center position-relative">
                                <img src="{{ asset($item->property_thumbnail) }}" alt="" class="p-img">
                                <div class="ps-lg-4 md-pt-10">
                                    <a href="#" class="property-name tran3s color-dark fw-500 fs-20 stretched-link">{{ $item->property_name }}</a>
                                    <div class="address">Mirpur 10, dhaka, BD</div>
                                    <strong class="price color-dark">$32,800</strong>
                                </div>
                            </div>
                        </td>

                        <td>{{ $item->ptype_id }}</td>

                        <td>{{ $item->property_status }}</td>

                        <td>{{ $item->city }}</td>

                        <td>
                            @if ($item->status == 1)
                            <span class="badge rounded-pill bg-success">Active</span>
                            {{-- <div class="property-status">Active</div> --}}
                            @else
                            <span class="badge rounded-pill bg-danger">InActive</span>
                            @endif
                            
                        </td>

                        <td>
                            <div class="action-dots float-end">
                                <button class="action-btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg"
                                                data-src="images/icon/icon_18.svg" alt="" class="lazy-img"> View</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg"
                                                data-src="images/icon/icon_19.svg" alt="" class="lazy-img"> Share</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg"
                                                data-src="images/icon/icon_20.svg" alt="" class="lazy-img"> Edit</a></li>
                                    <li><a class="dropdown-item" href="#"><img src="../images/lazy.svg"
                                                data-src="images/icon/icon_21.svg" alt="" class="lazy-img"> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- /.table property-list-table -->
        </div>
    </div><!-- /.card-box -->

    



@endsection