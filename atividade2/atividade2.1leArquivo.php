<?php

    $arquivo;
    $leFrases;

        // Abrindo arquivo para leitura
    $arquivo = fopen("frases.txt", "r");
    if($arquivo){
        // Leitura do arquivo - todo de uma vez
        $leFrases = file_get_contents("frases.txt");
        echo "Conteúdo do arquivo criado: " . $leFrases;
    }else{
        echo "Erro ao abrir o arquivo: Arquivo invalido";
    }
        // Leitura do arquivo - linha por linha #echo fgets($arquivo);
?>
