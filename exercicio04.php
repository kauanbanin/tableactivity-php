<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 PHP - Três números em ordem decrescente</title>
</head>
<body>
    <h1>Exercício 04 - Três números em ordem decrescente</h1>
    <p><strong>Regra:</strong> Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes) </p>

    <form method="POST" action="">
    <label>Primeiro número:</label>
    <input type="number" name="num1" required><br><br>
    
    <label>Segundo número:</label>
    <input type="number" name="num2" required><br><br>

    <label>Terceiro número:</label>
    <input type="number" name="num3" required><br><br>
    
    <button type="submit">Verificar</button>
    
</form>  

<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    
    
    $numeros = array($num1, $num2, $num3);

    rsort($numeros);

    echo "<p>Números em ordem decrescente: ";
    echo $numeros[0] . ", " . $numeros[1] . ", " . $numeros[2];
    echo "</p>";
    
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>