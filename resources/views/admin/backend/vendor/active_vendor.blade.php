@extends('admin.admin_dashboard')

@section('title')
    Active Vendors
@endsection

@section('admin')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Active Vendors</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Active Vendors</li>
                    </ol>
                </nav>
            </div>
            
        </div>
        <!--end breadcrumb-->
       
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S\N</th>
                                <th>Shop Name</th>
                                <th>Vendor Email</th>
                                <th>Date Joined</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 0; @endphp
                            @foreach ($active_vendor as $item)
                                <tr>
                                    <td>@php echo $sn+=1; @endphp</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->vendor_joined }}</td>
                                    <td><span class="badge rounded-pill bg-light-success text-success w-100">{{ $item->status }}</span></td>
                                    <td>
                                        <a href="{{ route('active_vendor_details', $item->id) }}" class="edit" title="View Vendor">
                                            <i class="fa-solid fa-eye" style="font-size: 20px;
                                            width: 20px;"></i>
                                        </a>
                                    </td>
                                
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S\N</th>
                                <th>Shop Name</th>
                                <th>Vendor Email</th>
                                <th>Date Joined</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

@endsection