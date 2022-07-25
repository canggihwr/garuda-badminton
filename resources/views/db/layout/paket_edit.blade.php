
						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">Paket</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">Edit paket</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-2 py-md-1">
									<!--begin::Wrapper-->
									<div class="me-3">
										<!--begin::Menu-->
										<a class="btn btn-light fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M12.0657 12.5657L14.463 14.963C14.7733 15.2733 14.8151 15.7619 14.5621 16.1204C14.2384 16.5789 13.5789 16.6334 13.1844 16.2342L9.69464 12.7029C9.30968 12.3134 9.30968 11.6866 9.69464 11.2971L13.1844 7.76582C13.5789 7.3666 14.2384 7.42107 14.5621 7.87962C14.8151 8.23809 14.7733 8.72669 14.463 9.03696L12.0657 11.4343C11.7533 11.7467 11.7533 12.2533 12.0657 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Cancel</a>
										
									</div>
									<!--end::Wrapper-->
									
									<!--begin::Button-->
									<a href="#" class="btn btn-success fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Edit</a>
									<!--end::Button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar-->
                            <!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								
								<!--begin::Card-->
								<div class="card">
									<!--begin::Card header-->
									<div class="card-header">
										<!--begin::Card title-->
										<div class="card-title fs-3 fw-bolder">Edit Paket</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Form-->
									<form action="/dashboard/paket/update/{{ $paket->id }}" method="POST" id="" class="form">
										@csrf
										<!--begin::Card body-->
										<div class="card-body p-9">
											
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Nama Paket</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="nama" value="{{ $paket->nama }}" />
												</div>
											</div>
											<!--end::Row-->
											
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Waktu Main</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="lama" value="{{ $paket->lama }}" />
												</div>
											</div>
											<!--end::Row-->

											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Harga</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<div class="input-group mb-5">
													<span class="input-group-text" id="basic-addon1">
														<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor"/>
<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor"/>
<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor"/>

															</svg>
														</span>
														<!--end::Svg Icon-->
													</span>
													<input type="text" class="form-control form-control-solid" placeholder="Harga" name="harga" value="{{ $paket->harga }}" aria-label="Harga" aria-describedby="basic-addon1"/>
												</div>
											</div>
											</div>
											<!--end::Row-->
											
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<a href="/dashboard/paket" class="btn btn-light btn-active-light-primary me-2">Batal</a>
                                            
											<button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Simpan</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end:Form-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Post-->
