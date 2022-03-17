<?php
function exibirNome($nome){
    echo "meu nome é $nome";
}

exibirNome("Lavynia");

echo "<hr>";

function calcularMedia($nome, $n1, $n2, $n3, $n4){
    $media  = ($n1 + $n2 + $n3 + $n4)/4;
    if( $media>= 7){
        echo "$nome foi aprovado coma media $media.";
    }else{
        echo "$nome foi reprovado";

    }
}

calcularMedia("Lavynia", 5, 7, 9, 10);