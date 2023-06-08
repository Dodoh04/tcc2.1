<form action="action_php/criar_produto.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/iconMedi.png" alt=""></div>

    <div class="divs">
        <input type="text" name="nomeProd" placeholder="Nome do medicamento">
        <input type="text" name="fabricante" placeholder="Fabricante">
        <input type="radio" name="tipoProd"  value="Genérico" checked>
        <label for="">Genérico</label>
        <input type="radio" name="tipoProd" value="Original">
        <label for="">Original</label>
        <input type="text" name="medida" placeholder="Medidas em Mg">
        <input type="text" name="descricao" placeholder="Descrição">
        <input type="number" name="qtde" placeholder="Quantidade">
        <input type="date" name="vencimento" placeholder="Data de vencimento">
    </div>
    
</div>
<div class="btnADD"><button type="submit" class="botaoADD">EXCLUIR</button> </div>
<div class="btnADD"><button type="submit" name="btnCadProd" class="botaoADD">SALVAR</button></div>
</form>