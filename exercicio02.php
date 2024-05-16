<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Exercício 02</h1>
    <hr>

<?php
$dados = [
    "usuario" => "chapolin.colorado",
    "senha" => "123",
    "idade" => 30,
    "cidade" => "São Paulo",
    "telefones" => ["11-2135-0300", "11-91234-5678"]
];
?>

<ol>
    <li>Login: <?=$dados['usuario']?></li>
    <li>Idade: <?=$dados['idade']?> anos</li>
    <li>Cidade: <?=$dados['cidade']?></li>
    <li>Celular: <?=$dados['telefones'][1]?></li>
</ol>

 


</div>







</body>
</html>