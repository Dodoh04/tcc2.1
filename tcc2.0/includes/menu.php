<style>
    
</style>
<nav id="#menu" class="menu">
        <ul>
            <li><a href="estoque.php">ESTOQUE</a></li>
            <li><a href="clientes.php">CLIENTES</a></li>
            <li><a href="funcionarios.php">COLABORADORES</a></li>
            <li><a href="cadastro.php">CADASTRAR</a></li>
            <li style="margin-left: 300px;"><a href="perfil.php"><img src="img/user.png" alt="user"><?php echo $_SESSION['nome'];?></a></li>
            <form action="php_action/logout.php" method="POST"><button type="submit" name="btnExit" class="login-button">SAIR</button></form>
            
        </ul>
       
        <div class="logo"><img src="img/logoTcc.png" alt="logo"></div>
    </nav>