<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>GOR Bulutangkis Garuda</title>

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="theme-color" content="#212121"/>
    <meta name="msapplication-navbutton-color" content="#212121"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>

	<!-- Web Fonts 
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet"/>
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
	
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/colors/color.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}"/>
			
	<!-- Favicons
	================================================== -->
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
	
	
</head>
<body class="">	
	
	<div id=""></div>

	
	<!-- Nav and Logo
	================================================== -->

	
	<!-- MENU
    ================================================== -->	

		<nav id="menu-wrap" class="menu-back cbp-af-header">
			<div class="menu">
				<a href="/" ><div class="logo"></div></a>
				<ul>
					<li>
						<a class="shadow-hover curent-shadow" href="/" >Home</a>
					</li>
					<li>
						<a class="shadow-hover" href="#info">Info & Jadwal Lapangan</a>
					</li>
					<li>
						<a class="shadow-hover" href="#cara">Cara Penyewaan</a>
					</li>
					<li>
						<a class="shadow-hover" href="#fasilitas">Fasilitas</a>
					</li>
					@auth
					<li>
						<a class="shadow-hover" href="#">Welcome back, {{ auth()->user()->name }}</span></a>
						<ul>
							<li>
								<a class="curent-multi-page" href="/dashboard">Dashboard</a>
							</li>
							<li>
								<form id="log" action="/logout" method="POST">
									@csrf
									<a  href="javascript:{}" onclick="document.getElementById('log').submit();">Logout</a>
								</form>
							</li>
						</ul>
					</li>
										
					@else
					<li>
						<a class="shadow-hover" href="#">Login</span></a>
						<ul>
							<li>
								<a class="curent-multi-page" href="/login">Login</a>
							</li>
							<li><a href="/daftar">Daftar</a></li>
						</ul>
					</li>
						
					@endauth
					
				</ul>
			</div>
		</nav>
		
	<!-- Primary Page Layout
	================================================== -->

		<main>