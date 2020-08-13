<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../graficos/lytco.css" />
    <link rel="stylesheet" href="css/cxc.css?ver2.15" />
    <!-- <script src="../vue/cdnvue.js"></script> -->    
    <script  src="https://code.jquery.com/jquery-3.5.1.min.js"  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://www.emesa.com.mx/sap/cgi-bin/php/js/moment.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/es.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@500&family=Mukta&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    

    <!-- FontAwesome -->
    
    <!-- <link href="fontawesome/css/all.min.css" rel="stylesheet"> -->
    <script defer src="fontawesome/js/all.js"></script> <!--load all styles -->
    
</head>
<style>

body, html{
    background-color: #D1D1D1;
    font-size: 12px;
    color:#4d4d4d;
    margin:0!important;
    font-family: 'Mukta', sans-serif;
    transition: all 0.5s ease;
    background-color:#eee;
}
#templatePrincipal{
    display:grid;
    grid-template: 100vh / 230px 1224px;
    grid-gap: 0px 30px;

    
}

    #InfDerecho{
        width:100%;
    }
    .divPedido
    {
        width:100%;
        margin-top:2rem;
        margin-bottom:2rem;
        display:inline-block;
        /* background-color:#333; */
    }
    .divDatosPedido
    {
        font-size:1.2rem;        
        width:770px;
        /* background-color:#ccc; */
        float:left;
    }
    .divCobrosPedido
    {
        margin-top:1.3rem;
        width:30rem;
        background-color:#FFF;
        float:left;
        border-radius:6px;
        padding:1rem;
    }
    
    #divLabelImportePed, #divLabelCobradoPed
    {
        float:left;
        width:12rem;
        
    }
    #divCobradoPed, #divImportePed{
        float:left;
        text-align:right;
        width:15rem;
    }
    
    .DivInnerProgresoCobro{
        background-color:#548235;
        width:15rem;
    }

    .totales{display: grid; 
		grid-template: 18px 18px 7px 20px/ 12rem 10rem;
		/* grid-column-gap: 10px; */
		grid-gap: 2px 2px;
    }
    .totales .item:nth-of-type(5)
    {
        grid-column: 1/span 2;
        background-color:#c2c7ce;
        height:5px;
        overflow:hidden; 
        
    }
    
    .totales .item{
        /* background-color:#FFF;  */
        
    }
    .progresCobrado{
        /* background-color:#548235; */
        background-color:#009dd6; 
        border-radius: 0px 100px 100px 0px;
        transform:translateY(-8px);

        
        
    }
    .divDatosPedidosInner{
        display: grid; 
        grid-template: 16rem/ 30rem 2rem 26rem;
        /* background-color:red; */
    }
    .divDatosPedidosInner1{
        
    }
    .divDatosPedidosInner2{
        background-color:#E9E9E9; 
        border-radius: 0px 25px 25px 25px;
        padding:1.2rem;
    }






.totalesVendedorInferior{
        font-size:2rem;
        display:grid;
        grid-template: 400px  / auto 500px;
    }
    
    .totalesVendedorInferiorInner{
        display:grid;
        grid-template: repeat(2,50px) 6px 50px / 250px 250px;
    }

    .totalesVendedorInferiorInner div:nth-of-type(5)
    {
        grid-column: 1/span 2;
        overflow:hidden;
        background-color:#5a5a5a;
    }


#templatePrincipal div:nth-of-type(1)
{
    
    
    overflow:hidden;
    
}
#templatePrincipal div:nth-of-type(2)
    {
        
        
        /* padding-top:2rem; */
        
    }
h3{
    font-family: 'Heebo', sans-serif;
    
}
.h4NomCliente{
    margin-top:-1.7rem;
}

.spanBorrar{
    color:red;
    cursor:pointer;
    /* background-color:#eee; */
}


.divDerecho{
    width:1124px;
    float:left;
    padding:1rem;
    margin-left: 3rem;
    
}
.divIzquierdoContent{
    position:fixed;
    
    background-color: rgba(100,100,100,.1);
    height:100vh;
    padding:12px;
}
.divIzquierdoContent , .divIzquierdo{
    width:200px;
}
.divIzquierdo{
    float:left;   
    height:100vh;
}
#divMoverPanelIzquierdo{
    position:fixed;
    top:19px;
    left:235px;
}
#divTotales{
    width:83%;
    background-color:white;
    padding:1.2rem;
    box-shadow:3px 3px 6px rgba(0,0,0,.4);
    border-radius:5px;
}

.TotalesVendedor{
                    display:grid;
                    grid-template: 20px 12px 4px 12px / 20px 70px 90px;
                    
                    grid-gap: 2px 2px;
                }
                .TotalesVendedor div{
                    background-color:#eeeeff;
                }
                .breadcrumbs{
                    text-align:left;
                    vertical-align:top;
                }
                #spanCxc{
                    margin:0px;
                    /* transform:translateY(-5px); */
                    color:#333;
                    font-size:20px;
                     font-family: 'Oswald', sans-serif; 
                }

                #spanBreadcrumbs{
                    margin:0px;
                    /* transform:translateY(-5px); */
                    color:#333;
                    font-size:14px;
                     font-family: 'Oswald', sans-serif; 
                }

                #divSupDerecho{
                    display:grid;
                    grid-template: 40px 3px/ 2fr 1fr;
                    text-align:right;
                    grid-gap: 3px 2px;
                    width:100%;
                }

                /* #divSupDerecho div{
                    background-color:#aaeedd;
                } */
                #divSupDerecho div:nth-of-type(3)
                {
                    grid-column: 1/span 2;                   
                    /* overflow:hidden; */
                    
                }
                .divHr{
                    background-color:#7a7a7a;
                }

</style>
<script>
    var estadoPanelizquierdo="mostrandose";
    function moverPanelIzquierdo()
    {
        if (estadoPanelizquierdo=='mostrandose')
        {
            $(".divIzquierdo").css({marginLeft:'-235px'});
            $("#divMoverPanelIzquierdo").css({left:'10px'});;
            

            d="180";

            $("#templatePrincipal").css( "grid-template-columns", "5px 1224px" );
            
            $('.divIzquierdoContent').hide();


            d="180";
            
            $("#divMoverPanelIzquierdo").css({
          '-moz-transform':'rotate('+d+'deg)',
          '-webkit-transform':'rotate('+d+'deg)',
          '-o-transform':'rotate('+d+'deg)',
          '-ms-transform':'rotate('+d+'deg)',
          'transform': 'rotate('+d+'deg)'
        });  
            

            
            estadoPanelizquierdo="ocultado";



        }else{


            $(".divIzquierdo").css({marginLeft:'0px'});
            $("#divMoverPanelIzquierdo").css({left:'235px'});;
            

            d="0";
            
            $("#divMoverPanelIzquierdo").css({
          '-moz-transform':'rotate('+d+'deg)',
          '-webkit-transform':'rotate('+d+'deg)',
          '-o-transform':'rotate('+d+'deg)',
          '-ms-transform':'rotate('+d+'deg)',
          'transform': 'rotate('+d+'deg)'
        });  


    //     top:15px;
    // left:235px;

            
        $("#templatePrincipal").css( "grid-template-columns", "230px 1224px" );    

        $('.divIzquierdoContent').show();
            
            estadoPanelizquierdo="mostrandose";
        }
    }



</script>
<body onload="init()">

<div id="templatePrincipal">




    <div>
        <div class="divIzquierdoContent">
        

        
            <p class="pOpcIz">
                <label><strong>VENDIDO POR</strong></label>
                <select id="selVendedor" onchange="IdVendedor=this.value;actualizar()">
                
                </select>
            </p>
            <hr>
            <p class="pOpcIz">
                <label><strong>AÑO</strong></label><br>                
                <select name="Anio" id="Anio" onchange="anio=this.value;actualizar()">
                
                </select>
            </p>
            <hr>
            <p class="pOpcIz">
                <label><strong>CLIENTE</strong></label><br>                
                
                <input type="text" placeholder="Nombre del cliente" id="inputCliente" onkeypress="filtrarCliente(this.value)">
                <div id="autoCompleteProv">
                    <ul id="ulClientesListaFiltrada">
                        
                    </ul>
                </div><br>
                <label id="labelNombreCliente">
                    
                </label>    
        
            </p>
            <hr>
            <p>
                <label><strong>SALDO DEL PEDIDO</strong></label><br>                                    
                <input type="checkbox" checked id="chkSaldoFecha" onchange="saldoFecha=this.checked" >
                <label for="chkSaldoFecha">Solo con saldo a la fecha</label><br>

                <br>
                <label>Con saldo mayor a:</label><br>
                <div class="slidecontainer">
                    <input type="range" onchange="cambiarMontoMayor(this.value)" min="0" max="100000" value="10" class="slider" id="ragoMontoMayorA">
                </div>
                <label id="labelMontoMayorA">
                    $ 10.00 pesos
                </label>                
            </p> 

            <p>
                <br>
                <input type="button" value="Actualizar Reporte" onclick="actualizar()">
            </p>            
          
        </div>
    </div> <!-- Cierra panel izquierdo -->    
    <div> <br>
        <div id="divSupDerecho">
            <div class="breadcrumbs">
                <!-- <h2 class="h1breadcrumbs">CUENTAS POR COBRAR / CARLOS SANCHEZ</h2> -->
                <span id="spanCxc">CUENTAS POR COBRAR </span><span id="spanBreadcrumbs">&nbsp;</span>

            </div> 
              <div class="orden">
                Ordenado por: 
                  <select name="ordenado" id="ordenado" onchange="(OrdenPedido=this.value)">
                    <option value="0">Pedido más nuevo a antiguo</option>                
                    <option value="1">Pedido más antiguo a nuevo</option>              
                  </select>
              </div>
              <div class="divHr">
                  &nbsp;
                  
              </div>
            
            
        </div>
        <style>
        #divDashboard{
            margin-top:5rem;
            display:grid;
            grid-template: repeat(4,300px)/repeat(5,200px);
            grid-gap: 20px 20px;
        }

        .dashPedidos{
            grid-column: 1 / span 3; 
            grid-row: 1 / span 2; 
        }

        .dashDepositos
        {
             grid-column: 4 / span 2;
        }


        .contentMinidash{
            grid-column: 1 / span 2;

        }


        #divDashboard div{
            background-color:white;
            /* padding:.5rem; */
            border-radius:9px 9px 9px 9px;
        }
        .titMiniDash{
            font-size:14px;
            font-weight:bold;
        }
        .headMiniDash{
            display:grid;
            grid-template:30px auto/ 1fr 1fr;
            width:90%;
            
            margin:auto;
            margin-top:1rem;
            
        }
        </style>
        <div id="InfDerecho">
            <div id="divDashboard">
                <div class="dashPedidos">
                    <div class="headMiniDash">
                        <div class="titMiniDash">
                            Pedidos
                        
                        </div>
                        <div class="opcionesMiniDash">
                           &nbsp;
                        
                        </div> 
                        <div class="contentMinidash">
                            aqui van los datos principales

                        </div>                   
                    </div>

                </div>
                <div class="dashDepositos">
                    <div class="headMiniDash">
                        <div class="titMiniDash">
                            Ultimos depositos
                        
                        </div>
                        <div class="opcionesMiniDash">
                        &nbsp;
                        
                        </div> 
                        <div class="contentMinidash">
                            aqui van los datos principales

                        </div>                   
                    </div>

                </div>
                <div class="dashVendedores">
                    <div class="headMiniDash">
                        <div class="titMiniDash">
                            Cobranza personal de ventas
                        
                        </div>
                        <div class="opcionesMiniDash">
                        &nbsp;
                        
                        </div>
                        <div class="contentMinidash">
                            aqui van los datos principales

                        </div>                    
                    </div>

                </div>
                <div class="dashVendedores">
                    <div class="headMiniDash">
                        <div class="titMiniDash">
                        Ventas mensuales
                        
                        </div>
                        <div class="opcionesMiniDash">
                        &nbsp;
                        
                        </div> 
                        <div class="contentMinidash">
                            aqui van los datos principales

                        </div>                   
                    </div>

                </div>
                <div class="dashVendedores">
                    <div class="headMiniDash">
                        <div class="titMiniDash">
                        Ventas anuales
                        
                        </div>
                        <div class="opcionesMiniDash">
                        &nbsp;
                        
                        </div>
                        <div class="contentMinidash">
                            aqui van los datos <br>
                            <br><p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore commodi, quos in quidem corporis non impedit nam libero sequi! Asperiores.
                            </p>

                        </div>                    
                    </div>

                </div>                     
            </div>



        </div>
    
    </div> <!-- Cierra panel derecho  --> 
</div>  <!-- Cerramos contenedor principal -->

    
    
    <div id="divMoverPanelIzquierdo" onclick="moverPanelIzquierdo()" style="text-align:right;font-size:20px;cursor:pointer">
            <i class="fas fa-chevron-left"></i>
    </div>
</body>
<script src="js/index.js?ver=12.4"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    
    var OrdenPedido=0;
    var cobrado=0;
    var porCcobrar=0;
    
    function graficar()
    {
        // google.charts.load('current', {'packages':['corechart']});
        // google.charts.setOnLoadCallback(drawChart);

    }

    
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Cobrado',     70],          
          ['Por cobrar',    30]
        ]);

        var options = {
          title: ''
        };

        var chart = new google.visualization.PieChart(document.getElementById('divGraficoTotal'));

        chart.draw(data, options);
      }
    







    function init()
    {
       
    }
    function actualizar()
    {

        var saldoFechaNun=0;
        var breadcrumbs='';

        // spanBreadcrumbs

        // var IdVendedor=0;
        // var anio=0;
        // var IdCliente=0;
        if(IdVendedor==0)
        {
            // breadcrumbs+="TODOS LOS VENDEDORES";
        }
        else{
            breadcrumbs+="VENTAS DE "+$("#selVendedor option:selected").text().toUpperCase();
        }

        if(IdCliente > 0)
        {
            if(breadcrumbs!='')
            {
                breadcrumbs+=` <i class="fas fa-caret-right"> </i> `;   
            }
            breadcrumbs+=` CLIENTE ${selClienteTxt}`;
        }

       if(anio>0)
       {
            if(breadcrumbs!='')
            {
                breadcrumbs+=` <i class="fas fa-caret-right"> </i> `;   
            }
            breadcrumbs+=' AÑO '+$("#Anio option:selected").text().toUpperCase();
       }
        

        


        
        $("#spanCxc").html("CUENTAS POR COBRAR \\ ");

        $("#spanBreadcrumbs").html(breadcrumbs);


        // breadcrumbs = 'CUENTAS POR COBRAR /' $("#vendedorTxtSel option:selected").text()

        


        if(saldoFecha)
        {
            saldoFechaNun=1;
        }else
        {
            saldoFechaNun=0;
        }

        $.ajax({
        url:'controlador/controlador_pedidos.php',
        beforeSend: () =>
        {
            console.log("Antes de enviar peticios");
        },
        type:'POST',
        data:`accion=cxcCustom&IdVendedor=${IdVendedor}&anio=${anio}&IdCliente=${IdCliente}&saldoFecha=${saldoFechaNun}&saldoMontoMayora=${saldoMontoMayora}&OrdenPedido=${OrdenPedido}`
        }).done(function(resp){
            




            let RespJSON = JSON.parse(resp);             
            var filaPedidoActual=0;            
            strHtml='';

            console.log(RespJSON);

            if(RespJSON.registros==null)
            {
                strHtml="<h1>¡No hay pedidos con esos criterios, vuelva a intentar!</h1>" ;
            }else{
                RespJSON.registros.forEach(fila => { 
                    filaPedidoActual++;
                    Notas='';
                    if(fila.Notas=='')
                    {
                        var Notas=
                        //html
                        `
                            <span style="color:#777">
                                <strong>No hay comentarios</strong>
                            </span>

                        `;


                    }else{
                        var Notas=
                        //html
                        `
                        <span style="color:#333">
                                <p><strong>Comentarios:</strong></p>
                                ${fila.Notas}
                        </span>
                                `;

                        
                    }
                    
                var fechaPedido=moment.unix(fila.FechaPedido).format('ll'); 
                
                var fechaRelativaPedido=moment.unix(fila.FechaPedido,'YYYYMMDD').fromNow(); 
                // moment("20120620", "YYYYMMDD").fromNow();

                porcentajeCobrado=Math.trunc(parseInt(fila['TotalCobrado'])/parseInt(fila['TotalPedido'])*100);
                 strHtml+=//html
                  `<div class="divPedido">
                        <div class="divDatosPedido">
                            <h3>${fila['Ubicacion']} (${fila['IdPedido']})</h3>
                            <h4 class="h4NomCliente">${fila[3]}</h4>                                                      
                           <div class="divDatosPedidosInner">
                                <div class="divDatosPedidosInner1">
                                    <p title="${fechaRelativaPedido}">
                                        <strong>Vendido por:</strong> ${fila['Vendedor']}<br>
                                        <strong>Fecha:</strong> ${fechaPedido}
                                    </p> 
                                    <div class="totales">
                                        <div class="item"><strong>Importe del pedido:</strong></div>
                                        <div class="item"><strong>${fila['TotalConformato']}</strong></div>
                                        <div class="item"><strong>Cobrado</strong></div>
                                        <div class="item"><strong>${fila['TotalCobradoConformato']}  </strong></div>
                                        <div class="item">
                                            <div class="progresCobrado" style="width:${porcentajeCobrado}%">
                                                &nbsp;
                                            </div>
                                        </div>                                        
                                        <div class="item"><strong>Por cobrar:</strong></div>
                                        <div class="item"><strong>${fila['PorCobrarConFormato']}</strong></div>
                                    </div> 
                                    
                                </div>
                                <div class="divEnblanco">
                                        &nbsp;
                                </div> 
                                <div class="divDatosPedidosInner2">
                                     ${Notas}   
                                </div>                                
                            </div>
                        </div>
                        <div class="divCobrosPedido" id="divCobrosPedido${fila['IdPedido']}">`;
                        if(fila.Depositos)
                            {
                                strHtml+='<p><strong>Pagos realizados por el cliente</strong></p>';
                                fila.Depositos.forEach(Deposito => { 

                                    var fechaDeposito= moment.unix(Deposito.FechaCobroUnix).format('ll');
                                    var tipo="Cheque";
                                    if(Deposito['TipoCobro']=="3")
                                    {
                                        tipo="Deposito";
                                    }
                                
                                    strHtml+=`<div class="divDeposito" style="100%">
                                                <div class="divDepositoTipo" style="width:30%;float:left">
                                                    ${tipo}
                                                </div>
                                                <div class=div"DepositoTotal" style="width:30%;float:left">
                                                    ${Deposito['TotalConFormato']}                                                                                                                                                
                                                </div>
                                                <div class="divDepositoFecha" style="width:30%;float:left">
                                                    ${fechaDeposito}                                                                                                                                                
                                                </div>
                                                    
                                    
                                              </div>`;
            
                                });
                            }
                            else{

                                strHtml+='<strong>No hay pagos hechos del cliente</strong>';
                            }


                            strHtml+=//html
                            `</div>
                    </div>`
                    console.log(RespJSON.registros.length+" "+filaPedidoActual);
                    if(RespJSON.registros.length==filaPedidoActual)
                    {
                       
                        strHtml+=`<hr style="border:3px solid #7a7a7a">
                            <div class="totalesVendedorInferior">
                                <div id="divGraficoTotal">
                                    &nbsp;
                                </div>
                                <div>
                                    <div class="totalesVendedorInferiorInner">
                                        <div>TOTAL IMPORTES</div>
                                        <div>${RespJSON.totalesConFormato['TotalPedidos']}</div>
                                        <div>TOTAL COBRADO</div>
                                        <div>${RespJSON.totalesConFormato['CobradoPedidos']}</div>
                                        <div>&nbsp;</div>
                                        <div>SALDO TOTAL</div>
                                        <div>${RespJSON.totalesConFormato['SaldoPedidos']}</div>

                                    </div>
                                </div>
                                
                            
                            </div>
                        
                        
                        
                        `; 



                    }else
                    {
                        strHtml+=`<hr style="border:1px solid #7a7a7a">`; 

                    }
                    
                    
                });
            }
             $("#InfDerecho").html(strHtml);
             graficar();




        });
    }
</script>

</html>