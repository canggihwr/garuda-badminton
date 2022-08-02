
						
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
										<li class="breadcrumb-item text-gray-600">Lapangan</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">Tambah lapangan</li>
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
									<a href="#" class="btn btn-success fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Tambah</a>
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
										<div class="card-title fs-3 fw-bolder">Tambah Lapangan</div>
										<!--end::Card title-->
									</div>
									<!--end::Card header-->
									<!--begin::Form-->
									<form id="kt_project_settings_form" class="form" action="/dashboard/lapangan/add" method="POST" enctype="multipart/form-data">
										@csrf
										<!--begin::Card body-->
										<div class="card-body p-9">
											<!--begin::Row-->
											<div class="row mb-5">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Foto Lapangan</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('db/media/svg/files/blank-image.svg')">
														<!--begin::Preview existing avatar-->
														<div class="image-input-wrapper w-225px h-225px bgi-position-center"></div>
														<!--end::Preview existing avatar-->
														<!--begin::Label-->
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Upload foto">
															<i class="bi bi-pencil-fill fs-7"></i>
															<!--begin::Inputs-->
															<input class="form-control" type="file" name="foto" accept=".png, .jpg, .jpeg" />
															<input type="hidden" name="avatar_remove" />
															<!--end::Inputs-->
														</label>
														<!--end::Label-->
														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->
														<!--begin::Remove-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->
													<!--begin::Hint-->
													<div class="form-text">Upload file type: png, jpg, jpeg.</div>
													<!--end::Hint-->
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Nama Lapangan</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<input type="text" class="form-control form-control-solid" name="nama" value="" />
												</div>
											</div>
											<!--end::Row-->
											
											<!--begin::Row-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Deskripsi Lapangan</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9 fv-row">
													<textarea name="deskripsi" class="form-control form-control-solid h-100px"></textarea>
												</div>
												<!--begin::Col-->
											</div>
											<!--end::Row-->
											
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-xl-3">
													<div class="fs-6 fw-bold mt-2 mb-3">Status Lapangan</div>
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-xl-9">
													<div class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" id="status" name="status" checked="checked" />
														<label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Aktif</label>
													</div>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<a href="/dashboard/lapangan" class="btn btn-light btn-active-light-primary me-2">Batal</a>
                                            
											<button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Simpan</button>
										</div>
										<!--end::Card footer-->
									</form>
									<!--end:Form-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Post-->
