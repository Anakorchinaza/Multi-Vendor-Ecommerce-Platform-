@extends('admin.admin_dashboard')

@section('title')
    Edit Sub-Category
@endsection

@section('admin')

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content"> 
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Sub Category</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Sub-category</li>
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
                            <form action="{{route('update.subcategory')}}" method="post" id="brandForm">
                                @csrf

                                <input type="hidden" name="id" value="{{ $editSubcategory->id }}">
                                

                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Subcategory Name</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="subcategory_name" id="subcategory_name" class="form-control" value="{{ $editSubcategory->subcategory_name }}" />
                                            @error('subcategory_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Category Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary" data-select2-id="21">
                                           
                                       
                                            <select class="single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="category">
                                                <option value="" data-select2-id="3">--Select Category--</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{$category->id == $editSubcategory->category_id ? 'selected' : ''}}>
                                                        {{ $category->category_name }}
                                                    </option>
                                                @endforeach
                                                
                                            </select>
                                                
                                            
                                            @error('category')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    

                                

                                   

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
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