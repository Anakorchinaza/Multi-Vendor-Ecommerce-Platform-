@extends('admin.admin_dashboard')

@section('title')
    All Products
@endsection

@section('admin')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Products</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Products <span class="badge rounded-pill bg-success">{{ count($all_product) }}</span></li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.product') }}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i>Add Product</a>
                    
                </div>
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
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Discount</th>
                                <th>Status</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 0; @endphp
                            @foreach ($all_product as $items)
                                <tr>
                                    <td>@php echo $sn+=1; @endphp</td>
                                    <td><img src="{{ asset($items->product_thumbnail) }}" alt="Brand Image" style="width: 50px; height: 50px"></td>
                                    <td>{{ $items->product_name }}</td>
                                    <td>{{ $items->selling_price }}</td>
                                    <td>{{ $items->product_qty }}</td>
                                    <td>
                                        @if ($items->discount_price == NULL)
                                            <span class="badge rounded-pill bg-info">No Discount</span>
                                        @else
                                            @php
                                                $amount = $items->selling_price - $items->discount_price;
                                                $discount = ($amount / $items->selling_price) * 100;
                                            @endphp                                            
                                            <span class="badge rounded-pill bg-danger">{{ round($discount)}}%</span>
                                        @endif
                                        
                                        
                                        
                                    </td>
                                    <td>
                                        @if ($items->status == 1)
                                            <span class="badge rounded-pill bg-success">Active</span>
                                        @else
                                            <span class="badge rounded-pill bg-danger">InActive</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('edit.product', $items->id) }}" class="edit" title="Edit">
                                            <i class="fa-regular fa-pen-to-square" style="font-size: 20px;
                                            width: 40px;"></i>
                                        </a>

                                        <a href="{{ route('delete.product', $items->id) }}" id="delete" class="Delete" title="Delete">
                                            <i class="fa-solid fa-trash" style="font-size: 20px;
                                            width: 40px;"></i>
                                        </a>

                                        <a href="{{ route('delete.brand', $items->id) }}" id="view" class="view" title="View">
                                            <i class="fas fa-eye" style="font-size: 20px;
                                            width: 40px;"></i>
                                        </a>

                                        @if ($items->status == 1)
                                            <a href="{{ route('product.inactive', $items->id) }}" id="inactive" class="status" title="InActive">
                                                <i class="fa-solid fa-toggle-on" style="font-size: 23px;
                                                width: 40px;"></i>
                                            </a>
                                        @else
                                            <a href="{{ route('product.active', $items->id) }}" id="active" class="status" title="Active">
                                                <i class="fa-solid fa-toggle-off" style="font-size: 23px;
                                                width: 40px;"></i>
                                            </a>
                                        @endif
                                        
                                    </td>
                                
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S\N</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Discount</th>
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