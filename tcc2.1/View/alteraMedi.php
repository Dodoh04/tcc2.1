<?php
	

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM produtos WHERE IdProduto = '$id'";

		$resultado = mysqli_query($connection,$sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
<form action="action_php/alterar.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/iconMedi.png" alt=""></div>

    <div class="divs">
        <input type="hidden" name = "IdProduto" value="<?php echo $dados['IdProduto']; ?>" required="">
        <input type="text" name="nomeProd" placeholder="Nome do medicamento" value="<?php echo $dados['NomeProd']; ?>">
        <input type="text" name="fabricante" placeholder="Fabricante" value="<?php echo $dados['Fabricante']; ?>">


    <?php if($dados['TipoProd'] == "Genérico"){?>

        <input type="radio" name="tipoProd"  value="Genérico" checked>
        <label for="">Genérico</label>
        <input type="radio" name="tipoProd" value="Original">
        <label for="">Original</label>
    <?php }else{?>
            <input type="radio" name="tipoProd"  value="Genérico">
            <label for="">Genérico</label>
            <input type="radio" name="tipoProd" value="Original"  checked>
            <label for="">Original</label>
    <?php }?>


        <input type="text" name="medida" placeholder="Medidas em Mg" value="<?php echo $dados['Medidas']; ?>">
        <input type="text" name="descricao" placeholder="Descrição" value="<?php echo $dados['Descricao']; ?>">
        <input type="number" name="qtde" placeholder="Quantidade" value="<?php echo $dados['QtndProd']; ?>">
        <input type="date" name="vencimento" placeholder="Data de vencimento" value="<?php echo $dados['DataVenci']; ?>">
        <div class="btns">
    <button type="submit" name="btnAltProd" class="botaoADD">SALVAR</button>
    <button type="submit" name="btnExcluirProd" class="botaoSairSessao">EXCLUIR</button>
</div>
    </div>
    
</div>


</form>