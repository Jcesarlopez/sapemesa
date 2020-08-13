<?php
session_start();


class CPedidos
    {
        public $datos;    
        public $pedido;        
        public function __construct()
		{
			require "configSap.php";				
			require_once($_SESSION['PathModelSap']."modelo_pedidos.php");	
			$this->CMPedidos = new CMPedidos();
        }	


        public function TodosPedidos($IdCliente,$IdVendedor,$anio,$saldoFecha,$saldoMontoMayora,$OrdenPedido)
        {
            $Cobrado=0;
            
            $TotalPedidos=0;
            $CobradoPedidos=0;
            $SaldoPedidos=0;

            $resultadoTotalPedidos =  $this->CMPedidos->TodosPedidos($IdCliente,$IdVendedor,$anio,$OrdenPedido);            
            $c=0;


            while($fila = $resultadoTotalPedidos->fetch_array(MYSQL_BOTH))
             {

                 

             

                // Aqui obtenemos cuanto se ha cobrado del pedido con base a la suma de los depositos
                 $Cobrado = $this->CMPedidos->TotalCobrosPedido($fila['IdPedido']);
                 while($fila2 = $Cobrado->fetch_array(MYSQL_BOTH))
                 {
                    if($fila2[0]!=null)
                    {
                     
                        $fila['TotalCobrado']=$fila2[0];

                    }else{
                        $fila['TotalCobrado']=0;
                    }
                 }

           


                 $fila['TotalConformato']="$"." ".number_format($fila['TotalPedido']);
                 $fila['TotalCobradoConformato']="$"." ".number_format($fila['TotalCobrado']);

                 $fila['PorCobrarConFormato']="$"." ".number_format($fila['TotalPedido']-$fila['TotalCobrado']);



                 
                $Depositos = $this->CMPedidos->relacionDepositos($fila['IdPedido']);
                 $c=0;
                while($Deposito = $Depositos->fetch_array(MYSQL_BOTH))
                {

                    
                                        
                    $fecha = new DateTime();


                    $fecha->setTimestamp($Deposito['FechaCobroUnix']);
                    //  . "\n";


                    
                    
                   
                    $fila['Depositos'][$c]=$Deposito;
                    $fila['Depositos'][$c]['FechaTxt']=$fecha->setTimestamp($fecha->format('U = Y-m-d'));
                    $fila['Depositos'][$c]['TotalConFormato']="$ ".number_format($fila['Depositos'][$c]['Total']);

                    $c++;
                }

                // Ya sabiendo el monto de lo cobrado del pedido determinamos si entra o no al reporte
                $Agregado=false;
                $PorCobrar=$fila['TotalPedido']-$fila['TotalCobrado'];
                if($saldoFecha and $PorCobrar>=$saldoMontoMayora)
                {
                    $CobradoPedidos=$CobradoPedidos+$fila['TotalCobrado'];
                    $TotalPedidos=$TotalPedidos+$fila['TotalPedido'];

                    
                    $datos[]=$fila;
                    $Agregado=true;                            

                }

                // Si no piden que tenga saldo y no ha sido agregado
                if($saldoFecha==false and $Agregado==false)
                {
                    $datos[]=$fila;
                    $TotalPedidos=$TotalPedidos+$fila['TotalPedido'];                            
                }
                




             }


            $SaldoPedidos = $TotalPedidos-$CobradoPedidos;

            $TotalPedidosConFormato= "$ ".number_format($TotalPedidos);
            $CobradoPedidosConFormato= "$ ".number_format($CobradoPedidos);
            $SaldoPedidosConFormato= "$ ".number_format($SaldoPedidos);

             

            $paquete = array();
            $paquete['registros']= $datos;
            $paquete['totales']= array("TotalPedidos" => $TotalPedidos,"CobradoPedidos" => $CobradoPedidos,"SaldoPedidos" => $SaldoPedidos);
            $paquete['totalesConFormato']= array("TotalPedidos" => $TotalPedidosConFormato,"CobradoPedidos" => $CobradoPedidosConFormato,"SaldoPedidos" => $SaldoPedidosConFormato);

             
                                
            echo json_encode($paquete);
            
        


        }
        public function pagosPedidos()
        {


        }
    

    }
   
    
    
    
    
    $IdCliente = $_POST['IdCliente'];
    $saldoFecha = $_POST['saldoFecha'];
    $saldoMontoMayora = $_POST['saldoMontoMayora'];    
    $IdVendedor = $_POST['IdVendedor'];
    $anio = $_POST['anio'];
    $OrdenPedido =$_POST['OrdenPedido'];


    // ${saldoFecha}


    settype($IdCliente,"integer");
    settype($saldoFecha,"bool");    
    settype($saldoMontoMayora,"integer");
    settype($IdVendedor,"integer");
    settype($anio,"integer");
    settype($OrdenPedido,"integer");
    

    $_SESSION['$IdCliente']=$IdCliente;
    $_SESSION['$saldoFecha']=$saldoFecha;
    $_SESSION['$saldoMontoMayora']=$saldoMontoMayora;
    $_SESSION['$IdVendedor']=$IdVendedor;
    $_SESSION['$anio']=$anio;
    $_SESSION['$OrdenPedido']=$OrdenPedido;


    $CPedidos = new CPedidos();
    if($_POST['accion']="cxcCustom")
    {
        $CPedidos->TodosPedidos($IdCliente,$IdVendedor,$anio,$saldoFecha,$saldoMontoMayora,$OrdenPedido);
        $CPedidos->pagosPedidos();
    }

   
?>