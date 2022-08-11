
						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-1">Daftar Lapangan</h1>
									<!--end::Title-->
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
										<li class="breadcrumb-item text-gray-500">List Lapangan</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								
							</div>

							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Products-->
								<div class="card card-flush">
									

									<!--begin::Card header-->

									<div class="card-header align-items-center py-5 gap-2 gap-md-5" >
										
										<!--begin::Section-->
										<div class="mb-17" style="width: 100%">
											<!--begin::Content-->
											<div class="d-flex flex-stack mb-5 " >
												<!--begin::Title-->
												<h3 class="text-dark">Daftar Lapangan</h3>
												<!--end::Title-->
												@if(Auth()->user()->tipe_akun == 'Admin')
												<!--begin::Link-->
												<a href="/dashboard/lapangan/add" class="fs-6 fw-bold btn btn-secondary">Tambah Lapangan</a>
												<!--end::Link-->
												@endif
											</div>
											<!--end::Content-->
											@if(session()->has('success'))
											<div class="alert alert-success alert-dismissible fade show" role="alert">
												<!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr084.svg-->
												<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="currentColor"/>
												<path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="currentColor"/>
												</svg></span>
												<!--end::Svg Icon--> {{ session('success') }}
												<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
											</div>
											@endif
											<!--begin::Separator-->
											<div class="separator separator-dashed mb-9"></div>
											<!--end::Separator-->
											<!--begin::Row-->
											<div class="row g-10">
												<!--begin::Col-->
												
												<!--end::Col-->
												
												@foreach ($lapangan as $l)
												<!--begin::Col-->
												<div class="col-md-4">
													<!--begin::Hot sales post-->
													<div class="card-xl-stretch ms-md-6">
														<!--begin::Overlay-->
														<a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="img/fotolapangan/{{ $l->foto }}">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('img/fotolapangan/{{ $l->foto }}')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-2x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Overlay-->
														<!--begin::Body-->
														<div class="mt-5">
															<!--begin::Title-->
															<a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{ $l->nama }}</a>
															<!--end::Title-->
															<!--begin::Text-->
															<div class="fw-bold fs-5 text-gray-600 text-dark mt-3">{{ $l->deskripsi }}</div>
															<!--end::Text-->
															<!--begin::Text-->
															<div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
																@if(Auth()->user()->tipe_akun == 'Admin')
																<!--begin::Label-->
																<span class="badge border border-dashed fs-2 fw-bolder text-dark p-2">
																{{-- <span class="fs-6 fw-bold text-gray-400">$</span>25</span> --}}
																<!--end::Label-->
																<!--begin::Action-->
																<a href="/dashboard/lapangan/edit/{{ $l->id }}" class="btn btn-sm btn-primary" style="margin-right: 6px">Edit </a>
																<!--end::Action-->
																<!--begin::Action-->
																<a href="/dashboard/lapangan/hapus/{{ $l->id }}" class="btn btn-sm btn-danger">Hapus </a>
																<!--end::Action-->
																@endif
															</div>
															<!--end::Text-->
														</div>
														<!--end::Body-->
													</div>
													<!--end::Hot sales post-->
												</div>
												<!--end::Col-->
												@endforeach
											</div>
											<!--end::Row-->
										</div>
										<!--end::Section-->
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Post-->
