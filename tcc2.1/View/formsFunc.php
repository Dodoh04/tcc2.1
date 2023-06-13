
<form action="action_php/cadastros_user.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/user.png" alt=""></div>
            
    <div class="divs">
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="sobrenome" placeholder="Sobrenome">

    <div class="nessidade">
    <input type="text" name="cpf" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" 
    placeholder="CPF" maxlength="11" ?>
    <div class="tipoRemedio">
        
            <div class="conjunto">
            <input type="radio" name="sexo"  value="Masculino" checked>
            <label for="">Masculino</label>
            </div>
            <div class="conjunto">
            <input type="radio" name="sexo" value="Feminino">
            <label for="">Feminino</label>
            </div>
            </div>
            </div>


        <div class="nessidade">
            <input type="email" name="email" placeholder="E-mail">
                <div class="tipoRemedio">
                    <div class="conjunto">
                        <input type="radio" name="acesso"  value="Farmacêutico" checked>
                        <label for="">Farmacêutico</label>
                    </div>
                    <div class="conjunto">
                        <input type="radio" name="acesso" value="Administrador">
                        <label for="">Administrador</label>
                    </div>
                </div>
        </div>
    
    <input type="text" name="endereco" placeholder="Endereço" maxlength="60">
    <input type="text" name="cidade" placeholder="Cidade" maxlength="50">
    <input type="text" name="estado" placeholder="Estado" maxlength="15">            
    <input type="text" name="telefone" placeholder="Telefone" maxlength="11">
    <input type="password" name="senha" placeholder="Senha temporária" maxlength="10"> <span class="lnr lnr-eye"></span>
       
    </div>
    
</div>
<div class="btnADD"><button href="" type="submit" name="btnCadastrar" class="botaoADD">SALVAR</button></div>
</form>