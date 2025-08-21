<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 20 PHP - Matriz Completa, Ímpares e Pares</title>
</head>
<body>
    <h1>Exercício 20 - Matriz Completa, Ímpares e Pares</h1>
    <p><strong>Regra:</strong> Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares.</p>

    <form method="POST" action="">
        <button type="submit">Gerar Matrizes</button>
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matriz = array();
    $matriz_impares = array();
    $matriz_pares = array();

    // Preenchendo a matriz 5x5 com números aleatórios para demonstração
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $numero = rand(1, 99);
            $matriz[$i][$j] = $numero;
            
            if ($numero % 2 != 0) {
                $matriz_impares[$i][$j] = $numero;
                $matriz_pares[$i][$j] = " "; // Espaço em branco para manter o formato
            } else {
                $matriz_pares[$i][$j] = $numero;
                $matriz_impares[$i][$j] = " "; // Espaço em branco para manter o formato
            }
        }
    }

    function imprimirMatriz($titulo, $matriz_para_imprimir) {
        echo "<hr>";
        echo "<h3>" . $titulo . ":</h3>";
        echo "<table border=\'1\'>";
        for ($i = 0; $i < 5; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 5; $j++) {
                echo "<td>" . (isset($matriz_para_imprimir[$i][$j]) ? $matriz_para_imprimir[$i][$j] : " ") . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    imprimirMatriz("Matriz Completa", $matriz);
    imprimirMatriz("Matriz com Números Ímpares", $matriz_impares);
    imprimirMatriz("Matriz com Números Pares", $matriz_pares);
}
?>

<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
