<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 15 PHP - Perda de Massa Radioativa</title>
</head>
<body>
    <h1>Exercício 15 - Perda de Massa Radioativa</h1>
    <p><strong>Regra:</strong> Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10.</p>

    <form method="POST" action="">
        <label for="massa_inicial">Massa Inicial (ex: 1.0):</label><br>
        <input type="number" step="0.01" id="massa_inicial" name="massa_inicial" value="1.0" required><br><br>
        <label for="massa_final">Massa Final Desejada (ex: 0.10):</label><br>
        <input type="number" step="0.01" id="massa_final" name="massa_final" value="0.10" required><br><br>
        <button type="submit">Calcular Tempo</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $massa_inicial = floatval($_POST['massa_inicial']);
    $massa_final = floatval($_POST['massa_final']);
    $tempo_total_segundos = 0;
    $intervalo_perda = 30; // segundos
    $percentual_perda = 0.25; // 25%

    $massa_atual = $massa_inicial;

    while ($massa_atual >= $massa_final) {
        $massa_atual *= (1 - $percentual_perda);
        $tempo_total_segundos += $intervalo_perda;
    }

    $minutos = floor($tempo_total_segundos / 60);
    $segundos = $tempo_total_segundos % 60;

    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p>Serão necessários <strong>" . $minutos . " minutos e " . $segundos . " segundos</strong> para que a massa do material seja menor que " . $massa_final . ".</p>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
