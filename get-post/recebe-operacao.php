<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['numero1']) && !empty($_POST['numero2'])) {
        if($_POST['operacao'] == 'soma') {
            $Resultado = $_POST['numero1'] + $_POST['numero2']; 
        }
        else if ($_POST['operacao'] == 'multiplicacao') {
            $Resultado = $_POST['numero1'] * $_POST['numero2'];
        }
        else if ($_POST['operacao'] == 'divisao') {
            
            $Resultado = $_POST['numero1'] / $_POST['numero2'];    
        }
        else if ($_POST['operacao'] == 'subtracao') {
            $Resultado = $_POST['numero1'] - $_POST['numero2'];
        }
    }
    else {
        $Resultado = 'Você não inseriu números válidos';
    }

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">

<h1>O resultado dessa Operação é: <?= $Resultado ?></h1>
    
</body>
</html>