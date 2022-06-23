								
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Search toggle-->
									<div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
										<div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-30px h-30px h-40px w-40px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Search toggle-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">

@include('db.partials.search.partials._form-dropdown')


@include('db.partials.search.partials._results')


@include('db.partials.search.partials._main')


@include('db.partials.search.partials._empty')

										</div>
										<!--end::Wrapper-->

@include('db.partials.search.partials._advanced-options')


@include('db.partials.search.partials._preferences')

									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
								