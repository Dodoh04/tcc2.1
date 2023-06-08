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
    include_once "includes/menu.php";

    $_SESSION['nome'];
      
?>
<style>
    form{
        width: 100%;
        height: auto;
        border: 0px;
        margin-bottom: 100px;
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
        margin: 0px auto;
    }
    .topo img{
        width: 100px;
        display: block;
        margin: 0px auto;
        
    }
    .form-group label {
        display: block;
        font-size: 1.2em;
        color: #000;
        margin-bottom: 10px;
    }
    input[type="text"],
input[type="email"],
input[type="password"],
fieldset {
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

<form action="php_action/cadastros_user.php" method="POST">
       <div class="topo">
       <h1>CADASTRAR</h1><img src="img/logoTcc.png" alt="logo">
       </div>
      <div class="form-group">
        <label for="name">NOME</label>
        <input type="text" id="name" name="name" required="">
      </div>
      <div class="form-group">
        <label for="sobrenome">SOBRENOME</label>
        <input type="text" id="sobrenome" name="sobrenome" required="">
      </div>
      <div class="">
        <fieldset>
            <legend>Nível de acesso</legend>

            <div>
                <input type="radio" name="acesso" value="Farmaceutico"
                checked>
                <label for="huey">Farmacêutico</label>
            </div>

            <div>
                <input type="radio" name="acesso" value="Cliente">
                <label for="dewey">Cliente</label>
            </div>

            <div>
                <input type="radio" name="acesso" value="Administrador">
                <label for="louie">Administrador</label>
            </div>
        </fieldset>
    </div>
      <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text"  id="cpf" name="cpf" maxlength="11" required="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" />
      </div>
      <div class="form-group">
        <label for="e-mail">E-MAIL</label>
        <input type="email" id="email" name="email" required="">
      </div>
      <fieldset>
            <legend>SEXO</legend>
            <div>
                <input type="radio" name="sexo" value="Masculino"
                checked>
                <label for="huey">Masculino</label>
            </div>

            <div>
                <input type="radio" name="sexo" value="Feminino">
                <label for="dewey">Feminino</label>
            </div>

            <div>
                <input type="radio" name="sexo" value="Outros">
                <label for="louie">Outros</label>
            </div>
        </fieldset>
      <div class="form-group">
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" required="">
      </div>
      <div class="form-group">
        <button type="submit" class="login-button" name="btnCadastrar">CADASTRAR</button>
      </div>
    </form>
<?php
    include_once "includes/footer.php";
}
?>


