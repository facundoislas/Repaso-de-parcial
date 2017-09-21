<?php
/*Posee dos atributos privados, implementa la interface invendible con el metodo
precioMasIva y tiene un metodo que se llama retornarArrayDeProductos
que retorna un array con 5 productos*/

include_once "Invendible.php";

class Producto implements IInvendible
{

    private $_nombre;
    private $_precio;


    public function __construct($nombre, $precio)
    {
        $this->_nombre = $nombre;
        $this->_precio = $precio;
    }


    public function precioMasIva()
    {
        $total = $this->_precio * 1.21;
        return $total;

    }

    public function retornarArrayDeProductos()
    {
        $listaProd = array();

        $pro1 = new Producto("coca", 10);
        $pro2 = new Producto("fanta", 20);
        $pro3 = new Producto("Manaos", 30);
        $pro4 = new Producto("Pepsi", 40);
        $pro5 = new Producto("Mirinda", 50);

        array_push($listaProd, $pro1);
        array_push($listaProd, $pro2);
        array_push($listaProd, $pro3);
        array_push($listaProd, $pro4);
        array_push($listaProd, $pro5);

        return $listaProd;
        
    }
    

    public static function BuscaProducto($nombre)
    {
        $flag = FALSE;
        $lista = self::retornarArrayDeProductos();
        foreach($lista as $value)
        {
            if($value->_nombre == $nombre)
            {
                $flag= TRUE;
            }
        }

        return $flag;

    }

   
    


}

?>