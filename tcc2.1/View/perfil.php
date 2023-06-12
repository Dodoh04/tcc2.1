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
            <input type="text" name="cpf" placeholder="CPF" value="<?php echo $dados['cpf'];?>">
            <input type="text" name="acesso" placeholder="Cargo" value="<?php echo $dados['nivelAcess'];?>">
            
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $dados['email'];?>">
           
            <input type="text" name="endereco" placeholder="Endereço" value="<?php echo $dados['endereco'];?>">
            <input type="text" name="cidade" placeholder="Cidade" value="<?php echo $dados['cidade'];?>">
            <input type="text" name="estado" placeholder="Estado" value="<?php echo $dados['estado'];?>">            
            <input type="text" name="telefone" placeholder="Telefone" value="<?php echo $dados['telefone'];?>">
            </div>
    
    
</div>

<a href="action_php/encerraSession.php" class="botaoSairSessao">TERMINAR SESSÃO</a>
<a href="alteraSenha.php?id=<?php echo $dados['cpf'] ?>" class="botaoADD">ALTERAR  A SENHA</a>
<button type="submit" name="btnAltPerfil" class="botaoADD">SALVAR</button>

</form>