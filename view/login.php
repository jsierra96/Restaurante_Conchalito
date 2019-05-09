<?php 
    require_once 'header.php';
?>
<div class="main">
    <h2>Inicio de sesión</h2>
    <form action="">
        <div class="group">
            <figure>
                <img src="../images/user1.png" alt="">
            </figure>
            <input type="text" class="form-control" name="" id="" placeholder="ingrese su usuario">
        </div><br>
        <div class="group">
            <figure>
                <img src="../images/candado.png" alt="">
            </figure>
            <input type="password" class="form-control" name="" id="" placeholder="Ingrese su contraseña">
        </div>
        <br>
        <input type="button" value="Iniciar >" id="iniciar" class="btn btn-lg btn-success">
    </form>
</div>
<?php 
    require_once 'footer.php';
?>