<!-- MODAL PARA INSERTAR EL USUARIO -->
<div class="modal fade" id="insertUsers" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalToggleLabel2">Añadir Nuevo Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.Usuario') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label texto">Nombres</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('name') }}">
                        @if ($errors->has('name'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label texto">Apellidos</label>
                        <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('apellido') }}">
                        @if ($errors->has('apellido'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('apellido') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="cedula" class="form-label texto">Cedula</label>
                        <input type="text" name="cedula" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('cedula') }}">
                        @if ($errors->has('cedula'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('cedula') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label texto">Direccion de correo</label>
                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label texto">Contraseña</label>
                        <input type="password" name="password" class="form-control" id="exampleFormControlInput1">
                        @if ($errors->has('password'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-outline-success">Insertar</button>
                    </div>
                    <br>
                </form>
                <div>
                    <button class="btn btn-outline-danger" data-bs-target="#users" data-bs-toggle="modal" data-bs-dismiss="modal">Regresar</button>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<!-- MODAL PARA INSERTAR EL ANIMELES -->
<div class="modal fade" id="insertanimals" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalToggleLabel2">Añadir Nuevo Animal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.animals') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label texto">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="tipoAnimal" class="form-label texto">Tipo de animal</label>
                        <input type="text" name="tipoAnimal" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('tipoAnimal') }}">
                        @if ($errors->has('tipoAnimal'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('tipoAnimal') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="raza" class="form-label texto">Raza</label>
                        <input type="text" name="raza" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('raza') }}">
                        @if ($errors->has('raza'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('raza') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label texto">Edad</label>
                        <input type="number" name="edad" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('edad') }}">
                        @if ($errors->has('edad'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('edad') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="marcacion" class="form-label texto">Marcación</label>
                        <input type="number" name="marcacion" class="form-control" id="exampleFormControlInput1"
                            value="{{ old('marcacion') }}">
                        @if ($errors->has('marcacion'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('marcacion') }}</span>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-outline-success">Insertar</button>
                    </div>
                    <br>
                </form>
                <div>
                    <button class="btn btn-outline-danger" data-bs-target="#users" data-bs-toggle="modal" data-bs-dismiss="modal">Regresar</button>
                </div>

            </div>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<!-- MODAL PARA INSERTAR EL INVENTARIO -->
<div class="modal fade" id="insertInsumos" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalToggleLabel2">Añadir Nuevo Insumo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('store.inventario') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nombreMedicamento" class="form-label texto">Nombre del medicamneo</label>
                        <input type="text" name="nombreMedicamento" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del medicamento"
                            value="{{ old('nombreMedicamento') }}">
                        @if ($errors->has('nombreMedicamento'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombreMedicamento') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="form-label texto">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="exampleFormControlInput1" placeholder="Cantidad"
                            value="{{ old('cantidad') }}">
                        @if ($errors->has('cantidad'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('cantidad') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="fechaVencimiento" class="form-label texto">Fecha de vencimiento</label>
                        <input type="date" name="fechaVencimiento" class="form-control" id="exampleFormControlInput1" placeholder="Fecha de vencimiento"
                            value="<?php echo date("Y-m-d") ?>">
                        @if ($errors->has('fechaVencimiento'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('fechaVencimiento') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label texto">Categoria</label>
                        <input type="text" name="categoria" class="form-control" id="exampleFormControlInput1" placeholder="Categoria"
                            value="{{ old('categoria') }}">
                        @if ($errors->has('categoria'))
                            <span class="error text-danger" for="input-name">{{ $errors->first('categoria') }}</span>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="btn btn-outline-success">Insertar</button>
                    </div>
                    <br>
                </form>
                <div>
                    <button class="btn btn-outline-danger" data-bs-target="#inventario" data-bs-toggle="modal" data-bs-dismiss="modal">Regresar</button>
                </div>

            </div>
        </div>
    </div>
</div>