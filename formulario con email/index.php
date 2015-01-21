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
			
						
			
			

			

		 ?>
	</body>
</html>