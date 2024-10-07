@extends('layouts.principal')

@section('title', 'Usuarios')

@section('contenido')
    <div class="divisor">
        <h3 class="texto ">Añadir Nuevo Usuario</h3>
    </div>
    <br>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user CardFormulario">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <form action="{{route('store.Usuario')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombres</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                                        value="{{ old('name') }}">
                                    @if ($errors->has('name'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellidos</label>
                                    <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1"
                                        value="{{ old('apellido') }}">
                                    @if ($errors->has('apellido'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('apellido') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="cedula" class="form-label">Cedula</label>
                                    <input type="text" name="cedula" class="form-control" id="exampleFormControlInput1"
                                        value="{{ old('cedula') }}">
                                    @if ($errors->has('cedula'))
                                        <span class="error text-danger" for="input-name">{{ $errors->first('cedula') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Direccion de correo</label>
                                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                                        value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input type="password" name="password" class="form-control"
                                        id="exampleFormControlInput1">
                                    @if ($errors->has('password'))
                                        <span class="error text-danger"
                                            for="input-name">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="ml-auto mr-auto d-flex justify-content-center flex-column bd-highlight mb-3">
                                    <button type="submit" class="btn btn-outline-success">Registrar</button>
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
