<?php

    session_start();
    
    
if($_SESSION['nome'] == NULL){
    session_start();
    session_destroy();

    header('location: index.php');
    exit;
    
}else{
    include_once "php_action/conexao_bd.php";
    include_once "includes/head.php";
    if($_SESSION['acesso'] == "Administrador"){
      include_once "includes/menu.php";
  }else{
      include_once "includes/menuFarmaceutico.php";
  }

    $_SESSION['nome'];
      
?>
<style>
    form{
        width: 100%;
        height: auto;
        border: 0px;
    }
    .topo{
        width: 80%;
        display: flex;
        justify-content: center;
        margin: 0px auto;
    }
    .topo h1{
        font-size: 40px;
        display: block;
        margin-bottom: 40px;
    }
   
    .form-group label {
        display: block;
        font-size: 1.2em;
        color: #000;
        margin-bottom: 10px;
    }
    input[type="text"],
input[type="int"],
input[type="date"] {
    width: 60%;
    display: block;
    margin: 0px auto;
  box-sizing: border-box;
  padding: 10px;
  border: none;
  background-color: #f0f0f0;
  font-size: 1.2em;
  color: #555;
  box-shadow: inset 0px 2px 5px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
}
    label{
        text-align: center;
        color: #000;
    }
    .login-button {
  background-color: #7EF48A;
  border: none;
  color: #000;
  cursor: pointer;
  font-size: 1.2em;
  padding: 10px;
  width: 50%;
  transition: background-color 0.3s ease;
  transition: 0.25s;
  display: block;
    margin: 20px auto;
}
</style>

    <form action="php_action/criar_produto.php" method="POST">
       <div class="topo">
       <h1>CADASTRO DE PRODUTO</h1>
       </div>
      <div class="form-group">
        <label for="nome">NOME DO PRODUTO</label>
        <input type="text" id="name" name="name" required="">
      </div>
      <div class="form-group">
        <label for="qtnd">QUANTIDADE</label>
        <input type="text" id="qtnd" name="qtnd" required="">
      </div>
      <div class="form-group">
        <label for="data">DATA DE ATUALIZAÇÃO</label>
        <input type="date" id="data" name="data" required="">
      </div>
      <div class="form-group">
        <button type="submit" name="btnCadProd" class="login-button">CADASTRAR</button>
      </div>
    </form>
<?php
    include_once "includes/footer.php";
}
?>

