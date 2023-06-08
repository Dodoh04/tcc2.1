<?php
 session_start();

 session_destroy();

header('Location: index.php');
       
//$_SESSION['cpf'] = $dados['cpf'];
//$_SESSION['nome'] = $dados['nome'];
//$_SESSION['acesso'] = $dados['nivelAcess'];