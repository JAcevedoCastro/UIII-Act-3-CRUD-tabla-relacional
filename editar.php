<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "base_de_datos.php";
$sentencia = $base_de_datos->prepare("SELECT * FROM productos WHERE id = ?;");
$sentencia->execute([$id]);
$producto = $sentencia->fetch(PDO::FETCH_OBJ);
if($producto === FALSE){
	echo "¡No existe algún producto con ese ID!";
	exit();
}

?>
<?php include_once "encabezado.php" ?>
	<div class="col-xs-12">
		<h1>Editar producto con el ID <?php echo $producto->id; ?></h1>
		<form method="post" action="guardarDatosEditados.php">
			<input type="hidden" name="id" value="<?php echo $producto->id; ?>">
	
			<label for="nombre">Nombre:</label>
			<input value="<?php echo $producto->nombre ?>" class="form-control" name="nombre" required type="text" id="nombre" placeholder="Escribe el Nombre">

			<label for="marca">Marca:</label>
			<input value="<?php echo $producto->marca ?>" class="form-control" name="marca" required type="text" id="marca" placeholder="Escribe la marca">

			<label for="modelo">Modelo:</label>
			<input value="<?php echo $producto->modelo ?>" class="form-control" name="modelo" required type="text" id="modelo" placeholder="Escribe el Modelo">

			<label for="color">Color:</label>
			<input value="<?php echo $producto->color ?>" class="form-control" name="color" required type="text" id="color" placeholder="Escribe el Color">

			<label for="almacenamiento">Almacenamiento:</label>
			<input value="<?php echo $producto->almacenamiento ?>" class="form-control" name="almacenamiento" required type="text" id="marca" placeholder="Escribe el Almacenamiento">

			<label for="memoria">Memoria:</label>
			<input value="<?php echo $producto->memoria ?>" class="form-control" name="memoria" required type="text" id="marca" placeholder="Escribe la Memoria">

			<label for="precio">Precio:</label>
			<input value="<?php echo $producto->precio?>" class="form-control" name="precio" required type="text" id="marca" placeholder="Escribe el precio">

			<label for="gama">Gama:</label>
			<input value="<?php echo $producto->gama ?>" class="form-control" name="gama" required type="text" id="marca" placeholder="Escribe la gama">

			<label for="existencia">Existencia:</label>
			<input value="<?php echo $producto->existencia?>" class="form-control" name="existencia" required type="text" id="marca" placeholder="Escribe el precio">

	
			<br><br><input class="btn btn-info" type="submit" value="Guardar">
			<a class="btn btn-warning" href="./listar.php">Cancelar</a>
		</form>
	</div>
<?php include_once "pie.php" ?>
