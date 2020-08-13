<?php
session_start();


class CMVendedores{	
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
	public function ListaVendedores(){  	
		 $sql = "SELECT IdUsuario,Nombre,ApPaterno,ApMaterno,Mail,UserName,ventas,cargo FROM usuarios_indice WHERE ventas=1 ORDER BY Nombre ASC";
		 // En la variable datos almacenamos el resultado de la consulta declarada en la variable sql y finalmente retornamos el valor;
		 $datos =  $this->conexion->consultaRetorno($sql);
		 

		//  print $datos;
		  return $datos;
		
		}
	}


?>