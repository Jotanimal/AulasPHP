<?php
    
    $custoDeFabrica = $_REQUEST["custoDeFabrica"];
    $impostos;

    if($custoDeFabrica <= 3999999){
        $porcDistribuidor = 5;
        $impostos = 0;
    }elseif($custoDeFabrica >= 4000000 && $custoDeFabrica <= 6999999){
        $porcDistribuidor = 10;
        $impostos = 15;
    }else{
        $porcDistribuidor = 15;
        $impostos = 20;
    }

    $custoTotal = $custoDeFabrica + (($porcDistribuidor / 100) * $custoDeFabrica) + (($impostos / 100) * $custoDeFabrica);

    echo "Valor total = " . $custoTotal;

?>
