<!-- MODAL PARA EDITAR EL USUARIO -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="editarModalLabel">Editar Resoluciones</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formEditarResoluciones" method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nombre_archivo" class="form-label texto">Nombre de la resolucion</label>
                        <input type="text" name="nombre_archivo" class="form-control" id="editarNombreArchivo">
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label texto">Apellido</label>
                        <textarea type="text" name="descripcion" class="form-control" id="editarDescripcion"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label texto">Archivo</label>
                        <input type="file" name="url" class="form-control">
                    </div>
                </div>
                <div class="modal-footer" id="footer">
                    <button type="submit" class="btn btn-outline-success">Actualizar</button>
                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
