<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 05 PHP - Classificação de triângulo</title>
</head>
<body>
    <h1>Exercício 05 - Classificação de triângulo</h1>
    <p><strong>Regra:</strong> Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados </p>

    <form method="POST" action="">
    <label>Primeiro valor de Lado 1:</label>
    <input type="number" name="lado1" required><br><br>
    
    <label>Segundo valor de Lado 2:</label>
    <input type="number" name="lado2" required><br><br>

    <label>Terceiro valor de Lado 3:</label>
    <input type="number" name="lado3" required><br><br>
    
    <button type="submit">Classificar</button>
    
</form>  

<?php
if ($_POST) {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];
    
    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        // É um triângulo válido, agora classifica
    } else {
        echo "Estes números não formam um triângulo válido!";
    }

    if ($lado1 == $lado2 && $lado2 == $lado3) {
        $tipo = "Equilátero";
    } elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
        $tipo = "Isósceles";
    } else {
        $tipo = "Escaleno";
    }

    echo "<p> De acordo com o tamanho dos lados do seu triângulo, ele é um Triângulo ";
    echo $tipo;
    echo "</p>";
    
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>