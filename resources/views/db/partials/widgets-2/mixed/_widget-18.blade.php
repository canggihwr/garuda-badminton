										
										<!--begin::Mixed Widget 18-->
										<div class="card h-md-100">
											<!--begin::Beader-->
											<div class="card-header border-0 py-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder fs-3 mb-1">Penyewaan Lapangan</span>
													<span class="text-muted fw-bold fs-7">{{ $penyewaanx }} Penyewaan</span>
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
													
													
													
													<!--end::Menu-->
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body p-0 d-flex flex-column">
												<!--begin::Items-->
												<div class="card-px pt-5 pb-10 flex-grow-1">
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="db/media/icons/duotune/maps/map001.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Lapangan 1</a>
																<span class="text-muted fw-bold d-block fs-7">{{ $l1 }}x penyewaan</span>
															</div>
															@foreach ($h1 as $hr1)
																<input type="hidden" name="total1" value="{{ $hr1->total }}">
															@endforeach
															<span class="badge badge-light fw-bolder my-2">+Rp. <span id="tot1">0</span> </span>
															
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="db/media/icons/duotune/maps/map001.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Lapangan 2</a>
																<span class="text-muted fw-bold d-block fs-7">{{ $l2 }}x penyewaan</span>
															</div>
															@foreach ($h2 as $hr2)
																<input type="hidden" name="total2" value="{{ $hr2->total }}">
															@endforeach
															<span class="badge badge-light fw-bolder my-2">+Rp. <span id="tot2">0</span></span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-sm-center mb-7">
														<!--begin::Symbol-->
														<div class="symbol symbol-50px me-5">
															<span class="symbol-label">
																<img src="db/media/icons/duotune/maps/map001.svg" class="h-50 align-self-center" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Section-->
														<div class="d-flex align-items-center flex-row-fluid flex-wrap">
															<div class="flex-grow-1 me-2">
																<a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bolder">Lapangan 3</a>
																<span class="text-muted fw-bold d-block fs-7">{{ $l3 }}x penyewaan</span>
															</div>
															@foreach ($h3 as $hr3)
																<input type="hidden" name="total3" value="{{ $hr3->total }}">
															@endforeach
															<span class="badge badge-light fw-bolder my-2">+Rp. <span id="tot3">0</span></span>
														</div>
														<!--end::Section-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
												<!--begin::Chart-->
												<div id="kt_charts_mixed_widget_18_chart" class="card-rounded-bottom" style="height: 150px"></div>
												<!--end::Chart-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::Mixed Widget 18-->
										
										<script type="text/javascript">
											var tot1 = document.querySelectorAll('input[name=total1]')
											var harga1 = 0
											for (var i = 0; i < tot1.length; i++) {
											harga1 = parseInt(harga1) + parseInt(tot1[i].value);
											document.getElementById("tot1").innerHTML = harga1;
											}
											var tot2 = document.querySelectorAll('input[name=total2]')
											var harga2 = 0
											for (var i = 0; i < tot2.length; i++) {
											harga2 = parseInt(harga2) + parseInt(tot2[i].value);
											document.getElementById("tot2").innerHTML = harga2;
											}
											var tot3 = document.querySelectorAll('input[name=total3]')
											var harga3 = 0
											for (var i = 0; i < tot3.length; i++) {
											harga3 = parseInt(harga3) + parseInt(tot3[i].value);
											document.getElementById("tot3").innerHTML = harga3;
											}
											</script>