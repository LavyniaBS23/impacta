<?php 
//conexao
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//message
include_once 'includes/message.php';

//include_once 'php_action/delete.php';

?>
<!-- Button trigger modal --><!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>-->


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

                    if(mysqli_num_rows($resultado) > 0){
                    while($dados = mysqli_fetch_array($resultado)){
                    ?> 
                    <tr>
                        <td><?php echo $dados['nome'];?></td>
                        <td><?php echo $dados['sobrenome'];?></td>
                        <td><?php echo $dados['email'];?></td>
                        <td><?php echo $dados['idade'];?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>
                        <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa<?php echo $dados['id']; ?>"><i class="material-icons">delete</i>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModa<?php echo $dados['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabe<?php echo $dados['id']; ?>" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Excluir Cliente</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tem certeza que deseja excluir dados do cliente "<?php echo $dados['nome'];?>"?
                            </div>
                            <div class="modal-footer">
                            <form>
                                <input type="hidden" name="id" value = "/">
                                <button type="button" class="btn btn-secondary red" data-dismiss="modal">Cancelar</button>
                                <button href = "delete.php?id=<?php echo $dados['id'];?>" type="submit" name="btn-deletar" class="btn  green" >Excluir</button>   
                            </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    </tr>
                <?php }} ?><!---->         
            </tbody>
        </table>
        <br> <a href="adicionar.php" class="btn">Adicionar cliente</a>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?> 

