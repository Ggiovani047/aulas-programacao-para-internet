<?php 

$titulo = "Esse é o TEXTO da variável titulo";

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome =  empty($_POST['nome'])  ? "Não informado" : $_POST['nome'];
    $chute = empty($_POST['chute']) ? -1 : $_POST['chute'];

    if($chute < 0 || $chute > 10){
        $chute = "Numero inválido!";
    }

}else {
    $nome = "Nunhuma informação enviada";
    $chute = "Nunhuma informação enviada";
}

$sorteado = rand(0, 10);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Validar</title>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    
    <h1><?= $titulo ?></h1>
    <p>Dados informados:</p>
    <p><b>NOME:</b> <?= $nome ?></p>
    <p><b>CHUTE:</b> <?= $chute ?></p>
    <p><b>SORTEADO:</b> <?= $sorteado ?></p>

    <?php if($sorteado == $chute): ?>
        <h2 class="ganhou">Parabéns! Você ganhou!</h2>
        <p>Busque seu premio na coordenação</p>
    <?php else: ?>
        <h2 class="perdeu">Não foi dessa Vez!</h2>
        <p>Tente novamente até ganhar...</p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Conta</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while($i < 11): ?>
            <tr>
                <td><?= $chute ?> X <?= $i ?><td>
                <td>= <?= $chute * $i?></td>
            </tr>
            <?php
                $i++;
            endwhile;
            ?>
        </tbody>
    </table>

    <script src="/js/script.js"></script>
</body>
</html>