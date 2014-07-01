<?php

function ejercicio_5($vector) 
{
    $ver=array_values(array_unique($vector));
    print_r($ver);
} 
echo "<pre>";


 ejercicio_5(array(1,1,2,2,3,4,5,6,6));
echo "</pre>";


