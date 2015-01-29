<?php
	session_start();
	include ('header.php');
?>
<div class="row">
	<div class="col-md-12">
		<h2>Carrito de compra</h2>
		<div class="well">
		<p></p>
		</div>
		
		<form name="acceso" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<fieldset>
				<legend>Seleccione lo que le guste:</legend>
				<div class='form-group'>
					<label for='tomates'> tomates</label>
					<input type="checkbox" name="tomates" value="Tomates"  >
				</div>
				<div class='form-group'>
					<label for='tomates'> pepinos</label>
					<input type="checkbox" name="pepinos" value="Pepinos" >
				</div>
				<div class='form-group'>
					<label for='tomates'> pimientos</label>
					<input type="checkbox" name="pimientos" value="Pimientos" >
				</div>
				<input class='btn btn-primary' type="submit"   value="Seleccionar" >
			</fieldset>
		</form>
		<a href="panaderia.php">Ir a panadería</a>
	</div>
	<?php
		
			//echo $_POST["tomates"].$_POST["pimientos"].$_POST["pepinos"];
			if(isset($_POST["tomates"])){
				$_SESSION["tomates"]=$_POST["tomates"];
			}
			if(isset($_POST["pimientos"])){
				$_SESSION["pimientos"]=$_POST["pimientos"];
			}
			if(isset($_POST["pepinos"])){
				$_SESSION["pepinos"]=$_POST["pepinos"];
			}
			
	?>
	</br>
	<a  class='btn btn-success'href="destruirsesion.php">Borrar carrito</a>
	</br>
</div>

<?php
include ('footer.php')
?>