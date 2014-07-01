<?php

function ejercicio_4($s1,$s2)
{
    $ls1= strlen($s1);
    $ls2= strlen($s2);
    $igual;
   $caracterfinal="";
    for($i=0;$i<$ls1;$i++)
        {
            $igual=false;
            $caracters1=$s1[$i];
            for($j=0;$j<$ls2;$j++)
                {
                    $caracters2=$s2[$j];
                    if($caracters1==$caracters2)
                        {
                            $igual=true;
                        }
                }
                if(!$igual)
                            {
                               $caracterfinal=$caracterfinal.$s1[$i];
                           }
        }
        echo $caracterfinal;
}


ejercicio_4("karin", "aeiou");


