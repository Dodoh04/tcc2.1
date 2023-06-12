<?php
   
    include_once "action_php/confereSessao.php";
    include_once "View/head.php";
    
    
    include_once "View/menu.php";
    
    if($_SESSION['mensagem'] != ""){
        include_once "action_php/mensagem.php";}
     $_SESSION['mensagem'] = "";
 
    include_once "View/cadMedicamento.php";

    include_once "View/footer.php";

?>