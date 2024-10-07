@extends('layouts.principal')

@section('title', 'Usuarios')

@section('contenido')
    <div class="contenido">
        <h3 class="titulo">Usuarios Registrados</h3>
    </div>

    <br>

    <div class="card-body card-registros">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user CardFormulario">
                    <div class="card-body card">
                        <p class="card-text">
                        <div class="author table-responsive">
                            <div class="card-body">
                                <table class="table table-bordered table-striped" id="cliente">
                                    <thead class="table-dark">
                                        <tr style="text-align: center">
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($usuarios as $users)
                                            <tr>
                                                <td>{{ $users->name }}</td>
                                                <td>{{ $users->apellido }}</td>
                                                <td>{{ $users->cedula }}</td>
                                                <td>{{ $users->email }}</td>
                                                <td class="td-actions text-left">
                                                    <!-- Botón de edición con atributos de datos -->
                                                    <a href="#" class="btn btn-warning editar-usuario"
                                                        data-id="{{ $users->id }}" data-name="{{ $users->name }}"
                                                        data-apellido="{{ $users->apellido }}"
                                                        data-cedula="{{ $users->cedula }}" data-email="{{ $users->email }}"
                                                        data-bs-toggle="modal" data-bs-target="#editarModal">
                                                        <span class="material-symbols-outlined">edit</span>
                                                    </a>

                                                    @include('includes.ModalEditarUser')

                                                    <form action="{{ route('destroy.Usuario', $users->id) }}"
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

            $('.editar-usuario').on('click', function() {
                // Obtener los datos del usuario desde los atributos data-*
                var id = $(this).data('id');
                var name = $(this).data('name');
                var apellido = $(this).data('apellido');
                var cedula = $(this).data('cedula');
                var email = $(this).data('email');

                // Cargar los datos en el modal
                $('#editarNombre').val(name);
                $('#editarApellido').val(apellido);
                $('#editarCedula').val(cedula);
                $('#editarEmail').val(email);

                // Actualizar el formulario con la ruta correcta usando un marcador de posición en la ruta de Laravel
                $('#formEditarUsuario').attr('action', "{{ route('update.Usuario', ':id') }}".replace(
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
