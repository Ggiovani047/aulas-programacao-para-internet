<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu endereço</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">

<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1> " . $_POST['rua'] . "</h1>";
    echo '<br>';
    echo "<h1> " . $_POST['bairro'] . "</h1>";
    echo '<br>';
    echo "<h1> " . $_POST['cidade'] . "</h1>";
    echo '<br>';
    echo "<h1> " . $_POST['estado'] . "</h1>";
}



?>
    
</body>
</html>


