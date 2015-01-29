<?php
session_start();
session_destroy();
include ('header.php');

echo '<div class="well">
<p>sesión destruida</p>
<a class="btn btn-success"href="index.php">Volver a inicio</a>
</div>';
?>