<?php

class Producto 
{

    public $nombre;
    public $precio;
    public $ruta;
   
   public function getNombre()
   {
       return $this->nombre;
   }

   public function getPrecio()
   {
       return $this->precio;
   }

   public function getRuta()
   {
       return $this->ruta;
   }

    public function __construct($nom, $pre, $path)
    {
        $this->nombre= $nom;
        $this->precio = $pre;
        $this->ruta= $path;
       
    }

    public function ToString()
    {
        return $this->nombre." - ".$this->precio." - ".$this->ruta;
    }


    public static function Guardar($producto)
    {
        
      $flag= FALSE;
      $archivo = fopen("Productos/archivoProductos.txt", "a+");
            
      $cant = fwrite($archivo, $producto->ToString()."\r\n");
    
       if($cant!=0)
         $flag =TRUE;
    
       fclose($archivo);
    
       return $flag;
          
        

    }

    public static function TraerProductos()
    {
        $lista = array();

        $archivo = fopen("Productos/archivoProductos.txt", "r");

        while(!feof($archivo))
        {
            $archAux = fgets($archivo);
            $productos = explode(" - ", $archAux);
            $productos[0] = trim($productos[0]);
            if($productos[0]!="")
                $lista[] = new Producto($productos[0], $productos[1], $productos[2]);
        }
        fclose($archivo);
        return $lista;

    }

    




}

?>