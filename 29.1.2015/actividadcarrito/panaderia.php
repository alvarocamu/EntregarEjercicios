<?php
session_start();
include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Panadería</h2>
		<div class="well">
		<p></p>
		</div>
		
		<form name="acceso" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<fieldset>
				<legend>Quieres pan?:</legend>
				<div class='form-group'>
					<label for='tomates'> Chapata</label>
					<input type="checkbox" name="chapata" value="Chapata" >
				</div>
				<div class='form-group'>
					<label for='tomates'> Gallego</label>
					<input type="checkbox" name="gallego" value="Gallego" >
				</div>
				<div class='form-group'>
					<label for='tomates'> Viena</label>
					<input type="checkbox" name="viena" value="Viena" >
				</div>
				<input class='btn btn-primary' type="submit"   value="Seleccionar" >
			</fieldset>
		</form>
		<a href="fincompra.php">Finalizar compra</a>
	</div>
	<?php
		
			//echo $_POST["chapata"].$_POST["gallego"].$_POST["viena"];
			if(isset($_POST["chapata"])){
				$_SESSION["chapata"]=$_POST["chapata"];
			}
			if(isset($_POST["gallego"])){
				$_SESSION["gallego"]=$_POST["gallego"];
			}
			if(isset($_POST["viena"])){
				$_SESSION["viena"]=$_POST["viena"];
			}
	?>
	</br>
<a  class='btn btn-success'href="destruirsesion.php">Borrar carrito</a>
</br>
</div>

<?php
include ('footer.php')
?>