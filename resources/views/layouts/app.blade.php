<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Philbert I Fast build Admin dashboard for any platform</title>
	<meta name="description" content="Philbert is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Philbert Admin, Philbertadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

	<!-- Morris Charts CSS -->
	<link href="/vendors/bower_components/morris.js/morris.css" rel="stylesheet" type="text/css"/>

	<!-- Font Awesome -->
	 <link href="/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Chartist CSS -->
	<link href="/vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/>

	<!-- Chartist CSS -->
	<link href="/vendors/bower_components/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css"/>

	<!-- Data table CSS -->
	<link href="/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

	<link href="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css" rel="stylesheet" type="text/css">
	<link href="/vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>

	<!-- Select -->
	<link href="/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css"/>

	<!-- Footable CSS -->
	<link href="/vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet" type="text/css"

	<!-- Dropify -->
	<link href="/vendors/bower_components/dropify/dist/css/dropify.min.css" rel="stylesheet" type="text/css"/>

	<!-- Calendar Css-->
	<link href="/vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>


	<!--alerts CSS -->
	<link href="/vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">

	<!-- Custom CSS -->
	<link href="/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
    <!-- /Preloader -->
    <!-- /Preloader -->
    <div id="app">
        <div class="wrapper theme-6-active pimary-color-green">
            <navbar></navbar>
            <sidebar></sidebar>
                <!-- /Left Sidebar Menu -->
            <!-- Main Content -->
            <div class="page-wrapper">
                <div class="container-fluid pt-25">

                    @yield('content')

                    <!-- Footer -->
                    <footer class="footer container-fluid pl-30 pr-30">
                        <div class="row">
                            <div class="col-sm-12">
                                <p>{{ date('Y') }} &copy; fidelePlk. Pampered by Hencework</p>
                            </div>
                        </div>
                    </footer>
                    <!-- /Footer -->

                </div>
                <!-- /Main Content -->
            </div>
        </div>
    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendors/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

	<!-- Data table JavaScript -->
	<script src="/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>

	<!-- Slimscroll JavaScript -->
	<script src="/dist/js/jquery.slimscroll.js"></script>

	<!-- simpleWeather JavaScript -->
	<script src="/vendors/bower_components/moment/min/moment.min.js"></script>
	<script src="/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="/dist/js/simpleweather-data.js"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
	<script src="/vendors/bower_components/jquery.counterup/jquery.counterup.min.js"></script>

	<!-- Fancy Dropdown JS -->
	<script src="/dist/js/dropdown-bootstrap-extended.js"></script>


	<!-- Data table JavaScript -->
    <script src="/vendors/bower_components/moment/min/moment.min.js"></script>

	<!-- Calender JavaScripts -->
	<script src="/vendors/jquery-ui.min.js"></script>
	<script src="/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
	<script src="/dist/js/fullcalendar-data.js"></script>

	<!-- Wheather -->
	<script src="/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js"></script>
	<script src="/dist/js/simpleweather-data.js"></script>

	<!-- Sparkline JavaScript -->
	<script src="/vendors/jquery.sparkline/dist/jquery.sparkline.min.js"></script>

	<!-- Bootstrap Daterangepicker JavaScript -->
	<script src="/vendors/bower_components/dropify/dist/js/dropify.min.js"></script>

	<!-- Form Flie Upload Data JavaScript -->
	<script src="/dist/js/form-file-upload-data.js"></script>

	<!-- Owl JavaScript -->
	<script src="/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>

	<!-- ChartJS JavaScript -->
	<script src="/vendors/chart.js/Chart.min.js"></script>

	<!-- Morris Charts JavaScript -->
    <script src="/vendors/bower_components/raphael/raphael.min.js"></script>
    <script src="/vendors/bower_components/morris.js/morris.min.js"></script>
	<script src="/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js"></script>

	<!-- Sweet-Alert  -->
	<script src="/vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>

	<script src="/dist/js/sweetalert-data.js"></script>

	<!-- Select2 JavaScript -->
	<script src="/vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

	<!-- Ajax -->

	<!-- Bootstrap Select JavaScript -->
	<script src="/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js"></script>

	<!-- Piety JavaScript -->
	<script src="/vendors/bower_components/peity/jquery.peity.min.js"></script>
	<script src="/dist/js/peity-data.js"></script>

	<!-- Switchery JavaScript -->
	<script src="/vendors/bower_components/switchery/dist/switchery.min.js"></script>

	<!-- Init JavaScript -->
	<script src="/dist/js/init.js"></script>
	<script src="/dist/js/dashboard6-data.js"></script>
</body>
</html>
