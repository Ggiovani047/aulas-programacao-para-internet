<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário com GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="container">
    <h1>Formulário Operações Matemáticas</h1>

    <form method="POST" action="recebe-operacao.php">
      <div class="mb-3">
        <label for="numero1" class="form-label">Numero 1</label>
        <input type="number" class="form-control" id="numero1" name="numero1">
      </div>
      <div class="mb-3">
        <label for="numero2" class="form-label">Numero 2</label>
        <input type="number" class="form-control" id="numero2" name="numero2">
      </div>
      <div class="mb-3">
        <label for="operacao" class="form-label">Operação</label>
        <select name="operacao" id="pet-operacao" class="form-control">
            <option value="divisao">Divisão</option>
            <option value="subtracao">Subtração</option>
            <option value="soma">Soma</option>
            <option value="multiplicacao">Multiplicação</option>
        </select>
      </div>

      <a href="index.php" class="btn btn-info">Voltar</a>
      <button type="reset" class="btn btn-warning">Limpar</button>
      <button type="submit" class="btn btn-primary">Enviar para o PHP</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>