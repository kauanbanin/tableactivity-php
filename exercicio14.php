<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 14 PHP - Altura Chico e Juca</title>
</head>
<body>
    <h1>Exercício 14 - Altura Chico e Juca</h1>
    <p><strong>Regra:</strong> Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Calcular e imprimir quantos anos serão necessários para que Juca seja maior que Chico.</p>

    <form method="POST" action="">
        <button type="submit">Calcular Anos</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $altura_chico = 150; // em centímetros
    $altura_juca = 110; // em centímetros
    $crescimento_chico = 2; // centímetros por ano
    $crescimento_juca = 3; // centímetros por ano
    $anos = 0;

    while ($altura_juca <= $altura_chico) {
        $altura_chico += $crescimento_chico;
        $altura_juca += $crescimento_juca;
        $anos++;
    }

    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p>Serão necessários <strong>" . $anos . " anos</strong> para que Juca seja maior que Chico.</p>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
