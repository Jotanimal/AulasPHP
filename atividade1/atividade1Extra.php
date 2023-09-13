<?php

    $poupanca = $_REQUEST["poupanca"];
    $investimento = $_REQUEST["investimento"];
    $valorTotal;

    if($poupanca == 1){
        $valorTotal = $investimento + ($investimento * (3/100));

        echo "Você escolheu investir na poupança. Seu valor total com rendimento será de $valorTotal";
    }elseif($poupanca == 2){
        $valorTotal = $investimento + ($investimento * (4/100));

        echo "Você escolheu investir nos fundos de renda fixa. Seu valor total com rendimento será de $valorTotal";
    }else{
        echo "Valor inválido";
    }


?>
