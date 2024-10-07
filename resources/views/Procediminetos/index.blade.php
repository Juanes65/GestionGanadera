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
                                            <th scope="col">Nombre del procedimiento</th>
                                            <th scope="col">Descripcion</th>
                                            <th scope="col">Cantidad del medicamento usado</th>
                                            <th scope="col">Medicamento usado</th>
                                            <th scope="col">Nombre del animal</th>
                                            <th scope="col">Usuario que realizo el procedimiento</th>
                                            <th scope="col" style="width: 100px;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($procedure as $procedures)
                                            <tr>
                                                <td>{{ $procedures->nombreProcedimiento }}</td>
                                                <td>{{ $procedures->descripcion }}</td>
                                                <td>{{ $procedures->cantidad }}</td>
                                                <td>{{ optional($procedures->inventory)->nombreMedicamento ?? 'Sin medicamento asignado' }}
                                                </td>
                                                <td>{{ optional($procedures->animal)->nombre ?? 'Sin animal asignado' }}
                                                </td>
                                                <td>{{ optional($procedures->users)->name ?? 'Sin usuario asignado' }}</td>
                                                <td class="td-actions text-left">
                                                    <!-- Botón de edición con atributos de datos -->
                                                    <a href="#" class="btn btn-warning editar-procedimientos"
                                                        data-id="{{ $procedures->id }}"
                                                        data-nombreProcedimiento="{{ $procedures->nombreProcedimiento }}"
                                                        data-descripcion="{{ $procedures->descripcion }}"
                                                        data-cantidad="{{ $procedures->cantidad }}"
                                                        data-id_inventario="{{ $procedures->id_inventario }}"
                                                        data-id_animal="{{ $procedures->id_animal }}"
                                                        data-id_usuario="{{ $procedures->id_usuario }}"
                                                        data-bs-toggle="modal" data-bs-target="#editarModal">
                                                        <span class="material-symbols-outlined">edit</span>
                                                    </a>

                                                    @include('includes.ModalEditarProcedimientos')

                                                    <form action="{{ route('destroy.procedimiento', $procedures->id) }}"
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

            $('.editar-procedimientos').on('click', function() {
                var id = $(this).data('id');
                var nombreprocedimiento = $(this).data('nombreprocedimiento');
                var descripcion = $(this).data('descripcion');
                var cantidad = $(this).data('cantidad');
                var id_inventario = $(this).data('id_inventario');
                var id_animal = $(this).data('id_animal');
                var id_usuario = $(this).data('id_usuario');

                // Cargar los datos en el modal
                $('#editarNombreprocedimiento').val(nombreprocedimiento);
                $('#editarDescripcion').val(descripcion);
                $('#editarCantidad').val(cantidad);

                // Seleccionar el valor correcto en los selects
                $('#editarId_inventario').val(id_inventario).trigger('change');
                $('#editarId_animal').val(id_animal).trigger('change');
                $('#editarId_usuario').val(id_usuario).trigger('change');

                // Actualizar la acción del formulario
                $('#formEditarProcedimientos').attr('action', "{{ route('update.procedimiento', ':id') }}".replace(':id', id));
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
