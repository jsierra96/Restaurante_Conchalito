<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>
    <h2>Abrir nota</h2>

    <form action="" class="form-horizontal" role="form">
        <div class="form-group">
            <label for="fecha" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
                <input type="date" class="form-control" id="fecha">
            </div>
        </div>
        <div class="form-group">
            <label for="orden" class="col-lg-2 control-label">No. orden</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="orden">
            </div>
        </div>
        <div class="form-group">
            <label for="producto" class="col-lg-2 control-label">Producto</label>
            <div class="col-lg-10">
                <input type="text" class="form-control" id="producto">
            </div>
        </div>
        <div class="form-group">
            <label for="cantidad" class="col-lg-2 control-label">Cantidad</label>
            <div class="col-lg-10">
                <input type="number" class="form-control" id="cantidad">
            </div>
        </div>

        <div class="right">
            <button class="btn btn-success" id="">Guardar</button>
            <button class="btn btn-warning" id="">Ver ticket</button>
        </div>
    </form>
<?php
    include_once 'Pfooter.php';
?>