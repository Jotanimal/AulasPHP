<?php

    $baseMenor = $_REQUEST["baseMenor"];
    $baseMaior = $_REQUEST["baseMaior"];
    $altura = $_REQUEST["altura"];

    echo "A área do trapézio é igual a " . (($baseMaior + $baseMenor) /2) * $altura;
?>