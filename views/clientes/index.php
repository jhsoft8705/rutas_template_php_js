<?php
require_once __DIR__ . "/../../config/conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <?php require_once __DIR__ . "/../components/sidebar.php"; ?>
    
    <div class="content">
        <h1>Gestión de Clientes</h1>
        <p>Administra los clientes del sistema</p>
        
        <!-- Ejemplo de tabla básica -->
        <table border="1" style="width: 100%; margin-top: 20px;">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Juan Pérez</td>
                <td>juan@email.com</td>
                <td><a href="#">Editar</a> | <a href="#">Eliminar</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>María García</td>
                <td>maria@email.com</td>
                <td><a href="#">Editar</a> | <a href="#">Eliminar</a></td>
            </tr>
        </table>
    </div>
    
    <?php require_once __DIR__ . "/../components/footer.php"; ?>
</body>
</html>