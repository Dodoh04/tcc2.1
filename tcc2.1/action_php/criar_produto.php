<?php 

	//session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnCadProd'])) {
		
		$nomeProd = mysqli_escape_string($connection,$_POST['nomeProd']);
		$fabricante = mysqli_escape_string($connection,$_POST['fabricante']);
		$tipoProd = mysqli_escape_string($connection,$_POST['tipoProd']);
		$medida = mysqli_escape_string($connection,$_POST['medida']);
		$descricao = mysqli_escape_string($connection,$_POST['descricao']);
		$qtde = mysqli_escape_string($connection,$_POST['qtde']);
		$vencimento = mysqli_escape_string($connection,$_POST['vencimento']);

		$sql = "INSERT INTO Produtos(IdProduto ,NomeProd,QtndProd,DataVenci, Fabricante, TipoProd,
		Medidas, Descricao)
		VALUES(NULL ,'$nomeProd','$qtde','$vencimento', '$fabricante','$tipoProd' ,'$medida', '$descricao')";

		if(mysqli_query($connection, $sql)) {
			echo'sucesso';

			$_SESSION['mensagem'] =  "Cadastrado com sucesso.";

			header('Location: ../medicamentos.php');
		}
		else{

			echo 'deu errado';	


			//$_SESSION['mensagem'] = "Erro ao cadastrar.";

			//header('Location: ../AdicionarProd.php');	
		}
	}
?>
