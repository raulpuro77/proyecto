<?php
$num=1;
for($cuenta=0;$cuenta<10;$cuenta++)
{
    $primo=true;
    for($i=2;$i<$num;$i++)
    {
        if($num%$i==0)
        {
            $primo=false;
            break;
        }
    }
    if($primo){
        echo "Hola soy Daniel ".$num."<br/>";
    } else
    {
        $cuenta--;
    }
    $num++;
}
