<?php
     include_once "action_php/confereSessao.php";
     
    include_once "View/head.php";
    if($_SESSION['acesso'] == "Farmacêutico"){
        include_once "View/menuSemPesquisaFarm.php";
    }else{    
        include_once "View/menuSemPesquisa.php";
    }
 
    include_once "View/formsFunc.php";

    include_once "View/footer.php";

?>