<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais no PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container" >
    <h1>Condicionais</h1>
    <hr>
    <h2>Simples (não tem o <code>else</code>)</h2>
<?php
$numero = 50;
if($numero<100){
    echo "<p>Condição é verdadeira/true</p>";
}
?>
<hr>
<h2>Composta (usa <code>if/else</code>)</h2>
<?php
$numerofrutas = 60;
if($numerofrutas>30){
    echo "<p>tem muitas frutas</p>";
} else {
    echo "<p>tem umas frutas</p>";
}
?>
<?php
// controle de estoque
$produto = "ultrabook";
$qtdemestoque = 10; // o que temos no momento
$qtdcritica = 2; //mínimo necessário
?>
    <h3>produto: <?=$produto?></h3>
    <h3>estoque: <?=$qtdemestoque?></h3>

    <?php

if ($qtdemestoque<$qtdcritica) {
    /* se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir para repor. */
    echo "<p>é necessário repor o estoque</p>";
} else {
    /* caso contrário, simplesmente falar que o estoque está normal. */
    echo "<p>o estoque está normal</p>";
}





?>


    </div>
</body>
</html>