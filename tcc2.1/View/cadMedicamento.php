<?php
include_once "action_php/conexao_bd.php";


if (isset($_POST['btnCadastrar'])) {

$Produto = mysqli_escape_string($connection,$_POST['pesquisa']);

$sql = "SELECT* FROM  Produtos  WHERE NomeProd LIKE '%$Produto%' LIMIT 4";

$resultado = mysqli_query($connection, $sql);

}else{

$sql = "SELECT * FROM Produtos";

$resultado = mysqli_query($connection, $sql);}

    
while($dados = mysqli_fetch_array($resultado)){

?>	
<div class="card">
    <div class="conteudo">
        <img src="img/iconMedi.png" alt="">
        <a href="criarproduto.php?id=<?php echo $dados['IdProduto'] ?>"><?php echo $dados['NomeProd']; ?></a>
        <p><?php echo $dados['QtndProd']; ?></p>
    </div>
</div>
<?php }
//FIM DA CONSULTA
?>


<!--<div class="corpo">
<div class="card">
    <div class="conteudo">
        <img src="img/iconMedi.png" alt="">
        <a href="#">NOME DO REMEDIO</a>
        <p>300</p>
    </div>

-->
<a href="criarProduto.php" class="botaoADD">ADICIONAR</a>
</div>