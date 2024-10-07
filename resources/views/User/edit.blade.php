@extends('layouts.principal')

@section('title', 'Usuarios')

@section('contenido')
    <p>Editar Usuario</p>
    <br>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user CardFormulario">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <form action="{{ route('update.Usuario', $usuario->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" name="name" class="form-control"
                                        value="{{ old('name', $usuario->name) }}" id="exampleFormControlInput1">
                                    @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Pimer Apellido</label>
                                    <input type="text" name="apellido" class="form-control"
                                        value="{{ old('apellido', $usuario->apellido) }}" id="exampleFormControlInput1">
                                    @if ($errors->has('apellido'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('apellido') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="cedula" class="form-label">Cedula</label>
                                    <input type="text" name="cedula" class="form-control"
                                        value="{{ old('cedula', $usuario->cedula) }}" id="exampleFormControlInput1">
                                    @if ($errors->has('cedula'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('cedula') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ old('email', $usuario->email) }}" id="exampleFormControlInput1">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Ingrese la contraseña solo si es necesario"
                                        id="exampleFormControlInput1">
                                </div>

                                <div
                                    class="card-footer ml-auto mr-auto d-flex justify-content-center flex-column bd-highlight mb-3">
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                            </form>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-center",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@endsection
