<?php

    $nome1 = $_REQUEST["nome1"];
    $nome2 = $_REQUEST["nome2"];
    $nome3 = $_REQUEST["nome3"];
    $nome4 = $_REQUEST["nome4"];
    $nome5 = $_REQUEST["nome5"];

    $arquivo;
    $nomes;

    $arquivo = fopen("nomes.txt", "w");
    if ($arquivo) {
        fwrite($arquivo, $nome1 . "\n");
        fwrite($arquivo, $nome2 . "\n");
        fwrite($arquivo, $nome3 . "\n");
        fwrite($arquivo, $nome4 . "\n");
        fwrite($arquivo, $nome5 . "\n");

        fclose($arquivo);

        $nomes = file_get_contents("nomes.txt");
        
        echo "Conteúdo do arquivo: <br>" . $nomes;
    }else{
        echo "Erro ao abrir o arquivo: Arquivo invalido";
    }

?>