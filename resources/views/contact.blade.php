@extends('layouts.app')
@section('title', 'Tour Apurímac - Contacto')

@section('content')
    <div class="hero hero-inner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mx-auto text-center">
                    <div class="intro-wrap">
                        <h1 class="mb-0">Contáctenos</h1>
                        <p class="text-white">Lejos, muy lejos, detrás de las montañas de la palabra, lejos de los países Vokalia y Consonantia, viven los textos ciegos. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                @if (session('status'))
                    <div class="alert alert-{{ session('color') }} alert-dismissible fade show" role="alert">
                        <span> {{ session('message') }} </span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                  </div>
                @endif
            </div>
        </div>
    </div>

    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <form action="{{ route('contact.store') }}" class="contact-form" data-aos="fade-up" data-aos-delay="200" method="POST" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="firstName">Nombres*</label>
                                    <input type="text" name="firstName" class="form-control" id="firstName" value="{{ old('firstName') }}">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lastName">Apellidos*</label>
                                    <input type="text" name="lastName" class="form-control" id="lastName" value="{{ old('lastName') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="email">Correo electrónico*</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
                        </div>

                        <div class="form-group">
                            <label class="text-black" for="message">Mensaje*</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="5">{{ old('message') }}</textarea>
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

@endsection

@section('jsvalidation')
    {!! JsValidator::formRequest('App\Http\Requests\UserRequest') !!}
@endsection