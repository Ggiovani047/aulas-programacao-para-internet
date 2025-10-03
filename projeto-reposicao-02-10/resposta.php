<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_POST['nome']) && isset($_POST['semestre']) && isset($_POST['numero'])) {
            if(empty($_POST['nome']) || empty($_POST['semestre']) || empty($_POST['semestre'])) {
            echo '<h1 style="color: red; font-family: Sans-Serif, Roboto">O Formulário não foi Preenchido Corretamente!</h1>';
            exit();
            }

            $semestreAtual = $_POST['semestre'] . "°";
            $numeroSemestreAtual = $_POST['semestre'];
            $anosFaltantes = 6 - $numeroSemestreAtual;
            $nome = $_POST['nome'];
            $numero = $_POST['numero']; 
        }
        else {
            echo '<h1 style="color: red; font-family: Sans-Serif, Roboto">O Formulário não foi Preenchido Corretamente!</h1>';
            exit();
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Resposta!</title>
</head>
<body class="container">  
    <header style="display: flex; justify-content: center;">
        <h1 style="color: green;">Formulário respondido com Sucesso!</h1>
    </header>
    <div style="display: flex; justify-content: space-beetwen; align-items: stretch; padding: 30px;">
        <div class="col-4">
            <div class="card" style="width: 25vw; padding: 3px;">
                <img src="https://marketplace.canva.com/o4R-Y/MAEhhpo4R-Y/1/tl/canva-green-checkmarck-done-icon-MAEhhpo4R-Y.png" class="card-img-top" alt="Foto da FATEC Jahu">
                <div class="card-body">
                  <h5 class="card-title"><?= $nome ?> está no <?= $semestreAtual?> Semestre</h5>
                  <p class="card-text">Faltam <?= $anosFaltantes ?> Semestre(s) para o <?= $nome?> terminar o curso na FATEC</p>
                  <a href="index.php" class="btn btn-dark">Voltar</a>
                </div>
            </div> 
        </div>

        <div class="col-8" style="border: 1px solid rgba(0, 0, 0, 0.125); border-radius: 10px;">
            <div style="width: 100%; background: black; border-radius: 10px 10px 0 0; padding: 3px; ">
                <h5 style="color: aliceblue; align-items: center;">Tabuada do <?= $numero?></h5>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Operação</th>
                    <th scope="col">Resultado</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row"><?= $numero ?> x 0</th>
                        <td>0</td>
                    </tr>  
                    <tr>
                        <th scope="row"><?= $numero ?> x 1</th>
                        <td><?= $numero * 1 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 2</th>
                        <td><?= $numero * 2 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 3</th>
                        <td><?= $numero * 3 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 4</th>
                        <td><?= $numero * 4 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 5</th>
                        <td><?= $numero * 5 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 6</th>
                        <td><?= $numero * 6 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 7</th>
                        <td><?= $numero * 7 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 8</th>
                        <td><?= $numero * 8 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 9</th>
                        <td><?= $numero * 9 ?></td>
                    </tr>
                    <tr>
                        <th scope="row"><?= $numero ?> x 10</th>
                        <td><?= $numero * 10 ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</body>
</html>