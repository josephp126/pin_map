<!DOCTYPE html>
<html>

<head>
	<title>AIRBNB - Arts</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/design.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">

	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=K2D:wght@200&family=Pathway+Gothic+One&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">



	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<!-- Template Main CSS File -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">
	<link href="assets/css/register.css" rel="stylesheet">
	<link href="assets/css/ion.rangeSlider.css" rel="stylesheet">
	<link href="assets/css/ion.rangeSlider.min.css" rel="stylesheet">
</head>

<body>

	<!-- nav bar-->
	<header id="header" class="">
		<div class="container d-flex align-items-center">

			<h1 class="logo me-auto"><a href="home">AIRBNB</a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="active" href="#">Arts</a></li>
					@if( Auth::user()->email == "chris@legendaryestatesairbnb.com")
						<li><a href="/register_tutor">Arts Upload </a></li>
					@endif
					

					<li class="dropdown navbar-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class=""></span></a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{ url('/logout') }}" onclick="event.preventDefault();
	                           document.getElementById('logout-form').submit();">
									Logout
								</a>

								<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
									{{ csrf_field() }}
								</form>
							</li>
						</ul>
					</li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header>


	<div class="whole-container">
		<div class="container">

			@yield('content')

		</div>
	</div>
	<div class="footer" style="text-align:center">

	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/fileinput.min.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="assets/js/ion.rangeSlider.js"></script>
	<script src="assets/js/ion.rangeSlider.min.js"></script>
	<script>
		$(document).ready(function() {

			//hide loading animation
			$('.overlay').hide();
			$('.sk-folding-cube').hide();

			$('.select2').select2();

			$('.select2').select2({
				closeOnSelect: true
			});

		});


		// when called, will show loading animation
		function showLoad($msg) {
			if ($msg != null)
				return confirm($msg);
			$('.overlay').show();
			$('.sk-folding-cube').show();
		}


		$(document).ready(function() {

		});
	</script>

	@stack('scripts')

</body>

</html>