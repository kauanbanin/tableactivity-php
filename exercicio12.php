<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 12 PHP - Palavra em formato pirâmide</title>
</head>
<body>
    <h1>Exercício 12 - Palavra em formato pirâmide </h1>
    <p><strong>Regra:</strong>Receber uma palavra e um numero, fazer desse numero o numero de linhas dessa palavra em formato pirâmide </p>

    <form method="POST" action="">
    <label>Digite uma palavra:</label>
    <input type="text" name="palavra" required><br><br>
    
    <label>Quantas linhas multiplicar a sua palavra?</label>
    <input type="number" name="linhas" value="4" min="1" max="10"><br><br>
    
    <button type="submit">Criar Pirâmide</button>
</form>

<?php
if ($_POST) {
    $palavra = strtoupper($_POST['palavra']);  // Converte para maiúscula
    $linhas = $_POST['linhas'] ? $_POST['linhas'] : 4;
    
    echo "<hr>";
    echo "<h3>Pirâmide da palavra: $palavra</h3>";
    echo "<pre>";  // Mantém formatação
    
    for ($linha = 1; $linha <= $linhas; $linha++) {
        // Imprime a palavra $linha vezes
        for ($vez = 1; $vez <= $linha; $vez++) {
            echo $palavra;
            if ($vez < $linha) {
                echo " ";  // Espaço entre palavras (exceto na última)
            }
        }
        echo "\n";  // Nova linha
    }
    
    echo "</pre>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>