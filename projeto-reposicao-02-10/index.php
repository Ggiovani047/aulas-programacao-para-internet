<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Formulário</title>
</head>
<body class ="container">
    <h1 style="padding: 10px 10px 10px 0; color: red;">Formulário para Estudantes da FATEC!</h1>
    <h4 style="padding: 5px 5px 5px 0; color: blue;">Descubra em quantos semestres você terminará seu Curso!</h4>
    <h6 style="padding: 3px; color: green;">E Aprenda a Tabuada</h6>
    <form method="POST" action="resposta.php" >
        <div class="mb-3">
            <label for="nome" class="form-label">Digite seu Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div>
            <label for="semestre" class="form-label">Qual Semestre você está?</label>
            <select class="form-select" id="semestre" name="semestre">
                <option value="1" selected>1°</option>
                <option value="2">2°</option>
                <option value="3">3°</option>
                <option value="4">4°</option>
                <option value="5">5°</option>
                <option value="6">6°</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="numero" class="form-label">Escholha um Número para saber a Tabuada</label>
            <input type="number" class="form-control" id="numero" name="numero" min="1" max="10">
        </div>

        <button type="reset" class="btn btn-warning">Limpar</button>
        <button type="submit" class="btn btn-primary">Vamos Lá!</button>
    </form>
    
    
</body>
</html>