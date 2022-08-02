						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-3">Detail Pemesanan</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">sewa</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">detail</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								
							</div>
							<!--end::Toolbar-->
                            <!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Order details page-->
								<div class="d-flex flex-column gap-7 gap-lg-10">
									
									<!--begin::Tab content-->
									<div class="tab-content">
										<!--begin::Tab pane-->
										<div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">
											
												<!--begin::Product List-->
												<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
													<!--begin::Card header-->
													<div class="card-header">
														<div class="card-title">
															<h2>Detail Pemesanan 
																@if($penyewaan->status == 'Menunggu Pembayaran')
																<span class="badge badge-secondary ms-2 fs-6">{{ $penyewaan->status }}</span>
														
																@elseif($penyewaan->status == 'Menunggu Konfirmasi')
																<span class="badge badge-light-warning ms-2 fs-6">{{ $penyewaan->status }}</span>

																@elseif($penyewaan->status == 'Dikonfirmasi')
																<span class="badge badge-light-success ms-2 fs-6">{{ $penyewaan->status }}</span>
																
																@else
																<span class="badge badge-light-primary ms-2 fs-6">{{ $penyewaan->status }}</span>
																
																@endif
															</h2>
														</div>
													</div>
													<!--end::Card header-->
                                                    <!--begin::Orders-->
											<div class="d-flex flex-column gap-7 gap-lg-10">
												<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
													<!--begin::Payment address-->
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														
                                                        
														<!--begin::Card body-->
											<div class="card-body pt-0 " style="margin-left: 3rem">
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px mb-0 mt-0" >
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															<!--begin::Customer name-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
																			<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Nama Penyewa</div>
																</td>
																<td class="fw-bolder text-end">
																	<div class="d-flex align-items-center justify-content-end">
																		<!--begin:: Avatar -->
																		<div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
																			<a href="/dashboard/penyewaan">
																				<div class="symbol-label">
																					<img src="db/media/avatars/blank.png" alt="" class="w-100" />
																				</div>
																			</a>
																		</div>
																		<!--end::Avatar-->
																		<!--begin::Name-->
																		<a href="/dashboard/penyewaan" class="text-gray-600 text-hover-primary">{{ $penyewaan->user->name }}</a>
																		<!--end::Name-->
																	</div>
																</td>
															</tr>
															<!--end::Customer name-->
															
															<!--begin::Date-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z" fill="currentColor" />
																			<path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->No HP</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->user->no_hp }}</td>
															</tr>
															<!--end::Date-->

                                                            <!--begin::Customer email-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor" />
																			<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Lapangan</div>
																</td>
																<td class="fw-bolder text-end">
																	<a class="text-gray-600 text-hover-primary">{{ $penyewaan->lapangan->nama }}</a>
																</td>
															</tr>
															<!--end::Payment method-->

															<!--begin::Date-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/files/fil002.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
																			<path opacity="0.3" d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z" fill="currentColor" />
																			<path d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Tanggal sewa</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->tgl_main }}</td>
															</tr>
															<!--end::Date-->
															<!--begin::Date-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm006.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"/>
                                                                            <path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"/>
                                                                            </svg>
																	</span>
																	<!--end::Svg Icon-->Waktu sewa</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->waktu_main }}</td>
															</tr>
															<!--end::Date-->
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card body-->
													</div>
													<!--end::Payment address-->
													<!--begin::Shipping address-->
													<div class="card card-flush py-4 flex-row-fluid overflow-hidden">
														
														
														<!--begin::Card body-->
											<div class="card-body pt-0 " style="margin-right: 3rem">
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px  mb-0 mt-0">
														<!--begin::Table body-->
														<tbody class="fw-bold text-gray-600">
															


															<!--begin::Payment method-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr017.svg-->
																	<span class="svg-icon svg-icon-2 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M11 13H7C6.4 13 6 12.6 6 12C6 11.4 6.4 11 7 11H11V13ZM17 11H13V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="currentColor"/>
																		<path d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM17 11H13V7C13 6.4 12.6 6 12 6C11.4 6 11 6.4 11 7V11H7C6.4 11 6 11.4 6 12C6 12.6 6.4 13 7 13H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V13H17C17.6 13 18 12.6 18 12C18 11.4 17.6 11 17 11Z" fill="currentColor"/>
																		</svg></span>
																		<!--end::Svg Icon-->
																	Paket
																</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->paket->nama }}
																</td>
															</tr>
															<!--end::Payment method-->

															<!--begin::Payment method-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
																	<span class="svg-icon svg-icon-2 me-2">
																		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																			<path opacity="0.3" d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z" fill="currentColor" />
																			<path opacity="0.3" d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z" fill="currentColor" />
																			<path d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z" fill="currentColor" />
																		</svg>
																	</span>
																	<!--end::Svg Icon-->Metode Pembayaran</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->metode }}
																<img src="v2/img/gopay.png" class="w-20px ms-2" /></td>
															</tr>
															<!--end::Payment method-->

															<!--begin::Payment method-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: assets/media/icons/duotune/finance/fin003.svg-->
																	<span class="svg-icon svg-icon-2 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M20 18H4C3.4 18 3 17.6 3 17V7C3 6.4 3.4 6 4 6H20C20.6 6 21 6.4 21 7V17C21 17.6 20.6 18 20 18ZM12 8C10.3 8 9 9.8 9 12C9 14.2 10.3 16 12 16C13.7 16 15 14.2 15 12C15 9.8 13.7 8 12 8Z" fill="currentColor"/>
																		<path d="M18 6H20C20.6 6 21 6.4 21 7V9C19.3 9 18 7.7 18 6ZM6 6H4C3.4 6 3 6.4 3 7V9C4.7 9 6 7.7 6 6ZM21 17V15C19.3 15 18 16.3 18 18H20C20.6 18 21 17.6 21 17ZM3 15V17C3 17.6 3.4 18 4 18H6C6 16.3 4.7 15 3 15Z" fill="currentColor"/>
																		</svg></span>
																		<!--end::Svg Icon-->
																		Tipe Pembayaran</div>
																</td>
																<td class="fw-bolder text-end">{{ $penyewaan->tipe }}
																</td>
															</tr>
															<!--end::Payment method-->

															<!--begin::Payment method-->
															<tr>
																<td class="text-gray-800">
																	<div class="d-flex align-items-center">
																	<!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil025.svg-->
																	<span class="svg-icon svg-icon-2 me-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor"/>
																		<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor"/>
																		<path d="M10.3629 14.0084L8.92108 12.6429C8.57518 12.3153 8.03352 12.3153 7.68761 12.6429C7.31405 12.9967 7.31405 13.5915 7.68761 13.9453L10.2254 16.3488C10.6111 16.714 11.215 16.714 11.6007 16.3488L16.3124 11.8865C16.6859 11.5327 16.6859 10.9379 16.3124 10.5841C15.9665 10.2565 15.4248 10.2565 15.0789 10.5841L11.4631 14.0084C11.1546 14.3006 10.6715 14.3006 10.3629 14.0084Z" fill="currentColor"/>
																		</svg></span>
																		<!--end::Svg Icon-->
																	Bukti Pembayaran</div>
																</td>
																
																<td class="fw-bolder text-end"><a href="#" class="btn btn-sm btn-success " data-bs-toggle="modal" data-bs-target="#kt_modal_1"><i class="fas fa-envelope-open-text fs-4 me-2"></i> Cek</a>
																</td>

															</tr>
															<!--end::Payment method-->

															<!--begin::Subtotal-->
															<tr>
																<td class=" fs-5 text-dark text-end">Harga Sewa Lapangan</td>
																<td class=" fs-3 fw-boldest text-dark text-end">Rp.{{ $penyewaan->paket->harga }}</td>
															</tr>
															<!--end::Subtotal-->
															
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
											</div>
											<!--end::Card body-->
													</div>
													<!--end::Shipping address-->
												</div>
                                                
													<!--begin::Card body-->
													<div class="card-body pt-0">
														                                                       
														<div class="table-responsive" style="margin-left: 3rem; margin-right: 3rem" >
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																		<th class="min-w-175px">Peralatan</th>
																		<th class="min-w-70px text-end">Qty</th>
																		<th class="min-w-100px text-end">Harga</th>
																		<th class="min-w-100px text-end">Total</th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																{{-- <tbody class="fw-bold text-gray-600">
																	<!--begin::Products-->
																	<tr>
																		<!--begin::Product-->
																		<td>
																			<div class="d-flex align-items-center">
																				<!--begin::Thumbnail-->
																				<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																					<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/1.gif);"></span>
																				</a>
																				<!--end::Thumbnail-->
																				<!--begin::Title-->
																				<div class="ms-5">
																					<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bolder text-gray-600 text-hover-primary">Shuttlecock</a>
																					<div class="fs-7 text-muted">tambah beli shuttlecock</div>
																				</div>
																				<!--end::Title-->
																			</div>
																		</td>
																		<!--end::Product-->
																		<!--begin::Quantity-->
																		<td class="text-end">2</td>
																		<!--end::Quantity-->
																		<!--begin::Price-->
																		<td class="text-end">Rp.1200.00</td>
																		<!--end::Price-->
																		<!--begin::Total-->
																		<td class="text-end">Rp.2400.00</td>
																		<!--end::Total-->
																	</tr>
																	<tr>
																		<!--begin::Product-->
																		<td>
																			<div class="d-flex align-items-center">
																				<!--begin::Thumbnail-->
																				<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																					<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/3.gif);"></span>
																				</a>
																				<!--end::Thumbnail-->
																				<!--begin::Title-->
																				<div class="ms-5">
																					<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="fw-bolder text-gray-600 text-hover-primary">Raket</a>
																					<div class="fs-7 text-gray-800">tambah sewa raket</div>
																				</div>
																				<!--end::Title-->
																			</div>
																		</td>
																		<!--end::Product-->
																		<!--begin::Quantity-->
																		<td class="text-end">1</td>
																		<!--end::Quantity-->
																		<!--begin::Price-->
																		<td class="text-end">Rp.24.000</td>
																		<!--end::Price-->
																		<!--begin::Total-->
																		<td class="text-end">Rp.24.000</td>
																		<!--end::Total-->
																	</tr>
																	<!--end::Products-->
																</tbody> --}}
																<!--end::Table head-->
															</table>
															<!--end::Table-->
															<!--begin::Table-->
															<table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
																<!--begin::Table head-->
																<thead>
																	<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
																		<th class="min-w-175px"></th>
																		<th class="min-w-70px text-end"></th>
																		<th class="min-w-100px text-end"></th>
																		<th class="min-w-100px text-end"></th>
																	</tr>
																</thead>
																<!--end::Table head-->
																<!--begin::Table body-->
																<tbody class="fw-bold text-gray-600">
																																
																	<!--begin::Subtotal-->
																	<tr>
																		<td colspan="3" class="text-end">Harga Peralatan</td>
																		<td class="text-end">Rp.0.00</td>
																	</tr>
																	<!--end::Subtotal-->
																	
																	<!--begin::Grand total-->
																	<tr>
																		<td colspan="3" class="fs-4 text-dark text-end">Total Bayar</td>
																		<td class="text-dark fs-2 fw-boldest text-end">Rp. {{ $penyewaan->paket->harga }}</td>
																	</tr>
																	<!--end::Grand total-->
																</tbody>
																<!--end::Table head-->
															</table>
															<!--end::Table-->
															
															<div>
																
	
															</div>
														</div>
                                                        <div class="mt-15" style="text-align: right">
                                                            <a href="/dashboard/penyewaan" class="btn btn-light me-5 mb-3">Kembali</a>
															@if($penyewaan->status == 'Menunggu Pembayaran')
															<a href="/dashboard/penyewaan/bayar/{{ $penyewaan->id }}" class="btn btn-success">Lanjut Bayar</a>
                                                            @endif
															@if ($penyewaan->status == 'Menunggu Konfirmasi')
																@if (auth()->user()->tipe_akun == 'Admin')
																<form action="/dashboard/penyewaan/konfirmasi/{{ $penyewaan->id }}" method="POST">
																	@csrf
																<input type="hidden" name="status" value="Dikonfirmasi">
																<input type="hidden" name="getid" value="{{ $penyewaan->id }}">

																<button type="submit" class="btn btn-success">
																	Konfirmasi Pembayaran
																</button>
																</form>
																@endif
																
															@endif
                                                        </div>
													</div>
													@if($penyewaan->bukti == '')
													<div class="modal fade" tabindex="-1" id="kt_modal_1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Bukti Pembayaran</h5>
													
																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>
													
																<div class="modal-body">
																	<!--begin::Image-->
																	<div class="mt-5 mb-10 text-center">
																		<p> Bukti pembayaran tidak ada </p>
																	</div>
													
																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
																	
																</div>
															</div>
														</div>
													</div>
													@else
													<div class="modal fade" tabindex="-1" id="kt_modal_1">
														<div class="modal-dialog">
															<div class="modal-content">
																<div class="modal-header">
																	<h5 class="modal-title">Bukti Pembayaran</h5>
													
																	<!--begin::Close-->
																	<div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
																		<span class="svg-icon svg-icon-2x"></span>
																	</div>
																	<!--end::Close-->
																</div>
													
																<div class="modal-body">
																	<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-550px" style="background-image:url('img/buktipembayaran/{{ $penyewaan->bukti }}')"></div>
															<!--end::Image-->
																</div>
													
																<div class="modal-footer">
																	<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
																	@if ($penyewaan->status == 'Menunggu Konfirmasi')
																@if (auth()->user()->tipe_akun == 'Admin')
																<form action="/dashboard/penyewaan/konfirmasi/{{ $penyewaan->id }}" method="POST">
																	@csrf
																<input type="hidden" name="status" value="Dikonfirmasi">
																<input type="hidden" name="getid" value="{{ $penyewaan->id }}">

																<button type="submit" class="btn btn-success">
																	Konfirmasi Pembayaran
																</button>
																</form>
																@endif
																
															@endif
																</div>
															</div>
														</div>
													</div>
													@endif
													<!--end::Card body-->
													
												</div>
												<!--end::Product List-->
											</div>
											<!--end::Orders-->
										</div>
										<!--end::Tab pane-->
									</div>
									<!--end::Tab content-->
								</div>
								<!--end::Order details page-->
							</div>
							<!--end::Post-->
							