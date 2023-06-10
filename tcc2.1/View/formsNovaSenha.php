<?php
	

	if (isset($_GET['id'])){

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM usuario WHERE cpf = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>

    <div class="loginContainer">
        
        <div class="contlogincomponentes"><h2>NOVA SENHA</h2></div>
        
        <form action="action_php/alterar.php" method="POST">
        <input type="hidden" name = "cpf" value="<?php echo $dados['cpf']; ?>">
        <div class="contlogincomponentes">
            <input type="password" name="senhaAntiga" placeholder="Senha atual" maxlength="10" required="">
        </div>
        <div class="contlogincomponentes">
            <input type="text" name="senhaNova" placeholder="Nova senha" maxlength="10" required="">
        </div>
        <div class="contlogincomponentes">
            <input type="password" name="confirma" placeholder="Confirmar senha" maxlength="10" required="">
        </div>
        <div class="contlogincomponenteslink">
            <button name="btnNovaSenha" type="submit" class="botaoEntrar">SALVAR</button>
        </div>
        <div class="contlogincomponenteslink">
            <a href="apresentaPerfil.php" class="botaoEntrar">VOLTAR</a>
        </div>
        </form> 


    </div>
 </body>
 </html>