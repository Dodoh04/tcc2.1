<?php

    session_start();
    
    
if($_SESSION['nome'] == NULL){
    include_once "encerraSession.php";
    
}else{
    include_once "action_php/conexao_bd.php";
}