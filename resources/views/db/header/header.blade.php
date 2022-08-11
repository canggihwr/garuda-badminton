<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="/dashboard">
		<title>Dashboard - GOR Garuda Mataram</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="db/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="db/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
		<!--end::Global Stylesheets Bundle-->

		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="db/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
				
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					@include('sweetalert::alert')


@include('db.layout._header')

					<!--begin::Content wrapper-->
					<div class="d-flex flex-column-fluid">

@include('db.layout.aside._base')
