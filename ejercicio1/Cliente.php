<?php

 class Cliente
{
    public $_nombre;
    public $_mail;
    public $_clave;
    public $_sexo;


    public function __construct($nombre, $mail, $clave, $sexo)
    {
        $this->_nombre = $nombre;
        $this->_mail = $mail;
        $this->_clave = $clave;
        $this->_sexo = $sexo;
    }

    public function GetMail()
	{
		return $this->_mail;
	}

    public function GetClave()
	{
		return $this->_clave;
	}

    public function ToString()
    {
        return $this->_nombre." - ".$this->_mail." - ".$this->_clave." - ".$this->_sexo;
    }
 

    public static function Guardar($cliente)
    {
        $flag= FALSE;
        $archivo = fopen("Clientes/ClientesActuales.txt", "a+");
        
        $cant = fwrite($archivo, $cliente->ToString()."\n");
        
        if($cant!=0)
            $flag =TRUE;

        fclose($archivo);

        return $flag;

    }

    public static function TraerClientes()
    {
        $listaDeClientes = array();
        $archivo = fopen("Clientes/ClientesActuales.txt", "r");

        while(!feof($archivo))
        {
            $archaux = fgets($archivo);
            $clientes = explode(" - ", $archaux);
            $clientes[0] = trim($clientes[0]);
            if($clientes[0]!="")
                $listaDeClientes []= new Cliente ($clientes[0], $clientes[1], $clientes[2], $clientes[3]);
            
        }
        
        fclose($archivo);
        return $listaDeClientes;
    }

    public static function BuscaCliente($email, $pass)
    {

        $Lista = array();
        $Lista = self::TraerClientes();

        $flag = FALSE;
        foreach($Lista as $value)
        {

            if($value->GetMail()== $email && $value->GetClave()== $pass)
            {
                
                $flag= TRUE;
                
            }
        }
        return $flag;

    }
}

?>