@extends('layouts.app')
@section('title', 'Contacto')

@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Contact Us</h1>
                        <p class="text-white">Lejos, muy lejos, detrás de las montañas de la palabra, lejos de los países Vokalia y Consonantia, viven los textos ciegos. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form action="{{ route('contact.store') }}" class="contact-form" data-aos="fade-up" data-aos-delay="200" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="firstName">Nombres*</label>
                                    <input type="text" name="firstName" class="form-control" id="firstName" value="{{ old('firstName') }}">
                                    @error('firstName')
                                    <div class="form-text" style="color: #f00">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lastName">Apellidos*</label>
                                    <input type="text" name="lastName" class="form-control" id="lastName" value="{{ old('lastName') }}">
                                    @error('lastName')
                                    <div class="form-text" style="color: #f00">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="email">Correo electrónico*</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                            @error('email')
                            <div class="form-text" style="color: #f00">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="message">Mensaje*</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
                            @error('message')
                            <div class="form-text" style="color: #f00">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
                <div class="col-lg-5 ml-auto">
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-house"></span>
                        <address class="text">
                            155 Market St #101, Paterson, NJ 07505, United States
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-phone-call"></span>
                        <address class="text">
                            +1 202 2020 200
                        </address>
                    </div>
                    <div class="quick-contact-item d-flex align-items-center mb-4">
                        <span class="flaticon-mail"></span>
                        <address class="text">
                            @info@mydomain.com
                        </address>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="untree_co-section testimonial-section mt-5 bg-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <h2 class="section-title text-center mb-5">Testimonials</h2>

                    <div class="owl-single owl-carousel no-nav">
                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_2.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Adam Aderson</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_3.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Lukas Devlin</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                        <div class="testimonial mx-auto">
                            <figure class="img-wrap">
                                <img src="images/person_4.jpg" alt="Image" class="img-fluid">
                            </figure>
                            <h3 class="name">Kayla Bryant</h3>
                            <blockquote>
                                <p>&ldquo;There live the blind texts. Separated they live in Bookmarksgrove right at the
                                    coast of the Semantics, a large language ocean.&rdquo;</p>
                            </blockquote>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
