<!-- Modal ANIMALS -->
<div class="modal fade" id="animals" tabindex="-1" aria-labelledby="exampleModalToggleLabel" aria-hidden="true">>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalToggleLabel">Seleccione una opcion (Animeles)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mt-5">
                        <div class="image-menu">
                            <img src="images/insert.png" class="img">
                            <br>
                            <a type="button" href="{{ route('index.animals') }}"
                                class="btn btn-custom btn btn-success MiClase">
                                Ver registros
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-6 mt-5">
                        <div class="image-menu">
                            <img src="images/ver_registros.jpg" class="img">
                            <br>
                            <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal"
                                data-bs-target="#insertanimals">
                                Insertar registros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary cerrar" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<!-- Modal USUARIOS -->
<div class="modal fade" id="users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seleccione una opcion (Usuarios)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 mt-5">
                        <img src="images/insert.png" class="img">
                        <br>
                        <a type="button" href="{{ route('index.Usuario') }}"
                            class="btn btn-custom btn btn-success MiClase">
                            Ver registros
                        </a>
                    </div>
                    <br>
                    <div class="col-sm-6 mt-5">
                        <div class="image-menu">
                            <img src="images/ver_registros.jpg" class="img">
                            <br>
                            <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal" data-bs-target="#insertUsers">
                                Insertar registros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<!-- Modal INVENTARIO -->
<div class="modal fade" id="inventario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Seleccione La opcion (Inventario)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 divisor mt-5">
                        <div class="image-menu">
                            <img src="images/insert.png" class="img">
                            <br>
                            <a type="button" href="{{ route('index.inventario') }}"
                                class="btn btn-custom btn btn-success MiClase">
                                Ver registros
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-6 divisor mt-5">
                        <div class="image-menu">
                            <img src="images/ver_registros.jpg" class="img">
                            <br>
                            <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal"
                                data-bs-target="#insertInsumos">
                                Insertar registros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}

<!-- Modal PROCEDIMIENTOS -->
<div class="modal fade" id="procedimientos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalLabel">Seleccione La opcion (Procedimientos)</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-6 divisor mt-5">
                        <div class="image-menu">
                            <img src="images/insert.png" class="img">
                            <br>
                            <a type="button" href="{{ route('index.procedimiento') }}"
                                class="btn btn-custom btn btn-success MiClase">
                                Ver registros
                            </a>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-6 divisor mt-5">
                        <div class="image-menu">
                            <img src="images/ver_registros.jpg" class="img">
                            <br>
                            <a type="button" class="btn btn-custom btn btn-success MiClase" data-bs-toggle="modal"
                                data-bs-target="#insertProcedimientos">
                                Insertar registros
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
