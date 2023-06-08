    
<?php include_once "action_php/conexao_bd.php"; ?>

    <div class="loginContainer">
        
        <div class="contlogincomponentes"><img src="img/logoTcc.png" alt=""></div>

        <form action="action_php/login.php" method="POST">
            <div class="contlogincomponentes">
            <input type="text" name="cpf" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"  placeholder="Digite seu CPF" maxlength="11" required="">
        </div>
        <div class="contlogincomponentes">
            <input type="password" name="senha" placeholder="Digite sua senha" maxlength="10" required="">
        </div>
        <div class="contlogincomponenteslink">
            <button href="" type="submit" name="btnLogar" class="botaoEntrar">ENTRAR</button>
            <a href="esqueciSenha.html" class="botaoEsqueci">ESQUECI A SENHA</a>
        </div>
        </form>

    </div>
 </body>
 </html>