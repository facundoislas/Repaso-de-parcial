<?php
/*Recibe por POST el correo y la clave si coincide con algunos de los datos cargados retorna el mensaje
"Cliente Logueado"
*/
include "Cliente.php";

$correo = $_POST["mail"];
$clave = $_POST["clave"];



if(Cliente::BuscaCliente($correo, $clave))
    echo "Cliente Logueado";
else
    echo "Usuario no logueado";

?>