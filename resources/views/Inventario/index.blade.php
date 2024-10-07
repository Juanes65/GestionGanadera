@extends('layouts.principal')

@section('title', 'Insumos')

@section('contenido')
    <div class="contenido">
        <h3 class="titulo ">Insumos Registrados</h3>
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
                                            <th scope="col">Nombre del medicamento</th>
                                            <th scope="col">Cantidad</th>
                                            <th scope="col">Fecha de vencimiento</th>
                                            <th scope="col">Categotia</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inventory as $inventario)
                                            <tr>
                                                <td>{{ $inventario->nombreMedicamento }}</td>
                                                <td>{{ $inventario->cantidad }}</td>
                                                <td>{{ $inventario->fechaVencimiento }}</td>
                                                <td>{{ $inventario->categoria }}</td>
                                                <td class="td-actions text-left">
                                                    <!-- Botón de edición con atributos de datos -->
                                                    <a href="#" class="btn btn-warning editar-insumos"
                                                        data-id="{{ $inventario->id }}"
                                                        data-nombremedicamento="{{ $inventario->nombreMedicamento }}"
                                                        data-cantidad="{{ $inventario->cantidad }}"
                                                        data-fechaVencimiento="{{ $inventario->fechaVencimiento }}"
                                                        data-categoria="{{ $inventario->categoria }}" data-bs-toggle="modal"
                                                        data-bs-target="#editarModal">
                                                        <span class="material-symbols-outlined">edit</span>
                                                    </a>

                                                    @include('includes.ModalEditarInsumos')

                                                    <form action="{{ route('destroy.inventario', $inventario->id) }}"
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

            $('.editar-insumos').on('click', function() {
                // Obtener los datos del usuario desde los atributos data-*
                var id = $(this).data('id');
                var nombremedicamento = $(this).data('nombremedicamento');
                var cantidad = $(this).data('cantidad');
                var fechaVencimiento = $(this).data('fechavencimiento');
                var categoria = $(this).data('categoria');

                // Cargar los datos en el modal
                $('#editarNombremedicamento').val(nombremedicamento);
                $('#editarCantidad').val(cantidad);
                $('#editarFechaVencimiento').val(fechaVencimiento);
                $('#editarCategoria').val(categoria);

                // Actualizar el formulario con la ruta correcta usando un marcador de posición en la ruta de Laravel
                $('#formEditarInsumos').attr('action', "{{ route('update.inventario', ':id') }}".replace(
                    ':id', id));
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

            // @if (session('danger'))
            //     Swal.fire({
            //         icon: "error",
            //         title: "Oops...",
            //         text: "{{ session('danger') }}"
            //     });
            // @endif

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
