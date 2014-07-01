<?php

 function vuelta ($cadena){
        foreach (array_reverse(explode(" ",$cadena))as $item)
        
            echo $item." ";
    }
    
    echo vuelta ("esta es una prueba");

