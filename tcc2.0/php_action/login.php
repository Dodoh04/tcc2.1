<?php 

	

	require_once 'conexao_bd.php';

	if (isset($_POST['btnLogar'])) {
		
		$cpf = mysqli_real_escape_string($connection, $_POST['cpf']);
		$senha = mysqli_real_escape_string($connection, $_POST['senha']);


		$sql = "SELECT * FROM usuario WHERE `cpf` = '$cpf'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

		session_start();
       
		$_SESSION['cpf'] = $dados['cpf'];
	    $_SESSION['nome'] = $dados['nome'];
		$_SESSION['acesso'] = $dados['nivelAcess'];


		if($dados['nivelAcess'] != "Administrador" && $dados['nivelAcess'] != "Farmaceutico"){
			header('location: ../index.php');
		}else{

		$query = "SELECT * FROM usuario WHERE `cpf` = '$cpf' and `senha` = '$senha'";

		$resultado = mysqli_query($connection, $query);

		$linha = mysqli_fetch_assoc($resultado);

		if (!$resultado) {
			echo 'Erro ao executar a consulta: ' . mysqli_error($connection);
			exit;
		}

		$total = mysqli_num_rows($resultado);



			if($total == 1){

				header('location: ../estoque.php');
			}
			else{
				header('location: ../index.php');
			}
		}



	}
?>
