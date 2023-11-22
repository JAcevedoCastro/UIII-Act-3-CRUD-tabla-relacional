<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["nombre"]) || !isset($_POST["marca"]) || !isset($_POST["modelo"]) || !isset($_POST["color"]) || !isset($_POST["almacenamiento"]) || !isset($_POST["memoria"]) || !isset($_POST["precio"]) || !isset($_POST["gama"]))  exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "base_de_datos.php";
$nombre = $_POST["nombre"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$color = $_POST["color"];
$almacenamiento = $_POST["almacenamiento"];
$memoria= $_POST["memoria"];
$precio = $_POST["precio"];
$gama = $_POST["gama"];

$sentencia = $base_de_datos->prepare("INSERT INTO productos(nombre, marca, modelo, color, almacenamiento, memoria, precio, gama) VALUES (?, ?, ?, ?, ?, ?, ?, ?);");
$resultado = $sentencia->execute([$nombre, $marca, $modelo, $color, $almacenamiento, $memoria, $precio, $gama]);

if($resultado === TRUE){
	header("Location: ./listar.php");
	exit;
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>
<?php include_once "pie.php" ?>