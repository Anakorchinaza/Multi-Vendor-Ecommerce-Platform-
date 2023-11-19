@extends('vendor.vendor_dashboard')

@section('title')
    Change Password
@endsection

@section('vendor')

    <div class="page-content"> 
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Vendor Change Password</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    
                
                        <div class="col-lg-10">
                            <div class="card">
                                <form action="{{route('vendor.update_password')}}" method="post">
                                    @csrf

                                    @if (session('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{session('success')}}
                                        </div>
                                    @elseif (session('error'))
                                        <div class="alert alert-danger" role="alert">
                                            {{session('error')}}
                                        </div>
                                    @endif

                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Old Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" name="old_password" placeholder="Old Password" id="old_password" class="form-control @error('old_password') is-invalid @enderror"  />
                                                @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" name="new_password" placeholder="New Password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" />
                                                @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Confirm New Password</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="password" name="new_password_confirmation" placeholder="Confirm New Password" id="confirm_password" class="form-control" />
                                            </div>
                                        </div>
                                    


                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4" value="Update Password" />
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