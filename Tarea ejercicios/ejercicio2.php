<?php

function ejercicio_2($x,$y)
{
      $suma=$x;
    if($x<0 || $x>255 || $y<0 || $y>255)
        {
            echo "-1";
        }else
            {
                for($i=2;$i<=$y;$i++)
                {
                    $suma*=$i;
                }
                echo $suma;
            }
}

ejercicio_2(3, 4);
