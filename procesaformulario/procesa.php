<!DOCTYPE html>
<html  lang="es">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<!--Formulario post
Crear un formulario en html
con un campo de texto que solicite el nombre del usuario
un campo de tipo fecha que solicite su fecha de nacimiento
Un campo tipo select que indique su sexo.
un campo tipo radio 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios
Un campo tipo checkbox ,ckecked por default, que diga que quiero recibir información periódicamente
Un campo tipo checkbox que diga que acepto las condiciones del servicio
Procesar el formulario mediante post y el la página procesada
saludar al usuario (implicando su sexo y su nombre), Ejemplo Hola, querido amig(o/a), nombre
decirle su edad
decirle un mensaje personalizado según los estudios
Si desea recibir información le informamos de los cursos que tenemos-->
 	</head>
	<body>
	
		<?php
			$nombre=$_POST['nombre'];
			$sexo=$_POST['sexo'];
			$estudios=$_POST['estudios'];
			$fecha=$_POST['fecha'];
			
			if($sexo=="H"){
				$cadena= "Hola señorito $nombre";
			}else{
				$cadena= "Hola señorita $nombre";
			}
			/*
			switch($sexo){
				case "H":
					$cadena= "Hola señorito $nombre";
				break;
				case "M":
					$cadena= "Hola señorita $nombre";
				break;
			} 
			*/
			
			
			$anio = explode('/',$fecha);
			$dia=date(j);
			$mes=date(n);
			$ano=date(Y);
			
			if (($anio[1] == $mes) && ($anio[2] > $dia)) {
				$ano=($ano-1); }
				 
				//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual
				 
				if ($anio[1] > $mes) {
				$ano=($ano-1);}
				 
				//ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad
				 
				$edad=($ano-$anio[0]);
				 
				echo $edad;
			
			
			if($estudios=="no"){
				echo	$cadena.=" no tiene estudios";
			}else if($estudios=="primarios"){
				echo	$cadena.=" Usted tiene estudios primarios";
			}else if($estudios=="secundarios"){
				echo	$cadena.=" Usted tiene estudios secundarios";
			}else{
				echo	$cadena.=" no tiene estudios";
			}
			
			if(empty($_POST['publi'])){
				echo "<br/>no quiere informacion";
			}else{	
				echo "<br/>si quiere informacion";	
			
			}
		
			
		?>
		

	</body>
</html>