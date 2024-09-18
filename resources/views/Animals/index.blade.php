@extends('layouts.principal')

@section('title', 'Animales')

@section('contenido')
    <div class="divisor">
        <h3 class="texto ">Animales Registrados</h3>
    </div>
    <br>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user CardFormulario">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author table-responsive">
                            <div class="card-body">
                                <table class="table table-bordered table-striped" id="cliente">
                                    <thead class="table-dark">
                                        <tr style="text-align: center">
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Tipo de animal</th>
                                            <th scope="col">Raza</th>
                                            <th scope="col">Edad</th>
                                            <th scope="col">Identificador</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($animals as $animal)
                                            <tr>
                                                <td>{{ $animal->nombre }}</td>
                                                <td>{{ $animal->tipoAnimal }}</td>
                                                <td>{{ $animal->raza }}</td>
                                                <td>{{ $animal->edad }}</td>
                                                <td>{{ $animal->marcacion }}</td>
                                                <td class="td-actions text-left">
                                                    <!-- Botón de edición con atributos de datos -->
                                                    <a href="#" class="btn btn-warning editar-animal"
                                                        data-id="{{ $animal->id }}" data-nombre="{{ $animal->nombre }}"
                                                        data-tipoAnimal="{{ $animal->tipoAnimal }}"
                                                        data-raza="{{ $animal->raza }}" data-edad="{{ $animal->edad }}"
                                                        data-marcacion="{{ $animal->marcacion }}" data-bs-toggle="modal"
                                                        data-bs-target="#editarModal">
                                                        <span class="material-symbols-outlined">edit</span>
                                                    </a>

                                                    @include('includes.ModalEditarAnimal')

                                                    <form action="{{ route('destroy.animals', $animal->id) }}"
                                                        class="form-eliminar" method="POST" style="display:inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                            <span class="material-symbols-outlined">
                                                                delete
                                                            </span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SE INCLUYEN LOS MODALS --}}

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#cliente').DataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontraron resultados - Disculpa",
                    "info": "Mostrando la página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "search": "Buscar: ",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior",
                    }
                }
            });

            $('.editar-animal').on('click', function() {
                var id = $(this).data('id');
                var nombre = $(this).data('nombre');
                var tipo = $(this).data('tipoanimal'); // Cambia 'tipoanimal' a 'tipoAnimal'
                var raza = $(this).data('raza');
                var edad = $(this).data('edad');
                var marcacion = $(this).data('marcacion');

                // Cargar los datos en el modal
                $('#editarNombre').val(nombre);
                $('#editarTipoAnimal').val(tipo);
                $('#editarRaza').val(raza);
                $('#editarEdad').val(edad);
                $('#editarMarcacion').val(marcacion);

                // Actualizar el formulario con la ruta correcta
                $('#formEditarAnimal').attr('action', "{{ route('update.animals', ':id') }}".replace(':id',
                    id));
            });

            @if (session('success'))
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            @if (session('success'))
                Swal.fire({
                    position: "top-center",
                    icon: "success",
                    title: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 1500
                });
            @endif

            $('.form-eliminar').submit(function(e) {
                e.preventDefault();
                const form = this;
                Swal.fire({
                    title: "¿Está seguro?",
                    text: "¡Se eliminará la información!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "¡Eliminar!",
                    cancelButtonText: "Cancelar"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Eliminado",
                            text: "{{ session('success') }}",
                            icon: "success"
                        }).then(() => {
                            form.submit();
                        });
                    }
                });
            });
        });
    </script>
@endsection
