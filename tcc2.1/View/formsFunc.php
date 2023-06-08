
<form action="action_php/cadastros_user.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/user.png" alt=""></div>
            
    <div class="divs">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">
    <input type="radio" name="sexo"  value="Feminino" checked>
        <label for="">Masculino</label>
    <input type="radio" name="sexo" value="Feminino">
        <label for="">Feminino</label>
    <input type="text" name="cpf" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="CPF" maxlength="11">
    <input type="email" name="email" placeholder="E-mail">
    <input type="radio" name="acesso"  value="Farmaceutico" checked>
        <label for="">Farmacêutico</label>
    <input type="radio" name="acesso" value="Administrador">
        <label for="">Administrador</label>
    
    <input type="text" name="endereço" placeholder="Endereço" maxlength="60">
    <input type="text" name="cidade" placeholder="Cidade" maxlength="50">
    <input type="text" name="estado" placeholder="Estado" maxlength="15">            
    <input type="text" name="telefone" placeholder="Telefone" maxlength="11">
    <input type="password" name="senha" placeholder="Senha temporária" maxlength="10">
    </div>
    
</div>
<div class="btnADD"><button href="" type="submit" name="btnCadastrar" class="botaoADD">SALVAR</button></div>
</form>