@extends('layouts.app')

@section('title', 'Tour Apurímac - Inicio')
@section('meta-description', 'Descripción de la meta')

@section('content')
<div class="hero">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="intro-wrap">
					<h1 class="mb-5"><span class="d-block">Destinos turísticos</span> en <span class="typed-words"></span></h1>

					<div class="row">
						<div class="col-12">
							<form class="form">
								<div class="row mb-2">
									<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
										<select name="" id="" class="form-control custom-select">
											<option value="">Destinos</option>
											<option value="">Abancay</option>
											<option value="">Andahuaylas</option>
											<option value="">Antabamba</option>
											<option value="">Aymaraes</option>
											<option value="">Cotabambas</option>
											<option value="">Grau</option>
											<option value="">Chincheros</option>
										</select>
									</div>
									<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-5">
										<input type="text" class="form-control" name="daterange">
									</div>
									<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-3">
										<input type="text" class="form-control" placeholder="# of personas">
									</div>

								</div>    
								<div class="row align-items-center">
									<div class="col-sm-12 col-md-6 mb-3 mb-lg-0 col-lg-4">
										<input type="submit" class="btn btn-primary btn-block" value="Buscar">
									</div>
									<div class="col-lg-8">
										<label class="control control--checkbox mt-3">
											<span class="caption">Guardar y buscar</span>
											<input type="checkbox" checked="checked" />
											<div class="control__indicator"></div>
										</label>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="slides">
					<img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid active">
					<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
					<img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
					<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
					<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="untree_co-section">
	<div class="container">
		<div class="row mb-5 justify-content-center">
			<div class="col-lg-6 text-center">
				<h2 class="section-title text-center mb-3">Nuestros Servicios</h2>
				<p>
					Lejos, muy lejos, detrás de las montañas de la palabra, lejos de los países Vokalia y Consonantia, viven los textos ciegos. Separados, viven en Bookmarksgrove justo en la costa de Semantics, un gran océano de idiomas.</p>
			</div>
		</div>
		<div class="row align-items-stretch">
			<div class="col-lg-4 order-lg-1">
				<div class="h-100"><div class="frame h-100"><div class="feature-img-bg h-100" style="background-image: url('images/hero-slider-1.jpg');"></div></div></div>
			</div>

			<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-1" >

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-house display-4 text-primary"></span>
						<h3>Hermosos condominios</h3>
						<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
					</div>
				</div>

				<div class="feature-1 ">
					<div class="align-self-center">
						<span class="flaticon-restaurant display-4 text-primary"></span>
						<h3>Restaurants & Cafe</h3>
						<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
					</div>
				</div>

			</div>

			<div class="col-6 col-sm-6 col-lg-4 feature-1-wrap d-md-flex flex-md-column order-lg-3" >

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-mail display-4 text-primary"></span>
						<h3>Easy to Connect</h3>
						<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
					</div>
				</div>

				<div class="feature-1 d-md-flex">
					<div class="align-self-center">
						<span class="flaticon-phone-call display-4 text-primary"></span>
						<h3>24/7 Support</h3>
						<p class="mb-0">Even the all-powerful Pointing has no control about the blind texts.</p>
					</div>
				</div>

			</div>

		</div>
	</div>
</div>

<div class="untree_co-section count-numbers py-5">
	<div class="container">
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="313">0</span>
					</div>
					<span class="caption">No. de viajes</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="492">0</span>
					</div>
					<span class="caption">No. de clientes</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="10">0</span>
					</div>
					<span class="caption">No. de empleados</span>
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3">
				<div class="counter-wrap">
					<div class="counter">
						<span class="" data-number="12">0</span>
					</div>
					<span class="caption">No. de países</span>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="untree_co-section">
	<div class="container">
		<div class="row text-center justify-content-center mb-5">
			<div class="col-lg-7"><h2 class="section-title text-center">Destinos populares</h2></div>
		</div>

		<div class="owl-carousel owl-3-slider">

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Pragser Wildsee</h3>
						<span class="location">Italy</span>
					</div>
					<img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-2.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Oia</h3>
						<span class="location">Greece</span>
					</div>
					<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-3.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Perhentian Islands</h3>
						<span class="location">Malaysia</span>
					</div>
					<img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>


			<div class="item">
				<a class="media-thumb" href="images/hero-slider-4.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Rialto Bridge</h3>
						<span class="location">Italy</span>
					</div>
					<img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-5.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>San Francisco, United States</h3>
						<span class="location">United States</span>
					</div>
					<img src="images/hero-slider-5.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

			<div class="item">
				<a class="media-thumb" href="images/hero-slider-1.jpg" data-fancybox="gallery">
					<div class="media-text">
						<h3>Lake Thun</h3>
						<span class="location">Switzerland</span>
					</div>
					<img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid">
				</a> 
			</div>

		</div>

	</div>
</div>


<div class="untree_co-section testimonial-section mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<h2 class="section-title text-center mb-5">Testimonios</h2>

				<div class="owl-single owl-carousel no-nav">
					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_2.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Adam Aderson</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_3.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Lukas Devlin</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

					<div class="testimonial mx-auto">
						<figure class="img-wrap">
							<img src="images/person_4.jpg" alt="Image" class="img-fluid">
						</figure>
						<h3 class="name">Kayla Bryant</h3>
						<blockquote>
							<p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
					</div>

				</div>

			</div>
		</div>
	</div>
</div>


<div class="untree_co-section">
	<div class="container">
		<div class="row justify-content-center text-center mb-5">
			<div class="col-lg-6">
				<h2 class="section-title text-center mb-3">Ofertas Especiales &amp; Descuentos</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-1.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Italy</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Rialto Mountains</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-2.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>United States</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">San Francisco</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-3.jpg" alt="Image" class="img-fluid"></a>
					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Malaysia</span>
					</span>
					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Perhentian Islands</a></h3>
							<div class="price ml-auto">
								<span>$750.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-3 mb-4 mb-lg-0">
				<div class="media-1">
					<a href="#" class="d-block mb-3"><img src="images/hero-slider-4.jpg" alt="Image" class="img-fluid"></a>

					<span class="d-flex align-items-center loc mb-2">
						<span class="icon-room mr-3"></span>
						<span>Switzerland</span>
					</span>

					<div class="d-flex align-items-center">
						<div>
							<h3><a href="#">Lake Thun</a></h3>
							<div class="price ml-auto">
								<span>$520.00</span>
							</div>
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="py-5 cta-section">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h2 class="mb-2 text-white">Le permite explorar lo mejor. Contáctanos ahora</h2>
				<p class="mb-4 lead text-white text-white-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, fugit?</p>
				<p class="mb-0"><a href="{{ route('contact') }}" class="btn btn-outline-white text-white btn-md font-weight-bold">Ponerse en contacto</a></p>
			</div>
		</div>
	</div>
</div>
@endsection

	
