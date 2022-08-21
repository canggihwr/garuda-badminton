										
										<!--begin::List Widget 5-->
										<div class="card h-xl-100">
											<!--begin::Body-->
											<div class="card-body">
												<h3 style="margin-left: 5px">Daftar jadwal hari ini : <span class="badge badge-light-success border border-success fs-4">{{ $hari }}</span><!--begin::Menu-->
													<button style="text-align: right" type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button></h3>
											
											</div>
											<!--end: Card Body-->
											<!--begin::Body-->
											<div class="card-body pt-5 mb-9">
												<div class="table-responsive">
													<table class="table table-striped table-rounded border border-gray-300 table-row-bordered table-row-gray-300 gy-7 gs-7">
														<thead>
															<tr class="fw-bold fs-4 text-gray-800">
																<th scope="col">Pilih Jadwal </th>
																
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row" class="fw-bold text-gray-800" style="text-align: center">Jadwal Lapangan 1</th>
															</tr>
															<tr>
																<td colspan="4">
																	<table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0" cellspacing="0">
																		<thead>
																			<tr class="fw-bold fs-6 text-gray-800">
																				<th scope="col" width="40%">Jadwal</th>
																				<th scope="col" width="36%">Lapangan</th>
																				<th scope="col" >Pesan</th>
																			</tr>
																		</thead>
																		<tbody>
																			@foreach ($jadwal as $j)
																			<tr>
																				<th scope="row">
																					
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item">
																							<!--begin::Label-->
																							<div class="timeline-label fw-bolder text-gray-800 fs-6" >{{ $j->waktu }}</div>
																							{{-- <div class="timeline-label fw-bolder text-gray-800 fs-6" >WITA</div> --}}
																							<!--end::Label-->
																							<!--begin::Badge-->
																							<div class="timeline-badge">
																								<i class="fa fa-genderless text-success fs-1"></i>
																							</div>
																							<!--end::Badge-->
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Tanggal : {{ $hari }}</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</th>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Lapangan 1</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							
																							<!--begin::Content-->
																							<div class="timeline-content d-flex">
																							    <div class="timeline-content d-flex">
																							        <form id="pesan" action="/dashboard/penyewaan/addinput" method="POST">
																							            @csrf
																							            <input type="hidden" name="waktu" value="{{ $j->waktu }}">
																							            <input type="hidden" name="date" value="{{ $j->date }}">
																							            <input type="hidden" name="tanggal" value="{{ $hari }}">
																							            <input type="hidden" name="lapangan" value="Lapangan 1">
																										@php
																											$book = 'false';
																										@endphp
																							            @foreach ($penyewaan as $p)
																										@php
																										$w = $p->waktu_main;
																										// $waktu = preg_replace('/[^1-9]/', '', $w);
																										$waktu = substr($w, 0, 2);
																										$lama = (int)$p->paket->lama;
																										$waktus = [];
																										$jwaktu = substr($j->waktu, 0, 2);

																										$waktus[0] = (int)$waktu;
																										for($i=1;$i<$lama; $i++){
																											$waktus[$i] = (int)$waktus[$i-1]+(int)1;
																										}


																										if($p->lapangan->nama == 'Lapangan 1'){
																											if($p->tgl_main == $hari){
																												if($p->status != 'Selesai'){
																													foreach ($waktus as $ww){
																														if($ww == $jwaktu){
																															$book = 'true';
																														}
																													}
																												}
																											}
																										}
																										@endphp
																							            @endforeach

																										@if ($book == 'true')
																										<span class="badge badge-light-info">Sudah dibooking</span>
																										@else
																										<button  type="submit" class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</button>
																										@endif

																							            {{-- <a href="javascript:{}" onclick="document.getElementById('pesan').submit();"><span class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</span></a> --}}
																							        </form>
																							    </div>
																							<!--end::Content-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																			</tr>
																			@endforeach
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<th scope="row" class="fw-bold text-gray-800" style="text-align: center">Jadwal Lapangan 2</th>
															</tr>
															<tr>
																<td colspan="4">
																	<table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0" cellspacing="0" style="white-space: nowrap">
																		<thead>
																			<tr class="fw-bold fs-6 text-gray-800">
																				<th scope="col" style="white-space: nowrap"width="40%">Jadwal</th>
																				<th scope="col" style="white-space: nowrap"width="36%">Lapangan</th>
																				<th scope="col" style="white-space: nowrap">Pesan</th>
																			</tr>
																		</thead>
																		<tbody>
																			@foreach ($jadwal as $j)
																			<tr>
																				<th scope="row">
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item">
																							<!--begin::Label-->
																							<div class="timeline-label fw-bolder text-gray-800 fs-6" >{{ $j->waktu }}</div>
																							{{-- <div class="timeline-label fw-bolder text-gray-800 fs-6" >WITA</div> --}}
																							<!--end::Label-->
																							<!--begin::Badge-->
																							<div class="timeline-badge">
																								<i class="fa fa-genderless text-success fs-1"></i>
																							</div>
																							<!--end::Badge-->
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Tanggal : {{ $hari }}</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</th>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Lapangan 2</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							
																							<!--begin::Content-->
																							<div class="timeline-content d-flex">
																							    <div class="timeline-content d-flex">
																							        <form id="pesan" action="/dashboard/penyewaan/addinput" method="POST">
																							            @csrf
																							            <input type="hidden" name="waktu" value="{{ $j->waktu }}">
																							            <input type="hidden" name="date" value="{{ $j->date }}">
																							            <input type="hidden" name="tanggal" value="{{ $hari }}">
																							            <input type="hidden" name="lapangan" value="Lapangan 2">
																										@php
																											$book = 'false';
																										@endphp
																							            @foreach ($penyewaan as $p)
																										@php
																										$w = $p->waktu_main;
																										// $waktu = preg_replace('/[^1-9]/', '', $w);
																										$waktu = substr($w, 0, 2);
																										$lama = (int)$p->paket->lama;
																										$waktus = [];
																										$jwaktu = substr($j->waktu, 0, 2);

																										$waktus[0] = (int)$waktu;
																										for($i=1;$i<$lama; $i++){
																											$waktus[$i] = (int)$waktus[$i-1]+(int)1;
																										}


																										if($p->lapangan->nama == 'Lapangan 2'){
																											if($p->tgl_main == $hari){
																												if($p->status != 'Selesai'){
																													foreach ($waktus as $ww){
																														if($ww == $jwaktu){
																															$book = 'true';
																														}
																													}
																												}
																											}
																										}
																										@endphp
																							            @endforeach

																										@if ($book == 'true')
																										<span class="badge badge-light-info">Sudah dibooking</span>
																										@else
																										<button  type="submit" class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</div> </button>
																										@endif

																							            {{-- <a href="javascript:{}" onclick="document.getElementById('pesan').submit();"><span class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</span></a> --}}
																							        </form>
																							    </div>
																							<!--end::Content-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																			</tr>
																			@endforeach
																		</tbody>
																	</table>
																</td>
															</tr>
															<tr>
																<th scope="row" class="fw-bold text-gray-800" style="text-align: center">Jadwal Lapangan 3</th>
															</tr>
															<tr>
																<td colspan="4">
																	<table class="table table-row-dashed table-row-gray-500 gy-5 gs-5 mb-0" cellspacing="0" style="white-space: nowrap">
																		<thead>
																			<tr class="fw-bold fs-6 text-gray-800">
																				<th scope="col" width="40%">Jadwal</th>
																				<th scope="col" width="36%">Lapangan</th>
																				<th scope="col" >Pesan</th>
																			</tr>
																		</thead>
																		<tbody>
																			@foreach ($jadwal as $j)
																			<tr>
																				<th scope="row">
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item">
																							<!--begin::Label-->
																							<div class="timeline-label fw-bolder text-gray-800 fs-6" >{{ $j->waktu }}</div>
																							{{-- <div class="timeline-label fw-bolder text-gray-800 fs-6" >WITA</div> --}}
																							<!--end::Label-->
																							<!--begin::Badge-->
																							<div class="timeline-badge">
																								<i class="fa fa-genderless text-success fs-1"></i>
																							</div>
																							<!--end::Badge-->
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Tanggal : {{ $hari }}</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</th>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							<!--begin::Text-->
																							<div class="fw-mormal timeline-content gray-800 ps-3">Lapangan 3</div>
																							<!--end::Text-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																				<td>
																					<div class="timeline-label">
																						<!--begin::Item-->
																						<div class="timeline-item" >
																							
																							<!--begin::Content-->
																							<div class="timeline-content d-flex">
																							    <div class="timeline-content d-flex">
																							        <form id="pesan" action="/dashboard/penyewaan/addinput" method="POST">
																							            @csrf
																							            <input type="hidden" name="waktu" value="{{ $j->waktu }}">
																							            <input type="hidden" name="date" value="{{ $j->date }}">
																							            <input type="hidden" name="tanggal" value="{{ $hari }}">
																							            <input type="hidden" name="lapangan" value="Lapangan 3">
																										@php
																											$book = 'false';
																										@endphp
																							            @foreach ($penyewaan as $p)
																										@php
																										$w = $p->waktu_main;
																										// $waktu = preg_replace('/[^1-9]/', '', $w);
																										$waktu = substr($w, 0, 2);
																										$lama = (int)$p->paket->lama;
																										$waktus = [];
																										$jwaktu = substr($j->waktu, 0, 2);

																										$waktus[0] = (int)$waktu;
																										for($i=1;$i<$lama; $i++){
																											$waktus[$i] = (int)$waktus[$i-1]+(int)1;
																										}


																										if($p->lapangan->nama == 'Lapangan 3'){
																											if($p->tgl_main == $hari){
																												if($p->status != 'Selesai'){
																													foreach ($waktus as $ww){
																														if($ww == $jwaktu){
																															$book = 'true';
																														}
																													}
																												}
																											}
																										}
																										@endphp
																							            @endforeach

																										@if ($book == 'true')
																										<span class="badge badge-light-info">Sudah dibooking</span>
																										@else
																										<button  type="submit" class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</button>
																										@endif

																							            {{-- <a href="javascript:{}" onclick="document.getElementById('pesan').submit();"><span class="badge badge-light-success border border-success"><div><i class="fa fa-genderless fs-2 text-success"></i></div><div style="margin-left: 9px">Pesan Jadwal</span></a> --}}
																							        </form>
																							    </div>
																							<!--end::Content-->
																						</div>
																						<!--end::Item-->
																					</div>
																				</td>
																			</tr>
																			@endforeach
																		</tbody>
																	</table>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<!--end: Card Body-->
											<!--begin::Body-->
											<div class="card-body" style="margin-top: 20%">
												<h3 style="margin-left: 5px">Daftar jadwal hari ini : <span class="badge badge-light-success border border-success fs-4">{{ $hari }}</span><!--begin::Menu-->
													<button style="text-align: right" type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
														<span class="svg-icon svg-icon-2">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
																	<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																	<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
																</g>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button></h3>
												<!--begin::Timeline-->
												<div class="timeline-label">
													@foreach ($penyewaan as $p)
													<!--begin::Item-->
													<div class="timeline-item" style="white-space: nowrap">
														<!--begin::Label-->
														<div class="timeline-label fw-bolder text-gray-800 fs-6" >{{ $p->waktu_main }}</div>
														{{-- <div class="timeline-label fw-bolder text-gray-800 fs-6" >WITA</div> --}}
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success fs-1"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Text-->
														<div class="fw-mormal timeline-content gray-800 ps-3">Tanggal : {{ $p->tgl_main }}</div>
														<!--end::Text-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="fw-bolder text-gray-800">{{ $p->lapangan->nama }}</span>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													@endforeach
												</div>
												<!--end::Timeline-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 5-->
										