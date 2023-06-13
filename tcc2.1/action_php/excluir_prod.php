<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnExcluirProd'])) {
				
		$IdProduto = mysqli_escape_string($connection,$_POST['codCli']);

		$sql = "DELETE FROM Produtos WHERE IdProduto = '$IdProduto'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluido com sucesso.";

			header('Location: ../estoque.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../estoque.php');	
		}
	}
