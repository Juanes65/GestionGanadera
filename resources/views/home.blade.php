@extends('layouts.principal')

@section('title', 'Menu')

@section('contenido')

    <main class="row mt-4">

        <div class="col-12">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 ">
                <div class="col">
                    <div class="card h-100 text-center">
                        <div class="card-body MiClase">
                            <div class="icon">
                                <img src="{{asset('images/ppal_animal.jpg')}}" class="imagen_modal">
                            </div>
                            <h3 class="card-title">Total Animales</h3>
                            <p class="card-text">{{ $total_animals }}</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        <div class="card-body MiClase">
                            <div class="icon">
                                <img src="{{asset('images/procedimientos.jpg')}}" class="imagen_modal">
                            </div>
                            <h3 class="card-title">Total Procedimientos del día</h3>
                            <p class="card-text">{{ $total_procedure }}</p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 text-center">
                        <div class="card-body MiClase">
                            <div class="icon">
                                <img src="{{asset('images/medicamentos.jpg')}}" class="imagen_modal">
                            </div>
                            <h3 class="card-title">Medicamentos Vencidos</h3>
                            <p class="card-text">{{ $total_medicamentos }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <h1 class="text-center mb-4" style="color: white; font-size: 25px">Control</h1>
            <br>
            <div class="d-flex flex-wrap justify-content-center gap-3" style="text-align: center">
                <div style="text-align: center">
                    <div>
                        <img src="images/animales.jpg" class="img">
                    </div>
                    <br>
                    <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#animals" >
                        Opciones para los Animales
                    </a>
                </div>

                <div style="text-align: center">
                    <img src="images/usuarios.webp" class="img">
                    <br>
                    <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#users">
                        Opciones para los usuarios
                    </a>
                </div>

                <div style="text-align: center">
                    <div style="text-align: end">
                        <img src="images/medics.jpg" class="img">
                    </div>
                    <br>
                    <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#inventario">
                        Opciones para los medicamento
                    </a>
                </div>

                <div style="text-align: center">
                    <img src="images/procedures.jpg" class="img">
                    <br>
                    <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#procedimientos">
                        Opciones para los procedimientos
                    </a>
                </div>

                <div style="text-align: center">
                    <img src="img/images.png" class="img">
                    <br>
                    <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#inventario">
                        Opciones para los archivos
                    </a>
                </div>
            </div>
            {{-- SE INCLUYEN LOS MODALS --}}
            @include('includes.ModalPrincipal')
            @include('includes.ModalInsertar')
        </div>
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            // Inicializa Select2 en todos los selects del modal
            $('select').select2({
                dropdownParent: $('#insertProcedimientos'),
                width: '100%', // Para que ocupe todo el ancho disponible
                placeholder: "Seleccione una opción", // Placeholder opcional
                allowClear: true // Permite limpiar la selección
            });
        });
    </script>
@endsection
