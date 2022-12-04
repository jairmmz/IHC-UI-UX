@extends('layouts.app')
@section('title', 'Tour Apurímac - Elementos')

@section('content')
    <div class="untree_co-section">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-title">Registro</h2>
                        <form class="contact-form bg-white">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="fname">Nombres</label>
                                        <input type="text" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lname">Apellidos</label>
                                        <input type="text" class="form-control" id="lname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Correo electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Contraseña</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="text-black" for="password">Repetir contraseña</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <label>
                                        <input type="checkbox" class="checkbox" value="remember-me"> He leído y acepto los <a href="#">Términos y Condiciones</a>.
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    
                </div>
            </div>
        </div>
    </div>

@endsection
