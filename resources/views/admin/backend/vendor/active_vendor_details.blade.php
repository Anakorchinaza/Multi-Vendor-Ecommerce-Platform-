@extends('admin.admin_dashboard')

@section('title')
    Active Vendors Details
@endsection

@section('admin')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Active Vendor Details</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Active Vendors Details</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
       
        <hr/>

        <div class="container">
            <div class="main-body">
                <div class="row">
                  
                    <div class="col-lg-10">
                        <div class="card">
                            <form action="{{route('disapprove_vendor')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$active_vendor_details->id}}">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Shop Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="name" id="name" class="form-control" value="{{$active_vendor_details->name}}" readonly/>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Vendor Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="email" name="email" id="email" class="form-control" value="{{$active_vendor_details->email}}" readonly/>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Vendor Phone</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="phone" class="form-control" value="{{$active_vendor_details->phone}}" readonly/>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Vendor Address</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="address" class="form-control" value="{{$active_vendor_details->address}}" readonly/>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Vendor Joined Date</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" name="vendor_joined" class="form-control" value="{{$active_vendor_details->vendor_joined}}"  readonly/>
                                            @error('vendor_joined')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Shop Description</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <textarea name="vendor_shop_info" readonly id="vendor_shop_info" class="form-control" cols="30" rows="4">{{$active_vendor_details->vendor_shop_info}}</textarea>
                                            @error('vendor_shop_info')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Vendor Logo</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img class="rounded avatar-lg shadow" id="showImage" src="{{(!empty($active_vendor_details->image)) ? url('upload/vendor_images/'.$active_vendor_details->image) : url('upload/no_image.jpg') }}" alt="Card image cap" style="height: 100px;">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-danger px-4" value="Disapprove Vendor" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    
                    </div>
                  

                </div>
            </div>
        </div>
        
        
    </div>

@endsection