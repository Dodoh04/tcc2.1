<?php

    session_start();
    
    
if($_SESSION['nome'] == NULL){
    header('Location: index.php');
    
}else{
    include_once "action_php/conexao_bd.php";
}