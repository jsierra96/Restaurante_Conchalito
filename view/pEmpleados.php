<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>
    <h2>Administración de empleados</h2>
    <br>
        <div class="tabla2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                    <tr class="success">
                        <th>Clave</th>
                        <th>Nombre</th>
                        <th>E - mail</th>
                        <th>Accion</th>
                    </tr>
                    <tr>
                        <td>1245</td>
                        <td>Arturo Villegas</td>
                        <td>joanan96@gmail.com</td>
                        <td><center><button class="btn btn-danger icon-trash"></center></button></td>
                    </tr>
                    <tr>
                        <td>1245</td>
                        <td>Arturo Villegas</td>
                        <td>uriel@gmail.com</td>
                        <td><center><button class="btn btn-danger icon-trash"></center></button></td>
                    </tr>
                </table>
                <button class="btn btn-primary centrar" id="">+ Agregar</button>
            </div>
        </div>

<?php
    include_once 'Pfooter.php';
?>