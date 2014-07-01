<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
        function ejercicio_1($x,$y)
        {
            if($x<0 || $x>255 || $y<0 || $y>255)
                {
                    echo "-1";
                }else
                    {
                        $vector=array(7, 6, 8, 4, 9, 2, 10, 0, 11,-2);
                        $v1=$vector[$x-1];
                        $v2=$vector[$y-1];
                        $suma=$v1+$v2;
                        echo $suma;
                    }
            
        }

ejercicio_1(3,5);

        ?>
    </body>
</html>
