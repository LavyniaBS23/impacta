<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv = "X-UA-Compatible" content = "ie-edge">
        <title>Document</title>
    </head>
    <body>
        <?php
            if(isset($_POST['enviar-formulario'])){
              //array de erros
                $erros = array();
                //sanitize
                $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
                //echo $nome. "<br>";
                $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
                //echo $idade. "<br>";
                if(!filter_var($idade, FILTER_VALIDATE_INT)){
                    $erros[] = "Idade precisa ser inteiro";
                }
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                //echo $email. "<br>";
                if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                    $erros[] = "Email inválido";
                }
                $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
                //echo $url. "<br>";

            //sanitize limpa as variaveis e validate valida de fato
              /*  //validaçoes
              if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)){
                  $erros[] = "Idade precisa ser inteiro";
              }
              if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)){
                $erros[] = "Email invalido";
              }
              if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)){
                $erros[] = "Idade precisa ser float";
              }
              if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)){
                $erros[] = "IP inválido";
              }
              if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)){
                $erros[] = "URL INVÁLIDA";
              }*/
              //exibiçao de msgs
              if(!empty($erros)){
                    foreach($erros as $erro){
                        echo "<li>$erro</li>";
                    }
              }else{
                  echo "Parabéns seus dados estão corretos";
              }
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST">
        <!--<form action="dados.php" method = "GET">-->
            Nome:<input type ="text" name = "ip"><br>
            Idade: <input type= "text" name = "idade"><br>
            Email: <input type="email" name="email"><br>
            Peso:<input type ="text" name = "peso"><br>
            <!--IP:<input type ="text" name = "ip"><br>-->
            URL:<input type ="text" name = "url"><br>
            <!--<input type="submit" name="Enviar">-->
            <button type = "submit" name="enviar-formulario">Enviar</button><br>
        </form>
    </body>
</html>