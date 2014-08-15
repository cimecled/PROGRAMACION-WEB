<!DOCTYPE html>


<html>
  <head>
    <title>Transaccion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>

<body>
    
     <?php
        include_once 'transaccion.php';
      
        
        $objeto=new Transaccion(0,0,0,10);
        
        if (isset($_POST["boton"]))
        {
            $objeto=new Transaccion($_POST["txtid"],$_POST["cmbcuenta"],$_POST["fecha"],$_POST["cmbtipo"],$_POST["txtvalor"]);
            echo $objeto->getId();
            switch ($_POST["boton"]) {
                case "Nuevo":
                    $objeto->limpiar();
                    break;
                case "Grabar":
                    $objeto->grabar();                    
                    echo "Grabó correctamente";
                    break;
                case "Eliminar":
                    $objeto->eliminar();
                    $objeto->limpiar();
                    break;
                case "Consultar":
                    $objeto->consultar();
                    echo "consultó correctamente";
                    break;
                default:
                    break;
            } 
                
        }
    
        ?>
    
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cuerpo">
                <form id="form-login" action="" method="post" action="interfaz.php">
                    <p><label >ID:</label>
                        <input type="text" name="txtid" id="txtid" value="<?php echo $objeto->getId()   ?>"></p>
 
                    <p><label>Fecha:</label>
                        <input type="date" name="fecha" value="<?php echo $objeto->getFecha()   ?>"></p>
                    
                    <p><label >Cuenta:</label><select name="cmbcuenta">
                        <?php
                        foreach ($objeto->consultarCuenta() as $dato)
                        {
                            echo "<option value='".$dato['id']."'".  ((isset($_POST['txtid']) &&  $dato['id'] ==$objeto->$this->getCuenta()   )?"selected":"" )     .   ">".$dato['numero']."</option>";
                        }
                        ?>    
                             
                        </select>
                        
                    <p><label >Tipo de movimiento:</label><select name="cmbtipo">
                        <?php
                        foreach ($objeto->consultarTipo() as $dato)
                        {
                            echo "<option value='".$dato['id']."'".  ((isset($_POST['txtid']) &&  $dato['id'] ==$objeto->$getTipo()   )?"selected":"" )     .   ">".$dato['tipoMovimiento']."</option>";
                        }
                        ?>    
                             
                        </select>
                        
                    </p>
                        <br>
                    <p><label >Valor:</label>
                        <input type="text" name="txtvalor" id="txtvalor" value="<?php echo $objeto->getValor()   ?>"></p>
                        <br>
                    
                    
                    <table>
                        <tr>
                            <td><div align="center">
                                    <input type="submit" name="boton" value="Nuevo">
                                </div></td>
                            <td><div align="center">
                                    <input type="submit" name="boton" value="Grabar">
                                </div></td>
                            <td><div align="center">
                                    <input type="submit" name="boton" value="Eliminar">
                                </div></td>
                            <td><div align="center">
                                    <input type="submit" name="boton" value="Consultar">
                                </div></td>
                        </tr>
                    </table>
                    
                </form>
            </div><!--fin cuerpo-->
 
        </div><!-- fin contenedor -->
    </div><!--fin envoltura-->    
        
    </body>
</html>