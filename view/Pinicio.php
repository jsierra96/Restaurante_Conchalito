<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>
<h2>Catalogo de productos</h2>
<table id="table"></table>
<input type="hidden" name="" id="valor" value="">
<<<<<<< HEAD
<button class="btn btn-success centrar">Agregar</button>



=======
<button class="btn btn-success centrar" id="agregar">Agregar</button>

<div id="dialog" title="Gestión de productos">
    <form enctype="multipart/form-data" method="post" class="form-horizontal" role="form" id="guardar">
        <input type="hidden" id="sOpe" value="i" name="opera">
        <input type="hidden" id="imagen" value="no" name="imagen">
        <input type="hidden" id="pClave2" name="id">
        <div class="row">
            <h5 id="oPe"></h3>
            <div class="col-md-8 ">
                <div class="form-group">
                    <label for="pClave" class="col-lg-6 control-label">Clave del producto: </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="pClave" disabled="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="producto" class="col-lg-6 control-label">Producto: </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="producto" name="nombre">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pSize" class="col-lg-6 control-label">Tamaño: </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="pSize" name="size">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pType" class="col-lg-6 control-label">Tipo: </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="pType" name="tipo">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pBuy" class="col-lg-6 control-label">Precio: </label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="pBuy" name="costo">
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <figure>
                    <img src="" alt="" width="100%" id="pImg">
                </figure>
                <div id="subir">
                    <label for="img" class="icon-upload"> Subir</label>
                    <input type="file" name="file" id="img">
                </div>
            </div>
        </div>
        <h3 id="error">¡Ha ocurrido un error al aplircar la operación!</h3>
    </form>
</div>
>>>>>>> Opcion productos funcionando

<?php
    include_once 'Pfooter.php';
?>