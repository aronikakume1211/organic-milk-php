<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	function getCurrentUrl()
	{
		$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$host = $_SERVER['HTTP_HOST'];
		$requestUri = $_SERVER['REQUEST_URI'];

		return $requestUri;
	}

	// Example usage:
	$currentUrl = getCurrentUrl();
	if ($currentUrl == "/realorgnow/user.php") : ?>
		<title>Sign In/Sign Up | NowOrganicPoultry.in - Organic Free Range Eggs & Chickens</title>
		<meta name="description" content="Join NowOrganicPoultry.in for convenient access to organic free-range eggs and certified organic chickens delivered directly to your doorstep. Take advantage of our exclusive launching offer, with discounts of up to 75% off. Whether you're signing in or signing up, start enjoying the benefits of premium-quality organic poultry today!" />
	<?php
	elseif ($currentUrl == "/realorgnow/termsandconditions.php") : ?>
		<title>Terms and Conditions | NowOrganicPoultry.in - Organic Free Range Eggs & Chickens</title>
		<meta name="description" content="Review the Terms and Conditions of NowOrganicPoultry.in, your premier provider of organic free-range eggs and certified organic chickens delivered directly to your doorstep. Don't miss out on our exclusive launching offer, featuring discounts of up to 75% off. Familiarize yourself with our terms before placing your order and start enjoying the benefits of organic poultry today!" />
	<?php
	elseif ($currentUrl == "/realorgnow/privacypolicy.php") : ?>
		<title>Privacy Policy | NowOrganicPoultry.in - Organic Free Range Eggs & Chickens</title>
		<meta name="description" content="Learn about our commitment to privacy at NowOrganicPoultry.in, your trusted source for organic free-range eggs and certified organic chickens delivered right to your doorstep. Explore our exclusive launching offer with discounts of up to 75% off. Read our privacy policy to understand how we safeguard your personal information." />
	<?php else : ?>
		<title>Organic Poultry & Free Range Eggs | NowOrganicPoultry.in - Up to 75% Off</title>
		<meta name="description" content="Discover the best in organic poultry with NowOrganicPoultry.in. Enjoy certified organic chickens and free-range eggs delivered straight to your doorstep. Exclusive launch offer: save up to 75% on your first order! Order now and taste the difference." />
	<?php

	endif;
	?>

	<script src="assets/js/location-popup.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend:wght@100..900&display=swap" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/index.css">
	<link rel="stylesheet" href="assets/css/cart.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script src="assets/js/bootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
	<!-- Header Start -->
	<!-- Top header Start -->
	<div class="top_header_container">
		<p>Don't wait! Our launch deal ends in <span id="timer">2:09:30</span></p>
	</div>
	<!-- Top header End -->

	<!-- Main Navbar start -->
	<header class="main_navbar_container">
		<div class="main_navbar">
			<div class="logo_container">
				<a href="#">
					<img src="assets/images/tata.png" alt="simplebetter logo" width="111" height="70">
				</a>
				<div id="selected_country" style="cursor: pointer; align-items: center;">
					<p class="deliver_in" style="    margin-bottom: -17px;margin-top: 17px;">Deliver in</p>
					<span id="selected_country_name">Bangalore</span><svg width="10" height="10" viewBox="0 0 6 4" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M3 4L0.834937 0.25L5.16506 0.25L3 4Z" fill="#233332"></path>
					</svg>
				</div>
			</div>
			<nav class="main_navbar_navigation">
				<ul>
					<li><a href="/#our-order">Order Now</a></li>
					<li><a href="/#our-story">Our Story</a></li>
					<li><a href="/#about">About</a></li>
					<li><a href="/#faqs">FAQ's</a></li>
				</ul>
			</nav>

			<!-- signin -->
			<?php if (array_key_exists('user_id', $_SESSION)) : ?>
				<div class="signin-btn">
					<a href="#"><?php echo $_SESSION['email'] ?></a>
				</div>
				<div class="createacc-btn">
					<a href="logout.php">Logout</a>
				</div>
			<?php else : ?>
				<div class="signin_signup_container">
					<a href="user.php">Sign in</a>
					<span>Or</span>
					<a href="user.php">create Account</a>
				</div>
			<?php endif; ?>


		</div>
	</header>
	<!-- Main Navbar End -->
	<!-- Header End -->