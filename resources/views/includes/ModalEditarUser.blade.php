<!-- MODAL PARA EDITAR EL USUARIO -->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="editarModalLabel">Editar Usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formEditarUsuario" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label texto">Nombre</label>
                        <input type="text" name="name" class="form-control" id="editarNombre">
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label texto">Apellido</label>
                        <input type="text" name="apellido" class="form-control" id="editarApellido">
                    </div>

                    <div class="mb-3">
                        <label for="cedula" class="form-label texto">Cédula</label>
                        <input type="text" name="cedula" class="form-control" id="editarCedula">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label texto">Correo</label>
                        <input type="email" name="email" class="form-control" id="editarEmail">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label texto">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Ingrese la contraseña solo si es necesario" id="editarPassword">
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
