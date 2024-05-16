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


    </div>
</body>
</html>