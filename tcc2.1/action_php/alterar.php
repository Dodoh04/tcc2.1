<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnAltProd'])) {
		
		$nome = mysqli_escape_string($connection,$_POST['nome']);
		$quantidade = mysqli_escape_string($connection,$_POST['qtd']);
		$DataAtuali = mysqli_escape_string($connection,$_POST['atualiData']);
		$IdProduto = mysqli_escape_string($connection,$_POST['IdProduto']);

		$sql = "UPDATE Produtos SET NomeProd = '$nome', QtndProd = '$quantidade', DataAtualProd = '$DataAtuali' 
		WHERE IdProduto = '$IdProduto'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../estoque.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../alterar_prod.php');	
		}
	}

	if (isset($_POST['btnExcluirProd'])) {
				
		$IdProduto = mysqli_escape_string($connection,$_POST['IdProduto']);

		$sql = "DELETE FROM Produtos WHERE IdProduto = '$IdProduto'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluir com sucesso.";

			header('Location: ../estoque.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../estoque.php');	
		}
	}

	