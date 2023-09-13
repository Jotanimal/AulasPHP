<?php

    $arquivo;
    $leFrases;

    $arquivo = fopen("frases.txt", "r");
    if($arquivo){
        $leFrases = file_get_contents("frases.txt");
        echo "Conteúdo do arquivo criado: " . $leFrases;
    }else{
        echo "Erro ao abrir o arquivo: Arquivo invalido";
    }

?>
