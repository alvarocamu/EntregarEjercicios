<?php
//Php es muy libre al entrar y salir del código html. Podemos controlar el html que se verá
	//$usuario=FALSE;
	$usuario="francisco";
	$password=123456;
?>
<?php
 	if($usuario=="francisco" && $password==123456){ //es lo mismo que $usuario==true, y como no lo es pork puse false se mostrara lo otro
 ?>
	<h1> Hola Francisco</h1>
<?php
 	}else{ 
 ?>
	<h1> Usted no es Francisco</h1>
<?php 
	} 
?>
<!--Esto es lo mismo que si pusieramos echo sin cerrar el php para escribir ese html

	echo <h1> Esto es un mensaje que sólo se verá si usuario 1 es false</h1>;

-->

<?php
//Ternario
	$validacion=($usuario=="francisco") && ($password==123456)? "<h1> Hola Francisco</h1>":"<h1> Usted no es Francisco</h1>";
	echo $validacion;
?>

