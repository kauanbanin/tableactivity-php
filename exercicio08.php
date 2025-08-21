<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 08 PHP - Números de 1 até N e produto</title>
</head>
<body>
    <h1>Exercício 08 - Números de 1 até N e produto</h1>
    <p><strong>Regra:</strong> Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.</p>

    <form method="POST" action="">
    <label>Qual número você escolhe?</label>
    <input type="number" name="numero" min="1" required>

    <button type="submit">Gerar a Impressão</button>
    
</form>  

<?php
if ($_POST) {
    $numero = $_POST['numero'];
    
    $produto = 1;  // Começa com 1 (não zero!)
    $numeros = "";  // String para guardar os números
    
    for ($i = 1; $i <= $numero; $i++) {
        $numeros .= $i . " ";  // Adiciona número na string
        $produto *= $i;        // Multiplica no produto
    }
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p><strong>Números de 1 até $numero:</strong> $numeros</p>";
    echo "<p><strong>Produto:</strong> $produto</p>";
}
?>


<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
