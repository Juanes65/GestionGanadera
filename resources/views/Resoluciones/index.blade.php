@extends('layouts.principal')

@section('title', 'Procedimientos')

@section('contenido')
    <div class="contenido">
        <h3 class="titulo ">Procedimientos Registrados</h3>
    </div>
    <br>

    <div class="card-body card-registros">
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
                                            <th scope="col">Nombre de la resolucion</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Archivo</th>
                                            <th scope="col" style="width: 100px;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($resolucione as $resolucion)
                                            <tr>
                                                <td>{{ $resolucion->nombre_archivo }}</td>
                                                <td>{{ $resolucion->descripcion }}</td>
                                                <td><a href="{{asset($resolucion->url)}}" target="blank_"><img src="{{asset('images/pdf.webp')}}" height="50px"></a></td>
                                                <td class="td-actions text-left">
                                                    <!-- Botón de edición con atributos de datos -->
                                                    <a href="#" class="btn btn-warning editar-resolucion"
                                                        data-id="{{ $resolucion->id }}"
                                                        data-nombre_archivo="{{ $resolucion->nombre_archivo }}"
                                                        data-descripcion="{{ $resolucion->descripcion }}"
                                                        data-bs-toggle="modal" data-bs-target="#editarModal">
                                                        <span class="material-symbols-outlined">edit</span>
                                                    </a>

                                                    @include('includes.ModalEditarResoluciones')

                                                    <form action="{{ route('destroy.resolucion', $resolucion->id) }}"
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

@endsection

@section('js')
    <script>
        $(document).ready(function() {

            // Inicializa Select2 en todos los selects del modal
            $('select').select2({
                dropdownParent: $('#editarModal'),
                width: '100%', // Para que ocupe todo el ancho disponible
                placeholder: "Seleccione una opción", // Placeholder opcional
                allowClear: true // Permite limpiar la selección
            });

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

            $('.editar-resolucion').on('click', function() {
                var id = $(this).data('id');
                var nombre_archivo = $(this).data('nombre_archivo');
                var descripcion = $(this).data('descripcion');

                // Cargar los datos en el modal
                $('#editarNombreArchivo').val(nombre_archivo);
                $('#editarDescripcion').val(descripcion);

                // Actualizar la acción del formulario
                $('#formEditarResoluciones').attr('action', "{{ route('update.resolucion', ':id') }}".replace(':id', id));
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

            @if (session('danger'))
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "{{ session('danger') }}"
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
