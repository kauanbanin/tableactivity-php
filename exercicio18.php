<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 18 PHP - Números Não Comuns</title>
</head>
<body>
    <h1>Exercício 18 - Números Não Comuns</h1>
    <p><strong>Regra:</strong> Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos e vetores.</p>

    <form method="POST" action="">
        <label for="vetor1">Digite 10 números inteiros para o Vetor 1 (separados por vírgula):</label><br>
        <textarea id="vetor1" name="vetor1" rows="3" cols="30" placeholder="Ex: 1,2,3,4,5,6,7,8,9,10" required></textarea><br><br>
        <label for="vetor2">Digite 10 números inteiros para o Vetor 2 (separados por vírgula):</label><br>
        <textarea id="vetor2" name="vetor2" rows="3" cols="30" placeholder="Ex: 6,7,8,9,10,11,12,13,14,15" required></textarea><br><br>
        <button type="submit">Processar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada1 = $_POST["vetor1"];
    $entrada2 = $_POST["vetor2"];

    $numeros_str1 = explode(",", $entrada1);
    $numeros_str2 = explode(",", $entrada2);

    $vetor1 = array();
    $vetor2 = array();

    foreach ($numeros_str1 as $num_str) {
        $num = intval(trim($num_str));
        if (is_numeric($num_str)) {
            $vetor1[] = $num;
        }
    }

    foreach ($numeros_str2 as $num_str) {
        $num = intval(trim($num_str));
        if (is_numeric($num_str)) {
            $vetor2[] = $num;
        }
    }

    if (count($vetor1) != 10 || count($vetor2) != 10) {
        echo "<hr>";
        echo "<p style=\"color: red;\">Por favor, digite exatamente 10 números para cada vetor.</p>";
    } else {
        // Encontrar números não comuns
        $nao_comuns = array_merge(array_diff($vetor1, $vetor2), array_diff($vetor2, $vetor1));

        echo "<hr>";
        echo "<h3>Resultado:</h3>";
        echo "<p><strong>Vetor 1:</strong> " . implode(", ", $vetor1) . "</p>";
        echo "<p><strong>Vetor 2:</strong> " . implode(", ", $vetor2) . "</p>";
        echo "<p><strong>Números não comuns:</strong> " . implode(", ", $nao_comuns) . "</p>";
    }
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
