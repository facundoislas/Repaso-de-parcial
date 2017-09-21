<?php

include_once "Cliente.php";

/*Recibe por get los siguientes datos: nombre, mail, clave y sexo.Crea el objeto de tipo cliente 
y guarda en el archivo Clientes/ClientesActuales.txt en un reglon distinto
*/

$nombre = $_GET["nombre"];
$mail = $_GET["mail"];
$clave = $_GET["clave"];
$sexo = $_GET["sexo"];

$cliente= new Cliente($nombre, $mail, $clave, $sexo);
if(Cliente::Guardar($cliente))
    echo "Se ha Actualizado el archivo";



?>