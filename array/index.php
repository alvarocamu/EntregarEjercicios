<!DOCTYPE HTML>
<html>
<!--Usando funciones PHP para strings
Teniendo en cuenta las siguientes funciones para strings y arrays en PHP Ejecutar en un archivo php órdenes que realicen las tareas indicadas:

Dado el siguiente string:

"PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre."

Realizar las siguientes tareas:
Adivinar el número de palabras que tiene.
Si es superior a 100 caracteres crear un substring que lo corte y añadir unos puntos suspensivos
Invertir
Sustituir la palabra 'PHP' por la palabra 'Ruby' y
poner en mayúsculas la palabra libre
Limitar el párrafo a cuatro palabras-->
	<head>
		<title></title>
		<meta charset="UTF-8">
 	</head>
	<body>
		<?php
			$cadena = "PHP es un acrónimo recursivo que significa PHP Hypertext Pre-processor (inicialmente PHP Tools, o, Personal Home Page Tools). Fue creado originalmente por Rasmus Lerdorf; sin embargo la implementación principal de PHP es producida ahora por The PHP Group y sirve como el estándar de facto para PHP al no haber una especificación formal. Publicado bajo la PHP License, la Free Software Foundation considera esta licencia como software libre.";
			
			//contar palabras
			echo $numpalabras= str_word_count($cadena);
			
			//cortar cadena
			$caracteres =strlen($cadena);
			echo "<br/>";
			if($caracteres>100){
				$cadenacortada=substr($cadena,0,100);
				echo $cadenacortada."...";
			}
		
			//invertir
			$cadenarevertida=strrev($cadena);
			echo "<br/><br/>".$cadenarevertida;
			
			//sustituir PHP
			$phpcambiado=str_replace('PHP','RUBY',$cadena);
			echo "<br/><br/>".$phpcambiado;
			
			//Libre mayusculas
			$librecambiado=str_replace('libre','LIBRE',$cadena);
			echo "<br/><br/>".$librecambiado;
			echo "<br/><br/>";
		
			/*$vectorlibre=explode(" ",$cadena);
			$libre=array_pop($vectorlibre);
			$libremayus=strtoupper($libre);
			echo $libremayus;*/
			
			//parrafo en 4 palabras
			$vectorcadena=explode(" ",$cadena);
			for($i=0;$i<4;$i++){
				echo $vectorcadena[$i]." ";
			}
			//	$vectorcortado=array_slice($vectorcadena,0,4);
			//  $vectorunido=implode(vectorcortado," ");
			//	echo $vectorunido;
			
		 ?>
	</body>
</html>