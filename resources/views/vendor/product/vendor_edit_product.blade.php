@extends('vendor.vendor_dashboard')

@section('title')
    Edit Product
@endsection

@section('vendor')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Edit Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Product</h5>
                <hr>
                <div class="form-body mt-4">
                    <form action="{{route('vendor.update.product')}}" method="post" id="brandForm">
                        @csrf

                        <input type="hidden" name="id" value="{{ $all_products->id }}">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="border border-3 p-4 rounded">

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" id="product_name"
                                            placeholder="Enter product name" value="{{ $all_products->product_name }}">                                    
                                      
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Tags</label>
                                        <input type="text" class="form-control visually-hidden" name="product_tags"
                                            data-role="tagsinput" value="{{ $all_products->product_tags }}" >
                                        
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Color</label>
                                        <input type="text" class="form-control visually-hidden" name="product_color"
                                            data-role="tagsinput" value="{{ $all_products->product_color }}">
                                        
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductTitle" class="form-label">Product Size</label>
                                        <input type="text" class="form-control visually-hidden" name="product_size"
                                            data-role="tagsinput" value="{{  $all_products->product_size }}">
                                       
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Short Description</label>
                                        <textarea name="short_descp" class="form-control mytextarea" rows="3">{{ $all_products->short_descp }}</textarea>                                       
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Product Specifications</label>
                                        <textarea name="specification" class="form-control mytextarea">{{ $all_products->specification }}</textarea>                                       
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="inputProductDescription" class="form-label">Long Description</label>
                                        <textarea name="long_descp" class="form-control mytextarea" >{{ $all_products->long_descp }}</textarea>                                        
                                    </div>

                                
                                </div>
                            </div>


                            <div class="col-lg-4">
                                <div class="border border-3 p-4 rounded">
                                    <div class="row g-3">
                                        <div class="form-group col-md-6">
                                            <label for="inputPrice" class="form-label">Selling Price</label>
                                            <input type="text" name="selling_price" class="form-control" id="inputPrice" placeholder="00.00" value="{{ $all_products->selling_price }}">                                           
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCompareatprice" class="form-label">Discount Price</label>
                                            <input type="text" name="discount_price" class="form-control" id="inputCompareatprice"
                                                placeholder="00.00" value="{{ $all_products->discount_price }}">                                           
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputCostPerPrice" class="form-label">Product Code</label>
                                            <input type="text" name="product_code" class="form-control" id="inputCostPerPrice"
                                                placeholder="00.00" value="{{ $all_products->product_code }}">                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputStarPoints" class="form-label">Product Quantity</label>
                                            <input type="text" name="product_qty" class="form-control" id="inputStarPoints"
                                                placeholder="00.00" value="{{ $all_products->product_qty }}">                                            
                                        </div>
                                        <div class="col-12">
                                            <label for="inputProductType" class="form-label">Brand</label>                                        
                                            <select class="single-select" name="brand_id">
                                                <option></option>
                                                @foreach ($all_brands as $brands)                                          
                                                    <option value="{{ $brands->id }}" {{ $brands->id == $all_products->brand_id ? 'selected' : '' }}>{{ ucfirst(strtolower($brands->brand_name)) }}</option>                                            
                                                @endforeach                                                                                   
                                            </select>                                           
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputVendor" class="form-label">Product Category</label>                                        
                                            <select class="single-select" name="category_id">
                                                <option></option>
                                                @foreach ($all_category as $category)                                            
                                                    <option value="{{ $category->id }}" {{ $category->id == $all_products->category_id ? 'selected' : '' }}>{{ ucfirst(strtolower($category->category_name)) }}</option>                                            
                                                @endforeach                                            
                                            </select>                                    
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputCollection" class="form-label">Product SubCategory</label>                                        
                                            <select class="single-select" name="subcategory_id" id="subcategory_id">
                                                @foreach($subcategory as $subcat)
                                                    <option value="{{ $subcat->id }}">{{ ucfirst(strtolower($subcat->subcategory_name)) }}</option>
                                                @endforeach                                                
                                            </select>                                           
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="inputCollection" class="form-label">Product ChildSubCategory</label>                                        
                                            <select class="single-select" name="child_sub_category_id" id="child_sub_category_id">                                                                                                                                        
                                                @foreach($childsub as $sub)
                                                    <option value="{{ $sub->id }}">{{ ucfirst(strtolower($sub->child_subcategory_name)) }}</option>
                                                @endforeach                                                                                    
                                            </select>                                            
                                        </div>
                                    
                                        
                                        <div class="col-12">
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="featured" type="checkbox" value="1" id="flexCheckDefault" 
                                                        {{ $all_products->featured == 1 ? 'checked' : '' }} >
                                                        <label class="form-check-label" for="flexCheckDefault">Featured</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="most_popular" type="checkbox" value="1" id="flexCheckDefault" 
                                                        {{ $all_products->most_popular == 1 ? 'checked' : '' }} >
                                                        <label class="form-check-label" for="flexCheckDefault">Most Popular</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="best_selling" type="checkbox" value="1" id="flexCheckDefault" 
                                                        {{ $all_products->best_selling == 1 ? 'checked' : '' }} >
                                                        <label class="form-check-label" for="flexCheckDefault">Best Selling</label>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="new_arrival" type="checkbox" value="1" id="flexCheckDefault" 
                                                        {{ $all_products->new_arrival == 1 ? 'checked' : '' }} >
                                                        <label class="form-check-label" for="flexCheckDefault">New Arrival</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Save Changes</button>
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

    <!-- Image Thumbnail Update -->

    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Update Main Image Thumbnail</h6>
        <hr>

        <div class="card">
            <form action="{{route('vendor.update.product.thumbnail')}}" method="post" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $all_products->id }}">
                <input type="hidden" name="old_thumbnail" value="{{ $all_products->product_thumbnail }}">

                <div class="card-body">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Choose Product Thumbnail</label>
                        <input name="product_thumbnail" class="form-control" type="file" id="formFile">
                    </div> 
                    
                    <div class="mb-3">
                        <img src="{{ asset($all_products->product_thumbnail) }}" alt="" class="img-fluid rounded" style="width: 100px; height:100px">
                    </div> 

                    <div class="col-3">
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>

                </div>               

            </form>
        </div>
    </div>

    <!-- end Image Thumbnail Update -->


    <!-- Multi Image Update -->

    <div class="page-content">
        <h6 class="mb-0 text-uppercase">Update Multi Images</h6>
        <hr>

        <div class="card">
            <div class="card-body">
                <table class="table mb-0 table-striped">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Image</th>
                            <th scope="col">Change Image</th>
                            <th scope="col"></th>  
                            <th scope="col">Delete</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <form action="{{route('vendor.update.product.multiimg')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @php $sn = 0; @endphp
                            @foreach ($multi_imgs as $imgs)
                                <tr>
                                    <th scope="row">@php echo $sn+=1; @endphp</th>
                                    <td><img src="{{ asset($imgs->image_name) }}" alt="..." style="width: 70px; height:70px"></td>
                                    <td>
                                        <div class="col-10">
                                            <input name="multi_imgs[{{ $imgs->id }}]" class="form-control" type="file" id="formFile">
                                            @error('multi_imgs')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>                                        
                                    </td>
                                    <td>
                                        <button type="submit" class="btn btn-primary">Update Image</button>
                                    </td>
                                    <td>
                                        <a href="{{ route('vendor.product.multi-img.delete', $imgs->id) }}" id="delete" class="delete text-center" title="Delete">
                                            <i class="fa-solid fa-trash" style="font-size: 20px;
                                            width: 40px;"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach                       
                        </form>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <!-- End Multi Image Update -->




    
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


@endsection
