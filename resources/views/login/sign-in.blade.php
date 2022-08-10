<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../../">
		<title>Login - GOR Garuda</title>
		
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="db/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="db/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="bg-body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(db/media/illustrations/dozzy-1/7.png">
				<!--begin::Content-->
				<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
					<!--begin::Logo-->
					<a href="/dashboard" class="mb-12">
						<img alt="Logo" src="img/logo-dark.png" class="h-40px" />
					</a>
					<!--end::Logo-->
					<!--begin::Wrapper-->
					<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
						
						<!--begin::Form-->
						<form class="form w-100" action="/login" method="POST">
							@csrf
							<!--begin::Heading-->
							<div class="text-center mb-10">
								<!--begin::Title-->
								<h1 class="text-dark mb-3">Login ke GOR Garuda</h1>
								<!--end::Title-->
								<!--begin::Link-->
								<div class="text-gray-400 fw-bold fs-4">Belum punya akun?
								<a href="/daftar" class="link-primary fw-bolder">Daftar di sini!</a></div>
								<!--end::Link-->
							</div>
							<!--begin::Heading-->
							@if(session()->has('loginError'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ session('loginError') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
							@endif
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label fs-6 fw-bolder text-dark">Username</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="text" name="username" autocomplete="off" placeholder="Username"/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack mb-2">
									<!--begin::Label-->
									<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
									<!--end::Label-->
									{{-- <!--begin::Link-->
									<a href="/login" class="link-primary fs-6 fw-bolder">Lupa Password ?</a>
									<!--end::Link--> --}}
								</div>
								<!--end::Wrapper-->
								<!--begin::Input-->
								<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" placeholder="password"/>
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="text-center">
								<!--begin::Submit button-->
								{{-- <a href="/redirect">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Login</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									
								</button></a> --}}

								<button type="submit" id="" class="btn btn-lg btn-primary w-100 mb-5">
									<span class="indicator-label">Login</span>
									<span class="indicator-progress">Please wait...
									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									
								</button>

								{{-- <!--end::Submit button-->
								<!--begin::Separator-->
								<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
								<!--end::Separator-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="db/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
								<img alt="Logo" src="db/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
								<!--end::Google link-->
								<!--begin::Google link-->
								<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
								<img alt="Logo" src="db/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
								<!--end::Google link--> --}}
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Content-->
				<!--begin::Footer-->
				<div class="d-flex flex-center flex-column-auto p-10">
					
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "db/";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="db/plugins/global/plugins.bundle.js"></script>
		<script src="db/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="db/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>