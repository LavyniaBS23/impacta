<?php

$nome = "Rodrigo oliveira";
echo $nome . "<br>";

$novoNome = strtoupper($nome);
echo $novoNome;

echo "<hr>";

$mensagem = "ola mundo";
echo substr($mensagem, 4, 4);

echo "<hr>";
$objeto  = "mouse";
$novoObjeto = str_pad($objeto, 10, "*", STR_PAD_LEFT);
echo $novoObjeto;

echo "<br>";
$string = str_repeat("Sucesso", 5);
echo $string;

$texto = "A seleçao Argentina sera campea da copa do mundo 2018";
$novoTexto = str_replace("Argentina", "Brasileira", $texto);
echo $novoTexto;

echo "<hr>";

echo strpos($texto, "copa");