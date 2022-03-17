<?php
$db = 1234.56;
$preco = number_format($db, 2,",","." );
echo "O valor do produto é R$ $preco";

echo "<hr>";

echo round(3.79);
echo "<br>";
echo ceil(10.1);// arredonda sempre p cima

echo "<br>";

echo floor(10.34);// arredonda sempre p cima
echo "<br>";
echo rand(1,20);