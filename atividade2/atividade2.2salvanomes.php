<?php

    $nome1 = $_REQUEST["nome1"];
    $nome2 = $_REQUEST["nome2"];
    $nome3 = $_REQUEST["nome3"];
    $nome4 = $_REQUEST["nome4"];
    $nome5 = $_REQUEST["nome5"];

    $arquivo;
    $nomes;

    // Função para criar e escrever arquivo
    function criaArquivo($n1, $n2, $n3, $n4, $n5){
        $arquivo = fopen("nomes.txt", "w");
        if ($arquivo) {
            fwrite($arquivo, $n1 . "\n");
            fwrite($arquivo, $n2 . "\n");
            fwrite($arquivo, $n3 . "\n");
            fwrite($arquivo, $n4 . "\n");
            fwrite($arquivo, $n5 . "\n");

            fclose($arquivo);
        }
        
        $nomes = file_get_contents("nomes.txt");
        
        echo "Conteúdo do arquivo: <br>" . $nomes;
    }else{
        echo "Erro ao abrir o arquivo: Arquivo invalido";
    }

?>
