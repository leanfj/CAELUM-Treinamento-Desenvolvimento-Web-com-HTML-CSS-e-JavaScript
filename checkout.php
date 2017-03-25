<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Checkout Mirror Fashion</title>
    <meta name="viewport" content="width=device-width">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" href="css/checkout.css">

  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand"><img src="img/logo-rodape.png" alt="Mirror Fashion"></a>
        <button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse"><span class="glyphicon glyphicon-align-justify"></span></button>
      </div>
      <ul class="nav navbar-nav collapse navbar-collapse">
        <li><a href="sobre.php"><span class="glyphicon glyphicon-home"></span>
 Sobre</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Ajuda</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-list-alt"></span> Perguntas Frequentes</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Entre em contato</a></li>
      </ul>
    </nav>
    <div class="jumbotron">
      <div class="container">
          <h1>Ótima escolha</h1>
          <p>Obrigado por comprar na Mirror Fashion! Preencha seu dados para efetivar a compra</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-4 col-lg-3">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h2>Sua compra</h2>
            </div>
            <?php
                  $conexao = mysqli_connect("127.0.0.1", "root", "", "WD43");
                  $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_POST[id]");
                  $produto = mysqli_fetch_array($dados)        
            ?>
            <div class="panel-body">
              <img src="img/produtos/foto<?= $produto['id']?>-<?= $_POST['cor'] ?>.png" class="hidden-xs img-thumbnail img-responsive">
              <dl>
                <dt>Produto</dt>
                  <dd><?= $produto['nome']?></dd>
                <dt>Preço</dt>
                  <dd id="preco"><?= $produto['preco']?></dd>
                <dt>Cor</dt>
                  <dd><?= $_POST['cor'] ?></dd>
                <dt>Tamanho</dt>
                  <dd><?= $_POST['tamanho'] ?></dd>
              </dl>
              <div class="form-group">
                <label for="qt">Quantidade</label>
                <input type="number" id="qt" class="form-control" min="0" max="99" value="1">
              </div>
            </div>
            <div class="form-group">
              <label for="total">Total</label>
              <output for="qt valor" id="total" class="form-control">
                <?= $produto['preco'] ?>
              </output>
            </div>
          </div>
        </div>
        <form action="" class="col-sm-8 col-lg-9">
          <div class="row">
            <fieldset class="col-md-6">
              <legend>Dados Pessoais</legend>
              <div class="form-group">
                <label for="nome">Nome completo</label>
                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <div class="input-group">
                  <span class="input-group-addon">@</span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com.br">
                </div>
              </div>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
              </div>
              <div class="checkbox">
                <label for="">
                  <input type="checkbox" value="sim" name="spam" checked>
                  Quero receber spam da Mirror Fashion
                </label>
              </div>
            </fieldset>
            <fieldset class="col-md-6">
              <legend>Cartão de Crédito</legend>
              <div class="form-group">
                <label for="numero_cartao">Número - CVV</label>
                <input type="text" class="form-control" id="numero_cartao" name="numero_cartao">
              </div>
              <div class="form-group">
                <label for="bandeira-cartao">Bandeira</label>
                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                  <option value="master">MasterCard</option>
                  <option value="visa">VISA</option>
                  <option value="amex">American Express</option>
                </select>
              </div>
              <div class="form-group">
                <label for="validade-cartao">Validade</label>
                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
              </div>
            </fieldset>
          </div>
          <button type="submit" class="btn btn-primary btn-lg pull-right">
            <span class="glyphicon glyphicon-thumbs-up"> </span> Confirmar Pedido</button>
        </form>
      </div>
    </div>
    <script>
      document.querySelector('input[type=email]').oninvalid = function () {
        this.setCustomValidity("");
        if (!this.validity.valid) {
          this.setCustomValidity("Email inválido");
        }
      };
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/converteMoeda.js"></script>
    <script src="js/testaConversao.js"></script>
    <script src="js/total.js"></script>
    <script src="js/inputmask.js"></script>
    <script src="js/inputmask.numeric.extensions.js"></script>
    <script src="js/jquery.inputmask.js"></script>
    <script src="js/checkout.js"></script>
  </body>
</html>
