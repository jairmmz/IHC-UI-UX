@extends('layouts.app')
@section('title', 'Tour Apurímac - Elementos')

@section('content')
    <div class="untree_co-section">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 justify-content-center">
                    <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                        <div class="text-center">
                            <h2 class="">Login</h2>
                        </div>
                        <form action="{{ route('home') }}" class="contact-form bg-white">
                            <div class="form-group">
                                <label class="text-black" for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> Recordad contraseña </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!"> Olvide mi contraseña</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mb-4">Ingresar</button>
                            </div>
                        </form>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>No eres miembro? <a href="{{ route('register') }}">Registrarse</a></p>
                            <p>O regístrate con:</p>
                            <div class="widget d-md-inline-block">
                                <a href="#"><span class="icon-twitter pl-4 pr-4"></span></a>
                                <a href="#"><span class="icon-facebook pl-4 pr-4"></span></a>
                                <a href="#"><span class="icon-google pl-4 pr-4"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
