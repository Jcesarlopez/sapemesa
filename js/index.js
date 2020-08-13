var IdVendedor=0;
var anio=0;
var IdCliente=0;

var saldoFecha=true;
var selClienteTxt='';
var saldoMontoMayora=$("#ragoMontoMayorA").val();
var vendedorTxtSel='';

function cambiarMontoMayor(valor)
{        
    saldoMontoMayora=valor;
    $("#labelMontoMayorA").html("$ "+formatoNumero(valor)+".00 pesos");
}

function formatoNumero (n) {
    n = String(n).replace(/\D/g, "");
    return n === '' ? n : Number(n).toLocaleString();
}


function mostrarVendedores()
{
    
    $.ajax({
        url:'controlador/controlador_vendedores.php',
        type:'POST',
        data:'accion=mostrarVendedoresTodos'
        }).done(function(resp){

            
            let RespJSON = JSON.parse(resp);  
            
            
            strHtml=
            `<option value="0">
                - Todos los vendedores -
            </option> `; 

            RespJSON.forEach(fila => {  
                strHtml+= 
                `<option value="${fila[0]}">
                    ${fila[1]} ${fila[2]}
                </option> `; 
            
            });
            selVendedor.innerHTML = strHtml;
        });
}
function mostrarAnio(){

    var hoy = new Date();
    var anioActual = hoy.getFullYear();
    strHtml=
        `<option value="0">
            - TODOS LOS AÑOS -
        </option> `; 
    for (var anio = anioActual; anio != 2009; anio--){


        var unixTimestamp = moment(anio+'.01.01', 'YYYY.MM.DD').unix();


        strHtml+= `
            <option value="${unixTimestamp}">
                ${anio}
            </option> `;   
    }
    Anio.innerHTML = strHtml;
}
function filtrarCliente(cadena)
{
    
    if(cadena.trim().length>=3)
    {
        $.ajax({
        url:'controlador/controlador_clientes.php',
        type:'POST',
        data:'accion=FiltrarListaPorNombre&cadena='+cadena.trim()
        }).done(function(resp){
            
            let RespJSON = JSON.parse(resp);

            
            
            
            strHtml='';
            
            RespJSON.forEach(fila => {3222223
                title='';  
                nombre =  fila[0].trim().toUpperCase();
                textoNombre = nombre;
                if(nombre.length>45)
                {                    
                    textoNombre = nombre.substr(0,45)+"..."
                    title=
                    `
                        title="${nombre}"
                    `
                }
                strHtml+= 
                `<li ${title} class="liListaClientes" onclick="selecCliente(${fila[1]},'${fila[0]}')">
                    ${textoNombre} 
                </li> `; 
            
            });
            $("#autoCompleteProv").css("display", "block");
            ulClientesListaFiltrada.innerHTML = strHtml;
        });
    }
}

function selecCliente(Id,Nombre)
{   
    IdCliente=Id;
    selClienteTxt=Nombre;
    
    $("#labelNombreCliente").html('"'+Nombre+'"'+' <span class="spanBorrar" onclick="quitarcliente()">&nbsp;&nbsp;[Quitar]</span>');

    // Para quitar en &nbsp;
    $('#labelNombreCliente').each(function(){
    $(this).html($(this).html().replace(/&nbsp;/gi,' '));
    });

    $('#autoCompleteProv').css('display','none');       
    $('#inputCliente').val('');  
    actualizar();     
    
}
function quitarcliente()
{    
    IdCliente=0;
    $("#labelNombreCliente").html('');
    actualizar();
}

mostrarAnio();
mostrarVendedores();