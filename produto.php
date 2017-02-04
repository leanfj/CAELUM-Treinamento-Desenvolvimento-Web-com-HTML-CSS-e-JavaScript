        <?php
            $cabecalho_css = '<link rel="stylesheet" href="css/produto.css">';
            $cabecalho_title = "Produto da Mirror Fashion";
            include("cabecalho.php"); ?>
        <!--Conteudo-->
        <div class="produto">
            <h1>Fuzzy Cardigan</h1>
            <p>por apenas R$ 129,00</p>
            <form action="">
                <fieldset class="cores">
                    <legend>Escolaha a cor:</legend>

                    <input type="radio" name="cor" value="verde" id="verde" checked>
                    <label for="verde"><img src="img/produtos/foto2-verde.png" alt="verde"></label>

                    <input type="radio" name="cor" value="rosa" id="rosa">
                    <label for="rosa">
                    <img src="img/produtos/foto2-rosa.png" alt=""></label>

                    <input type="radio" name="cor" value="azul" id="azul">
                    <label for="azul">
                    <img src="img/produtos/foto2-azul.png" alt=""></label>

                </fieldset>
                <input type="submit" class="comprar" value="comprar">
            </form>
        </div>
        <?php include("rodape.php"); ?>
    </body>
</html>
