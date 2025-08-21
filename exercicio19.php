<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 19 PHP - Matriz Diagonal Principal</title>
</head>
<body>
    <h1>Exercício 19 - Matriz Diagonal Principal</h1>
    <p><strong>Regra:</strong> Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal.</p>

    <form method="POST" action="">
        <button type="submit">Gerar Matriz e Diagonal</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matriz = array();

    // Preenchendo a matriz 5x5 com números aleatórios para demonstração
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = rand(1, 99);
        }
    }

    echo "<hr>";
    echo "<h3>Matriz Gerada:</h3>";
    echo "<table border=\'1\'>";
    for ($i = 0; $i < 5; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    echo "<h3>Elementos da Diagonal Principal:</h3>";
    echo "<ul>";
    for ($i = 0; $i < 5; $i++) {
        echo "<li>" . $matriz[$i][$i] . "</li>";
    }
    echo "</ul>";
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
