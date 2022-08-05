						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-1">Pembayaran</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">Penyewaan</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">bayar</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
								<!--end::Page title-->
								
							</div>

							<!--end::Toolbar-->
                            

                            <script>
                            Dropzone.options.bukti = { // camelized version of the `id`
                                paramName: "bukti", // The name that will be used to transfer the file
                                maxFilesize: 5, // MB
                                accept: function(file, done) {
                                if (file.name == "justinbieber.jpg") {
                                    done("Naha, you don't.");
                                }
                                else { done(); }
                                }
                            };
                            </script>

                            <!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<!--begin::Form-->
								<form id="bukti" class="form d-flex flex-column flex-lg-row" action="/dashboard/penyewaan/pembayaran/{{ $penyewaan->id }}" method="POST" enctype="multipart/form-data">
									@csrf
                                    <input type="hidden" name="getid" value="{{ $penyewaan->id }}">
                                    <input type="hidden" name="status" value="Menunggu Konfirmasi">
                                    <!--begin::Aside column-->
									<div class="w-100 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">
										<!--begin::Order details-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Detail Penyewaan</h2>
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
														<label class="form-label">Order ID</label>
														<!--end::Label-->
														<!--begin::Auto-generated ID-->
														<div class="fw-bolder fs-3 mb-3">#{{ $penyewaan->kode }}{{ $penyewaan->id }}</div>
														<!--end::Input-->
														<!--begin::Alert-->
                                                            <div class="alert bg-light-primary d-flex flex-column flex-sm-row p-5 mb-7">
                                                                
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                                                    
                                                                    <table>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>Nama</td>
                                                                                <td> : {{ $penyewaan->user->name }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Lapangan</td>
                                                                                <td> : {{ $penyewaan->lapangan->nama }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggal</td>
                                                                                <td> : {{ $penyewaan->tgl_main }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Paket</td>
                                                                                <td> : {{ $penyewaan->paket->nama }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Waktu</td>
                                                                                <td> : {{ $penyewaan->waktu_main }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Total</td>
                                                                                <td> : Rp.{{ $penyewaan->paket->harga }}</td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    
                                                                </div>
                                                                <!--end::Wrapper-->
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
										<!--begin::Pricing-->
                                        <div class="card card-flush py-4">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Pembayaran</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row">
                                                    <label class="required form-label">Metode Pembayaran</label>
														<!--end::Label-->
														<!--begin::Select2-->
														<select name="metode" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Pilih metode pembayaran" id="kt_ecommerce_edit_order_payment">
															<option></option>
															<option value="Dana">Dana</option>
															<option value="Gopay">Gopay</option>
															<option value="OVO">OVO</option>
															<option value="Shopeepay">Shopeepay</option>
															<option value="QRIS">QRIS</option>
															<option value="Bank">Transfer Bank</option>
														</select>
														<!--end::Select2-->
														<!--begin::Description-->
														<div class="text-muted fs-7">Pilih metode pembayaran</div>
														<!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                                
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="fs-6 fw-bold mb-2">Tipe Bayar
                                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Jika memilih pembayaran dengan DP, harap membayar minimal 50% dari total bayar"></i></label>
                                                    <!--End::Label-->
                                                    <!--begin::Row-->
                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="tipe" value="Full" onclick="dp()" />
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">Bayar DP</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div class="col">
                                                            <!--begin::Option-->
                                                            <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">
                                                                <!--begin::Radio-->
                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                                    <input class="form-check-input" type="radio" name="tipe" value="DP" checked="checked"  onclick="full()" />
                                                                </span>
                                                                <!--end::Radio-->
                                                                <!--begin::Info-->
                                                                <span class="ms-5">
                                                                    <span class="fs-4 fw-bolder text-gray-800 d-block">Bayar Full</span>
                                                                </span>
                                                                <!--end::Info-->
                                                            </label>
                                                            <!--end::Option-->
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                    <!--begin::Label-->
                                                    <label class="form-label">Total Bayar</label>
                                                    <!--end::Label-->
                                                    <!--begin::Slider-->
                                                    <div class="d-flex flex-column text-center mb-5">
                                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                                            <span class="fw-bolder fs-4 mt-1 ms-2">Rp.</span>
                                                            <span class="fw-bolder fs-3x" id="totalbayar">{{ $penyewaan->total }}</span>
                                                            <input type="hidden" id="totalfix" value="{{ $penyewaan->total }}" />
                                                        </div>
                                                    </div>
                                                    <!--end::Slider-->
                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Jika memilih pembayaran dengan DP, harap membayar minimal 50% dari total bayar.</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Input group-->
                                                
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Pricing-->
                                        <!--begin::Media-->

                                        <script type="text/javascript">
                                        function full(){
                                            var fix = document.getElementById("totalfix").value
                                            document.getElementById("totalbayar").innerHTML = fix
                                        }

                                        function dp(){
                                            var fix = document.getElementById("totalfix").value
                                            var dp = parseInt(fix)/2
                                            document.getElementById("totalbayar").innerHTML = dp
                                        }

                                        </script>

                                <div class="card card-flush py-4">
                                    <!--begin::Card header-->
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Bukti Pembayaran</h2>
                                        </div>
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-empty" data-kt-image-input="true" style="background-image: url(/db/media/icons/duotune/arrows/arr078.svg)">
                                            <!--begin::Image preview wrapper-->
                                            <div class="image-input-wrapper w-525px h-125px"></div>
                                            <!--end::Image preview wrapper-->

                                            <!--begin::Edit button-->
                                            <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change"
                                            data-bs-toggle="tooltip"
                                            data-bs-dismiss="click"
                                            title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input class="form-control" type="file" name="bukti" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit button-->

                                            <!--begin::Cancel button-->
                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel"
                                            data-bs-toggle="tooltip"
                                            data-bs-dismiss="click"
                                            title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel button-->

                                            <!--begin::Remove button-->
                                            <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove"
                                            data-bs-toggle="tooltip"
                                            data-bs-dismiss="click"
                                            title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove button-->
                                        </div>
                                        <!--end::Image input-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-2 form-input form-control">
                                            <!--begin::Dropzone-->
                                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                                <!--begin::Message-->
                                                <div class="dz-message needsclick">
                                                    <!--begin::Icon-->
                                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                        <span class="fs-7 fw-bold text-gray-400">Upload up to 10 files</span>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                            </div>
                                            <!--end::Dropzone-->
                                        </div>
                                        <!--end::Input group-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Silahkan upload bukti pembayaran.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Card header-->
                                </div>
                                <!--end::Media-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <a href="/dashboard/penyewaan" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">Batal</a>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                                        <span class="indicator-label">Kirim</span>
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
