
<form action="action_php/criar_produto.php" method="POST">
    <div class="formsCriar">
    <div class="divs"><img src="img/iconMedi.png" alt=""></div>

    <div class="divs">
        <input type="text" name="nomeProd" placeholder="Nome do medicamento">
        <input type="text" name="fabricante" placeholder="Fabricante">
       
        <input type="text" name="medida" placeholder="Medidas em Mg">
        <!--<input type="text" name="descricao" placeholder="Descrição">-->
        <input type="number" name="qtde" placeholder="Quantidade">

        <div class="nessidade">
        <input type="date" name="vencimento" placeholder="Data de vencimento">
        <div class="tipoRemedio">
            <div class="conjunto">
            <input type="radio" id="tipoG" name="tipoProd"  value="Genérico" checked>
            <label for="tipoG">Genérico</label>
            </div>
            <div class="conjunto">
            <input type="radio" id="tipoO" name="tipoProd" value="Original">
            <label for="tipoO">Original</label>
            </div>
        </div>
        </div>
        
        <textarea id="msg" name="descricao" rows="4" cols="50" maxlength="255" placeholder="Descrição"></textarea>
        <div class="btns">
        
    <button type="submit" name="btnCadProd" class="botaoADD">SALVAR</button>
    
    
</div>
    </div>
    
</div>


</form>