<?php


/*Recibe por get el nombre del producto y la cantidad, hace llamadas a metodos y retorna
el precio total a pagar*/

include_once "Producto.php";

$nombre = $_GET["nombre"];
$cantidad = $_GET["cantidad"];

$producto= new Producto ($nombre, 5);

if(Producto::BuscaProducto($nombre))
    echo ($producto->precioMasIva()*$cantidad);
else
    echo "Producto no encontrado";

?>