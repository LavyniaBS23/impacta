<?php 
//conexao
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//message
include_once 'includes/message.php';
?>

<div class = "row">
    <div class = "col s12 m6 push-m3">
        <h3 class= "ligth">Clientes</h3>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>sobrenome:</th>
                    <th>Email:</th>
                    <th>Idade:</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM clientes";
                    $resultado = mysqli_query($connect, $sql);
                    while($dados = mysqli_fetch_array($resultado)){
                    ?> 
                    <tr>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['sobrenome'];?></td>
                        <td><?php echo $dados['email'];?></td>
                        <td><?php echo $dados['idade'];?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><a href="" class="btn-floating rad"><i class="material-icons">delete</i></a></td>
                    </tr>
                   <?php } ?>
            </tbody>
        </table>
        <br> <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?> 