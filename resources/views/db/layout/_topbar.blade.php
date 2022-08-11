							
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">

@include('db.partials.search._dropdown')

								<!--begin::Activities-->
								<div class="d-flex align-items-center ms-1">
									<!--begin::Drawer toggle-->
									<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-30px h-30px h-40px w-40px" id="kt_activities_toggle">
										<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
												<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
												<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
												<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Drawer toggle-->
								</div>
								<!--end::Activities-->
								<!--begin::Chat-->
								<div class="d-flex align-items-center ms-1">
									<!--begin::Menu wrapper-->
									<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-30px h-30px h-40px w-40px position-relative" id="kt_drawer_chat_toggle">
										<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
												<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
												<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Animation notification-->
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
										<!--begin::Animation notification-->
									</div>
									<!--end::Menu wrapper-->
								</div>
								<!--end::Chat-->

								<!--begin::Theme mode-->
								<div class="d-flex align-items-center ms-1">

								@include('db.partials.theme-mode._main')

								</div>
								<!--end::Theme mode-->
								<!--begin::User-->
								<div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
									<!--begin::User info-->
									<div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Name-->
										<div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
											<span class="text-muted fs-8 fw-bold lh-1 mb-1">{{ auth()->user()->name }}</span>
											<span class="text-white fs-8 fw-bolder lh-1">{{ auth()->user()->tipe_akun }}</span>
										</div>
										<!--end::Name-->
										<!--begin::Symbol-->
										<div class="symbol symbol-30px symbol-md-40px">
											<img src="db/media/avatars/blank.png" alt="image" />
										</div>
										<!--end::Symbol-->
									</div>
									<!--end::User info-->

								@include('db.partials.menus._user-account-menu')


								</div>
								<!--end::User -->
							</div>
							<!--end::Topbar-->
							