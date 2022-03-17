<?php
/* if -else - elsif
$numero = 9;
if($numero == 10){
    echo "É igual a 10";
}
elseif($numero <= 9){
    echo "É menor ou igual a 9";
} else{
    echo "Não é igual a 10";
}

echo "<hr>";

$media = 7;
// operador ternario
echo($media >= 7) ? "Aprovado!" :"Reprovado!";*/

// switch - case

$cor = "vermelho";
switch($cor):
    case "vermelho":
        echo "Sua cor preferida é vermelho";
    break;
    case "verde":
        echo " sua cor preferida é verde";
    break;
        case "azul":
        echo " sua cor prefeirda é azul";
    break;
    default:
        echo  "Sua cor preferida não é verde, vermelho e nem azul";
    endswitch;