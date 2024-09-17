@extends('layouts.principal')

@section('title', 'Usuarios')

@section('contenido')
    <div class="divisor">
        <h3 class="texto ">Usuarios Registrados</h3>
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

                                                    <a href="{{ route('edit.Usuario', $users->id) }}"
                                                        class="btn btn-warning">
                                                        <span class="material-symbols-outlined">
                                                            edit
                                                        </span>
                                                    </a>

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
