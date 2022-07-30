									
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content d-flex align-items-center px-3">
												<!--begin::Avatar-->
												<div class="symbol symbol-50px me-5">
													<img alt="Logo" src="db/media/avatars/blank.png" />
												</div>
												<!--end::Avatar-->
												<!--begin::Username-->
												<div class="d-flex flex-column">
													<div class="fw-bolder d-flex align-items-center fs-5">{{ auth()->user()->name }}
													<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">{{ auth()->user()->tipe_akun }}</span></div>
													<a href="#" class="fw-bold text-muted text-hover-primary fs-7">{{ auth()->user()->email }}</a>
												</div>
												<!--end::Username-->
											</div>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="/dashboard" class="menu-link px-5">Profil</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-5">
											<a href="/dashboard/penyewaan" class="menu-link px-5">
												<span class="menu-text">Penyewaan</span>
												<span class="menu-badge">
													<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
												</span>
											</a>
										</div>
										<!--end::Menu item-->
										
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										
										<!--begin::Menu item-->
										<div class="menu-item px-5 my-1">
											<a href="?page=account/settings" class="menu-link px-5">Pengaturan Akun</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										
										<div class="menu-item px-5">

											<form id="log" action="/logout" method="POST">
												@csrf
												
												<a  href="javascript:{}" class="menu-link px-5" onclick="document.getElementById('log').submit();"><!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr076.svg-->
													<span style="margin-right: 4px" class="svg-icon svg-icon-3 svg-icon-danger ms-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor"/>
													<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor"/>
													<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4"/>
													</svg></span>
													<!--end::Svg Icon--> Log Out</a>
											</form>
											{{-- <a href='/logout' class="btn btn-danger fw-bold px-6 py-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">Log Out</a> --}}
											
										</div>
										
										<!--end::Menu item-->
										
										
									</div>
									<!--end::User account menu-->
									