@extends('admin.admin_dashboard')

@section('title')
    All Sliders
@endsection

@section('admin')

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Sliders</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">All Sliders</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <a href="{{ route('add.slider') }}" class="btn btn-primary"><i class="fa-sharp fa-solid fa-plus"></i>Add Slider</a>
                    
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <h6 class="mb-0 text-uppercase">All Slider</h6>
        <hr/>
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>S\N</th>
                                <th>First Title</th>
                                <th>Second Title</th>
                                <th>small Description</th>
                                <th>Image</th>
                                <th>Action</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @php $sn = 0; @endphp
                            @foreach ($sliders as $item)
                                <tr>
                                    <td>@php echo $sn+=1; @endphp</td>
                                    <td>{{ $item->frs_title }}</td>
                                    <td>{{ $item->sec_tile }}</td>
                                    <td>{{ $item->small_desc }}</td>
                                    <td><img src="{{ asset($item->image) }}" alt="Brand Image" style="width: 50px; height: 50px"></td>
                                    <td>
                                        <a href="{{ route('edit.slider', $item->id) }}" class="edit" title="Edit">
                                            <i class="fa-regular fa-pen-to-square" style="font-size: 23px;
                                            width: 40px;"></i>
                                        </a>

                                        <a href="{{ route('delete.slider', $item->id) }}" id="delete" class="remove" title="Delete">
                                            <i class="fa-solid fa-trash" style="font-size: 23px;
                                            width: 40px;"></i>
                                        </a>
                                    </td>
                                
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S\N</th>
                                <th>First Title</th>
                                <th>Second Title</th>
                                <th>small Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        
    </div>

@endsection