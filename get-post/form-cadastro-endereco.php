<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Cadastro de Endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="container">
    <h1>Formulário de Cadastro de Endereço</h1>

    <form method="POST" action="recebe-endereco.php" >
      <div class="mb-3">
        <label for="rua" class="form-label">Digite sua Rua</label>
        <input type="text" class="form-control" id="rua" name="rua">
      </div>
      <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade">
      </div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" id="bairro" name="bairro">
      </div>
      <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="text" class="form-control" id="estado" name="estado">
      </div>

      <a href="index.php" class="btn btn-info">Voltar</a>
      <button type="reset" class="btn btn-warning">Limpar</button>
      <button type="submit" class="btn btn-primary">Enviar para o PHP</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>