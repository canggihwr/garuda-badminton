<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<title>Dashboard - GOR Garuda</title>
		
		<link rel="shortcut icon" href="favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="db/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="db/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">

@include('db.layout.master')


		<!--begin::Javascript-->
		<script>var hostUrl = "db/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="db/plugins/global/plugins.bundle.js"></script>
		<script src="db/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="db/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
		<script src="db/plugins/custom/datatables/datatables.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="db/js/widgets.bundle.js"></script>
		<script src="db/js/custom/widgets.js"></script>
		<script src="db/js/custom/apps/chat/chat.js"></script>
		<script src="db/js/custom/intro.js"></script>
		<script src="db/js/custom/utilities/modals/create-app.js"></script>
		<script src="db/js/custom/utilities/modals/create-campaign.js"></script>
		<script src="db/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>