<!-- MODAL PARA EDITAR EL USUARIO -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="editarModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarInsumos" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombreMedicamento" class="form-label texto">Nombre del medicamento</label>
                        <input type="text" name="nombreMedicamento" class="form-control" id="editarNombremedicamento">
                    </div>

                    <div class="mb-3">
                        <label for="cantidad" class="form-label texto">Cantidad</label>
                        <input type="number" name="cantidad" class="form-control" id="editarCantidad">
                    </div>

                    <div class="mb-3">
                        <label for="fechaVencimiento" class="form-label texto">Fecha de vencimiento</label>
                        <input type="date" name="fechaVencimiento" class="form-control" id="editarFechaVencimiento">
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label texto">Categoria</label>
                        <input type="text" name="categoria" class="form-control" id="editarCategoria">
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
