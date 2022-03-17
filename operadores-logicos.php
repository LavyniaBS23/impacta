<?php
//operadores logicos
//e (&& and)
//ou (|| or)
//ou exclusivo (xor)
//negacao(!)

$idade = 26;
$nome = "rodrigo";

if(!($idade == 25) and ($nome == "rodrigo")){
    echo "è verdadeiro";
}else{
    echo " è falso";
}