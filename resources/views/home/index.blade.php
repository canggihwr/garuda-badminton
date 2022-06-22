            @include('home.header')	
			<!-- Hero Section -->
		
			<div class="section full-height mob-height">
				<div class="section full-height height-auto-lg hide-over background-light-blue">
					
				<div class="hero-slider-wrap">
					<div class="customNavigation">
						<a class="prev-hero-sync-1"><i class="fa fa-long-arrow-up"></i></a>
						<a class="next-hero-sync-1"><i class="fa fa-long-arrow-down"></i></a>
					</div>		
					<div id="hero-sync1" class="owl-carousel">
						<div class="item full-height mob-height">	
							<div class="container text-left">
								<div class="row">
									<div class="col-md-12 full-height mob-height mx-3">	
										<div class="hero-slider-img">	
											<img src="{{ asset('img/slide/2.png') }}" alt="hero image"/>
										</div>
										<div class="hero-center-wrap z-bigger">
											<h1 class="parallax-fade-top">Sewa<br><span>lapangan</span></h1> 
										</div>
										<p class="hero-top-text text-left">non<br>member</p>
									</div>	
								</div>
							</div>	
						</div>
						<div class="item full-height mob-height">	
							<div class="container text-left">
								<div class="row">
									<div class="col-md-12 full-height mob-height mx-3">	
										<div class="hero-slider-img">	
											<img src="{{ asset('img/slide/3.png') }}" alt="hero image"/>
										</div>
										<div class="hero-center-wrap z-bigger">
											<h1 class="parallax-fade-top">  Daftar<br><span>    member</span></h1>
										</div>
										<p class="hero-top-text">member</p>
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
										<p class="hero-top-text">fasilitas</p>
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
				{{-- <div id="particles-js" class="min-height"></div> --}}
			</div>

			</div>	
			
			<!-- Portfolio -->
			
			<div class="content padding-top-bottom-big" id="top-scroll">
				<div class="grid">
					<a class="grid__item" href="#preview-1">
						<div class="box">
							<div class="box__shadow pattern-1"></div>
							<img class="box__img" src="{{ asset('img/1.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="a box">a box</span></h3>
							<h4 class="box__text"><span class="box__text-inner">beige</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-2">
						<div class="box">
							<div class="box__shadow pattern-2"></div>
							<img class="box__img" src="{{ asset('img/2-1.jpg') }}" alt="Some image"/>
							<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="diploma">diploma</span></h3>
							<h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">gray</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-3">
						<div class="box">
							<div class="box__shadow pattern-3"></div>
							<img class="box__img" src="{{ asset('img/3.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="table">table</span></h3>
							<h4 class="box__text box__text--topcloser"><span class="box__text-inner">metal</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-4">
						<div class="box">
							<div class="box__shadow pattern-4"></div>
							<img class="box__img" src="{{ asset('img/4.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="a cup">a cup</span></h3>
							<h4 class="box__text box__text--bottom box__text--right"><span class="box__text-inner box__text-inner--rotated3">milk</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-5">
						<div class="box">
							<div class="box__shadow pattern-5"></div>
							<img class="box__img" src="{{ asset('img/5.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="glass">glass</span></h3>
							<h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">wine</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-6">
						<div class="box">
							<div class="box__shadow pattern-6"></div>
							<img class="box__img" src="{{ asset('img/6.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="booklet">booklet</span></h3>
							<h4 class="box__text"><span class="box__text-inner">white</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-7">
						<div class="box">
							<div class="box__shadow pattern-7"></div>
							<img class="box__img" src="{{ asset('img/7.jpg') }}" alt="Some image"/>
							<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner" data-hover="a bottle">a bottle</span></h3>
							<h4 class="box__text box__text--topcloser"><span class="box__text-inner">plant</span></h4>
						</div>
					</a>
					<a class="grid__item" href="#preview-8">
						<div class="box">
							<div class="box__shadow pattern-8"></div>
							<img class="box__img" src="{{ asset('img/8.jpg') }}" alt="Some image"/>
							<h3 class="box__title"><span class="box__title-inner" data-hover="coffee">coffee</span></h3>
							<h4 class="box__text box__text--bottom"><span class="box__text-inner">black</span></h4>
						</div>
					</a>
				</div>
			</div>
			<div class="overlay">
				<div class="overlay__reveal"></div>
				<div class="overlay__item" id="preview-1">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/1.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">a box</span></h3>
						<h4 class="box__text"><span class="box__text-inner">beige</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-2">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/2-1.jpg') }}" alt="Some image"/>
						<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">diploma</span></h3>
						<h4 class="box__text box__text--bottom"><span class="box__text-inner box__text-inner--rotated1">gray</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-3">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/3.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">table</span></h3>
						<h4 class="box__text box__text--topcloser"><span class="box__text-inner">metal</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-4">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/4.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">a cup</span></h3>
						<h4 class="box__text box__text--bottom box__text--right"><span class="box__text-inner box__text-inner--rotated3">milk</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-5">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/5.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">glass</span></h3>
						<h4 class="box__text box__text--bottomcloser"><span class="box__text-inner">wine</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-6">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/6.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">booklet</span></h3>
						<h4 class="box__text"><span class="box__text-inner">white</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-7">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/7.jpg') }}" alt="Some image"/>
						<h3 class="box__title box__title--straight box__title--bottom"><span class="box__title-inner">a bottle</span></h3>
						<h4 class="box__text box__text--topcloser"><span class="box__text-inner">plant</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<div class="overlay__item" id="preview-8">
					<div class="box">
						<div class="box__shadow"></div>
						<img class="box__img box__img--original" src="{{ asset('img/original/8.jpg') }}" alt="Some image"/>
						<h3 class="box__title"><span class="box__title-inner">coffee</span></h3>
						<h4 class="box__text box__text--bottom"><span class="box__text-inner">black</span></h4>
					</div>
					<p class="overlay__content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium.</p>
				</div>
				<button class="overlay__close"><span class="overlay__close-in"></span></button>
			</div>

			@include('home.cara2')
			
            @include('home.footer')	

						
			