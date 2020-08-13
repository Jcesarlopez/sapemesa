<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?
header('Content-Type: text/html; charset=ISO-8859-1');
if($_REQUEST['IdOperacion']==1)
{	
	$IdPedido=$_REQUEST['IdPedido'];
	$Observacion=$_REQUEST['Observacion'];

	$host="localhost";
	$user="emesa_julio";
	$pass="Smar4125#";
	$db="emesa_sap";	
	$con=mysql_connect($host,$user,$pass);


	$ObservacionQuery='"'.$Observacion.'"';
	$QueryString='UPDATE pedidos_indice SET Notas='.$ObservacionQuery.' WHERE IdPedido='.$IdPedido;

	/*="'.$Observacion.'" WHERE idPedido='+$idPedido;*/

	mysql_db_query($db,$QueryString);
	/*$ultimoid=mysql_insert_id();*/
	echo $QueryString;
}

	

?>