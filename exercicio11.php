<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11 PHP - Tabuada de um número</title>
</head>
<body>
    <h1>Exercício 11 - Tabuada de um número </h1>
    <p><strong>Regra:</strong>Criar um algoritmos que imprima a tabuada de um número </p>

    <form method="POST" action="">
    <label>Digite um número para ver sua tabuada:</label>
    <input type="number" name="numero" required><br><br>
    
    <label>Até qual número? (padrão 10)</label>
    <input type="number" name="limite" value="10" min="1"><br><br>
    
    <button type="submit">Gerar Tabuada</button>
</form>

<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    
    if ($num1 % 10 == 0) {
        $resultado = "divisível por 10";
        // É divisível por 10
    } elseif ($num1 % 5 == 0) {
        $resultado = "divisível por 5";
        // É divisível por 5
    } elseif ($num1 % 2 == 0) {
        $resultado = "divisível por 2";
        // É divisível por 2
    } else {
        $resultado = "Não é divisível por 10, 5 nem 2.";
        // Não é divisível por nenhum
    }
    
    echo "<p> O numero $num1 é $resultado</p>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>