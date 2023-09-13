<?php
    $arquivo;

        // Manipulação de arquivos
        // W = Abrir para ESCRITA
        // R = Abrir para LEITURA
        // A = Abrir para ADICIONAR

    $arquivo = fopen("frases.txt", "w");
        if($arquivo){
            // Escrevendo no arquivo
            fwrite($arquivo, "Eu gosto de comer batata \n");
            fwrite($arquivo, "Baldurs Gate 4 \n");
            fwrite($arquivo, "Tiago Iorc nunca foi legal \n");

            // Fechando arquivo
            fclose($arquivo);

            echo "Arquivo criado com sucesso";
        }else{
            echo "Erro ao criar arquivo";
        }

?>
