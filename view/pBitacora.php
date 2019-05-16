
<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>

    <h2>Bitacora de los empleados</h2>
    <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered ">
                    <tr class="success">
                        <th>Fecha Inicio</th>
                        <th>Fecha Fin</th>
                        <th>Empleado</th>
                        <th>Salario</th>
                        <th>Faltas</th>
                        <th>Retrasos</th>
                        <th>Total</th>
                    </tr>
                    <tr>
                        <td>12 - 03 - 2018</td>
                        <td>12 - 03 - 2019</td>
                        <td>Arturo Villegas</td>
                        <td>$ 14000</td>
                        <td>0</td>
                        <td>0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>13 - 04 - 2016</td>
                        <td>02 - 12 - 2019</td>
                        <td>Martin Villegas</td>
                        <td>$ 5000</td>
                        <td>2</td>
                        <td>0</td>
                        <td>2</td>
                    </tr>
                </table>
                <button class="btn btn-primary centrar" id="">+ Agregar</button>
            </div>
    

<?php
    include_once 'Pfooter.php';
?>