<!DOCTYPE html>
<html>

<head>
	<title>AIRBNB - payment</title>
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
	<link rel="stylesheet" type="text/css" href="https://assets.braintreegateway.com/web/dropin/1.25.0/css/dropin.css" id="braintree-dropin-stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
	<!-- MDB -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css" rel="stylesheet" />

	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<!-- Template Main CSS File -->
	<link href="assets/css/payment_cal.css" rel="stylesheet">

</head>

<body>

	<!-- nav bar-->
	<header id="header" class="">
		<div class="d-flex align-items-center">


			
		</div>
	</header>


	<div class="new-container">
		<div class="container">

			@yield('content')

		</div>
	</div>
	<div class="footer" style="text-align:center">
		<div class="wrap__footer">
			<div class="footer footer--checkout">
				<div class="footer__item">
					<div class="footer__item__inner">
						<div class="f-copy">
							<p class="f-copyright" data-nsfw-filter-status="swf">2021 Towords Inc.</p>
						</div>
						<div class="f-copy f-copy--secure">
							<p data-nsfw-filter-status="swf"><i class="icon icon--lock"></i> Payment details are encrypted and securely processed by our providers – Braintree, PayPal.</p>
						</div>
						<div class="f-copy f-copy--menu">
							<div class="f-copy__docs">
								<a class="f-copy__docs__item" target="_blank" href="/static/Preply-Terms-of-Service.pdf" data-nsfw-filter-status="swf">
									Terms of Service
								</a>
								<a class="f-copy__docs__item" target="_blank" href="/static/Privacy_Policy.pdf" data-nsfw-filter-status="swf">
									Privacy Policy
								</a>
								<a class="f-copy__docs__item" target="_blank" href="/static/Cookie_Policy.pdf" data-nsfw-filter-status="swf">
									Cookie Policy
								</a>
								<a class="f-copy__docs__item" target="_blank" href="/static/Payment_Policy.pdf" data-nsfw-filter-status="swf">
									Refund Policy
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/fileinput.min.js')}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"></script>
	<script>
		$(document).ready(function() {

			//hide loading animation
			$('.overlay').hide();
			$('.sk-folding-cube').hide();

			$('.select2').select2({
				closeOnSelect: false
			});

		});
	</script>

	@stack('scripts')

</body>

</html>