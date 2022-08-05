
						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
                            <!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-3">Data Penyewaan Lapangan</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">Transaksi</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">Data Penyewaan</li>
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
										<a href="#" class="btn btn-light fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Filter</a>
										<!--begin::Menu 1-->
										<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_62444cd366c6e">
											<!--begin::Header-->
											<div class="px-7 py-5">
												<div class="fs-5 text-dark fw-bolder">Filter Options</div>
											</div>
											<!--end::Header-->
											<!--begin::Menu separator-->
											<div class="separator border-gray-200"></div>
											<!--end::Menu separator-->
											<!--begin::Form-->
											<div class="px-7 py-5">
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Status:</label>
													<!--end::Label-->
													<!--begin::Input-->
													<div>
														<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_62444cd366c6e" data-allow-clear="true">
															<option></option>
															<option value="1">Dikonfirmasi</option>
															<option value="2">Menunggu Pembayaran</option>
															<option value="2">Menunggu Konfirmasi</option>
															<option value="2">Batal</option>
														</select>
													</div>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Member Type:</label>
													<!--end::Label-->
													<!--begin::Options-->
													<div class="d-flex">
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
															<input class="form-check-input" type="checkbox" value="1" />
															<span class="form-check-label">Author</span>
														</label>
														<!--end::Options-->
														<!--begin::Options-->
														<label class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="2" checked="checked" />
															<span class="form-check-label">Customer</span>
														</label>
														<!--end::Options-->
													</div>
													<!--end::Options-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10">
													<!--begin::Label-->
													<label class="form-label fw-bold">Notifications:</label>
													<!--end::Label-->
													<!--begin::Switch-->
													<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
														<label class="form-check-label">Enabled</label>
													</div>
													<!--end::Switch-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
													<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
												</div>
												<!--end::Actions-->
											</div>
											<!--end::Form-->
										</div>
										<!--end::Menu 1-->
										<!--end::Menu-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Button-->
									<a href="#" class="btn btn-dark fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Cetak Data</a>
									<!--end::Button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Products-->
								<div class="card card-flush">
									
									<!--begin::Card body-->
									<div class="card-body pt-0">
										
										
										<div class="card card-p-0 card-flush">
											<div class="card-header align-items-center py-5 gap-2 gap-md-5">
											 <div class="card-title">
											  <!--begin::Search-->
											  <div class="d-flex align-items-center position-relative my-1">
											   <span class="svg-icon svg-icon-1 position-absolute ms-4"><i class="bi bi-search"></i></span>
											   <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Cari Data" />
											  </div>
											  <!--end::Search-->
											  <!--begin::Export buttons-->
											  <div id="kt_datatable_example_1_export" class="d-none"></div>
											  <!--end::Export buttons-->
											 </div>
											 <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
											  <!--begin::Export dropdown-->
											  <button type="button" class="btn btn-light-secondary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
											  <span class="svg-icon svg-icon-1 position-absolute ms-4"></span>
											  Cetak Data
											  </button>
											  <!--begin::Add product-->
											<a href="/dashboard/penyewaan/add" class="btn btn-primary">Tambah Data</a>
											<!--end::Add product-->
											  <!--begin::Menu-->
											  <div id="kt_datatable_example_1_export_menu" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-200px py-4" data-kt-menu="true">
											   <!--begin::Menu item-->
											   <div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="copy">
												Copy to clipboard
												</a>
											   </div>
											   <!--end::Menu item-->
											   <!--begin::Menu item-->
											   <div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="excel">
												Export as Excel
												</a>
											   </div>
											   <!--end::Menu item-->
											   <!--begin::Menu item-->
											   <div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="csv">
												Export as CSV
												</a>
											   </div>
											   <!--end::Menu item-->
											   <!--begin::Menu item-->
											   <div class="menu-item px-3">
												<a href="#" class="menu-link px-3" data-kt-export="pdf">
												Export as PDF
												</a>
											   </div>
											   <!--end::Menu item-->
											  </div>
											  <!--end::Menu-->
											  <!--end::Export dropdown-->
											 </div>
											</div>
											<div class="card-body">
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
												@if(session()->has('fail'))
												<div class="alert alert-danger alert-dismissible fade show" role="alert">
													<!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr015.svg-->
													<span class="svg-icon svg-icon-danger svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M12 10.6L14.8 7.8C15.2 7.4 15.8 7.4 16.2 7.8C16.6 8.2 16.6 8.80002 16.2 9.20002L13.4 12L12 10.6ZM10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 8.99999 16.4 9.19999 16.2L12 13.4L10.6 12Z" fill="currentColor"/>
														<path d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM13.4 12L16.2 9.20001C16.6 8.80001 16.6 8.19999 16.2 7.79999C15.8 7.39999 15.2 7.39999 14.8 7.79999L12 10.6L9.2 7.79999C8.8 7.39999 8.2 7.39999 7.8 7.79999C7.4 8.19999 7.4 8.80001 7.8 9.20001L10.6 12L7.8 14.8C7.4 15.2 7.4 15.8 7.8 16.2C8 16.4 8.3 16.5 8.5 16.5C8.7 16.5 9 16.4 9.2 16.2L12 13.4L14.8 16.2C15 16.4 15.3 16.5 15.5 16.5C15.7 16.5 16 16.4 16.2 16.2C16.6 15.8 16.6 15.2 16.2 14.8L13.4 12Z" fill="currentColor"/>
														</svg></span>
														<!--end::Svg Icon--> {{ session('fail') }}
													<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
												</div>
												@endif
											 <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="kt_datatable_example_1">
											  <thead>
											   <!--begin::Table row-->
											   <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase">
												<th style="white-space: nowrap" class="min-w-50px">ID Sewa</th>
												<th style="white-space: nowrap" class="min-w-100px">Nama Penyewa</th>
												<th style="white-space: nowrap" class="min-w-90px">Lapangan</th>
												<th style="white-space: nowrap" class="min-w-90px">Tanggal Main</th>
												<th style="white-space: nowrap" class="min-w-30px">Waktu Main</th>
												<th style="white-space: nowrap; text-align: center" class="min-w-30px">Paket</th>
												<th style="white-space: nowrap; text-align: center" class="text-center min-w-50px">Status</th>
												<th style="white-space: nowrap" class="text-center min-w-145px">Bukti</th>
												<th style="white-space: nowrap" class="text-end min-w-100px pe-5">Total</th>
												<th style="white-space: nowrap" class="text-center min-w-100px">Actions</th>
											   </tr>
											   <!--end::Table row-->
											  </thead>
											  <tbody class="fw-bold text-gray-600">
												@foreach ($penyewaan as $p)
												<tr class="odd">
												 <td style="white-space: nowrap">
												  <a href="/dashboard/penyewaan/detail/{{ $p->id }}" class="text-dark text-hover-primary">#{{ $p->kode }}{{ $p->id }}</a>
												 </td>
												 <td style="white-space: nowrap">
												  <a href="/dashboard/penyewaan/detail/{{ $p->id }}" class="text-dark text-hover-primary">{{ $p->user->name }}</a>
												 </td>
												 <td style="white-space: nowrap">
													<a href="/dashboard/penyewaan/detail/{{ $p->id }}" class="text-dark text-hover-primary">{{ $p->lapangan->nama }}</a>
												   </td>
												 <td style="white-space: nowrap; text-align: center" data-order="2022-03-10T14:40:00+05:00">{{ $p->tgl_main }}</td>
												 <td style="white-space: nowrap; text-align: center" data-order="2022-03-10T14:40:00+05:00">{{ $p->waktu_main }}</td>
												 <td style="white-space: nowrap" data-order="2022-03-10T14:40:00+05:00">{{ $p->paket->nama }}</td>
												 <td style="white-space: nowrap; text-align: center">
													@if($p->status == 'Menunggu Pembayaran')
													<span class="badge badge-secondary">{{ $p->status }}</span>
															
													@elseif($p->status == 'Menunggu Konfirmasi')
													<span class="badge badge-warning">{{ $p->status }}</span>
															

													@elseif($p->status == 'Dikonfirmasi')
													<span class="badge badge-success">{{ $p->status }}</span>
															
																
													@else
													<span class="badge badge-primary">{{ $p->status }}</span>
															
					
													@endif
												 </td>
												   
												 @if ($p->bukti == '')
												 <td style="white-space: nowrap; text-align: center" class="text-center">
													<div class="d-flex align-items-center text-center">
													<a href="/dashboard/penyewaan/detail/{{ $p->id }}" class="symbol symbol-50px">
													<span class="symbol-label" style="background-image:url(db/media/svg/files/blank-image.svg);"></span>
													</a>
													</div>
												</td>
												@else
													<td style="white-space: nowrap" class="text-center"><div class="d-flex align-items-center text-center">
														<a href="/dashboard/penyewaan/detail/{{ $p->id }}" class="symbol symbol-50px">
															<span class="symbol-label" style="background-image:url(img/buktipembayaran/{{ $p->bukti }});"></span>
														</a>
													</div></td>
												@endif
												 <td style="white-space: nowrap" class="text-end">Rp.{{ $p->total }}</td>
												 @if (auth()->user()->tipe_akun == 'Admin')
													<td style="white-space: nowrap" class="text-center">
													<span class="btn btn-secondary btn-sm text-grey-800"><a href="/dashboard/penyewaan/detail/{{ $p->id }}" style="text-decoration: none;color: inherit;"><i class="text-grey-900 bi bi-eye-fill"></i> detail</a></span>
													<span class="btn btn-danger btn-sm text-white"><a href="/dashboard/penyewaan/batal/{{ $p->id }}" style="text-decoration: none;color: inherit;"><i class="text-white bi bi-trash"></i> hapus</a></span>
													
													</td>
												 @else 
												 <td style="white-space: nowrap" class="text-center ">
													@if ($p->status == 'Dikonfirmasi')
													<span class="badge badge-secondary badge-square text-grey-900"><a href="/dashboard/penyewaan/detail/{{ $p->id }}" style="text-decoration: none;color: inherit;"><i class="text-grey-900 bi bi-eye-fill"></i> detail</a></span>
													@else
													<span class="badge badge-secondary badge-square text-grey-900"><a href="/dashboard/penyewaan/detail/{{ $p->id }}"><i class="text-grey-900 bi bi-eye-fill"></i></a></span>
													@endif
													@if ($p->status == 'Menunggu Pembayaran')
													<span class="badge badge-success badge-square text-white"><a href="/dashboard/penyewaan/bayar/{{ $p->id }}"><i class="text-white bi bi-currency-dollar"></i></a></span>	
													@endif
													@if ($p->status == 'Dikonfirmasi')

													@else
													<span class="badge badge-danger badge-square text-white"><a href="/dashboard/penyewaan/batal/{{ $p->id }}"><i class="text-white bi bi-x"></i></a></span>
													@endif
												</td>
												 @endif
												 

												</tr>
													
												@endforeach
							
											  </tbody>
											 </table>
											</div>
										   </div>

									</div>
									<!--end::Card body-->
								</div>
								<!--end::Products-->
							</div>
							<!--end::Post-->