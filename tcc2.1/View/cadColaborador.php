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
                    if($dados['nivelAcess'] != "Farmaceutico" && $dados['nivelAcess'] != "Administrador"){}
                    else{
                ?>	
                <div class="card">
    <div class="conteudo">
        <img src="img/user.png" alt="">
        <a href="apresentaFunc.php?id=<?php echo $dados['cpf'] ?>"><?php echo $dados['nome'];?></a>
        <p><?php echo $dados['nivelAcess'];?></p>
    </div>
</div>
            
            <?php }}
    //FIM DA CONSULTA
    ?> 
<!--<div class="card">
    <div class="conteudo">
        <img src="img/user.png" alt="">
        <a href="#">NOME DO REMEDIO</a>
        <p>300</p>
    </div>
</div>-->
<div class="btnADD"><a href="criarFuncionario.php" class="botaoADD">ADICIONAR</a></div>
</div>