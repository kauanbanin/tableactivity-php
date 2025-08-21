<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17 PHP - Vetor, Maior, Menor, Pares e Média</title>
</head>
<body>
    <h1>Exercício 17 - Vetor, Maior, Menor, Pares e Média</h1>
    <p><strong>Regra:</strong> Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números pares e média dos elementos do vetor.</p>

    <form method="POST" action="">
        <label for="numeros">Digite 20 números inteiros separados por vírgula:</label><br>
        <textarea id="numeros" name="numeros" rows="5" cols="30" placeholder="Ex: 1,2,3,...,20" required></textarea><br><br>
        <button type="submit">Processar</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entrada = $_POST["numeros"];
    $numeros_str = explode(",", $entrada);
    $vetor = array();

    foreach ($numeros_str as $num_str) {
        $num = intval(trim($num_str));
        if (is_numeric($num_str)) { // Basic validation
            $vetor[] = $num;
        }
    }

    if (count($vetor) != 20) {
        echo "<hr>";
        echo "<p style=\"color: red;\">Por favor, digite exatamente 20 números.</p>";
    } else {
        $soma = 0;
        $count_pares = 0;

        $maior = $vetor[0];
        $menor = $vetor[0];

        foreach ($vetor as $numero) {
            $soma += $numero;
            if ($numero % 2 == 0) {
                $count_pares++;
            }
            if ($numero > $maior) {
                $maior = $numero;
            }
            if ($numero < $menor) {
                $menor = $numero;
            }
        }

        $media = $soma / count($vetor);
        $percentual_pares = ($count_pares / count($vetor)) * 100;

        echo "<hr>";
        echo "<h3>Resultado:</h3>";
        echo "<p><strong>Vetor:</strong> " . implode(", ", $vetor) . "</p>";
        echo "<p><strong>Maior número:</strong> " . $maior . "</p>";
        echo "<p><strong>Menor número:</strong> " . $menor . "</p>";
        echo "<p><strong>Percentual de números pares:</strong> " . number_format($percentual_pares, 2) . "%</p>";
        echo "<p><strong>Média dos elementos:</strong> " . number_format($media, 2) . "</p>";
    }
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>