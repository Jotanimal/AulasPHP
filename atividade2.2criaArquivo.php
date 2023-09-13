<?php
    $arquivo;

    $arquivo = fopen("frases.txt", "w");
        if($arquivo){
            fwrite($arquivo, "Eu gosto de comer batata \n");
            fwrite($arquivo, "Baldurs Gate 4 \n");
            fwrite($arquivo, "Tiago Iorc nunca foi legal \n");

            fclose($arquivo);

            echo "Arquivo criado com sucesso";
        }else{
            echo "Erro ao criar arquivo";
        }

?>
