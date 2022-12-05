@extends('layouts.app')
@section('title', 'Tour Apurímac - Registro')

@section('content')
    <div class="container-fluid px-1 px-md-4 py-5 mx-auto mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-11 col-lg-10 col-xl-9">
                <div class="card card0 border-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card00 m-2 border-0">
                                <div class="row text-center justify-content-center px-3">
                                    <p class="prev text-success"><span class="fa edit-back fa-long-arrow-left"> Regresar</span></p
                                        id="back">
                                    <h3 class="mt-4">Registro</h3>
                                </div>
                                <div class="d-flex flex-md-row px-3 mt-4 flex-column-reverse">
                                    <div class="col-md-6">
                                        <div class="card1">
                                            <ul id="progressbar" class="text-center">
                                                <li class="active step0"></li>
                                                <li class="step0"></li>
                                                <li class="step0"></li>
                                                <li class="step0"></li>
                                            </ul>
                                            <h6 class="mb-5">Datos personales</h6>
                                            <h6 class="mb-5">Correo electrónico</h6>
                                            <h6 class="mb-5">Intereses</h6>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card2 first-screen show ml-2">
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> 
                                                    <input type="text" id="firstName" class="form-control" required> 
                                                    <label class="ml-3 form-control-placeholder" for="firstName">Nombres</label>
                                                </div>
                                                <div class="form-group mt-1 mb-1"> 
                                                    <input type="text" id="lastName" class="form-control" required> 
                                                    <label class="ml-3 form-control-placeholder" for="lastName">Apellidos</label>
                                                </div>
                                            </div>
                                            <div class="row px-3 mt-1">
                                                <div class="custom-control custom-checkbox"> <input
                                                        id="customCheck1" type="checkbox" class="custom-control-input">
                                                    <label for="customCheck1" class="custom-control-label">Quiero recibir notificaciones.</label>
                                                </div>
                                            </div>
                                            <div class="row px-3 mb-5">
                                                <div class="next-button text-center mt-1 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                                            </div>
                                        </div>
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-4">
                                                <div class="form-group mt-1 mb-1"> 
                                                    <input type="text" id="email" class="form-control" required> 
                                                    <label class="ml-3 form-control-placeholder" for="email">Correo Electrónico</label>
                                                </div>
                                                <div class="form-group mt-1 mb-1"> 
                                                    <input type="password" id="password" class="form-control" required> 
                                                    <label class="ml-3 form-control-placeholder" for="password">Contraseña</label>
                                                </div>
                                            </div>
                                            <div class="row px-3 mb-5">
                                                <div class="next-button text-center mt-1 ml-2"> <span class="fa fa-arrow-right"></span> </div>
                                            </div>
                                        </div>
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-3">
                                                <p class="mb-0 w-100 mb-2">Seleccione sus intereses:</p>
                                                <div class="custom-control custom-checkbox mb-2 ml-4"> 
                                                    <input type="checkbox" id="pinterest1" class="custom-control-input">
                                                    <label for="pinterest1" class="custom-control-label">Destinos turísticos.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2 ml-4"> 
                                                    <input type="checkbox" id="pinterest2" class="custom-control-input">
                                                    <label for="pinterest2" class="custom-control-label">Festividades.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2 ml-4"> 
                                                    <input type="checkbox" id="pinterest3" class="custom-control-input">
                                                    <label for="pinterest3" class="custom-control-label">Deportes.</label>
                                                </div>
                                                <div class="custom-control custom-checkbox mb-2 ml-4"> 
                                                    <input type="checkbox" id="pinterest4" class="custom-control-input">
                                                    <label for="pinterest4" class="custom-control-label">Costumbres.</label>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="next-button text-center mt-1 ml-2" style="">Registrarse</div>
                                            </div>
                                        </div>
                                        <div class="card2 ml-2">
                                            <div class="row px-3 mt-2 mb-4 text-center">
                                                <h2 class="col-12 text-success"><strong>Success !</strong></h2>
                                                <div class="col-12 text-center">
                                                    <img class="tick" style="color: green" src="https://media.tenor.com/0EflySmYSuAAAAAC/check-mark-button-joypixels.gif">
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-lg-6">
                                                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sessión</a>
                                                </div>
                                                <div class="col-lg-6">
                                                    <a href="{{ route('home') }}" class="btn btn-primary">Regresar al home</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row px-3">
                                    <h2 class="text-muted get-bonus mt-4 mb-5">
                                        {{-- Registro --}}
                                        <span class="text-danger">
                                            
                                        </span>
                                    </h2> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
