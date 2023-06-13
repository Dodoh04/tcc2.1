<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnAltProd'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nomeProd']);
		$quantidade = mysqli_escape_string($connection,$_POST['qtde']);
		$vencimento = mysqli_escape_string($connection,$_POST['vencimento']);
		$IdProduto = mysqli_escape_string($connection,$_POST['IdProduto']);
		$fabricante = mysqli_escape_string($connection,$_POST['fabricante']);
		$tipo = mysqli_escape_string($connection,$_POST['tipoProd']);
		$medida = mysqli_escape_string($connection,$_POST['medida']);
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);

		$sql = "UPDATE Produtos SET NomeProd = '$nome', QtndProd = '$quantidade', DataVenci = '$vencimento',
		Fabricante = '$fabricante', TipoProd = '$tipo', Medidas = '$medida', Descricao = '$descricao' 
		WHERE IdProduto = '$IdProduto'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../medicamentos.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../apresentaProd.php?id=' . $IdProduto);	
		}
	}

	if (isset($_POST['btnExcluirProd'])) {
				
		$IdProduto = mysqli_escape_string($connection,$_POST['IdProduto']);

		$sql = "DELETE FROM Produtos WHERE IdProduto = '$IdProduto'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluido com sucesso.";

			header('Location: ../medicamentos.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../ApresentaMedi.php');	
		}
	}


	if (isset($_POST['btnAltFunc'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
        $nivelAcess = mysqli_escape_string($connection,$_POST['acesso']);
        $cpf = mysqli_escape_string($connection,$_POST['cpf']);
        $email = mysqli_escape_string($connection,$_POST['email']);
		$endereco = mysqli_escape_string($connection,$_POST['endereco']);
		$cidade = mysqli_escape_string($connection,$_POST['cidade']);
		$estado = mysqli_escape_string($connection,$_POST['estado']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
        $sexo = mysqli_escape_string($connection,$_POST['sexo']);
        $senha = mysqli_escape_string($connection,$_POST['senha']);

		$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', estado = '$estado', 
		cidade = '$cidade', endereco = '$endereco', nivelAcess = '$nivelAcess', sexo = '$sexo', email = '$email' ,senha = '$senha' 
		WHERE cpf = '$cpf'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../colaboradores.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../apresentaFunc.php?id=' . $cpf);	
		}
	}
	if (isset($_POST['btnExcluirFunc'])) {
				
		$cpf = mysqli_escape_string($connection,$_POST['cpf']);

		$sql = "DELETE FROM usuario WHERE cpf = '$cpf'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluido com sucesso.";

			header('Location: ../colaboradores.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../ApresentaFunc.php?id='.$cpf);	
		}
	}
	if (isset($_POST['btnAltPerfil'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
        $nivelAcess = mysqli_escape_string($connection,$_POST['acesso']);
        $cpf = mysqli_escape_string($connection,$_POST['cpf']);
        $email = mysqli_escape_string($connection,$_POST['email']);
		$endereco = mysqli_escape_string($connection,$_POST['endereco']);
		$cidade = mysqli_escape_string($connection,$_POST['cidade']);
		$estado = mysqli_escape_string($connection,$_POST['estado']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
       

		$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', estado = '$estado', 
		cidade = '$cidade', endereco = '$endereco', nivelAcess = '$nivelAcess',  email = '$email'
		WHERE cpf = '$cpf'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../apresentaPerfil.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../apresentaFunc.php?id=' . $cpf);	
		}
	}
	
	if (isset($_POST['btnAltCli'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
        $cpf = mysqli_escape_string($connection,$_POST['cpf']);
        $email = mysqli_escape_string($connection,$_POST['email']);
		$endereco = mysqli_escape_string($connection,$_POST['endereco']);
		$cidade = mysqli_escape_string($connection,$_POST['cidade']);
		$estado = mysqli_escape_string($connection,$_POST['estado']);
		$telefone = mysqli_escape_string($connection,$_POST['telefone']);
        $sexo = mysqli_escape_string($connection,$_POST['sexo']);
        $senha = mysqli_escape_string($connection,$_POST['senha']);

		$sql = "UPDATE usuario SET nome = '$nome', sobrenome = '$sobrenome', telefone = '$telefone', estado = '$estado', 
		cidade = '$cidade', endereco = '$endereco',  sexo = '$sexo', email = '$email' ,senha = '$senha' 
		WHERE cpf = '$cpf'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../clientes.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../apresentaCli.php?id=' . $cpf);	
		}
	}

	if (isset($_POST['btnNovaSenha'])) {
		
        $cpf = mysqli_escape_string($connection,$_POST['cpf']);
        $senhaAntiga = mysqli_escape_string($connection,$_POST['senhaAntiga']);
		$senhaConfirma = mysqli_escape_string($connection,$_POST['confirma']);
		$senha = mysqli_escape_string($connection,$_POST['senhaNova']);
		
		$pesquisa = "SELECT * FROM usuario WHERE cpf = '$cpf'";

		$resultado = mysqli_query($connection,$pesquisa);

		$dado = mysqli_fetch_array($resultado);

		$senhaCorreta = $dado['senha'];
	
		
	if($senhaConfirma == $senha ){
		if($senhaConfirma != $senhaAntiga ){
			if($senhaCorreta == $senhaAntiga){
			
		$sql = "UPDATE usuario SET senha = '$senha' 
		WHERE cpf = '$cpf'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Senha alterada com sucesso.";

			header('Location: ../apresentaPerfil.php');
		}else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../alterasenha.php?id=' . $cpf);	
		}}else{
			$_SESSION['mensagem'] = "Senha atual incorreta.";
			header('Location: ../alterasenha.php?id=' . $cpf);	
		}
		}else{
			$_SESSION['mensagem'] = "Crie uma senha nova.";
			header('Location: ../alterasenha.php?id=' . $cpf);	
		}
	}else{
		$_SESSION['mensagem'] = "A nova senha e a confirmação de senha não correspondem.";
		header('Location: ../alterasenha.php?id=' . $cpf);	
	}}