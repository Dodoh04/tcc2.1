<?php    

	//cabeçalho
	

	

		$id = $_SESSION['cpf'];

		$sql = "SELECT * FROM usuario WHERE cpf = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	

?>

<form action="action_php/alterar.php" method="post">
    <div class="formsCriar">

    <div class="divs"><img src="img/user.png" alt=""></div>
    
            <div class="divs">
            <input type="text" name="nome" placeholder="Nome" value="<?php echo $dados['nome'];?>">
            <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $dados['sobrenome'];?>">
            <label for="">CPF: <?php echo $dados['cpf'];?></label>
            
            <input type="email" name="" placeholder="E-mail" value="<?php echo $dados['email'];?>">
           
            <input type="text" name="" placeholder="Endereço" value="<?php echo $dados['endereco'];?>">
            <input type="text" name="" placeholder="Cidade" value="<?php echo $dados['cidade'];?>">
            <input type="text" name="" placeholder="Estado" value="<?php echo $dados['estado'];?>">            
            <input type="text" name="" placeholder="Telefone" value="<?php echo $dados['telefone'];?>">
            </div>
    
    
</div>

<a href="action_php/encerraSession.php" class="botaoSairSessao">TERMINAR SESSÃO</a>
<a href="alteraSenha.php" class="botaoADD">ALTERAR  A SENHA</a>
<button type="submit" class="botaoADD">SALVAR</button>

</form>