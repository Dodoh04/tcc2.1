<?php
    include_once "includes/head.php";
    session_start();
	    
    session_destroy();
     
?>
<style>
    form{
        width: 40%;
        height: auto;
        border: 0px;
        margin: 0 auto;
    }
    form img{
        width: 50%;
        display: block;
        margin: 0px auto;
        
    }
    .form-group label {
        display: block;
        font-size: 1.2em;
        color: #000;
        margin-bottom: 10px;
    }
    .form-group button{
      margin-top: 20px;
      width: 49.5%;
    }

    input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
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
  width: 40%;
  transition: background-color 0.3s ease;
  transition: 0.25s;
}
.esqueci-button {
  background-color: #F39191;
  border: none;
  color: #000;
  cursor: pointer;
  font-size: 1.2em;
  padding: 10px;
  width: 40%;
  transition: background-color 0.3s ease;
  transition: 0.25s;
}

</style>

    <form action="php_action/login.php" method="POST">
        <h1><img src="img/logoTcc.png" alt=""></h1>
      <div class="form-group">
        <label for="username">CPF</label>
        <input type="text" id="cpf" name="cpf" maxlength="11" required="">
      </div>
      <div class="form-group">
        <label for="password">SENHA</label>
        <input type="password" id="senha" name="senha" required="">
      </div>
      <div class="form-group">
      <button type="submit" class="login-button" name="btnLogar">LOGAR</button>
      <button type="submit" class="esqueci-button"><a href="esqueciAsenha.php">ESQUECI A SENHA</a></button>
        
      </div>
    </form>
<?php
    include_once "includes/footer.php";
?>

