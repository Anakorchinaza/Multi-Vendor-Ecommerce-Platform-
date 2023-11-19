<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\Backend\BrandController;
use App\Http\Controllers\Admin\Backend\CategoryController;
use App\Http\Controllers\Admin\Backend\SubcategoryController;
use App\Http\Controllers\Admin\Backend\ChildSubCategoryController;
use App\Http\Controllers\GeneralBackend\ProductController;
use App\Http\Controllers\Vendor\VendorProductController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Admin\Backend\SliderController;
use App\Http\Controllers\Admin\Backend\LongBannerController;
use App\Http\Controllers\Admin\Backend\ShortBannerController;
use App\Http\Controllers\Admin\Backend\StandingBannerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});



//user Route
Route::middleware('auth', 'role:user')->group(function (){
    Route::get('dashboard', [UserController::class, 'UserDashboard'])->name('user.dashboard'); 
    Route::post('/user/update_profile', [UserController::class, 'UserUpdate_profile'])->name('user.update_profile'); 
    Route::get('/user/logout', [UserController::class, 'UserLogout'])->name('user.logout'); 
    Route::post('/user/update/password', [UserController::class, 'UserUpdatePassword'])->name('user.update_password'); 
});

// Route::get('/dashboard', function () {
//     return view('user.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';













//All Admin Route
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard'); 
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout'); 
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/update_profile', [AdminController::class, 'AdminUpdate_profile'])->name('admin.update_profile');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update_password');
    
    //Brand Route
    Route::controller(BrandController::class)->group(function(){
        Route::get('/all/brand', 'AllBrands')->name('all.brand');
        Route::get('/add/brand', 'AddBrands')->name('add.brand');
        Route::post('/store/brand', 'StoreBrands')->name('store_brand');
        Route::get('/edit/brand/{id}', 'EditBrands')->name('edit.brand');
        Route::post('/update/brand', 'UpdateBrands')->name('update.brand');
        Route::get('/delete/brand/{id}', 'DeleteBrands')->name('delete.brand');
    });

     //Category Route
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/add/category', 'AddCategory')->name('add.category');
        Route::get('/all/category', 'AllCategory')->name('all.category');
        Route::post('/insert/category', 'InsertCategory')->name('insert_category');
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });

      //Sub-Category Route
    Route::controller(SubcategoryController::class)->group(function(){
        Route::get('/all/subcategory', 'AllSubcategory')->name('all.subcategory'); 
        Route::get('/add/subcategory', 'AddSubcategory')->name('add.subcategory');
        Route::post('/insert/subcategory', 'InsertSubcategory')->name('insert_subcategory');
        Route::get('/edit/subcategory/{id}', 'EditSubcategory')->name('edit.subcategory');
        Route::post('/update/subcategory', 'UpdateSubcategory')->name('update.subcategory');
        Route::get('/delete/subcategory/{id}', 'DeleteSubcategory')->name('delete.subcategory');  
    });  
    
    
    //ChildSubCategory Route
    Route::controller(ChildSubCategoryController::class)->group(function(){
        Route::get('/add/childsubcategory', 'AddChildsubcategory')->name('add.childsubcategory'); 
        Route::get('/get-subcategories/{parentCategoryId}', 'GetSubcategories')->name('get-subcategories');
        Route::post('/insert/child/subcategory', 'InsertChildSubcategory')->name('insert_child_subcategory');
        Route::get('/all/child/subcategory', 'AllChildSubcategory')->name('all.childsubcategory');
        Route::get('/edit/child/subcategory/{id}', 'EditChildSubcategory')->name('edit.childsubcategory');
        Route::post('/update/child/subcategory', 'UpdateChildSubcategory')->name('update.childsubcategory');
        Route::get('/delete/child/subcategory/{id}', 'DeleteChildSubcategory')->name('delete.childsubcategory');
       
    });   
    
    
    //Vendor active and inactive Route
    Route::controller(AdminController::class)->group(function(){
        Route::get('/inactive/vendor', 'InactiveVendor')->name('inactive.vendor');
        Route::get('/active/vendor', 'ActiveVendor')->name('active.vendor');
        Route::get('/inactive/vendor/details/{id}', 'InactiveVendorDetails')->name('inactive_vendor_details'); 
        Route::post('/approve/vendor', 'ApproveVendor')->name('approve_vendor');
        Route::get('/active/vendor/details/{id}', 'ActiveVendorDetails')->name('active_vendor_details');
        Route::post('/disapprove/vendor', 'DisapproveVendor')->name('disapprove_vendor'); 
       
    });    
    
    
        //Product Route
    Route::controller(ProductController::class)->group(function(){
        Route::get('/all/product', 'AllProduct')->name('all.product');
        Route::get('/add/product', 'AddProduct')->name('add.product'); 
        Route::post('/store/product', 'StoreProduct')->name('store.product');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product');
        Route::post('/update/product', 'UpdateProduct')->name('update.product');
        Route::post('/update/product/thumbnail', 'UpdateProductThumbnail')->name('update.product.thumbnail');
        Route::post('/update/product/multiimg', 'UpdateProductMultiimg')->name('update.product.multiimg'); 
        Route::get('/product/multi-img/delete/{id}', 'ProductMulti_imgDelete')->name('product.multi-img.delete'); 
        Route::get('/product/inactive/{id}', 'ProductInactive')->name('product.inactive');
        Route::get('/product/active/{id}', 'ProductActive')->name('product.active'); 
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product');
        Route::get('/get-childsubcategories/{SubCategoryId}', 'GetChildSubcategories')->name('get-childsubcategories');       
    });

     //slider Route
    Route::controller(SliderController::class)->group(function(){
        Route::get('/add/slider', 'AddSlider')->name('add.slider');
        Route::get('/all/slider', 'AllSlider')->name('all.slider');
        Route::post('/store/slider', 'StoreSlider')->name('store_slider');
        Route::get('/edit/slider/{id}', 'EditSlider')->name('edit.slider');
        Route::post('/update/slider', 'UpdateSlider')->name('update.slider');
        Route::get('/delete/slider/{id}', 'DeleteSlider')->name('delete.slider');
    });  
    
    //Long Banner Route
    Route::controller(LongBannerController::class)->group(function(){
        Route::get('/add/long/banner', 'AddLongBanner')->name('add.long.banner');
        Route::get('/all/long/banner', 'AllLongBanner')->name('all.long.banner');
        Route::post('/store/long/banner', 'StoreLongBanner')->name('store.long.banner');
        Route::get('/edit/long/banner/{id}', 'EditLongBanner')->name('edit.long.banner');
        Route::post('/update/long/banner', 'UpdateLongBanner')->name('update.long.banner');
        Route::get('/delete/long/banner/{id}', 'DeleteLongBanner')->name('delete.long.banner');
    }); 
    
    //short Banner Route
    Route::controller(ShortBannerController::class)->group(function(){
        Route::get('/add/short/banner', 'AddShortBanner')->name('add.short.banner');
        Route::get('/all/short/banner', 'AllShortBanner')->name('all.short.banner');
        Route::post('/store/short/banner', 'StoreShortBanner')->name('store.short.banner');
        Route::get('/edit/short/banner/{id}', 'EditShortBanner')->name('edit.short.banner');
        Route::post('/update/short/banner', 'UpdateShortBanner')->name('update.short.banner');
        Route::get('/delete/short/banner/{id}', 'DeleteShortBanner')->name('delete.short.banner');
    });
    
    //standing Banner Route
    Route::controller(StandingBannerController::class)->group(function(){
        Route::get('/add/standing/banner', 'AddStandingBanner')->name('add.standing.banner');
        Route::get('/all/standing/banner', 'AllStandingBanner')->name('all.standing.banner');
        Route::post('/store/stand/banner', 'StoreStandBanner')->name('store.stand.banner');
        Route::get('/edit/stand/banner/{id}', 'EditStandBanner')->name('edit.stand.banner');
        Route::post('/update/stand/banner', 'UpdateStandBanner')->name('update.stand.banner');
        Route::get('/delete/stand/banner/{id}', 'DeleteStandBanner')->name('delete.stand.banner');
    });




});















//All Vendor Route
Route::middleware(['auth', 'role:vendor'])->group(function (){
    Route::get('/vendor/dashboard', [VendorController::class, 'VendorDashboard'])->name('vendor.dashboard');
    Route::get('/vendor/logout', [VendorController::class, 'VendorLogout'])->name('vendor.logout');
    Route::get('/vendor/profile', [VendorController::class, 'VendorProfile'])->name('vendor.profile');
    Route::post('/vendor/update_profile', [VendorController::class, 'VendorUpdateProfile'])->name('vendor.update_profile');
    Route::get('/vendor/change/password', [VendorController::class, 'VendorChangePassword'])->name('vendor.change.password');
    Route::post('/vendor/update/password', [VendorController::class, 'VendorUpdatePassword'])->name('vendor.update_password');

     //Vendor Product Route
     Route::controller(VendorProductController::class)->group(function(){
        Route::get('/vendor/all/product', 'VendorAllProduct')->name('vendor.all.product');
        Route::get('/vendor/add/product', 'VendorAddProduct')->name('vendor.add.product');
        Route::post('/vendor/store/product', 'VendorStoreProduct')->name('vendor.store.product');
        Route::get('/vendor/edit/product/{id}', 'VendorEditProduct')->name('vendor.edit.product');
        Route::post('/vendor/update/product', 'VendorUpdateProduct')->name('vendor.update.product'); 
        Route::post('/vendor/update/product/thumbnail', 'VendorUpdateProductThumbnail')->name('vendor.update.product.thumbnail'); 
        Route::post('/vendor/update/product/multiimg', 'VendorUpdateProductMultiimg')->name('vendor.update.product.multiimg'); 
        Route::get('/vendor/product/multi-img/delete/{id}', 'VendorProductMultiimgDelete')->name('vendor.product.multi-img.delete'); 
        Route::get('/get-subcategories/{parentCategoryId}', 'GetSubcategories')->name('get-subcategories');
        Route::get('/get-childsubcategories/{SubCategoryId}', 'GetChildSubcategories')->name('get-childsubcategories');  
        Route::get('/vendor/product/inactive{id}', 'VendorProductInactive')->name('vendor.product.inactive'); 
        Route::get('/vendor/product/active{id}', 'VendorProductActive')->name('vendor.product.active');
        Route::get('/vendor/delete/product{id}', 'VendorProductDelete')->name('vendor.delete.product'); 
        
    });




});










Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);
Route::get('/vendor/login', [VendorController::class, 'VendorLogin'])->name('vendor.login')->middleware(RedirectIfAuthenticated::class);
Route::get('/become/vendor', [VendorController::class, 'BecomeVendor'])->name('become.vendor');
Route::post('/register/vendor', [VendorController::class, 'RegisterVendor'])->name('register.vendor');



