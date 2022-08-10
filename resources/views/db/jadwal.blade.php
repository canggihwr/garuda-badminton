<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<title>GOR Garuda Mataram</title>
		<meta charset="utf-8" />
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
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
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					@include('db.layout._header')
					<!--end::Header-->
					<!--begin::Content wrapper-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Aside-->
						@include('db.layout.aside._base')
						<!--end::Aside-->
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
                            <div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
                                <!--begin::Page title-->
                                <div class="page-title d-flex flex-column me-3">
                                    <!--begin::Title-->
                                    <h1 class="d-flex text-dark fw-bolder my-1 fs-3">Jadwal</h1>
                                    <!--end::Title-->
                                    <!--begin::Breadcrumb-->
                                    <ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-gray-600">
                                            <a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="breadcrumb-item text-gray-500">Jadwal</li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Breadcrumb-->
                                </div>
                                <!--end::Page title-->
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Post-->
                            <div class="content flex-column-fluid" id="kt_content">
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <h2 class="card-title fw-bolder">Jadwal GOR Bulutangkis Garuda</h2>
                                        <div class="card-toolbar">
                                            <button class="btn btn-flex btn-primary" data-kt-calendar="add">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                                    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->Cek Jadwal</button>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Notice-->
									<div class="d-flex align-items-center rounded py-5 px-4 bg-light-info mb-8">
										<!--begin::Icon-->
										<div class="d-flex h-80px w-80px flex-shrink-0 flex-center position-relative ms-3 me-6">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs051.svg-->
											<span class="svg-icon svg-icon-info position-absolute opacity-10">
												<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none" class="w-80px h-80px">
													<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen013.svg-->
<span class="svg-icon svg-icon-primary svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
    <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"/>
    <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"/>
    </svg></span>
    <!--end::Svg Icon-->
										</div>
										<!--end::Icon-->
										<!--begin::Description-->
										<div class="text-gray-700 fw-bold fs-6 lh-lg">Informasi:
										<a  class="fw-bolder me-1">Buka : </a>08:00 WITA
										<a class="fw-bolder" >Tutup : </a>23:00 WITA</div>
										<!--end::Description-->
									</div>
									<!--end::Notice-->
                                        <!--begin::Calendar-->
                                        <div id="kt_calendar_app" class="mt-8"></div>
                                        <!--end::Calendar-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                                <!--begin::Modals-->
                                <!--begin::Modal - New Product-->
                                <div class="modal fade" id="kt_modal_add_event" tabindex="-1" aria-hidden="true">
                                    <!--begin::Modal dialog-->
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <!--begin::Modal content-->
                                        <div class="modal-content">
                                            <!--begin::Form-->
                                            <form class="form" action="#" id="kt_modal_add_event_form">
                                                <!--begin::Modal header-->
                                                <div class="modal-header">
                                                    <!--begin::Modal title-->
                                                    <h2 class="fw-bolder" data-kt-calendar="title">Cek Jadwal</h2>
                                                    <!--end::Modal title-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" id="kt_modal_add_event_close">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
												<!--begin::Modal body-->
												<div class="modal-body py-10 px-lg-17">
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold required mb-2">Nama Lapangan</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_name" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">Nama Pelanggan</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_description" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="fv-row mb-9">
														<!--begin::Label-->
														<label class="fs-6 fw-bold mb-2">Paket</label>
														<!--end::Label-->
														<!--begin::Input-->
														<input type="text" class="form-control form-control-solid" placeholder="" name="calendar_event_location" />
														<!--end::Input-->
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row row-cols-lg-2 g-10">
														<div class="col">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Tanggal Main</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_start_date" placeholder="Pick a start date" id="kt_calendar_datepicker_start_date" />
																<!--end::Input-->
															</div>
														</div>
														<div class="col" data-kt-calendar="datepicker">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Jam Main</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_start_time" placeholder="Pick a start time" id="kt_calendar_datepicker_start_time" />
																<!--end::Input-->
															</div>
														</div>
													</div>
													<!--end::Input group-->
													<!--begin::Input group-->
													<div class="row row-cols-lg-2 g-10">
														<div class="col">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2 required">Tanggal Selesai</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_end_date" placeholder="Pick a end date" id="kt_calendar_datepicker_end_date" />
																<!--end::Input-->
															</div>
														</div>
														<div class="col" data-kt-calendar="datepicker">
															<div class="fv-row mb-9">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Jam Selesai</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" name="calendar_event_end_time" placeholder="Pick a end time" id="kt_calendar_datepicker_end_time" />
																<!--end::Input-->
															</div>
														</div>
													</div>
													<!--end::Input group-->
												</div>
												<!--end::Modal body-->
												<!--begin::Modal footer-->
												<div class="modal-footer flex-center">
													<!--begin::Button-->
													<button type="reset" id="kt_modal_add_event_cancel" class="btn btn-light me-3">Batal</button>
													<!--end::Button-->
													<!--begin::Button-->
													<button type="button" id="kt_modal_add_event_submit" class="btn btn-primary">
														<span class="indicator-label">Tambah</span>
														<span class="indicator-progress">Please wait...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
													<!--end::Button-->
												</div>
												<!--end::Modal footer-->
											</form>
											<!--end::Form-->
										</div>
									</div>
								</div>
								<!--end::Modal - New Product-->
								
								<!--end::Modals-->
							</div>
							<!--end::Post-->
							<!--begin::Footer-->
							<div class="footer py-4 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
								
								
							</div>
							<!--end::Footer-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content wrapper-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
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
		<script src="db/js/custom/apps/calendar/calendar.js"></script>
		<script src="db/js/widgets.bundle.js"></script>
		<script src="db/js/custom/widgets.js"></script>
		<script src="db/js/custom/apps/chat/chat.js"></script>
		<script src="db/js/custom/utilities/modals/create-app.js"></script>
		<script src="db/js/custom/utilities/modals/users-search.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>