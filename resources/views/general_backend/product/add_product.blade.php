@extends('admin.admin_dashboard')

@section('title')
    Add Product
@endsection

@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Product</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Add New Product</h5>
                <hr>
                <div class="form-body mt-4">
                    <form action="{{route('store.product')}}" method="post" id="brandForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name"
                                            placeholder="Enter product name" value="{{ old('product_name') }}">
                                        
                                        @error('product_name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Tags</label>
                                        <input type="text" class="form-control visually-hidden" name="product_tags"
                                            data-role="tagsinput" value="New product,Top product" value="{{ old('product_tags') }}" >

                                        @error('product_tags')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Color</label>
                                        <input type="text" class="form-control visually-hidden" name="product_color"
                                            data-role="tagsinput" value="red,pink,green" value="{{ old('product_color') }}">


                                        @error('product_color')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Size</label>
                                        <input type="text" class="form-control visually-hidden" name="product_size"
                                            data-role="tagsinput" value="X,XL,XXL,XXXL,small,large" value="{{ old('product_size') }}">


                                        @error('product_size')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Short Description</label>
                                        <textarea name="short_descp" class="form-control mytextarea" rows="3">{{ old('short_descp') }}</textarea>

                                        @error('short_descp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Product Specifications</label>
                                        <textarea name="specification" class="form-control mytextarea">{{ old('specification') }}</textarea>

                                        @error('specification')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Long Description</label>
                                        <textarea name="long_descp" class="form-control mytextarea" >{{ old('long_descp') }}</textarea>

                                        @error('long_descp')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    {{-- <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Image Thumbnail</label>
                                        <input class="form-control" name="product_thumbnail" type="file" id="formFile" onchange='product_thumbnail(this)'>

                                        <img src="" id="thambnail" class="mt-2">

                                        @error('product_thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div> --}}

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Product Thumbnail</label>
                                        <input class="form-control" name="product_thumbnail" type="file" id="formFile" value="{{ old('product_thumbnail') }}">

                                        <img src="" id="thambnail" class="mt-2">

                                        @error('product_thumbnail')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Multiple Image</label>
                                        <input class="form-control" name="multi_image[]" type="file" id="multiImg" multiple="" value="{{ old('multi_image') }}">

                                        <div class="row mt-2" id="img_preview">

                                        </div>


                                        @error('multi_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row g-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputPrice" class="form-label">Selling Price</label>
                                            <input type="text" name="selling_price" class="form-control" id="inputPrice" placeholder="00.00" value="{{ old('selling_price') }}">

                                            @error('selling_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCompareatprice" class="form-label">Discount Price</label>
                                            <input type="text" name="discount_price" class="form-control" id="inputCompareatprice"
                                                placeholder="00.00" value="{{ old('discount_price') }}">


                                            @error('discount_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCostPerPrice" class="form-label">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="inputCostPerPrice"
                                                placeholder="00.00" value="{{ old('product_code') }}">

                                            @error('product_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputStarPoints" class="form-label">Product Quantity</label>
                                            <input type="text" name="product_qty" class="form-control" id="inputStarPoints"
                                                placeholder="00.00" value="{{ old('product_qty') }}">

                                            @error('product_qty')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputProductType" class="form-label">Brand</label>                                        
                                            <select class="single-select" name="brand_id">
                                                <option></option>
                                                @foreach ($all_brands as $brands)                                          
                                                    <option value="{{ $brands->id }}" {{ old('brand_id') == $brands->id ? 'selected' : '' }}>{{ ucfirst(strtolower($brands->brand_name)) }}</option>                                            
                                                @endforeach                                                                                   
                                            </select>

                                            @error('brand_id')
                                                <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputVendor" class="form-label">Product Category</label>                                        
                                            <select class="single-select" name="category_id">
                                                <option></option>
                                                @foreach ($all_category as $category)                                            
                                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucfirst(strtolower($category->category_name)) }}</option>                                            
                                                @endforeach                                            
                                            </select>

                                            @error('category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputCollection" class="form-label">Product SubCategory</label>                                        
                                            <select class="single-select" name="subcategory_id" id="subcategory_id">
                                                <option></option>
                                                
                                            </select>

                                            @error('subcategory_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputCollection" class="form-label">Product ChildSubCategory</label>                                        
                                            <select class="single-select" name="child_sub_category_id" id="child_sub_category_id">
                                                <option></option>
                                                
                                            </select>

                                            @error('child_sub_category_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="inputCollection" class="form-label">Vendor</label>                                        
                                            <select class="single-select" name="vendor_id">
                                                <option></option>
                                                @foreach ($all_active_vendor as $vendor)
                                                    <option value="{{ $vendor->id }}" {{ old('vendor_id') == $vendor->id ? 'selected' : '' }}>{{ ucfirst(strtolower($vendor->name)) }}</option>                                            
                                                @endforeach
                                            </select>

                                            @error('vendor_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-12">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">Featured</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="most_popular" type="checkbox" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">Most Popular</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="best_selling" type="checkbox" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">Best Selling</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="new_arrival" type="checkbox" value="1" id="flexCheckDefault">
                                                        <label class="form-check-label" for="flexCheckDefault">New Arrival</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Save Product</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!--end row-->
                    </form>
                </div>
            </div>
        </div>

    </div>

    



    
    {{-- <script>
     
        function product_thumbnail(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#thambnail').attr('src', e.target.result).width(80).height(80);
                }
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

    </script> --}}


    <script>
        $(document).ready(function () {
            $('#formFile').on('change', function () {
                product_thumbnail(this);
            });
    
            function product_thumbnail(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#thambnail').attr('src', e.target.result).width(80).height(80);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        });
    </script>
    


    <script> 
    
        $(document).ready(function(){
            $('#multiImg').on('change', function(){ //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data
                    
                    $.each(data, function(index, file){ //loop though each file
                        if(/(\.|\/)(gif|jpe?g|png|jpg|jpeg|webp)$/i.test(file.type)){ //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file){ //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                            .height(80); //create image element 
                                $('#img_preview').append(img); //append image to output element
                            };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });
                    
                }else{
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
     
    </script>


    <script>
        $(document).ready(function () {
            $('select[name="category_id"]').on('change', function () {
                var parentCategoryId = $(this).val();
                
                if (parentCategoryId) {
                    $.ajax({
                        url: '{{ route('get-subcategories', '') }}/' + parentCategoryId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('select[name="subcategory_id"]').empty();
                            $('select[name="subcategory_id').append('<option value="">--Select Subcategory--</option>');
                            if (data.length > 0) {
                                $.each(data, function (index, subcategory) {
                                    $('select[name="subcategory_id').append('<option value="' + subcategory.id + '">' + subcategory.subcategory_name + '</option>');
                                });
                            } else {
                                $('select[name="subcategory_id').append('<option value="">No Result</option>');
                            }
                        }
                    });
                } else {
                    $('select[name="subcategory_id').empty();
                    $('select[name="subcategory_id').append('<option value="">--Select Subcategory--</option>');
                }
            });
        });
    </script>
    

    <script>
        $(document).ready(function () {
            $('#subcategory_id').on('change', function () {
                var SubCategoryId = $(this).val();
                
                if (SubCategoryId) {
                    $.ajax({
                        url: '{{ route('get-childsubcategories', '') }}/' + SubCategoryId,
                        type: 'GET',
                        dataType: 'json',
                        success: function (data) {
                            $('#child_sub_category_id').empty();
                            $('#child_sub_category_id').append('<option value="">--Select ChildSubcategory--</option>');
                            if (data.length > 0) {
                                $.each(data, function (index, childsubcategory) {
                                    $('#child_sub_category_id').append('<option value="' + childsubcategory.id + '">' + childsubcategory.child_subcategory_name + '</option>');
                                });
                            } else {
                                $('#child_sub_category_id').append('<option value="">No Result</option>');
                            }
                        }
                    });
                } else {
                    $('#child_sub_category_id').empty();
                    $('#child_sub_category_id').append('<option value="">--Select ChildSubcategory--</option>');
                }
            });
        });
    </script>

    {{-- 
    <script type="text/javascript">
        $(document).ready(function(){
            $('#brandForm').validate({
                rules: {
                    product_name: {
                        required : true,
                    },
                    product_tags: {
                        required : true,
                    },
                    product_color: {
                        required : true,
                    },
                    product_size: {
                        required : true,
                    },
                    short_descp: {
                        required : true,
                    },
                    specification: {
                        required : true,
                    },
                    long_descp: {
                        required : true,
                    },
                    product_thumbnail: {
                        required : true,
                    },
                    multi_image: {
                        required : true,
                    },
                    selling_price: {
                        required : true,
                    },
                    product_code: {
                        required : true,
                    },
                    product_qty: {
                        required : true,
                    },
                    category_id: {
                        required : true,
                    },
                    subcategory_id: {
                        required : true,
                    },
                    child_sub_category_id: {
                        required : true,
                    },
                },

                messages : {
                    product_name: {
                        required: 'Field Required',
                    },
                    product_tags: {
                        required: 'Field Required',
                    },
                    product_color: {
                        required: 'Field Required',
                    },
                    product_size: {
                        required: 'Field Required',
                    },
                    short_descp: {
                        required: 'Field Required',
                    },
                    specification: {
                        required: 'Field Required',
                    },
                    long_descp: {
                        required: 'Field Required',
                    },
                    product_thumbnail: {
                        required: 'Field Required',
                    },
                    multi_image: {
                        required: 'Field Required',
                    },
                    selling_price: {
                        required: 'Field Required',
                    },
                    product_code: {
                        required: 'Field Required',
                    },
                    product_qty: {
                        required: 'Field Required',
                    },
                    category_id: {
                        required: 'Field Required',
                    },
                    subcategory_id: {
                        required: 'Field Required',
                    },
                    child_sub_category_id: {
                        required: 'Field Required',
                    },
                },

                errorElement : 'span',
                errorPlacement: function (error, element){
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                }
            })
        })
    </script> --}}

@endsection
