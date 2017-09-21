<?php
/*Retorna una tabla de productos con la imagen correspondiente de cada producto*/

include_once "Producto.php";

$ListaProductos = Producto::TraerProductos();

echo "<table border=1>
        <thead>
        <tr>
            <th>Nombre de Producto</th>
            <th>Precio</th>
            <th>Foto</th>
        </tr>
        </thead>";
        foreach($ListaProductos as $prod)
        {
            echo "<tr>
                    <td>".$prod->getNombre()."</td>
                    <td>".$prod->getPrecio()."</td>
                    <td><img src='img/".$prod->getRuta()."' width = '100px' height = '100px'/></td>
                </tr>";
        }
     echo "</table>";

?>