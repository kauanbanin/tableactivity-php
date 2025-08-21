<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 16 PHP - Par ou Ímpar</title>
</head>
<body>
    <h1>Exercício 16 - Par ou Ímpar</h1>
    <p><strong>Regra:</strong> Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar.</p>

    <form method="POST" action="">
        <label for="numeros">Digite 15 números inteiros separados por vírgula:</label><br>
        <textarea id="numeros" name="numeros" rows="5" cols="30" placeholder="Ex: 1,2,3,4,5,6,7,8,9,10,11,12,13,14,15" required></textarea><br><br>
        <button type="submit">Verificar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST["numeros"];
    $numeros_str = explode(",", $entrada);
    $numeros = array();

    foreach ($numeros_str as $num_str) {
        $num = intval(trim($num_str));
        if (is_numeric($num_str)) { // Basic validation
            $numeros[] = $num;
        }
    }

    if (count($numeros) != 15) {
        echo "<hr>";
        echo "<p style=\"color: red;\">Por favor, digite exatamente 15 números.</p>";
    } else {
        echo "<hr>";
        echo "<h3>Resultado:</h3>";
        echo "<ul>";
        foreach ($numeros as $numero) {
            if ($numero % 2 == 0) {
                echo "<li>Número " . $numero . ": par</li>";
            } else {
                echo "<li>Número " . $numero . ": ímpar</li>";
            }
        }
        echo "</ul>";
    }
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
