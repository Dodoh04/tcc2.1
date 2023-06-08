
<?php

include_once "action_php/conexao_bd.php";

if (isset($_POST['btnCadastrar'])) {

$nome = mysqli_escape_string($connection,$_POST['pesquisa']);

$sql = "SELECT* FROM  usuario  WHERE nome LIKE '%$nome%' LIMIT 4";

$resultado = mysqli_query($connection, $sql);

}else{

                $sql = "SELECT * FROM usuario";

                $resultado = mysqli_query($connection, $sql);}

                

                while($dados = mysqli_fetch_array($resultado)){
                    if($dados['nivelAcess'] == "Cliente"){ ?>
                    <div class="card">
                        <div class="conteudo">
                                <img src="img/user.png" alt="">
                                <a href="forms.php?id=<?php echo $dados['cpf'] ?>"><?php echo $dados['nome'];?></a>
                                <p><?php echo $dados['cpf'];?></p>
                        </div>
                    </div>
                    <?php }else{}}
                ?>
<?php ?>


    



