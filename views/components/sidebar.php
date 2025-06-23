<?php
$base_url = $GLOBALS['BASE_URL']  ?? '/demorutas';
?>

<div class="sidebar"></div>
    <h3>Menú</h3>
    <ul>
        <li class="sidebar-item active"><a href="<?= $base_url ?>/home"><span class="icon">🏠</span> Home</a></li>
        <li class="sidebar-item"><a href="<?= $base_url ?>/clientes"><span class="icon">👥</span> Clientes</a></li>
        <li class="sidebar-item"><a href="<?= $base_url ?>/consultar"><span class="icon">🔍</span> Consultar</a></li>
    </ul>
</div>

 