<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #343a40;
        }

        ol {
            list-style-type: decimal-leading-zero;
            padding-left: 20px;
        }

        li {
            font-size: 18px;
            margin: 5px 0;
            padding: 5px;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        li:nth-child(odd) {
            color: #007bff;
            background-color: #e9f7fe;
        }

        li:nth-child(even) {
            color: #dc3545;
            background-color: #fdecea;
        }

        li:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Meses do Ano</h1>
        <?php
        $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
                       'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');

        echo "<ol>";
        foreach ($meses as $index => $mes) {
            echo "<li>$mes</li>";
        }
        echo "</ol>";
        ?>
    </div>
</body>
</html>
