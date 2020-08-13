<?php
session_start();


class CMClientes{	
	private $id;
	private $mombre;
	private $apPaterno;
	private $apMaterno;
	private $mail;
	private $User;
	private $pass;
	private $cargo;
	private $conexion;

	public function __construct()
	{
		require_once("Conexion.php");
		// Al iniciar se instancia un objeto que se almacena en la propiedad con de la clase ListaVendedores
		$this->conexion = new Conexion();
	}
	public function FiltrarClientes($cadena){  	
		 $sql = 'SELECT Nombre,IdCliente FROM clientes_indice WHERE Nombre like "%'.$cadena.'%" ORDER BY Nombre ASC LIMIT 8';
		 // En la variable datos almacenamos el resultado de la consulta declarada en la variable sql y finalmente retornamos el valor;
		 $datos =  $this->conexion->consultaRetorno($sql);


		 $_SESSION['CADENAsQL']=$sql;
		 

		//  print $datos;
		  return $datos;
		
		}
	}


?>