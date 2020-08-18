<?php
    class CCVendedores
	{

		public $datos;
		public $CMVendedores;
		

		public function __construct()
		{
			require "configSap.php";				
			require_once($_SESSION['PathModelSap']."modelo_vendedores.php");	
			$this->CMVendedores = new CMVendedores();
        }		
        
        
		public function mostrarTodosVendedores()  
		{
			$resultado =  $this->CMVendedores->ListaVendedores();


			 while($fila = $resultado->fetch_array(MYSQLI_BOTH))
			 {

				$datos[]=$fila;
		     }
			echo json_encode($datos);

		}
    }



    $OBJVendedores = new CCVendedores();
    
    // if($_POST['accion']=="mostrarVendedoresTodos")
	// {
	// 	$OBJVendedores->mostrarTodosVendedores();
    // }

	$OBJVendedores->mostrarTodosVendedores();
	
    ?>