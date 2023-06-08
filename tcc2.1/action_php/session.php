<?php
session_start();
       
$_SESSION['cpf'] = $dados['cpf'];
$_SESSION['nome'] = $dados['nome'];
$_SESSION['acesso'] = $dados['nivelAcess'];