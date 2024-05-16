<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Exercício 01</h1>
    <hr>

<?php
const NOME = "Chapolin";
$idade = 25;
echo "<p>".NOME." possui $idade anos.</p>";
?>
<p> 
    <b class="p-1 text-bg-danger"><?=NOME?></b>  possui 
    <i class="p-1 text-bg-dark"><?=$idade?></i> anos.
</p>    


</div>







</body>
</html>