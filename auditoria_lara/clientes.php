<?php
include ('conexion.php');
include ('menu.php');

// Consulta a la tabla clientes
$sql = "SELECT id, denominacion, telefono, email FROM clientes";
$resultado = $conexion->query($sql);
?>

<div class="container-fluid mt-4 fondo2">
    <h2>Listado de Clientes</h2>
    <table id="clientesTable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Denominación</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $fila['id'] . "</td>";
                    echo "<td>" . $fila['denominacion'] . "</td>";
                    echo "<td>" . $fila['telefono'] . "</td>";
                    echo "<td>" . $fila['email'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay clientes cargados</td></tr>";
            }
            // cierro
            $conexion->close();
            ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#clientesTable').DataTable({language:{url:"https://cdn.datatables.net/plug-ins/2.1.7/i18n/es-ES.json"},
    
    layout:{
        topStart:{
            buttons: ['csv','print','pdf'],
        }
    }

});
});

</script>
</body>
</html>
