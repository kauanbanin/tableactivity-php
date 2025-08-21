<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 07 PHP - Sistema de biblioteca</title>
</head>
<body>
    <h1>Exercício 07 - Sistema de biblioteca</h1>
    <p><strong>Regra:</strong> 7.	A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias</p>

    <form method="POST" action="">
    <label>Qual o nome do livro que será emprestado a você?</label>
    <input type="text" name="livro" required><br><br>

    <label>Você é um Professor ou um Aluno?</label><br><br>
<input type="radio" name="cargo" value="professor" required> Professor<br>
<input type="radio" name="cargo" value="aluno" required> Aluno<br><br>

    <button type="submit">Imprimir recibo</button>
    
</form>  

<?php
if ($_POST) {
    $livro = $_POST['livro'];
    $cargo = $_POST['cargo'];
    // Define prazo baseado no cargo
    if ($cargo == "professor") {
        $prazo = 10;
    } else {
        $prazo = 3;
    }
    
    // Calcula datas
    $data_emprestimo = date('d/m/Y');
    $data_devolucao = date('d/m/Y', strtotime("+$prazo days"));
    
    // Imprime recibo
    echo "<hr>";
    echo "<h3>📋 RECIBO DE EMPRÉSTIMO</h3>";
    echo "<p><strong>Livro:</strong> $livro</p>";
    echo "<p><strong>Tipo de usuário:</strong> " . ucfirst($cargo) . "</p>";
    echo "<p><strong>Data do empréstimo:</strong> $data_emprestimo</p>";
    echo "<p><strong>Data de devolução:</strong> $data_devolucao</p>";
    echo "<p><strong>Prazo:</strong> $prazo dias</p>";
}
?>


<hr>
<a href="index.php">← Voltar para lista de exercícios</a>

</body>
</html>
