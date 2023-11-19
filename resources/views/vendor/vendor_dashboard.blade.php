<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('adminBackend/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('adminBackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('adminBackend/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/input-tags/css/tagsinput.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('adminBackend/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('adminBackend/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('adminBackend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBackend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('adminBackend/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('adminBackend/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminBackend/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('adminBackend/assets/css/header-colors.css') }}" />
     <!-- select2 CSS -->
    <link href="{{ asset('adminBackend/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('adminBackend/assets/plugins/select2/css/select2-bootstrap4.css') }}" rel="stylesheet" />

    <title>Vendor Dashboard | @yield('title')</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">

        <!--sidebar wrapper -->
           @include('vendor.body.sidebar')
        <!--end sidebar wrapper -->

        <!--start header -->
            @include('vendor.body.header')
        <!--end header -->

        <!--start page wrapper -->
        <div class="page-wrapper">
            @yield('vendor')
        </div>
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

            @include('vendor.body.footer')
    </div>
    <!--end wrapper-->


    <!-- Bootstrap JS -->
    <script src="{{ asset('adminBackend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('adminBackend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/sparkline-charts/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/jquery-knob/excanvas.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/jquery-knob/jquery.knob.js') }}"></script>

    <script src="{{ asset('adminBackend/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('adminBackend/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/plugins/input-tags/js/tagsinput.js') }}"></script>
    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
     <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
    <script src="{{ asset('adminBackend/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('adminBackend/assets/js/app.js') }}"></script>

    <script src="{{ asset('adminBackend/assets/js/validate.min.js') }}"></script>
    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('adminBackend/assets/js/code.js') }}"></script>
     <!-- select2 -->
    <script src="{{ asset('adminBackend/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
        
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});

        

	</script>


    
    <script>
		tinymce.init({
		  selector: '.mytextarea'
		});
	</script>
</body>

</html>
