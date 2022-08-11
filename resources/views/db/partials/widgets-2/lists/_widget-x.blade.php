										
										<!--begin::List Widget 5-->
										<div class="card h-xl-100">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													
													<span class="fw-bolder mb-2 text-dark">Daftar Jadwal</span>
													<span class="text-muted fw-bold fs-7"></span>
												</h3>
												<div class="card-toolbar">
													<!--begin::Menu-->
													<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>

@include('db.partials.menus._menu-1')

													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-5">
												<!--begin::Timeline-->
												<div class="timeline-label">
													@foreach ($penyewaan as $p)
													<!--begin::Item-->
													<div class="timeline-item" style="white-space: nowrap">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6" >{{ $p->waktu_main }}</div>
														{{-- <div class="timeline-label fw-bolder text-gray-800 fs-6" >WITA</div> --}}
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="fw-mormal timeline-content gray-800 ps-3">Tanggal : {{ $p->tgl_main }}</div>
														<!--end::Text-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="fw-bolder text-gray-800">{{ $p->lapangan->nama }}</span>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
														
													@endforeach
													
												</div>
												<!--end::Timeline-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 5-->
										