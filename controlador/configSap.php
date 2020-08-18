<?php
session_start();
$_SESSION['meses']= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$_SESSION['NoCotVerWeb']=23056; // A partir de esta version funciona la version Web


//unset($_SESSION['Utilidad']);
//$_SESSION['Estado']="Cerrar";
//$_SESSION['mod_cot']=0;	



/// CONSTANTES DE SERVIDOR

// Configigacion Servidor prrueba
/*$_SESSION['PathModel']="/home/emesa/public_html/sap/cgi-bin/_cotptar/Modelos/";
$_SESSION['MySQLServidor']="localhost";
$_SESSION['MySQLUser']="emesa_saptest";
$_SESSION['MySQLPass']="Equipos123#";
$_SESSION['MySQLdb']="emesa_saptest";*/


// Configigacion Servidor Real
// $_SESSION['PathModelSap']="/home/emesa/public_html/sap/cgi-bin/php/modelo/";
// $_SESSION['MySQLServidorSap']="localhost";
// $_SESSION['MySQLUserSap']="emesa_iessus";
// $_SESSION['MySQLPassSap']="Equipos4125#";
// $_SESSION['MySQLdbSap']="emesa_sap";


// Configigacion Servidor desarrollo
$_SESSION['PathModelSap']="/inetpub/wwwroot/cxcEmesa/modelo/";
$_SESSION['MySQLServidorSap']="localhost";
$_SESSION['MySQLUserSap']="root";
$_SESSION['MySQLPassSap']="Cute7892$.JcwA";
$_SESSION['MySQLdbSap']="emesa_sap";




// Configigacion Local PC
/*$_SESSION['PathModel']="/inetpub/wwwroot/cot_emesa/Modelos/";
$_SESSION['MySQLServidor']="localhost";
$_SESSION['MySQLUser']="root";
$_SESSION['MySQLPass']="Smart4125#";
$_SESSION['MySQLdb']="emesa_sap";*/




	
	
	
?>
