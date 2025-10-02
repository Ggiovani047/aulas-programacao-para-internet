<pre>

<?php
    print_r($_SERVER);
    exit();
?>

</pre>
<?php
//o isset() verifica se uma variável existe
//$_GET guarda os dados quando enviados por GET
//Dentro do [] colocamos o NAME de um input para obter seu valor
// Esse if verifica se o campo nome foi enviado por get

if(isset($_GET['nome'])){
    echo "<h1>Campos enviados por GET:</h1>";
    echo "Nome: " . $_GET['nome'] . "<br>";

    $ano = $_GET['ano_nascimento'];

    $idade = date("Y") - $ano;
    echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
}else {
    echo "<p style='color: red;'>Não veio nada por GET!</p>";

}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1>Campos enviados por POST:</h1>";
    echo "Nome: " . $_POST['nome'] . "<br>";

    $ano = $_POST['ano_nascimento'];

    $idade = date("Y") - $ano;
    echo "<p>Nasceu em: $ano e tem $idade anos.</p>";
} else {
  echo "<p style='color: red;'>Não veio nada por POST!</p>";      
}
?>





