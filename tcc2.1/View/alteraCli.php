<?php
	

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM usuario WHERE cpf = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>

<form action="action_php/cadastros_user.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/user.png" alt=""></div>
            
    <div class="divs">
    <input type="text" name="nome" placeholder="Nome" value="<?php echo $dados['nome']; ?>">
    <input type="text" name="sobrenome" placeholder="Sobrenome" value="<?php echo $dados['sobrenome']; ?>">

    <?php if($dados['sexo'] == "Masculino"){?>

        <input type="radio" name="sexo"  value="Masculino" checked>
    <label for="">Masculino</label>
<input type="radio" name="sexo" value="Feminino">
    <label for="">Feminino</label>
<?php }else{?>
    <input type="radio" name="sexo"  value="Masculino" >
    <label for="">Masculino</label>
<input type="radio" name="sexo" value="Feminino" checked>
    <label for="">Feminino</label>
<?php }?>


    <input type="text" name="cpf" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" 
    placeholder="CPF" maxlength="11" value="<?php echo $dados['cpf']; ?>">
    <input type="email" name="email" placeholder="E-mail" value="<?php echo $dados['email']; ?>">    
    <input type="text" name="endereço" placeholder="Endereço" maxlength="60" value="<?php echo $dados['endereco']; ?>">
    <input type="text" name="cidade" placeholder="Cidade" maxlength="50" value="<?php echo $dados['cidade']; ?>">
    <input type="text" name="estado" placeholder="Estado" maxlength="15" value="<?php echo $dados['estado']; ?>">            
    <input type="text" name="telefone" placeholder="Telefone" maxlength="11" value="<?php echo $dados['telefone']; ?>">
    <input type="password" name="senha" placeholder="Senha temporária" maxlength="10" value="<?php echo $dados['senha']; ?>">
    <div class="btns">
    <button type="submit" name="btnAltProd" class="botaoADD">SALVAR</button>
    <button type="submit" name="btnExcluirProd" class="botaoSairSessao">EXCLUIR</button>
</div>
    </div>
    
</div>


</form>