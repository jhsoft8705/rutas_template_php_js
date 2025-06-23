<?php
require_once __DIR__ . "/../../config/conexion.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php require_once __DIR__ . "/../components/sidebar.php"; ?>
    
    <div class="content">
        <h1>Bienvenido al Sistema</h1>
        <p>Panel principal del sistema</p>
        
        <!-- Información de debug (puedes eliminar esto) -->
        <div style="margin-top: 20px; padding: 10px; background: #f0f0f0; border-radius: 5px;">
            <small>
                <strong>Ruta actual:</strong> <?= $_SERVER['REQUEST_URI'] ?><br>
                <strong>Dominio base:</strong> <?= Conectar::dominio() ?><br>
                <strong>Funcionando correctamente ✓</strong>
            </small>
        </div>
    </div>
    
    <?php require_once __DIR__ . "/../components/footer.php"; ?>
</body>
</html>