            @include('home.header')	
			<!-- Hero Section -->
		
			<div class="section full-height mob-height">
				<div class="section full-height height-auto-lg hide-over background-light-blue">
					
				<div class="hero-slider-wrap" style="margin-top: 0%">
					<div class="customNavigation">
						<a class="prev-hero-sync-1"><i class="fa fa-long-arrow-up"></i></a>
						<a class="next-hero-sync-1"><i class="fa fa-long-arrow-down"></i></a>
					</div>		
					<div id="hero-sync1" class="owl-carousel">
						<div class="item full-height mob-height" style="margin-left: 3%">	
							<div class="container text-left">
								<div class="row">
									<div class="col-md-12 full-height mob-height mx-3">	
										<div class="hero-slider-img">	
											<img src="{{ asset('img/slide/2.png') }}" alt="hero image"/>
										</div>
										<div class="hero-center-wrap z-bigger">
											<h1 class="parallax-fade-top">Sewa<br><span>lapangan</span></h1> 
										</div>
										{{-- <p class="hero-top-text text-left">non<br>member</p> --}}
									</div>	
								</div>
							</div>	
						</div>
						<div class="item full-height mob-height" style="margin-left: 13%">	
							<div class="container text-left">
								<div class="row">
									<div class="col-md-19 full-height mob-height mx-3">	
										<div class="hero-slider-img">
											<img src="{{ asset('img/slide/3.png') }}" alt="hero image"/>
										</div>
										<div class="hero-center-wrap z-bigger">
											<h1 class="parallax-fade-top">  Daftar<br><span>    member</span></h1>
										</div>
										{{-- <p class="hero-top-text">member</p> --}}
										
									</div>	
								</div>
							</div>	
						</div>
						<div class="item full-height mob-height">	
							<div class="container text-left">
								<div class="row">
									<div class="col-md-12 full-height mob-height mx-3">	
										<div class="hero-slider-img">	
											<img src="{{ asset('img/slide/1.png') }}" alt="hero image"/>
										</div>
										<div class="hero-center-wrap z-bigger">
											<h1 class="parallax-fade-top">Peralatan <br><span>bulutangkis</span></h1>
										</div>
										{{-- <p class="hero-top-text">fasilitas</p> --}}
									</div>	
								</div>
							</div>	
						</div>
					</div>
					
					{{-- <div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="hero-sync2" class="owl-carousel">
									<div class="item">
										<p><span>non-member</span></p>	
									</div>
									<div class="item">
										<p><span>member</span></p>	
									</div>
									<div class="item">
										<p><span>fasilitas</span></p>
									</div>
								</div>
							</div>	
						</div>
					</div> --}}
				</div>
				{{-- <div class="container">
					<div class="row">
						<div class="col-md-12">
							<div id="hero-sync2" class="owl-carousel">
								<div class="item">
									<p><span>non-member</span></p>	
								</div>
								<div class="item">
									<p><span>member</span></p>	
								</div>
								<div class="item">
									<p><span>fasilitas</span></p>
								</div>
							</div>
						</div>	
					</div>
				</div> --}}
				<a href="#top-scroll" data-gal="m_PageScroll2id"><div class="scroll-to-next">next <i class="fa fa-long-arrow-down"></i></div></a>

				<div class="ocean">
					<div class="wave"></div>
					<div class="wave"></div>
				</div>
			</div>
			{{-- <div id="particles-js" class="min-height"></div> --}}


			</div>	
			
			

			@include('home.home')
			

			<!-- Portfolio -->
			<div class="container" style="margin-top: 92px; margin-bottom:30px;" id="fasilitas">
				<div class="row">
					<div class="col-md-12">
						<div class="title-wrap text-center">
							<div class="back-title">Peralatan</div>
							<h3>Daftar peralatan bulu tangkis</h3>
							<p>Adapun Daftar peralatan bulu tangkis yang tersedia, untuk melakukan pemesanan melalui web GOR Bulutangkis Garuda Mataram silahkan daftar</p>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="content" id="top-scroll">
				<div class="grid">
					@foreach ($peralatan as $p)
					<a class="grid__item" href="#preview-3">
						<div class="box">
							<div class="box__shadow pattern-3"></div>
							<img class="box__img" src="img/fotoperalatan/{{ $p->foto }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="Rp.{{ $p->harga }}">Rp.{{ $p->harga }}</span></h3>
							<h4 class="box__text box__text--topcloser"><span class="box__text-inner">{{ $p->nama }}</span></h4>
						</div>
					</a>
					@endforeach
					
				</div>
			</div>



            @include('home.footer')	

						
			