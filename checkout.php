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

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
  <div class="jumbotron">
    <div class="container">
        <h1>Ótima escolha</h1>
        <p>Obrigado por comprar na Mirror Fashion! Preencha seu dados para efetivar a compra</p>
    </div>
  </div>
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-heading">
        <h2>Sua compra</h2>
      </div>
      <div class="panel-body">
        <img src="img/produtos/foto2-<?= $_POST['cor'] ?>.png" class="img-thumbnail img-responsive">
        <dl>
          <dt>Produto</dt>
            <dd><?= $_POST['nome']?></dd>
          <dt>Preço</dt>
            <dd><?= "R$", $_POST['preco']?></dd>
          <dt>Cor</dt>
            <dd><?= $_POST['cor'] ?></dd>
          <dt>Tamanho</dt>
            <dd><?= $_POST['tamanho'] ?></dd>
        </dl>
      </div>
      <form action="">
        <fieldset>
          <legend>Dados Pessoais</legend>
          <div class="form-group">
            <label for="nome">Nome completo</label>
            <input type="text" class="form-control" id="nome" name="nome" autofocus>
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
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00">
          </div>
          <div class="checkbox">
            <label for="">
              <input type="checkbox" value="sim" name="spam" checked>
              Quero receber spam da Mirror Fashion
            </label>
          </div>
        </fieldset>
        <fieldset>
          <legend>Cartão de Crédito</legend>
          <div class="form-group">
            <label for="numero-cartao">Número - CVV</label>
            <input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
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
        <button type="submit" class="btn btn-primary btn-lg pull-right">
          <span class="glyphicon glyphicon-thumbs-up"> </span> Confirmar Pedido</button>
      </form>
    </div>
  </div>
</body>
</html>
