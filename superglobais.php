<?php
/*$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();*/


echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
ECHO $_SERVER['SCRIPT_FILENAME']."<br>";
ECHO $_SERVER['DOCUMENT_ROOT']."<br>";
ECHO $_SERVER['SERVER_PORT']."<br>";
ECHO $_SERVER['REMOTE_ADDR']."<br>";//RETORNA O ENDEREÇO IP DO USUARIO