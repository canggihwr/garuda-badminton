
						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-1">Daftar Peralatan</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">Peralatan</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">List Peralatan</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								<!--begin::Actions-->
								<div class="d-flex align-items-center py-2 py-md-1">

									@if(Auth()->user()->tipe_akun == 'Admin')
									<a href="/dashboard/peralatan/add" class="btn btn-success fw-bolder">Tambah Peralatan</a>
									@endif
								</div>
								<!--end::Actions-->
							</div>

							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Products-->
								<div class="card card-flush">
									<!--begin::Card header-->
									<div class="card-header align-items-center py-5 gap-2 gap-md-5">
										<!--begin::Card title-->
										<div class="card-title">
											<!--begin::Search-->
											<div class="d-flex align-items-center position-relative my-1">
												<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
												<span class="svg-icon svg-icon-1 position-absolute ms-4">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Cari Peralatan" />
											</div>
											<!--end::Search-->
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											<div class="w-100 mw-150px">
												<!--begin::Select2-->
												<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
													<option></option>
													<option value="All">All</option>
													<option value="Tersedia">Tersedia</option>
													<option value="Restock">Restock</option>
													<option value="Tidak tersedia">Tidak Tersedia</option>
												</select>
												<!--end::Select2-->
											</div>
											<!--begin::Add product-->
											
											<!--end::Add product-->
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body pt-0">
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
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-200px">Peralatan</th>
													<th class="text-end min-w-100px">Harga</th>
													<th class="text-end min-w-100px">Status</th>
													<th class="text-end min-w-100px">Tanggal Restock</th>
													<th class="text-end min-w-70px">Deskripsi</th>
													@if(Auth()->user()->tipe_akun == 'Admin')
													<th class="text-end min-w-70px">Actions</th>
													@endif
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												<!--begin::Table row-->
												@foreach ($peralatan as $p)
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="/dashboard/peralatan/edit/{{ $p->id }}" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url('img/fotoperalatan/{{ $p->foto }}');"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="/dashboard/peralatan/edit/{{ $p->id }}" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">{{ $p->nama }}</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Price=-->
													<td class="text-end pe-0">
														<span class="fw-bolder text-dark">Rp.{{ $p->harga }}</span>
													</td>
													<!--end::Price=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Published">
														@if($p->status == 'Tersedia')
														<!--begin::Badges-->
														<div class="badge badge-light-success">{{ $p->status }}</div>
														<!--end::Badges-->
														@elseif($p->status == 'Tidak tersedia')
														<!--begin::Badges-->
														<div class="badge badge-light-danger">{{ $p->status }}</div>
														<!--end::Badges-->
														@else
														<!--begin::Badges-->
														<div class="badge badge-light-warning">{{ $p->status }}</div>
														<!--end::Badges-->
														@endif
														
													</td>
													<!--end::Status=-->
													<!--begin::Qty=-->
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bolder ms-3">{{ $p->restock }}</span>
													</td>
													<!--end::Qty=-->

													<!--begin::SKU=-->
													<td class="text-end pe-0">
														<span class="fw-bolder">{{ $p->deskripsi }}</span>
													</td>
													<!--end::SKU=-->
													<!--begin::Action=-->
													@if(Auth()->user()->tipe_akun == 'Admin')
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="/dashboard/peralatan/edit/{{ $p->id }}" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="/dashboard/peralatan/hapus/{{ $p->id }}" class="menu-link px-3" >Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													@endif
													<!--end::Action=-->
												</tr>
												@endforeach
												
												{{-- <!--end::Table row-->

												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/1.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Shuttlecock</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Price=-->
													<td class="text-end pe-0">
														<span class="fw-bolder text-dark">Rp.5,000</span>
													</td>
													<!--end::Price=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-success">Tersedia</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
													<!--begin::Qty=-->
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bolder ms-3">-</span>
													</td>
													<!--end::Qty=-->

													<!--begin::SKU=-->
													<td class="text-end pe-0">
														<span class="fw-bolder">Settlecock ready banyak</span>
													</td>
													<!--end::SKU=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/3.png);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Raket</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Price=-->
													<td class="text-end pe-0">
														<span class="fw-bolder text-dark">Rp.15,000</span>
													</td>
													<!--end::Price=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-warning">Restock</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
													<!--begin::Qty=-->
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bolder ms-3">12/07/2022</span>
													</td>
													<!--end::Qty=-->

													<!--begin::SKU=-->
													<td class="text-end pe-0">
														<span class="fw-bolder">Restock 2 hari lagi ready </span>
													</td>
													<!--end::SKU=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex align-items-center">
															<!--begin::Thumbnail-->
															<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(db/media//stock/ecommerce/69.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder" data-kt-ecommerce-product-filter="product_name">Sepatu Sport</a>
																<!--end::Title-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Price=-->
													<td class="text-end pe-0">
														<span class="fw-bolder text-dark">Rp.25,000</span>
													</td>
													<!--end::Price=-->
													<!--begin::Status=-->
													<td class="text-end pe-0" data-order="Published">
														<!--begin::Badges-->
														<div class="badge badge-light-danger">Tidak Tersedia</div>
														<!--end::Badges-->
													</td>
													<!--end::Status=-->
													<!--begin::Qty=-->
													<td class="text-end pe-0" data-order="18">
														<span class="fw-bolder ms-3">-</span>
													</td>
													<!--end::Qty=-->

													<!--begin::SKU=-->
													<td class="text-end pe-0">
														<span class="fw-bolder">Tidak tersedia untuk saat ini </span>
													</td>
													<!--end::SKU=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-5 m-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo14/dist/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row--> --}}
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
										
									</div>
									<!--end::Card body-->
									
								</div>
								<!--end::Products-->
							</div>
							<!--end::Post-->
