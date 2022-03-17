<?php
if(10 ==/*!=*/ 10){
    echo "positivo";
}else{
    echo "Negativo";
}

//operador de identidade

if(10 ===/*!==*/ 10){
    echo "positivo";
}else{
    echo "Negativo";
}

//sinal de diferente
if(10 <> 11){
    echo "positivo";
}else{
    echo "Negativo";
}


///spaceship <=>

var_dump(20 <=> 30);// se lado esq menor retorna -1, se 2 lados iguais retorna 0 e se o dir for menor retorna 1