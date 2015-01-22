<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Formulario completo PHP</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/flatly/bootstrap.min.css" rel="stylesheet">

		<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
	// definimos variables y establecemos por defecto los valores vacíos
	$nameErr = $emailErr = $genderErr = $websiteErr = "";
	$name = $email = $gender = $comment = $website = "";
	//comenzamos la validación campo por campo
	//validación del nombre
	if ($_SERVER["REQUEST_METHOD"] == "POST") {//aunque el envío sea por request lo evaluamos como post
	   if (empty($_POST["name"])) {
	     $nameErr = "El nombre es obligario";//damos un texto en caso de dejarlo vacío
	   } else {
	     $name = test_input($_POST["name"]);// la función test input la veremos más abajo
	     // Comprobamos si el nombre contiene sólo letras y  espacios en blanco
	     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {//preg_match() realiza una comparación con una expresión regular
	       $nameErr = "Solamente letras o espacios en blanco"; 
	     }
	   }
	//validación de email
	   if (empty($_POST["email"])) {
	     $emailErr = "El email es obligatorio";
	   } else {
	     $email = test_input($_POST["email"]);
	     // Comprobamos si la dirección de correo electrónico está bien formada
	     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {//filter_var  Filtra una variable con el filtro que se indique
	       $emailErr = "dirección de email inválida"; 
	     }
	   }
	//validación de url     
	   if (empty($_POST["website"])) {
	     $website = "";
	   } else {
	     $website = test_input($_POST["website"]);
	     // Comprobanos si la sintaxis direcciones URL es válida (esta expresión regular permite también guiones en la URL)
	     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
	       $websiteErr = "Invalid URL"; 
	     }
	   }

	   if (empty($_POST["comment"])) {
	     $comment = "";
	   } else {
	     $comment = test_input($_POST["comment"]);
	   }

	   if (empty($_POST["gender"])) {
	     $genderErr = "Indicar su sexo es obligatorio";
	   } else {
	     $gender = test_input($_POST["gender"]);
	   }
	}
	// función de prevención de inyecciones
	function test_input($data) {
	   $data = trim($data);//elimina espacios en blanco del principio y final de la cadena
	   $data = stripslashes($data);//Quita las barras de un string con comillas escapadas
	   $data = htmlspecialchars($data);// Convierte caracteres especiales en entidades HTML http://php.net/manual/es/function.htmlspecialchars.ph
	 
	   return $data;
	}

	?>

	<div class="container">
		<h2>Ejemplo de Formulario validado con PHP</h2>
		<p><span class="error">* Campos obligatorios.</span></p>
		<form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);//en el method también evitamos inyecciones?>"> 
		   <div class="form-group">
				<label for="name" class="col-sm-2 control-label">Nombre</label>
			   <input type="text" name="name" value="<?php echo $name;?>">
			   <span class="error">* <?php echo $nameErr;?></span>
			</div>
		   
		   <div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
			   <input type="text" name="email" value="<?php echo $email;?>">
			   <span class="error">* <?php echo $emailErr;?></span>
			</div>
		   
		   <div class="form-group">
			<label for="email" class="col-sm-2 control-label">Website</label> 
		   <input type="text" name="website" value="<?php echo $website;?>">
		   <span class="error"><?php echo $websiteErr;?></span>
			</div>
		   
		   
			<div class="form-group">
				<label for="comment" class="col-sm-2 control-label">Comentarios</label>
				<textarea name="comment"><?php echo $comment;?></textarea>
		  </div>
			<div class="form-group">
				<label for="geneder" class="col-sm-2 control-label">Género</label>
		   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="mujer") echo "checked";?>  value="mujer">Mujer
		   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="hombre") echo "checked";?>  value="hombre">Hombre
		   <span class="error">* <?php echo $genderErr;?></span>
		   </div>
		   <div class="form-group">
			<button class='btn btn-primary'type="submit" name="submit" value="Submit">Enviar </button>
			</div>
		</form>
		<div class="well">
		<?php
		echo "<h2>Tus datos:</h2>";
		echo $name;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $website;
		echo "<br>";
		echo $comment;
		echo "<br>";
		echo $gender;
	?>
	</div>
	<footer></footer>
	</div>
</body>
</html>