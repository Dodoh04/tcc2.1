<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnCadProd'])) {
		
		$name = mysqli_escape_string($connection,$_POST['name']);
		$qtnd = mysqli_escape_string($connection,$_POST['qtnd']);
		$data = mysqli_escape_string($connection,$_POST['data']);

		$sql = "INSERT INTO Produtos(NomeProd,QtndProd,DataAtualProd)VALUES('$name','$qtnd','$data')";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] =  "Cadastrado com sucesso.";

			header('Location: ../estoque.php');
		}
		else{

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../AdicionarProd.php');	
		}
	}
?>
