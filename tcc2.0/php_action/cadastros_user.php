<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btnCadastrar'])) {
		
		
        $name = mysqli_escape_string($connection,$_POST['name']);
		$sobrenome = mysqli_escape_string($connection,$_POST['sobrenome']);
        $nivelAcess = mysqli_escape_string($connection,$_POST['acesso']);
        $cpf = mysqli_escape_string($connection,$_POST['cpf']);
        $email = mysqli_escape_string($connection,$_POST['email']);
        $sexo = mysqli_escape_string($connection,$_POST['sexo']);
        $senha = mysqli_escape_string($connection,$_POST['senha']);


        $sql = "INSERT INTO usuario(cpf, nome, sobrenome, nivelAcess,  sexo, email, senha)
        VALUES('$cpf','$name','$sobrenome','$nivelAcess','$sexo', '$email','$senha')";

		if(mysqli_query($connection, $sql)) {

            echo 'cadastrou';

			$_SESSION['mensagem'] =  "Cadastrado com sucesso.";

			header('Location: ../estoque.php');
		}
		else{
            echo 'nao cadastrou';
            
			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../cadastro.php');	
		}
	}
?>

