<?php
if (isset($_POST['btnCadastrar'])) {

$Produto = mysqli_escape_string($connection,$_POST['pesquisa']);

$sql = "SELECT* FROM  Produtos  WHERE NomeProd LIKE '%$Produto%' LIMIT 4";

$resultado = mysqli_query($connection, $sql);

}else{

$sql = "SELECT * FROM Produtos";

$resultado = mysqli_query($connection, $sql);}

    
while($dados = mysqli_fetch_array($resultado)){

?>	
<tr>
<td>
    <a href="alterar_prod.php?id=<?php echo $dados['IdProduto'] ?>" class=" ">
        <?php echo $dados['NomeProd'];?>
    </a>
</td>
<td><?php echo $dados['QtndProd'];?></td>
<td><?php echo $dados['DataAtualProd'];?></td>
    
</tr>
<?php }
//FIM DA CONSULTA
?>