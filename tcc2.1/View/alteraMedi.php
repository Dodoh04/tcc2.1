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


    


        <input type="text" name="medida" placeholder="Medidas em Mg" value="<?php echo $dados['Medidas']; ?>">
        <input type="number" name="qtde" placeholder="Quantidade" value="<?php echo $dados['QtndProd']; ?>">
        
        <div class="nessidade">
        <input type="date" name="vencimento" placeholder="Data de vencimento" value="<?php echo $dados['DataVenci']; ?>">
        <div class="tipoRemedio">
            
        <?php if($dados['TipoProd'] == "Genérico"){?>
            <div class="conjunto">
            <input type="radio" id="tipoG" name="tipoProd"  value="Genérico" checked>
            <label for="tipoG">Genérico</label>
            </div>
            <div class="conjunto">
            <input type="radio" id="tipoO" name="tipoProd" value="Original">
            <label for="tipoO">Original</label>
            </div>
        <?php }else{?>
            <div class="conjunto">
            <input type="radio" id="tipoG" name="tipoProd"  value="Genérico" >
            <label for="tipoG">Genérico</label>
            </div>
            <div class="conjunto">
            <input type="radio" id="tipoO" name="tipoProd" value="Original" checked>
            <label for="tipoO">Original</label>
            </div>
        <?php }?>
  
        </div>
        </div>


        <textarea name="descricao"  placeholder="Descrição"><?php echo $dados['Descricao']; ?></textarea>
        
        <div class="btns">
    <button type="submit" name="btnAltProd" class="botaoADD">SALVAR</button>
    <button type="submit" name="btnExcluirProd" class="botaoSairSessao">EXCLUIR</button>
</div>
    </div>
</div>
</form>




