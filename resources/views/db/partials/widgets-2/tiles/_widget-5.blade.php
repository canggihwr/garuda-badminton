												
												<!--begin::Tiles Widget 5-->
												<a href="/dashboard/user" class="card bg-body h-150px">
													<!--begin::Body-->
													<div class="card-body d-flex flex-column justify-content-between">
														<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
														<span class="svg-icon svg-icon-dark svg-icon-2hx ms-n1 flex-grow-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
																<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<div class="d-flex flex-column">
															@if (auth()->user()->tipe_akun == 'Admin')
															<div class="text-dark fw-bolder fs-1 mb-0 mt-5">{{ $user }}</div>
															<div class="text-muted fw-bold fs-6">Jumlah Member</div>
															@else
															@foreach ($saya as $s)
																<input type="hidden" name="totalsaya" value="{{ $s->total }}">
															@endforeach
															<div class="text-dark fw-bolder fs-1 mb-0 mt-5">Rp.<span class="text-dark fw-bolder"  id="totsaya">0</span></div>
															<div class="text-muted fw-bold fs-6">Jumlah Transaksi Saya</div>
															@endif
														</div>
													</div>
													<!--end::Body-->
												</a>
												<!--end::Tiles Widget 5-->
												<script type="text/javascript">
													var tot1 = document.querySelectorAll('input[name=totalsaya]')
													var harga1 = 0
													for (var i = 0; i < tot1.length; i++) {
													harga1 = parseInt(harga1) + parseInt(tot1[i].value);
													document.getElementById("totsaya").innerHTML = harga1;
													}
													
													</script>