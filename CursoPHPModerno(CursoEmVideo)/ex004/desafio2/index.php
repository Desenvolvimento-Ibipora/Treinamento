<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php
            $min=0;
            $max=100;
            $num=mt_rand($min,$max);
            echo "<p>Gerando um número aleatório entre $min e $max...</p>";
            echo "<p>O valor gerado foi <strong>$num</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar novo</button>
    </main>
</body>
</html>