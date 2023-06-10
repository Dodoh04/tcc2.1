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

			$_SESSION['mensagem'] = "Excluir com sucesso.";

			header('Location: ../medicamentos.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../ApresentaMedi.php');	
		}
	}

	