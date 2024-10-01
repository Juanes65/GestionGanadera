<!-- MODAL PARA EDITAR EL PROCEDIMIENTO -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="editarModalLabel">Editar Procedimientos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarProcedimientos" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombreProcedimiento" class="form-label texto">Nombre del procedimeinto</label>
                        <input type="text" name="nombreProcedimiento" class="form-control"
                            id="editarNombreprocedimiento" placeholder="Nombre del procedimiento">
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="form-label texto">Cantidad</label>
                        <input type="text" name="cantidad" class="form-control" id="editarCantidad"
                            placeholder="Cantidad">
                    </div>

                    <div class="mb-3">
                        <label for="id_inventario" class="form-label texto">Insumos</label>
                        <select name="id_inventario" id="editarId_inventario" class="form-select">
                            @foreach ($insumos as $insumo)
                                <option value="{{ $insumo->id }}">{{ $insumo->nombreMedicamento }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_animal" class="form-label texto">Animal</label>
                        <select name="id_animal" id="editarId_animal" class="form-select">
                            @foreach ($animales as $animal)
                                <option value="{{ $animal->id }}">{{ $animal->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_usuario" class="form-label texto">Usuario</label>
                        <select name="id_usuario" id="editarId_usuario" class="form-select">
                            @foreach ($usuarios as $usuario)
                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label texto">Descripcion</label>
                        <textarea name="descripcion" class="form-control" id="editarDescripcion" placeholder="Descripción"></textarea>
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
