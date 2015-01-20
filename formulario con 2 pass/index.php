<!DOCTYPE HTML>
<html>
<!--Formulario procesado en la misma página
Crear un formulario que se procese en la misma página
Debe tener un campo para el nombre y dos tipo password
Debemos recibir un mensaje si los password son diferentes
Debemos prevenir con alguna función de php el error de variable vacía o no definida mediante isset() o empty()-->
	<head>
		<title></title>
		<meta charset="UTF-8">
 	</head>
	<body>
		<form action=" <?php echo $_SERVER['PHP_SELF']?>" method="POST">
			<input type="text" name="nombre"/>
			<input type="password" name="pass1"/>
			<input type="password" name="pass2"/>
			<button>enviar</button>
		</form>
		<?php
			
			
			if(empty($_POST['pass1']) && empty($_POST['pass2'])){
				
			}else{
				$nombre = $_POST['nombre'];
				$pass1= $_POST['pass1'];
				$pass2= $_POST['pass2'];
				if($pass1!=$pass2){
					echo "Las contraseñas no coinciden";
				}else{
					echo "Las contraseñas coinciden";
				}
			}
		 ?>
	</body>
</html>