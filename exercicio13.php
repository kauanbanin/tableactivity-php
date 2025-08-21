<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 13 PHP - Números entre 100 e 200</title>
</head>
<body>
    <h1>Exercício 13 - Números entre 100 e 200 </h1>
    <p><strong>Regra:</strong>Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução </p>

    <form method="POST" action="">
    <label>Digite vários números separados por vírgula (digite 0 para encerrar):</label><br>
    <textarea name="numeros" placeholder="Ex: 50,150,300,0" required></textarea><br><br>
    <button type="submit">Processar</button>
</form>

<?php
if ($_POST) {
    $entrada = $_POST['numeros'];
    $numeros = explode(',', $entrada);
    
    $count_entre_100_200 = 0;
    $numeros_processados = array();
    
    foreach ($numeros as $num) {
        $num = trim($num);
        $numeros_processados[] = $num;
        
        if ($num == 0) {
            break; // Para quando encontrar 0
        }
        
        if ($num >= 100 && $num <= 200) {
            $count_entre_100_200++;
        }
    }
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p><strong>Números digitados:</strong> " . implode(', ', $numeros_processados) . "</p>";
    echo "<p><strong>Números entre 100 e 200:</strong> $count_entre_100_200</p>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>