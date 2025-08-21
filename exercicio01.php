<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 PHP - Soma com Condição</title>
</head>
<body>
    <h1>Exercício 01 - Soma com Condição</h1>
    <p><strong>Regra:</strong> Some 2 números. Se o resultado > 20, some +8. Se ≤ 20, subtraia 5. </p>

    <form method="POST" action="">
    <label>Primeiro número:</label>
    <input type="number" name="num1" required><br><br>
    
    <label>Segundo número:</label>
    <input type="number" name="num2" required><br><br>
    
    <button type="submit">Calcular</button>
    
</form>  

<?php
if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = $num1 + $num2;
    
    if ($soma > 20) {
        $resultado = $soma + 8;
        $operacao = "somado 8";
    } else {
        $resultado = $soma - 5;
        $operacao = "subtraído 5";
    }
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p>$num1 + $num2 = $soma</p>";
    echo "<p>Como $soma é " . ($soma > 20 ? "maior" : "menor ou igual") . " que 20, foi $operacao</p>";
    echo "<p><strong>Resultado final: $resultado</strong></p>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>