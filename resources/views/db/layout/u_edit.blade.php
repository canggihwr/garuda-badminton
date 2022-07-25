						
						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Toolbar-->
							<div class="toolbar mb-5 mb-lg-7" id="kt_toolbar">
								<!--begin::Page title-->
								<div class="page-title d-flex flex-column me-3">
									<!--begin::Title-->
									<h1 class="d-flex text-dark fw-bolder my-1 fs-1">Edit User</h1>
									<!--end::Title-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-dot fw-bold text-gray-600 fs-7 my-1">
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">
											<a href="/dashboard" class="text-gray-600 text-hover-primary">Dashboard</a>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-600">User</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-gray-500">Edit User</li>
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
										<a class="btn btn-light fw-bolder" href="/dashboard/user" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
										<span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M12.0657 12.5657L14.463 14.963C14.7733 15.2733 14.8151 15.7619 14.5621 16.1204C14.2384 16.5789 13.5789 16.6334 13.1844 16.2342L9.69464 12.7029C9.30968 12.3134 9.30968 11.6866 9.69464 11.2971L13.1844 7.76582C13.5789 7.3666 14.2384 7.42107 14.5621 7.87962C14.8151 8.23809 14.7733 8.72669 14.463 9.03696L12.0657 11.4343C11.7533 11.7467 11.7533 12.2533 12.0657 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Cancel</a>
										
									</div>
									<!--end::Wrapper-->
									
									<!--begin::Button-->
									<a href="#" class="btn btn-success fw-bolder" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Edit</a>
									<!--end::Button-->
								</div>
								<!--end::Actions-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								<form action="/dashboard/user/update/{{ $user->id }}" method="POST" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row">
									<!--begin::Aside column-->
									@csrf
									<input type="hidden" name="tipe_akun" value="Member">
									<input type="hidden" name="getid" value="{{ $user->id }}">
									<div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
										<!--begin::Thumbnail settings-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Edit Foto</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body text-center pt-0">
												<!--begin::Image input-->
												<div class="image-input image-input-empty image-input-outline mb-3" data-kt-image-input="true" style="background-image: url(db/media/avatars/unnamed.png)">
													<!--begin::Preview existing avatar-->
													<div class="image-input-wrapper w-150px h-150px"></div>
													<!--end::Preview existing avatar-->
													<!--begin::Label-->
													<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Upload Foto">
														<!--begin::Icon-->
														<i class="bi bi-pencil-fill fs-7"></i>
														<!--end::Icon-->
														<!--begin::Inputs-->
														<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
														<input type="hidden" name="avatar_remove" />
														<!--end::Inputs-->
													</label>
													<!--end::Label-->
													<!--begin::Cancel-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Hapus Foto">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Cancel-->
													<!--begin::Remove-->
													<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Hapus Foto">
														<i class="bi bi-x fs-2"></i>
													</span>
													<!--end::Remove-->
												</div>
												<!--end::Image input-->
												<!--begin::Description-->
												<div class="text-muted fs-7">format *.png, *.jpg and *.jpeg</div>
												<!--end::Description-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Thumbnail settings-->
										
									</div>
									<!--end::Aside column-->
									<!--begin::Main column-->
									<div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
										<!--begin::General options-->
										<div class="card card-flush py-4">
											<!--begin::Card header-->
											<div class="card-header">
												<div class="card-title">
													<h2>Edit Data diri</h2>
												</div>
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0">
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="required form-label">Nama</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="name" class="form-control mb-2" placeholder="Nama" value="{{ $user->name }}" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="required form-label">Username</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" name="username" class="form-control mb-2" placeholder="Username" value="{{ $user->username }}" />
													<!--end::Input-->
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">Password</label>
													<!--end::Label-->
													
													<!--begin::Editor-->
													<div class="">
                                                        <input type="password" name="password" class="form-control mb-2" placeholder="Password" value="{{ $user->password }}" />

													<!--end::Editor-->
													</div>
												</div>
												<!--end::Input group-->
                                                <!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">No HP</label>
													<!--end::Label-->
													
													<!--begin::Editor-->
													<div class="">
                                                        <input type="text" name="no_hp" class="form-control mb-2" placeholder="No Hp" value="{{ $user->no_hp }}" />

													<!--end::Editor-->
													</div>
												</div>
												<!--end::Input group-->

												<!--begin::Input group-->
												<div class="mb-10 fv-row">
													<!--begin::Label-->
													<label class="form-label">Email</label>
													<!--end::Label-->
													
													<!--begin::Editor-->
													<div class="">
                                                        <input type="text" name="email" class="form-control mb-2" placeholder="No Hp" value="{{ $user->email }}" />

													<!--end::Editor-->
													</div>
												</div>
												<!--end::Input group-->
												
											</div>
											<!--end::Card header-->
										</div>
										<!--end::General options-->
										
										<div class="d-flex justify-content-end">
											<!--begin::Button-->
											<a href="/dashboard/user" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
											<!--end::Button-->
											<!--begin::Button-->
											<button type="submit" > Update </button>
												<button type="submit" class="btn btn-primary">
												<span class="indicator-label">Update</span>
												<span class="indicator-progress">Please wait...
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
											<!--end::Button-->
										</div>
									</div>
									<!--end::Main column-->
								</form>
							</div>
							<!--end::Post-->
