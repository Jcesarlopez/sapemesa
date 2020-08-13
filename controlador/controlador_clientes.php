<?php
    class CCClientes
	{

		public $datos;
		public $CMClientes;		

		public function __construct()
		{
			require "configSap.php";				
			require_once($_SESSION['PathModelSap']."modelo_clientes.php");	
			$this->CMClientes = new CMClientes();
        }		
        
        
		public function filtrarClientes($cadena)  
		{
			$resultado =  $this->CMClientes->FiltrarClientes($cadena);


			 while($fila = $resultado->fetch_array(MYSQL_BOTH))
			 {
				$datos[]=$fila;
		     }
			echo json_encode($datos);

		}
    }

    $OBJClientes = new CCClientes();
    
     if($_POST['accion']=="FiltrarListaPorNombre")
	 {	
		$OBJClientes->filtrarClientes($_POST['cadena']);		
     }

	
    ?>