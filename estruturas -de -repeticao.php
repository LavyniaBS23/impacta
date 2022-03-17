<?php
$contador = 1;
while ($contador <= 10){
    echo "Contador é $contador<hr>";
    $contador++;
}
//////////////////////////////
echo "<hr>";
$contador = 1;
do{
    echo "Contador é $contador<hr>";
    $contador++;
}while( $contador <= 10);

/////////////////////////////
for($contador = 0; $contador <= 10; $contador++){
    //echo "O contador é $contador <br>";
    echo "8 x $contador = ".($contador * 8) . "<br>";
}
/////////////////////////////////
echo "<hr>";

$cores = array("verde","vermelho", "azul");

foreach($cores as $indice => $valor){
    echo$indice . "-" . $valor . "<br>"; 
}