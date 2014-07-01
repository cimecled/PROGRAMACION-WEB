<?php

function ejercicio_3($x,$y)
{
    if($x<0 || $x>255 || $y<0 || $y>255)
       {
            echo "-1";
        }else
            {
                $vector=array(60,30,20,15,12);
                $v1=$vector[$x-1];
                $y=$x;
                $v2=$vector[$y+1];
                $suma=$v1.$v2;
                echo $suma;
            }
}


ejercicio_3(1,3);

