<?php include_once "encabezado.php" ?>

<div class="col-xs-12">
	<h1>Nuevo producto</h1>
	<form method="post" action="nuevo.php">
		<label for="nombre">Nombre:</label>
		<input class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el Nombre">
		<label for="marca">Marca:</label>
		<input class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe el código">
		<label for="modelo">modelo:</label>
		<input class="form-control" name="modelo" required type="text" id="modelo" placeholder="Escribe el código">
		<label for="color">color:</label>
		<input class="form-control" name="color" required type="text" id="color" placeholder="Escribe el código">
		<label for="almacenamiento">almacenamiento:</label>
		<input class="form-control" name="almacenamiento" required type="text" id="almacenamiento" placeholder="Escribe el código">
		<label for="memoria">memoria:</label>
		<input class="form-control" name="memoria" required type="text" id="memoria" placeholder="Escribe el código">
		<label for="precio">Precio de compra:</label>
		<input class="form-control" name="precio" required type="number" id="precio" placeholder="Precio de compra">
		<label for="gama">gama:</label>
		<input class="form-control" name="gama" required type="text" id="gama" placeholder="Escribe el código">
		<label for="existencia">Existencia:</label>
		<input class="form-control" name="existencia" required type="number" id="excistencia" placeholder="Existencia">
		
		
		<br><br><input class="btn btn-info" type="submit" value="Guardar">

	</form>

</div>
<?php include_once "pie.php" ?>