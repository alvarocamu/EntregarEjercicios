<?php
session_start();
include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Panadería</h2>
		<div class="well">
		
		<p><!--<img src="images.jpg" height="100px" width="100px"/>--></p>
		</div>
		
			<p>Deseas comprar</p>
			<?php 
				/*foreach ($_SESSION as $valor){
					echo $valor.", ";
				}*/
				foreach ($_SESSION as $indice => $valor){//el indice es el name y el valor el value de los checkbox de las otreas paginas
					echo $indice.", ";
			?>
		<a href="index.php">Volver al inicio</a>
	</div>
	</br>
<a  class='btn btn-success'href="destruirsesion.php">Borrar carrito</a>
</br>
</div>

<?php
include ('footer.php')
?>