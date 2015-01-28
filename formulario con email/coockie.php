<?php
	setcookie('nombre','juan');
	setcookie('estilo','oscuro');
?>
<html>
	<?php
		var_dump($_COOKIE);
		echo $_COOKIE['nombre'];
		echo $_COOKIE['estilo'];
	?>
	
</html>