<?php

$teste = 9;

//$nomes= array("Rodrigo", "Felipe", "Maria", "jose");

$nomes= array("Primo"=>"Rodrigo", "vizinho"=>"Felipe", "mãe"=>"Maria", "pai"=>"jose");


//echo is_array($nomes);
//var_dump(is_array($nomes));

/*if(is_array($nomes)){
    echo "É um array";
}else{
    echo "Não é um array";
}*/

//echo in_array("Rodrigo", $nomes);//retorna 1 se for vdd e retorna nada se for vdd

/* if(in_array("Felipe", $nomes)){
    echo "Existe no array";
}else{
    echo  "Não existe no array";
}*/

//$keys = array_keys($nomes);
//print_r($keys);

//$values = array_values($nomes);
//print_r($values);

$carros = array("Camaro", "Uno", "gol");
/*$motos = array("pop100","50cc", "cb1000");

$veiculos = array_merge($carros, $motos);// agrega o conteudo dos dois arrays

print_r($veiculos);*/

// array_pop exclui a ultima posiçao do array
/*print_r($carros);
echo "<br>";
echo array_pop($carros);// mostra o elemento q ta sendo excluido
echo "<br>";
print_r($carros);*/

//array_shift exclui a primeira posição
/*print_r($carros);
echo "<br>";
echo array_shift($carros);// mostra o elemento q ta sendo excluido
echo "<br>";
print_r($carros);*/

/// array_unshift adiciona um ou mais elementos no inicio do array
/*$frutas = array("uva","laranja", "maça");
print_r($frutas);
echo "<br>";
array_unshift($frutas, "manga", "acerola", "morango");
print_r($frutas);
echo "<br>";*/

//array_push adiciona um ou mais elementos no final do array
/*$frutas = array("uva","laranja", "maça");
print_r($frutas);
echo "<br>";
array_push($frutas, "manga", "acerola", "morango");
print_r($frutas);
echo "<br>";*/

// array_combine
/*$keys = array("campeao", "vice", "terceiro");
$values = array("vasco", "flamengo", "botafogo");

$times = array_combine($keys, $values);
print_r($times);*/

//array_sum calcula a soma dos elementos do array
/*$soma = array(5,6,10,8);
$total = array_sum($soma);
echo "A soma é: $total <br>";
echo array_sum($soma);*/

///explode ("/", "20/01/2001") = transforma string em array
//implode ("-", $arr) = transforma array em string

/*$data = "30/02/2018";
$novaData  = explode("/", $data);
print_r($novaData);*/

/*$frase = "meu nome é Johny";

$array = explode(" ", $frase);
print_r($array);*/

$nomes = array("Rodrigo","carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);

print_r($string);