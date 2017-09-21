<?php

/*Se recibe un nombre por GET retorna si el producto esta en la lista
Si lo recibe por POST con el parametro "que debo hacer"= "borrar" se debe borrar al producto y mover 
la foto al subdirectorio "Productos Borrados" con el nombre formado por el producto y la fecha de borrado*/

include_once "/../ejercicio3/Producto.php";

$nombre = $_GET['nombre'];

$lista = Producto::TraerProductos();
$flag=false;

foreach($lista as $value)
{
    if($value->getNombre() == $nombre)
    {
        echo "producto esta en la lista";
        $flag= true;
        break;
    }
}
if(!$flag)
    echo "producto no esta en la lista";

?>