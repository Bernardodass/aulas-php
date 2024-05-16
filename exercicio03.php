<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" >


    <?php
$meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
               'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

echo "<ol>";
foreach ($meses as $index => $mes) {
    if ($index % 2 == 0) {
        echo "<li style='color: blue;'>$mes</li>";
    } else {
        echo "<li style='color: red;'>$mes</li>";
    }
}
echo "</ol>";

?>
    </div>
</body>
</html>