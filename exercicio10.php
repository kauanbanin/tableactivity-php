<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10 PHP - Soma positivos e conta negativos</title>
</head>
<body>
    <h1>Exercício 10 - Soma positivos e conta negativos</h1>
    <p><strong>Regra:</strong> 10.	Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos</p>

    <form method="POST" action="">
    <label><strong>Digite 20 números:</strong></label><br><br>
    
    <input type="number" name="num1" required placeholder="Número 1"> 
    <input type="number" name="num2" required placeholder="Número 2">
    <input type="number" name="num3" required placeholder="Número 3">
    <input type="number" name="num4" required placeholder="Número 4">
    <input type="number" name="num5" required placeholder="Número 5"><br><br>
    
    <input type="number" name="num6" required placeholder="Número 6">
    <input type="number" name="num7" required placeholder="Número 7">
    <input type="number" name="num8" required placeholder="Número 8">
    <input type="number" name="num9" required placeholder="Número 9">
    <input type="number" name="num10" required placeholder="Número 10"><br><br>
    
    <input type="number" name="num11" required placeholder="Número 11">
    <input type="number" name="num12" required placeholder="Número 12">
    <input type="number" name="num13" required placeholder="Número 13">
    <input type="number" name="num14" required placeholder="Número 14">
    <input type="number" name="num15" required placeholder="Número 15"><br><br>
    
    <input type="number" name="num16" required placeholder="Número 16">
    <input type="number" name="num17" required placeholder="Número 17">
    <input type="number" name="num18" required placeholder="Número 18">
    <input type="number" name="num19" required placeholder="Número 19">
    <input type="number" name="num20" required placeholder="Número 20"><br><br>
    
    <button type="submit">Processar Números</button>
</form>

<?php
if ($_POST) {
    $soma_positivos = 0;
    $count_negativos = 0;
    
    // Loop para processar os 20 números
    for ($i = 1; $i <= 20; $i++) {
        $num = $_POST["num$i"];  // Pega num1, num2, num3...
        
        if ($num > 0) {
            $soma_positivos += $num;
        } elseif ($num < 0) {
            $count_negativos++;
        }
        // Números zero são ignorados (nem positivos nem negativos)
    }
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p><strong>Soma dos números positivos:</strong> $soma_positivos</p>";
    echo "<p><strong>Total de números negativos:</strong> $count_negativos</p>";
}
?>


<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
