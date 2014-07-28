<?php
        require 'rb.php' ;
        R::setup('mysql:host=localhost; dbname=factura', 'root',''); 
         
        if (isset($_POST['boton']))   
        {
            $boton=$_POST["boton"];   
            $busca=$_POST["busca"]; 
            if($boton=="Buscar")
            {
               
                $cliente = R::load('clientes', $busca);
            }
            if($boton=="Actualizar")
            {
                
                $cliente = R::load('clientes', $busca);
                //$cliente->Id= $_POST["id"];
                $cliente->Nombre= $_POST["nombre"];
                $cliente->Cedula=$_POST["cedula"]; 
                $cliente->Telefono=$_POST["telefono"]; 
                $cliente->Direccion=$_POST["direccion"];
                R::store($cliente);
            }
            if($boton=="Eliminar")
            {
                $cliente = R::load('clientes', $busca);
                R::trash( $cliente );
                
            }
               if($boton=="Agregar")
            {
                $cliente= R::dispense('clientes');
                //$cliente->Id=$_POST["id"]; 
                $cliente->Nombre=$_POST["nombre"]; 
                $cliente->Cedula=$_POST["cedula"]; 
                $cliente->Telefono=$_POST["telefono"]; 
                $cliente->Direccion=$_POST["direccion"];
                $insertado=R::store($cliente);
               

            }
        }
?>


<!DOCTYPE html>

<html>
    <head>
        <title>Sistema de Facturacion</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="estilos.css" rel="stylesheet" type="text/css">
        <script src="funciones.js" type="text/javascript"></script>
        
		
    </head>
        <body bgcolor=#F6C998 >
        <form name="form1">
            <div class="example">
                <center><h1> FACTURA TALLER EDMUNDO</h1></center>
                
                <div align = center >
                    <fieldset>
                        <font color =#250D26/>
                        <div class="example">
                            <h3>
                                Código :<input type ="text" id="textocodigo" name="id" value= "<?php if (isset($cliente->Id))  echo $cliente->Id;?>"><br>
                                Nombre del cliente :<input type ="text" id="textocliente" name="nombre" onchange="validartexto()" value= "<?php if (isset($cliente->Nombre))  echo $cliente->Nombre;?>"><br>
                                Cedula o RUC :<input type ="text" id ="cedula" name="cedula" maxlength="13" onchange="validar_cedula_o_ruc()" value= "<?php if (isset($cliente->Cedula))  echo $cliente->Cedula;?>">
                                Telefono :<input type ="text" id="numero" name="telefono" onchange="valida_telefono()" value="<?php if (isset($cliente->Telefono))  echo $cliente->Telefono;?>"><br>
                                Direccion :<input type ="text" id="direction" name="direccion" onchange="direccion()" value="<?php if (isset($cliente->Direccion))  echo $cliente->Direccion;?>">
                                Fecha de emision :<input type ="date"><br> 
                                <br> <br>
                                <br>
                                <label for="lb_desc" style="margin-left:5%;">Cantidad</label>
                                <label for="lb_can" style="margin-left:10%;">Detalle</label>
                                <label for="lb_pre" style="margin-left:15%;">Precio/U </label>
                                <label for="lb_pre" style="margin-left:15%;">Precio/total </label>
                            </h3>
                            <br>
                            <input type="text" name="CampoaSumar" id="Campo1" value="0" onblur="sumacampos('Campo1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampoaSumar" id="Campo3" value="0" onblur="sumacampos('Campo3');" />

                            <input type="text" readonly id="MiLabelTOTAL" name="valor"/>
                            <div></div>
                            
                            <input type="text" name="CampaSumar" id="Camp1" value="0" onblur="sumacampos2('Camp1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampaSumar" id="Camp3" value="0" onblur="sumacampos2('Camp3');" />

                            <input type="text" id="LabelTOTAL" readonly name="valor"/>
                            <div></div>
                            
                            <input type="text" name="CampasSumar" id="campe1" value="0" onblur="sumacampos3('campe1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampasSumar" id="campe3" value="0" onblur="sumacampos3('campe3');" />

                            <input type="text" id="MLabelTOTAL" readonly name="valor"/>
                            <div></div>
                            
                            <input type="text" name="CampadSumar" id="camps1" value="0" onblur="sumacampos4('camps1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampadSumar" id="camps3" value="0" onblur="sumacampos4('camps3');" />

                            <input type="text" id="LLabelTOTAL" readonly name="valor"/>
                            <div></div>
                            
                            <input type="text" name="CampatSumar" id="campes1" value="0" onblur="sumacampos5('campes1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampatSumar" id="campes3" value="0" onblur="sumacampos5('campes3');" />

                            <input type="text" id="TLabelTOTAL" readonly name="valor"/>
                            <div></div>
                            
                            <input type="text" name="CampagSumar" id="campos1" value="0" onblur="sumacampos6('campos1');" />
                            <input type="text" name="detalle" id="detalle">
                            <input type="text" name="CampagSumar" id="campos3" value="0" onblur="sumacampos6('campos3');" />

                            <input type="text" id="GLabelTOTAL" readonly name="valor"/>
                            <div></div>

                            <table>
                                <tr>
                                    <td>
					<center>SUBTOTAL<input type="text" id="subtotal" name="subtotal" ><center>
                                        <br/>
                                        IVA 12%<input type="text" id="iva" name="iva" >
                                        <br/>
                                        TOTAL<input type="text" id="total" name="total">
                                    </td>
                                    <td>
                                        <a href="http://www.facebook.com"><image src="http://3.bp.blogspot.com/-CkQogolr1uY/TfUJknFZNrI/AAAAAAAACDs/BfAT1nTWs6c/s200/imprimir.png"></image></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </fieldset>
                </div> 
                    <br/>
                    <center>
                            <input type="text"   id="txtbusca" name="busca" value= "<?php if (isset($cliente->Id))  echo $cliente->Id;?>" >
                            <input type="submit" value="Buscar" id="buscar" name="boton">
                            <input type="submit" value="Actualizar" id="Actualizar" name="boton">
                            <input type="submit" value="Eliminar" id="Eliminar" name="boton">
                            <input type="submit" value="Agregar" id="Agregar" name="boton">
                            <input type="submit" onClick="cerrar()" name="Submit" value="Cerrar">  </center>
            </div>
        </form>
    </body>
</html>

<script type="text/javascript">
function cerrar()
{
	window.close() 
}	
</script>
