<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('adminBackend/assets/images/logo-icon.png') }}" class="logo-icon"
                alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li>
            <a href="{{route('admin.dashboard')}}">
                <div class="parent-icon"><i class='bx bx-cookie'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li class="menu-label">SETTINGS</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-circle'></i>
                </div>
                <div class="menu-title">Brand</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.brand') }}"><i class="bx bx-right-arrow-alt"></i>Add Brand</a>
                </li>
                <li> <a href="{{ route('all.brand') }}"><i class="bx bx-right-arrow-alt"></i>All Brand</a>
                </li>
              
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fas fa-list-ul" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.category') }}"><i class="bx bx-right-arrow-alt"></i>Add Category</a>
                </li>
                <li> <a href="{{ route('all.category') }}"><i class="bx bx-right-arrow-alt"></i>All Category</a>
                </li>
                
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fas fa-layer-group" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Sub-Category</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Sub-category</a>
                </li>
                <li> <a href="{{ route('all.subcategory') }}"><i class="bx bx-right-arrow-alt"></i>All Sub-category</a>
                </li>
                
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="fas fa-th" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Child-SubCategory</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.childsubcategory') }}"><i class="bx bx-right-arrow-alt"></i>Add Child-Subcategory</a>
                </li>
                <li> <a href="{{ route('all.childsubcategory') }}"><i class="bx bx-right-arrow-alt"></i>All Child-Subcategory</a>
                </li>
                
            </ul>
        </li>

        <li class="menu-label">MANAGEMENT</li>
     
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='fas fa-store' style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Vendor</div>
            </a>
            <ul>
                <li> <a href="{{ route('active.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Active Vendor</a>
                </li>
                <li> <a href="{{ route('inactive.vendor') }}"><i class="bx bx-right-arrow-alt"></i>Inactive Vendor</a>
                </li>
               
            </ul>
        </li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='fas fa-box' style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.product') }}"><i class="bx bx-right-arrow-alt"></i>Add Product</a>
                </li>
                <li> <a href="{{ route('all.product') }}"><i class="bx bx-right-arrow-alt"></i>All Product</a>
                </li>
               
            </ul>
        </li>

      

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Slider</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.slider') }}"><i class="bx bx-right-arrow-alt"></i>Add Slider</a>
                </li>
                <li> <a href="{{ route('all.slider') }}"><i class="bx bx-right-arrow-alt"></i>All Slider</a>
                </li>
            </ul>
        </li>

        <li class="menu-label"> Banners</li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fas fa-flag" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Long Banner</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.long.banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Long Banner</a>
                </li>
                <li> <a href="{{ route('all.long.banner') }}"><i class="bx bx-right-arrow-alt"></i>All Long Banner</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fas fa-flag" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Short Banner</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.short.banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Short Banner</a>
                </li>
                <li> <a href="{{ route('all.short.banner') }}"><i class="bx bx-right-arrow-alt"></i>All Short Banner</a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="fas fa-ribbon" style="font-size: 18px"></i>
                </div>
                <div class="menu-title">Standing Banner</div>
            </a>
            <ul>
                <li> <a href="{{ route('add.standing.banner') }}"><i class="bx bx-right-arrow-alt"></i>Add Standing Banner</a>
                </li>
                <li> <a href="{{ route('all.standing.banner') }}"><i class="bx bx-right-arrow-alt"></i>All Standing Banner</a>
                </li>
            </ul>
        </li>

       

        <li class="menu-label">Charts & Maps</li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-line-chart"></i>
                </div>
                <div class="menu-title">Charts</div>
            </a>
            <ul>
                <li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
                </li>
                <li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
                </li>
                <li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="https://themeforest.net/user/codervent" target="_blank">
                <div class="parent-icon"><i class="bx bx-support"></i>
                </div>
                <div class="menu-title">Support</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>