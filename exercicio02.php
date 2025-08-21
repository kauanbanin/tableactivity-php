<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 PHP - Divisibilidade</title>
</head>
<body>
    <h1>Exercício 02 - Divisibilidade </h1>
    <p><strong>Regra:</strong> Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes </p>

    <form method="POST" action="">
    <label>Informe um número de sua escolha:</label>
    <input type="number" name="num1" required><br><br>
    <button type="submit">Calcular</button>
    
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