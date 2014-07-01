<?php

function serie ($x, $y, $z){
        if ($x <= 0 || $y <= 0 || $z <= 0){
            return -1;
        } else{
            for ($i = 1; $i<=$z; $i++)
            {
                if ($i % 2 == 0){
                    $aux = $y.$x.'<br>' ;
                    $y++;
                    $x++;
                  
                }
                else {
                    $aux = $x.$y.'<br>' ;
                } 
            }		return $aux;
        }
    }  echo serie (5, 3, 3);

