<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 1</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php
                $n=$_GET["numero"];
                echo "<p>O número escolhido foi <strong>$n</strong>";
                echo "<p>O seu <em>antecessor</em> é ".($n-1);
                echo "<p>O seu <em>sucessor</em> é ".($n+1);
            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>