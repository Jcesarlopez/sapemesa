<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<?
header('Content-Type: text/html; charset=ISO-8859-1');
$host="localhost";
	$user="emesa_julio";
	$pass="Smar4125#";
	/*$db="emesa_saptest";*/
	$db="emesa_sap";
	$con=mysql_connect($host,$user,$pass);

if($_REQUEST['IdOperacion']==1)
{	
	$IdPedido=$_REQUEST['IdPedido'];
	$Observacion=$_REQUEST['Observacion'];

	


	$ObservacionQuery='"'.$Observacion.'"';
	$QueryString='UPDATE pedidos_indice SET Notas='.$ObservacionQuery.' WHERE IdPedido='.$IdPedido;

	/*="'.$Observacion.'" WHERE idPedido='+$idPedido;*/
		
	mysql_db_query($db,$QueryString);
	/*$ultimoid=mysql_insert_id();*/
	echo $QueryString;
}
if($_REQUEST['IdOperacion']==2)
{	
	$IdPedido=$_REQUEST['IdPedido'];
	$Status_nuevo=$_REQUEST['Status'];



	$ObservacionQuery='"'.$Observacion.'"';
	$QueryString='UPDATE pedidos_indice SET Status='.$Status_nuevo.' WHERE IdPedido='.$IdPedido;

	mysql_db_query($db,$QueryString);
	
}
if($_REQUEST['IdOperacion']==3)
{	
	$IdPedido=$_REQUEST['IdPedido'];
	$Tipo_nuevo=$_REQUEST['Tipo'];


	$QueryString='UPDATE pedidos_indice SET Tipo='.$Tipo_nuevo.' WHERE IdPedido='.$IdPedido;




	mysql_db_query($db,$QueryString);
	
}

	

?>