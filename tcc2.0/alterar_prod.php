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
input[type="password"] {
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
.esqueci-button {
  background-color: #F39191;
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
.voltar-button {
  background-color: #;
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

<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM Produtos WHERE IdProduto = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>

<form action="php_action/alterar_produto.php" method="POST">
   <div class="topo">
   <h1><?php echo $dados['NomeProd']; ?></h1><img src="img/logoTcc.png" alt="logo">
   </div>
  <div class="form-group">
    <input type="hidden" name = "IdProduto" value="<?php echo $dados['IdProduto']; ?>" required="">
  </div>
  <div class="form-group">
    <label for="text">NOME</label>
    <input type="text" name="nome" id="nome" value="<?php echo $dados['NomeProd']; ?>" required="">
  </div>
  <div class="form-group">
    <label for="e-mil">QUANTIDADE</label>
    <input  type="text" name="qtd" id="nome" value="<?php echo $dados['QtndProd']; ?>" required="">
  </div>
  <div class="form-group">
    <label for="e-mil">DATA DE ATUALIZAÇÃO</label>
    <input type="text" name="atualiData" id="nome" value="<?php echo $dados['DataAtualProd']; ?>" required="">
  </div>
  <div class="form-group">
    <button type="submit" name="btnAltProd" class="login-button">ALTERAR</button>
    <button type="submit" name="btnExcluirProd" class="esqueci-button">EXCLUIR</button>
    <button type="submit" name="voltar" class="voltar-button"><a href="estoque.php">VOLTAR</a></button>
  </div>
</form>
<?php
include_once "includes/footer.php";
}
?>

