<!-- MODAL PARA EDITAR EL USUARIO -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="editarModalLabel">Editar Animal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarAnimal" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre" class="form-label texto">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="editarNombre" placeholder="Nombre">
                        @if ($errors->has('nombre'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('nombre') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="tipoAnimal" class="form-label texto">Tipo de animal</label>
                        <input type="text" name="tipoAnimal" class="form-control" id="editarTipoAnimal" placeholder="Tipo de animal">
                        @if ($errors->has('tipoAnimal'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('tipoAnimal') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="raza" class="form-label texto">Raza</label>
                        <input type="text" name="raza" class="form-control" id="editarRaza" placeholder="Rza">
                        @if ($errors->has('raza'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('raza') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label texto">Edad</label>
                        <input type="number" name="edad" class="form-control" id="editarEdad" placeholder="Edad">
                        @if ($errors->has('edad'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('edad') }}</span>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label for="marcacion" class="form-label texto">Marcación</label>
                        <input type="number" name="marcacion" class="form-control" id="editarMarcacion" placeholder="Marcaciones">
                        @if ($errors->has('marcacion'))
                            <span class="error text-danger" for="input-nombre">{{ $errors->first('marcacion') }}</span>
                        @endif
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-success">Actualizar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
