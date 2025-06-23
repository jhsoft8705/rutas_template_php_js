<?php
// Verificar sesión
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: /demorutas/');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Autos</title>
</head>
<body>
    <?php include __DIR__ . '/../components/sidebar.php'; ?>
    
    <div class="content">
        <h1>Gestión de Autos</h1>
        <p>Aquí va el contenido de autos</p>
        
        <!-- Tu JavaScript aquí -->
        <div id="autos-container">
            <button onclick="cargarAutos()">Cargar Autos</button>
            <div id="lista-autos"></div>
        </div>
    </div>
    
    <?php include __DIR__ . '/../components/footer.php'; ?>
    
    <script>
        function cargarAutos() {
            // Tu lógica JavaScript aquí
            document.getElementById('lista-autos').innerHTML = '<p>Cargando autos...</p>';
        }
    </script>
</body>
</html>