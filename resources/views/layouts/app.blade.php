<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="">
	{{-- <link rel="shortcut icon" href="favicon.png"> --}}

	<meta name="description" content="JMM-etc" />
	<meta name="keywords" content="bootstrap, bootstrap4" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Source+Serif+Pro:wght@400;700&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<link rel="stylesheet" href="fonts/icomoon/style.css">
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="css/style.css">

	@if (request()->routeIs('register'))
		<link rel="stylesheet" href="{{ asset('css/my_style.css') }}">
	@endif

    <meta name="description" content="@yield('meta-description')">
	
    <title>@yield('title' ?? 'Título por defecto')</title>

</head>

<body class="antialiased">
    <div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>

    @include('navigation')

    <div>
        @yield('content')
    </div>

	@if (!request()->routeIs('register'))
    	@include('layouts.footers.footer')
	@endif

	<div id="overlayer"></div>
	<div class="loader">
	  <div class="spinner-border" role="status">
		<span class="sr-only">Loading...</span>
	  </div>
	</div>

    {{-- SCRIPTS JS --}}
    <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.fancybox.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/moment.min.js"></script>
	<script src="js/daterangepicker.js"></script>
	<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
	
	<script src="{{ asset('js/script.js') }}"></script>

	<script src="js/typed.js"></script>

	@if (request()->routeIs('home'))
		<script>
			$(function() {
				var slides = $('.slides'),
				images = slides.find('img');

				images.each(function(i) {
					$(this).attr('data-id', i + 1);
				})

				var typed = new Typed('.typed-words', {
					strings: ["Abancay."," Andahuaylas."," Antabamba.", " Aymaraes.", " Cotabambas", " Grau", " Chincheros"],
					typeSpeed: 80,
					backSpeed: 80,
					backDelay: 4000,
					startDelay: 1000,
					loop: true,
					showCursor: true,
					preStringTyped: (arrayPos, self) => {
						arrayPos++;
						console.log(arrayPos);
						$('.slides img').removeClass('active');
						$('.slides img[data-id="'+arrayPos+'"]').addClass('active');
					}
				});
			})
		</script>
	@endif

	<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
	
	<div>
        @yield('jsvalidation')
    </div>

	<div>
		@yield('jsconfirm')
	</div>

	<script src="js/custom.js"></script>
</body>

</html>

