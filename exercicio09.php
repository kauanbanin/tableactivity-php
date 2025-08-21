<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09 PHP - Imprimir palavra SOL</title>
</head>
<body>
    <h1>Exercício 09 - Imprimir palavra SOL</h1>
    <p><strong>Regra:</strong> Entrar com o número de vezes que se deseja imprimir a palavra SOL e imprimir</p>

    <form method="POST" action="">
    <label>Quantas vezes quer imprimir SOL?</label>
<input type="number" name="vezes" min="1" required><br><br>
<button type="submit">Imprimir</button>
    
</form>  

<?php
if ($_POST) {
    $vezes = $_POST['vezes'];
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    
    for ($i = 1; $i <= $vezes; $i++) {
        echo "SOL<br>";
    }
}
?>


<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
