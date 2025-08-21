<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 PHP - Critério de aceitação por Sexo e Idade</title>
</head>
<body>
    <h1>Exercício 03 Critério de aceitação por Sexo e Idade- </h1>
    <p><strong>Regra:</strong> Some 2 números. Se o resultado > 20, some +8. Se ≤ 20, subtraia 5. </p>

    <form method="POST" action="">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>

    <label>Sexo:</label><br>
<input type="radio" name="sexo" value="feminino" required> Feminino<br>
<input type="radio" name="sexo" value="masculino" required> Masculino<br>
<input type="radio" name="sexo" value="nao_informar" required> Prefiro não informar<br><br>
    
    <label>Idade:</label>       
    <input type="number" name="idade" required><br><br>
    
    <button type="submit">Verificar</button>
    
</form>  

<?php
if ($_POST) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    
    if ($sexo == "feminino" && $idade < 25) {
        $resultado = "ACEITA";
    } else {
        $resultado = "NÃO ACEITA";
    }
    
    echo "<hr>";
    echo "<h3>Resultado:</h3>";
    echo "<p>$nome, seu resultado é: $resultado</p>";
}
?>
<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>