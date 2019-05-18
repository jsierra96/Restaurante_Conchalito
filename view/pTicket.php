<?php
    include_once 'Pheader.php';
    include_once 'Paside.php';
?>
    <h2>Generar Ticket</h2>

    <div class="tabla2">
                <table class="table table-striped table-bordered ">
                    <tr class="success">
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Monto</th>
                    </tr>
                    <tr>
                        <td>Sopa</td>
                        <td>1</td>
                        <td>$ 150</td>
                    </tr>
                    <tr>
                        <td>Cerveza</td>
                        <td>10</td>
                        <td>$ 300</td>
                    </tr>
                </table>
                <h5>Total: </h5>
                <button class="btn btn-warning centrar" id="">Imprimr</button>
    </div>

<?php
    include_once 'Pfooter.php';
?>