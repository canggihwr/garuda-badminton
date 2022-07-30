
						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-3">Sewa Lapangan</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Home</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">dashboard</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">sewa</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								
							</div>
							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Form-->
								<form id="" class="form d-flex flex-column flex-lg-row" action="/dashboard/penyewaan/add" method="POST">
									@csrf
									<!--begin::Aside column-->
									<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
										<!--begin::Order details-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Detail Penyewa</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<div class="d-flex flex-column gap-10">
													
													<!--begin::Input group-->
													<div class="fv-row">
														{{-- <!--begin::Label-->
														<label class="required form-label">Payment Method</label>
														<!--end::Label--> --}}
                                                        <!--begin::Label-->
														<label class="form-label">ID Pemesanan</label>
														<!--end::Label-->
														<!--begin::Auto-generated ID-->
														<div class="fw-bolder fs-3 mb-3">#13408</div>
														<!--end::Input-->
														<!--begin::Alert-->
                                                            <div class="alert bg-light-primary d-flex flex-column flex-sm-row p-5 mb-7">
                                                                
                                                                {{-- <!--begin::Wrapper-->
                                                                <div class="d-flex flex-column pe-0 pe-sm-10"> --}}
                                                                    
                                                                    <table class="table-fluid">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Nama</td>
                                                                                <td> : {{ auth()->user()->name }}</td>
                                                                            </tr>
																			<tr>
                                                                                <td>Email</td>
                                                                                <td> : {{ auth()->user()->email }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>No HP</td>
                                                                                <td> : {{ auth()->user()->no_hp }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Username</td>
                                                                                <td> : {{ auth()->user()->username }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Status</td>
                                                                                <td> : <span class="badge badge-primary"> {{ auth()->user()->tipe_akun }} </span> </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    
                                                                {{-- </div>
                                                                <!--end::Wrapper--> --}}
                                                            </div>
                                                            <!--end::Alert-->
													</div>
													<!--end::Input group-->
													
												</div>
											</div>
											<!--end::Card header-->
										</div>
										<!--end::Order details-->
									</div>
									<!--end::Aside column-->
									<!--begin::Main column-->
									<div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">
										<!--begin::Order details-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Booking Lapangan</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<div class="d-flex flex-column gap-10">
													<!--begin::Input group-->
													<div class="fv-row">
														<!--begin::Label-->
														<label class="required form-label">Pilih Lapangan</label>
														<!--end::Label-->
														<!--begin::Select2-->
														<select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih lapangan" name="lapangan_id" id="kt_ecommerce_edit_order_payment">
															@foreach ($lapangan as $l)
															<option value="{{ $l->id }}">{{ $l->nama }}</option>
															@endforeach
														</select>
														<!--end::Select2-->
													</div>
													<!--end::Input group-->
													
													<!--begin::Input group-->
													<div class="fv-row">
														<!--begin::Row-->
														<div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9">
															
															<!--begin::Col-->
															<div class="col">
																<!--begin::Label-->
															<label class="required form-label">Tanggal Main</label>
															<!--end::Label-->
															<div class="position-relative d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																<span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
																		<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
																		<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<input class="form-control form-control ps-12" name="tgl_main" placeholder="Pilih tanggal" id="kt_datepicker_1" />
															</div>
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col">
																<!--begin::Label-->
															<label class="required form-label">Waktu Main</label>
															<!--end::Label-->
															<!--begin::Editor-->
															<div class="position-relative d-flex align-items-center">
																<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
																<span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"/>
																		<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"/>
																		</svg>
																</span>
																<!--end::Svg Icon-->
																<input class="form-control form-control ps-12" name="waktu_main" placeholder="Pilih waktu" id="kt_datepicker_8" />
															</div>
															<!--end::Editor-->
															</div>
															<!--end::Col-->
															
														</div>
														<!--end::Row-->
																							

													</div>
													
													<!--begin::Input group-->
													<div>
														<!--begin::Label-->
														<label class="form-label">Pilih paket penyewaan</label>
														<!--end::Label-->
														@foreach ($paket as $p)
														<!--begin::Radio group-->
														<div data-kt-buttons="true">
															<!--begin::Radio button-->
															<label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start p-6 mb-5">
																<!--end::Description-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Radio-->
																	<div class="form-check form-check-custom form-check-solid form-check-primary me-6">
																		<input class="form-check-input" type="radio" name="paket_id" onchange="handleChange(this);" value="{{ $p->harga }}"/>
																		{{-- <input class="form-check-input" type="radio" name="paket_id" value="{{ $p->id }}"/> --}}
																	</div>
																	<!--end::Radio-->

																	<!--begin::Info-->
																	<div class="flex-grow-1">
																		<h2 class="d-flex align-items-center fs-4 fw-bolder flex-wrap">
																			{{ $p->nama }}
																		</h2>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Description-->

																<!--begin::Price-->
																<div class="ms-5">
																	<span class="mb-2">Rp</span>
																	<span class="fs-4 fw-bolder">
																		{{ $p->harga }}
																	</span>
																	<span class="fs-7 opacity-50">/
																		<span data-kt-element="period">{{ $p->lama }} Jam</span>
																	</span>
																</div>
																<!--end::Price-->
															</label>
															<!--end::Radio button-->
															
												
															
														@endforeach

														<script>
															function handleChange(src) {
															// alert(src.value);
															let result = document.querySelector('#result')
															result.textContent = src.value;
															}
														</script>

														

														</div>
														<!--end::Radio group-->
														
														<!--begin::Total price-->
														<div class="fw-bolder fs-3 mt-7" style="text-align: right">
															<div class="separator mb-6"></div>
															<!--begin::Input group-->
															<div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
																<!--begin::Label-->
																<label class="form-label">Total Harga</label>
																<!--end::Label-->
																<div class="mb-7">
																	<span class="fw-bolder fs-4 mt-1 ms-2">Rp.</span>
																	<span class="fw-bolder fs-3x" id="result">0.00</span>
																</div>
																
																<!--begin::Description-->
																<div class="text-inverse-light fs-8" style="text-align: left">*Silahkan memilih item di bawah jika ingin memesan peralatan bulu tangkis tambahan.</div>
																
																<!--end::Description-->
															</div>
															<!--end::Input group-->
											
														<!--end::Total price-->
														
													</div>
													<!--end::Input group-->
													<!--begin::Separator-->
													<div class="separator"></div>
													<!--end::Separator-->
													
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_edit_order_product_table">
														<!--begin::Table head-->
														<thead>
															<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																<th class="w-25px pe-2"></th>
																<th class="min-w-200px">Nama Item</th>
																<th class="min-w-90px text-center">Qty</th>
																<th class="min-w-100px text-end pe-5">Status</th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															@foreach ($peralatan as $item)
															<!--begin::Table row-->
															<tr>
																<!--begin::Checkbox-->
																<td>
																	<div class="form-check form-check-sm form-check-custom form-check-solid">
																		<input class="form-check-input" type="checkbox" value="1" />
																	</div>
																</td>
																<!--end::Checkbox-->
																<!--begin::Product=-->
																<td>
																	<div class="d-flex align-items-center" data-kt-ecommerce-edit-order-filter="product" data-kt-ecommerce-edit-order-id="product_1">
																		<!--begin::Thumbnail-->
																		<a href="#" class="symbol symbol-50px">
																			<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/1.gif);"></span>
																		</a>
																		<!--end::Thumbnail-->
																		<div class="ms-5">
																			<!--begin::Title-->
																			<a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bolder">{{ $item->nama }}</a>
																			<!--end::Title-->
																			<!--begin::Price-->
																			<div class="fw-bold fs-7">Harga: Rp.
																			<span data-kt-ecommerce-edit-order-filter="price">{{ $item->harga }}</span></div>
																			<!--end::Price-->
																		</div>
																	</div>
																</td>
																<!--end::Product=-->
																<td>
																	<!--begin::Dialer-->
																	<div class="position-relative w-md-90px" data-kt-dialer="true" data-kt-dialer-min="1" data-kt-dialer-max="9" data-kt-dialer-step="1" data-kt-dialer-prefix="" data-kt-dialer-decimals="">
																		<!--begin::Decrease control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																					<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Decrease control-->
																		<!--begin::Input control-->
																		<input type="text" class="form-control form-control border-0 ps-12" data-kt-dialer-control="input" placeholder="Jumlah" name="manageBudget" readonly="readonly" value="1" />
																		<!--end::Input control-->
																		<!--begin::Increase control-->
																		<button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
																			<span class="svg-icon svg-icon-1">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
																					<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
																					<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</button>
																		<!--end::Increase control-->
																	</div>
																	<!--end::Dialer-->
																</td>
																<!--begin::Qty=-->
																<td class="text-end pe-5" data-order="39">
																	@if($item->status == 'Tersedia')
																	<span class="fw-bolder ms-3"><span class="fw-bolder ms-3"><span class="badge badge-light-success ms-2 fs-7">{{ $item->status }}</span></span>
																	
																	@elseif($item->status == 'Tidak tersedia')
																	<span class="fw-bolder ms-3"><span class="fw-bolder ms-3"><span class="badge badge-light-danger ms-2 fs-7">{{ $item->status }}</span></span>
																	
																	@else
																	<span class="fw-bolder ms-3"><span class="fw-bolder ms-3"><span class="badge badge-light-warning ms-2 fs-7">{{ $item->status }}</span></span>
																	
																	@endif
																	
																	
																	

																</td>
																<!--end::Qty=-->
															</tr>
															<!--end::Table row-->	
															@endforeach													
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card header-->
										</div>
										<!--end::Order details-->
										
										<div class="d-flex justify-content-end">
											<!--begin::Button-->
											<a href="/dashboard/penyewaan" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Cancel</a>
											<!--end::Button-->

											<input type="hidden" class="form-control" name="kode" value="1340{{ auth()->user()->id }}" />
											<input type="hidden" class="form-control" name="user_id" value="{{ auth()->user()->id }}" />
											<input type="hidden" class="form-control" name="status" value="Menunggu Pembayaran" />


											<!--begin::Button-->
											<button type="submit" id="" class="btn btn-primary">
												<span class="indicator-label">Pesan</span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
									</div>
									<!--end::Main column-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Post-->
							
							
							
