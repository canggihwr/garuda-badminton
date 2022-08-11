						
						<!--begin::Aside-->
						<div id="kt_aside" class="aside card" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
							<!--begin::Aside menu-->
							<div class="aside-menu flex-column-fluid px-5">
							@if(Auth()->user()->tipe_akun == 'Admin')
							@include('db.layout.aside._menu')	
							@else
							@include('db.layout.aside._menux')	
							@endif

							</div>
							<!--end::Aside menu-->
							<!--begin::Footer-->
							@if(Auth()->user()->tipe_akun == 'Admin')
							<div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
								<a href="/dashboard/cetak" class="btn btn-bg-light btn-color-gray-500 btn-active-color-gray-900 w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Cetak laporan penyewaan lapangan">
									<span class="btn-label">Cetak Laporan</span>
									<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
									<span class="svg-icon btn-icon svg-icon-2">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
											<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
											<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
											<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
											<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</a>
							</div>
							
							@endif
							<!--end::Footer-->
						</div>
						<!--end::Aside-->
						