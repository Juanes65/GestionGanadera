<!-- Modal ANIMALS -->
<div class="modal fade" id="animals" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalLabel">Seleccione La opcion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="{{ route('index.animals') }}">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Show</label>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#insertanimals">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Insert</label>
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

<!-- Modal USUARIOS -->
<div class="modal fade" id="users" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalLabel">Seleccione La opcion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="{{ route('index.Usuario') }}">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Show</label>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#insertUsers">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Insert</label>
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
        <div class="modal-content img">
            <div class="modal-header">
                <h5 class="modal-title texto" id="exampleModalLabel">Seleccione La opcion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="{{ route('index.inventario') }}">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Show</label>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-12 divisor mt-5">
                        <div class="image-menu">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#insertInsumos">
                                <img src="img/images.png" class="imgMenu">
                            </a>
                            <label class="TextoPpal">Insert</label>
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


