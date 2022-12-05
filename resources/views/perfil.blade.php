@extends('layouts.app')
@section('title', 'Tour Apurímac - Elementos')

@section('content')
    <div class="untree_co-section">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-title">Mi Perfil</h2>
                        <form id="myform" name="myform" action="{{ route('perfil.update', ['contact' => '1']) }}" class="contact-form bg-white"
                            method="POST">
                            @method('PATCH')
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="firstName">Nombres</label>
                                        <input type="text" class="form-control" id="firstName" name="firstName"
                                            value="{{ $contact->firstName }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="text-black" for="lastName">Apellidos</label>
                                        <input type="text" class="form-control" id="lastName" name="lastName"
                                            value="{{ $contact->lastName }}">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Correro electrónico</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                    name="email" value="{{ $contact->email }}" readonly>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="phoneNumber">Número de celular</label>
                                <input type="text" class="form-control" id="phoneNumber"
                                    aria-describedby="phoneNumberHelp" name="phoneNumber"
                                    value="{{ $contact->phoneNumber }}">
                            </div>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                Actualizar perfil
                            </button>

                            <!-- Modal -->
                        </form>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Confirmación!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ¿Desea actualizar su perfil?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                    <button type="button" class="btn btn-primary" form="CreateForm">Aceptar</button>
                                    {{-- <input type="submit" class="btn btn-primary" form="CreateForm" value="Actualizar mi perfil"> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="custom-block" data-aos="fade-up">
                        <h2 class="section-title">Social Icons</h2>
                        <ul class="list-unstyled social-icons light">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-google"></span></a></li>
                            <li><a href="#"><span class="icon-play"></span></a></li>
                        </ul>
                    </div> <!-- END .custom-block -->

                </div>
                <div class="col-lg-4">
                    <div class="custom-block" data-aos="fade-up">
                        <h2 class="section-title">Accordion</h2>
                        <div class="custom-accordion" id="accordion_1">
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">How
                                        to
                                        download and register?</button>
                                </h2>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordion_1">
                                    <div class="accordion-body">
                                        Far far away, behind the word mountains, far from the countries Vokalia and
                                        Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right
                                        at the coast of the Semantics, a large language ocean.
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->

                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How
                                        to
                                        create your paypal account?</button>
                                </h2>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordion_1">
                                    <div class="accordion-body">
                                        A small river named Duden flows by their place and supplies it with the necessary
                                        regelialia. It is a paradisematic country, in which roasted parts of sentences fly
                                        into your mouth.
                                    </div>
                                </div>
                            </div> <!-- .accordion-item -->
                            <div class="accordion-item">
                                <h2 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">How
                                        to link your paypal and bank account?</button>
                                </h2>

                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                    data-parent="#accordion_1">
                                    <div class="accordion-body">
                                        When she reached the first hills of the Italic Mountains, she had a last view back
                                        on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and
                                        the subline of her own road, the Line Lane. Pityful a rethoric question ran over her
                                        cheek, then she continued her way.
                                    </div>
                                </div>

                            </div> <!-- .accordion-item -->

                        </div>
                    </div> <!-- END .custom-block -->
                    <div class="custom-block" data-aos="fade-up">
                        <h2 class="section-title">Gallery</h2>
                        <div class="row gutter-v2 gallery">
                            <div class="col-4">
                                <a href="images/gal_1.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_1.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                                <a href="images/gal_2.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_2.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                                <a href="images/gal_3.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_3.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                                <a href="images/gal_4.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_4.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                                <a href="images/gal_5.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_5.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                            <div class="col-4">
                                <a href="images/gal_6.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/gal_6.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                        </div>
                    </div> <!-- END .custom-block -->

                    <div class="custom-block" data-aos="fade-up">
                        <h2 class="section-title">Video</h2>

                        <a href="https://vimeo.com/342333493" data-fancybox class="video-wrap">
                            <span class="play-wrap"><span class="icon-play"></span></span>
                            <img src="images/bg_1.jpg" alt="Image" class="img-fluid rounded">
                        </a>
                    </div> <!-- END .custom-block -->
                </div>



            </div>
        </div>
    </div>
@endsection
