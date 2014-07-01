<?php

function factor ($n){
        if ($n > 0){
            $i=1;
            while ($i<=$n){
                $multiplicacion = $i*$i;
                if ($multiplicacion == $n){
                    echo "$i <sup> 2 </sup> = $multiplicacion : //";
                    echo " true";
                    break;
                } else 
                    if($i==$n && $multiplicacion != $n){
                    echo "false";
                }
                $i++;
            }
            
        }else{
            echo "El numero debe de ser mayor que 0";
        }
    }  
    
    echo factor (9);


