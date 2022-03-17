<html>
    <body>
        <?php
        if(isset($_POST['enviar-formulario'])){
            $formatosPermitidos = array("png", "jpeg","jpg", "gif");
            $quantidadedeArquivos = count($_FILES['arquivo']['name']);
            $contador = 0;
            while($contador < $quantidadedeArquivos){

                $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);//pathinfo pega a extensao de um arquivo
                if(in_array($extensao, $formatosPermitidos)){
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                    $novoNome = uniqid().".$extensao";
                    if(move_uploaded_file($temporario, $pasta.$novoNome)){
                        echo "Upload feito com sucesso para $pasta.$novoNome!<br>";
                    }else{
                        echo "Erro ao enviar o arquivo $temporario";
                    }
                }else{
                    echo "$extensao não é permitida <br>";
                }
                $contador++;
            }
        }?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "POST" enctype="multipart/form-data">
            <input type = "file" name="arquivo[]" multiple = ><br><!--multiple permite que selecione mais de um arquivo--->
            <input type = "submit" name="enviar-formulario">
        </form>
    </body>
</html>