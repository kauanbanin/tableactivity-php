<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 06 PHP - Mês correspondente ao número</title>
</head>
<body>
    <h1>Exercício 06 - Mês correspondente ao número</h1>
    <p><strong>Regra:</strong> Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número </p>

    <form method="POST" action="">
    <label>Insira o Número do Mês (1 a 12):</label>
    <input type="number" name="mes" required><br><br>
    
    <button type="submit">Fazer Leitura</button>
    
</form>  

<?php
if ($_POST) {
    $mes = $_POST['mes'];
    
    if ($mes >= 1 && $mes <= 12) {
        // Se estiver entre 1 e 12, define o mês
        if ($mes == 1) {
            $resultado = "Janeiro";
        } elseif ($mes == 2) {
            $resultado = "Fevereiro";
        } elseif ($mes == 3) {
            $resultado = "Março";
        } elseif ($mes == 4) {
            $resultado = "Abril";
        } elseif ($mes == 5) {
            $resultado = "Maio";
        } elseif ($mes == 6) {
            $resultado = "Junho";
        } elseif ($mes == 7) {
            $resultado = "Julho";
        } elseif ($mes == 8) {
            $resultado = "Agosto";
        } elseif ($mes == 9) {
            $resultado = "Setembro";
        } elseif ($mes == 10) {
            $resultado = "Outubro";
        } elseif ($mes == 11) {
            $resultado = "Novembro";
        } elseif ($mes == 12) {
            $resultado = "Dezembro";
        }
        
        echo "<hr>";
        echo "<p>O número que você escolheu representa: $resultado</p>";
        
    } else {
        // Se não estiver entre 1 e 12
        echo "<hr>";
        echo "<p>Esse número não representa um mês válido.</p>";
    }
}
?>


<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>