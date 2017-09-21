<?php
/*Recibe por POST El nombre, precio y una foto del producto
Guardar la foto con el nombre del producto*/

include_once "Producto.php";

$nombre = $_POST["nombre"];
$precio = $_POST["precio"];
$file = $_FILES["foto"]["name"];

if(!(empty($nombre) || empty($precio) || empty($file))){
$tipo = pathinfo($file, PATHINFO_EXTENSION);
$nuevoNombre = $nombre.".".$tipo;

$destino = "img/".$nuevoNombre;

if(move_uploaded_file($_FILES["foto"]["tmp_name"], $destino))
    echo "Se ha subido el archivo ".$nuevoNombre."\n\n";


$prod = new Producto($nombre, $precio, $nuevoNombre);
if(Producto::Guardar($prod))
    echo "Se ha subido el producto al documento";
else
    echo "no se ha podido subir el documento";
}
else
echo "Alguna variable no esta definida";
?>