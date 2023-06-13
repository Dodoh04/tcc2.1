<?php 

	//session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnCadastrar'])) {
		
		
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


        $sql = "INSERT INTO usuario(cpf, nome, sobrenome, telefone, estado, cidade, endereco, nivelAcess, sexo, email, senha)
        VALUES('$cpf','$nome','$sobrenome', '$telefone', '$estado','$cidade', '$endereco', '$nivelAcess', '$sexo', '$email','$senha')";

		if(mysqli_query($connection, $sql)) {


			$_SESSION['mensagem'] =  "Cadastrado com sucesso.";

			header('Location: ../colaboradores.php');
		}
		else{
            echo 'nao cadastrou';
            
			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../cadastro.php');	
		}
	}
?>

