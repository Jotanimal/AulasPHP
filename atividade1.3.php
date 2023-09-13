<?php

    $salario = $_REQUEST["salario"];
    $vendas = $_REQUEST["vendas"];
    $comissao = (4 /100) * $vendas;

    echo "Você receberá: " . $salario + $comissao;
?>
