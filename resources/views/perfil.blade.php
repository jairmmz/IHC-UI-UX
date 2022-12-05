@extends('layouts.app')
@section('title', 'Tour Apurímac - Elementos')

@section('content')
    <div class="untree_co-section">
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="custom-block" data-aos="fade-up" data-aos-delay="100">
                        <h2 class="section-title">Mi Perfil</h2>
                        <form action="{{ route('perfil.update', ['contact' => '1']) }}" class="contact-form bg-white"
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
                            <input type="submit" class="btn btn-primary" value="Actualizar mi perfil">
                            <input type="submit" class="btn btn-danger  form-delete" value="Eliminar mi perfil">
                        </form>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="custom-block" data-aos="fade-up">
                        <h2 class="section-title">Mi foto de perfil</h2>
                        <div class="row gutter-v2 gallery">
                            <div class="col-4">
                                <a href="images/person_3.jpg" class="gal-item" data-fancybox="gal"><img
                                        src="images/person_3.jpg" alt="Image" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="image-input">
                                <label for="imageInput" class="text-black">Ingrese una foto de perfil</label>
                                <input type="file" accept="image/*" class="form-control" id="imageInput">
                                <img src="" class="image-preview">
                            </div>
                        </div>
                    </div> <!-- END .custom-block -->
                </div>

            </div>
        </div>
    </div>
@endsection

@section('jsconfirm')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.form-delete').click(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Está seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, eliminar!',
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Eliminado!',
                    'Su cuenta ha sido eliminado.',
                    'success'
                    )
                }
                })
        })

    </script>
@endsection
