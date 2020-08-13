<?php
session_start();


class CMPedidos{	
    private $conexion;
    public $filtroCliente='';
    public $filtroVendedor='';
    public $filtroAnio='';
    public $filtroSaldo='';
    public $ordenPedido='';
    
    

	public function __construct()
	{
		require_once("Conexion.php");		
		$this->conexion = new Conexion();
	}
	public function TodosPedidos($IdCliente,$IdVendedor,$anioUnix,$OrdenPedido){
        
        $fechaFinAnio = $anioUnix+(86400*365);
        
        if($anioUnix>0)
        {
            $this->filtroAnio=" and pi.FechaPedido >= $anioUnix and pi.FechaPedido <=$fechaFinAnio";
            
        }

         if($IdCliente>0) // Si es por cliente
         {
             $this->filtroCliente=" pi.IdCliente=ci.IdCliente and pi.IdCliente=".$IdCliente." ";
         }else{
             $this->filtroCliente=" pi.IdCliente=ci.IdCliente";
         }


        if($IdVendedor>0)
        {
            $this->filtroVendedor=" and pi.id_vendedor=ui.IdUsuario and pi.id_vendedor=".$IdVendedor.' ';
        }else
        {            
            $this->filtroVendedor=" and pi.id_vendedor=ui.IdUsuario ";
        }



        // <select name="ordenado" id="ordenado" onchange="(OrdenPedido=this.value)">
        //         <option value="0">Del pedido mas nuevo al mas antiguo</option>                
        //         <option value="1">Del pedido mas antiguo al mas nuevo</option>              
        //       </select>

        if($OrdenPedido==0)
        {
            $this->ordenPedido=" IdPedido DESC";
        }else{
            $this->ordenPedido=" IdPedido ASC";
        }

        $sql = "SELECT pi.IdPedido, TRUNCATE(pi.TotalGral,2) as TotalPedido2, TRUNCATE(pi.TotalIESSUS,2) as TotalPedido, pi.Ubicacion, ci.Nombre, CONCAT(ui.Nombre,' ',ui.ApPaterno,' ',ui.ApMaterno) as Vendedor, pi.FechaPedido, pi.Notas ";
        $sql.= 'FROM pedidos_indice pi, clientes_indice ci, usuarios_indice ui ';
        
        $sql.= "WHERE $this->filtroCliente $this->filtroVendedor and pi.Status!=5 and pi.Status!=8 and pi.Tipo>0 $this->filtroAnio";
        $sql.= " ORDER BY ".$this->ordenPedido;


       
		 $datos =  $this->conexion->consultaRetorno($sql);


		 $_SESSION['CADENAsQL']=$sql;
		 

		
		  return $datos;
		
        }
        public function TotalCobrosPedido($IdPedido)
        {

            $sql = "SELECT SUM(Total) as Cobrado FROM pedidos_cobros WHERE IdPedido=$IdPedido and Status=1"; 
            
            $_SESSION['consul']=$sql;
            return  $this->conexion->consultaRetorno($sql);



        }
        public function relacionDepositos($IdPedido)
        {

            $sql = "SELECT  Total, FechaCobro as FechaCobroUnix, TipoCobro FROM pedidos_cobros WHERE IdPedido=$IdPedido and Status=1 ORDER BY IdPedidoCobro ASC"; 
            
            $_SESSION['consul']=$sql;
            return  $this->conexion->consultaRetorno($sql);


        }
	}


?>