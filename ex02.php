<?php

$cont = 1;

while($cont <= 100){
    if($cont % 10 == 0){
        echo("Múltiplo de 10<br>");
    }else{
        echo("$cont <br>" );
        
    }

    $cont += 1;
}
?>