<!DOCTYPE HTML>
<html>

	<head>
		<title></title>
		<meta charset="UTF-8">
 	</head>
	<body>
		<form  action=" <?php echo $_SERVER['PHP_SELF']?>" method="POST">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre"/>
			<br/>
			<label for="mail">Para:</label>
			<input type="text" name="mail"/>
			<br/>
			
			<label for="asunto">Asunto</label>
			<input type="text" name="asunto"/>
			<br/>
			<textarea name="comentario" placeholder="Escribe un comentario"></textarea>
			<button>enviar</button>
		</form>
		<?php
			
			if(empty($_POST['nombre']) && empty($_POST['asunto'])&& empty($_POST['mail'])&& empty($_POST['comentario'])){
				
			}else{
				$nombre = $_POST['nombre'];
				$para= $_POST['mail'];
				$asunto= $nombre.": ".$_POST['asunto'];
				$comentario= $_POST['comentario'];
				
				mail($para, $asunto, $comentario);
			}
			
						
			
			
$nameErr = $emailErr  = "";
$name = $email =  "";
//comenzamos la validación campo por campo
//validación del nombre
if ($_SERVER["REQUEST_METHOD"] == "POST") {//aunque el envío sea por request lo evaluamos como post
   if (empty($_POST["nombre"])) {
     $nameErr = "El nombre es obligario";//damos un texto en caso de dejarlo vacío
   } else {
     $name = test_input($_POST["nombre"]);// la función test input la veremos más abajo
     // Comprobamos si el nombre contiene sólo letras y  espacios en blanco
     if (!preg_match("/^[a-zA-Záéíóúñ ]*$/",$name)) {//preg_match() realiza una comparación con una expresión regular
       $nameErr = "Solamente letras o espacios en blanco"; 
     }
   }
//validación de email
   if (empty($_POST["mail"])) {
     $emailErr = "El email es obligatorio";
   } else {
     $email = test_input($_POST["mail"]);
     // Comprobamos si la dirección de correo electrónico está bien formada
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//filter_var  Filtra una variable con el filtro que se indique
       $emailErr = "dirección de email inválida"; 
     }
   }
//validación de url     
   

  
}
// función de prevención de inyecciones
function test_input($data) {
   $data = trim($data);//elimina espacios en blanco del principio y final de la cadena
   $data = stripslashes($data);//Quita las barras de un string con comillas escapadas
   $data = htmlspecialchars($data);// Convierte caracteres especiales en entidades HTML http://php.net/manual/es/function.htmlspecialchars.ph
 
   return $data;
}
			

		 ?>
	</body>
</html>