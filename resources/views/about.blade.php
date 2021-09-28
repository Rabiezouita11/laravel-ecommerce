<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electro Store Ecommerce </title>
    <link href="images/logo2.png" rel="icon">
    <link href="images/logo2.png" rel="apple-touch-icon">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-4">
				<div class="col-lg-4 header-most-top">

				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>

						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> 94715240
						</li>
                        @guest
                        <li class="nav-item text-center ">
                            <a class=" text-white " href="{{ route('login') }}"><i class="fas fa-sign-in-alt mr-2"></i> Log In </a></a>



                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item border-left text-center">
                                <a class=" text-white" href="{{ route('register') }}">	<i class="fas fa-sign-out-alt mr-2"></i>Register </a></a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle text-white " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf

                                </form>

                            </div>

                        </li>
                    @endguest
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>

	<!-- Button trigger modal(select-location) -->

	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->

	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
                    <a href="{{asset('/index')}}" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						@include('partials.search')
						<!-- //search -->
						<!-- cart details -->
                        <a class="text-muted" href="{{route('cart.index')}}" > Panier <span class="badge badge-pill badge-dark">{{Cart::Count()}}
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('index')}}">Home
								<span class="sr-only">(current)</span>
                            </a>
                        </li>
                            <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categories
                                </a>
                                <div class="dropdown-menu">
                                    <div class="agile_inner_drop_nav_info p-4">
                                        <h5 class="mb-3">Categories</h5>
                                        <div class="row">
                                            @foreach($categories as $categorie)
                                            <div class="col-sm-6 multi-gd-img">
                                                <ul class="multi-column-dropdown">
                                                    <li>
                                                    <a href="{{route('affcat', $categorie->id)}}">{{$categorie->nom}}</a>
                                                    </li>






                                                </ul>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="{{route('about')}}">About Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                            <a class="nav-link" href="{{route('cart.index')}}">Checkout Page</a>
						</li>

						<li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
							<a class="nav-link" href="{{route('jeux')}}">Game zone</a>
							</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
                    <a href="{{route('index')}}">Home</a>
						<i>|</i>
					</li>
					<li>About Us</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- about -->
	<div class="welcome py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>A</span>bout
				<span>U</span>s</h3>
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-6 welcome-left">
					<h3>Welcome</h3>
					<h4 class="my-sm-3 my-2">Bienvenue dans Electro store, votre source numéro un pour tout produit, c'est-à-dire: mobile phone, mobile accessoires,computer,computer accessoires,tablette pour client. Nous nous engageons à vous offrir le meilleur de produit, en mettant l'accent sur trois caractéristiques, à savoir la fiabilité, le service client et l'unicité.]
                        Fondée en 2020 par khalaf&rabie,electro store a parcouru un long chemin depuis ses débuts dans un lieu de départ, à savoir: bureau à domicile de sprint code au kef. Lorsque on a commencé, notre passion pour vendre tous les equipement informatiques, fournir le meilleur équipement pour nos client . Nous servons maintenant des clients partout dans [l'endroit, c'est-à-dire: la tunisie,  la région le kef, et nous sommes ravis de faire partie de l'adjectif, c'est-à-dire: original, commerce

                        Nous espérons que vous apprécierez nos produits autant que nous aimerons vous les offrir. Si vous avez des questions ou des commentaires, n'hésitez pas à nous contacter.</h4>

				</div>
				<div class="col-lg-6 welcome-right-top mt-lg-0 mt-sm-5 mt-4">
					<img src="images/ab.jpg" class="img-fluid" alt=" ">
				</div>
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- testimonials -->
	<div class="testimonials py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center text-white mb-lg-5 mb-sm-4 mb-3">

			<!-- tittle heading -->
			<div class="row gallery-index">
				<div class="col-sm-6 med-testi-grid">

					<div class="row med-testi-left my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
						</div>

					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">

					<div class="row med-testi-left my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
						</div>

					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">

					<div class="row med-testi-left mt-sm-5 my-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">

						</div>

					</div>
				</div>
				<div class="col-sm-6 med-testi-grid">

					<div class="row med-testi-left mt-5">
						<div class="col-lg-2 col-3 w3ls-med-testi-img">
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //testimonials -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->

				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>

                            @foreach($categories as $categorie)
							<li class="mb-3">
                                <a href="{{route('affcat', $categorie->id)}}">{{$categorie->nom}}</a>
							</li>


@endforeach
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->

					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Le kef 7100</li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> 29708865 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> 94715240 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:rabiezouita82@gmail.com"> rabiezouita82@gmail.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:khalafsayari@gmail.com"> khalafsayari@gmail.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://web.facebook.com/Electro-store-102270808047903/">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://twitter.com/SayariKhalaf">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">

				<!-- payment -->

				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2020 Electro Store. All rights reserved

			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>
