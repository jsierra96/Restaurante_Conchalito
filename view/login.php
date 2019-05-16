<?php 
    require_once 'header.php';
?>
<script src="../js/login.js"></script>
<div class="main">
    <h2>Inicio de sesión</h2>
    <form action="">
        <div class="group">
            <figure>
                <img src="../images/user1.png" alt="">
            </figure>
            <input type="text" class="form-control" id="user" placeholder="ingrese su usuario">
        </div><br>
        <div class="group">
            <figure>
                <img src="../images/candado.png" alt="">
            </figure>
            <input type="password" class="form-control" id="pass" placeholder="Ingrese su contraseña">
        </div>
        <h3 id="error"></h3>
        <br>
        <input type="button" value="Iniciar >" id="iniciar" class="btn btn-lg btn-success">
    </form>
</div>
<?php 
    require_once 'footer.php';
?>