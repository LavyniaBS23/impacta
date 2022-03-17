<?php
$senha = "123456";

/*$novaSenha = base64_encode($senha);
echo "Base64: ".$novaSenha. "<br>";
echo "Sua senha é:". base64_decode($novaSenha);
echo"<hr>";

echo "Md5: ". md5($senha). "<br>";
echo "Sha1: ". sha1($senha);*/
/////////////////////

/*$options = [
    'cost' => 10,
];*/
$senha_db = '$2y$10$4V3BqTdA8hZnIXoebYfomuIiym57sRV2CP12SII2liVwdNEn0AYl2';
//$senhaSegura  =  password_hash($senha, PASSWORD_DEFAULT);
//echo $senhaSegura;

if(password_verify($senha, $senha_db)){
    echo "Senha válida";
}else{
    echo" senha inválida";
}