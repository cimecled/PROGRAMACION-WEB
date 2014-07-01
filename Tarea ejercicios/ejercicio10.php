<?php

 function numero_perfecto($x, $y)
  {
    $cont=0;
    $num=6;
    if($x<0 || $y<0)
    {
        echo "El numero no puede ser negativo";
    }
    else
    {
        
        $aux=0;
        for ($i=$x; $i<=$y; $i++){
            
            if ($i==6){
               echo $i.", ";
               break; 
            } 
            else 
                if ($i == 26){
                echo $i.", ";
                break;
            } 
            else 
                if ($i == 496){
                echo $i.", ";
                break;                
            } 
            else 
                if ($i == 8128){
                echo $i.", ";
                break;                
            } 
            else{
                echo -1;
                break;
            }

        }
        
    }
  }
  
    numero_perfecto(60,70);


