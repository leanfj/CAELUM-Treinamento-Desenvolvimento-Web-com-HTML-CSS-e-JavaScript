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
    </div>
  </div>
</body>
</html>
