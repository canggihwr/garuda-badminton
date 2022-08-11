		
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">

@include('db.layout._header')

					<!--begin::Content wrapper-->
					<div class="d-flex flex-column-fluid">

@include('db.layout.aside._base')

						<!--begin::Container-->
						<div class="d-flex flex-column flex-column-fluid container-fluid">
							<!--begin::Post-->
							<div class="content flex-column-fluid" id="kt_content">
								
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">
@if (auth()->user()->tipe_akun == 'Admin')
@include('db.partials.widgets-2.mixed._widget-18')
@else
@include('db.partials.widgets-2.lists._widget-5')
@endif


									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-8">
										<!--begin::Row-->
										<div class="row g-5 g-lg-10">
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">

@include('db.partials.widgets-2.tiles._widget-1')


@include('db.partials.widgets-2.tiles._widget-5')

											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-lg-6 mb-5 mb-lg-10">

@include('db.partials.widgets-2.tiles._widget-3')

											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->

@include('db.partials.widgets-2.tiles._widget-2')

									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">

{{-- @include('db.partials.widgets-2.lists._widget-3') --}}

									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">

{{-- @include('db.partials.widgets-2.lists._widget-5') --}}

									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-4 mb-xl-10">

{{-- @include('db.partials.widgets-2.lists._widget-6') --}}

									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-5 g-lg-10">
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">

{{-- @include('db.partials.widgets-2.tables._widget-3') --}}

									</div>
									<!--end::Col-->
									<!--begin::Col-->
									<div class="col-xl-6 mb-5 mb-xl-10">

{{-- @include('db.partials.widgets-2.tables._widget-6') --}}

									</div>
									<!--end::Col-->
								</div>
								<!--end::Row-->
								
							</div>
							<!--end::Post-->

@include('db.layout._footer')

						</div>
						<!--end::Container-->
					</div>
					<!--end::Content wrapper-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->

{{-- @include('db.partials.drawers._activity-drawer') --}}

		
		
		
		<!--end::Drawers-->
		<!--end::Main-->
		
		