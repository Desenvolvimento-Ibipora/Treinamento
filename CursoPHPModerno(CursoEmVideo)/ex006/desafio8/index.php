<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $numero=$_POST["numero"] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="numero">Número</label>
            <input type="number" name="numero" id="idnumero">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <p>Analisando o <strong>número <?=$numero?></strong>, temos:</p>
        <?php
            echo "<ul>";
            echo "<li>A sua raiz quadrada é <strong>".number_format(sqrt($numero),2,",",".")."</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>".number_format($numero**(1/3),2,",",".")."</strong></li>";
            echo "</ul>";
        ?>
    </section>
</body>
</html>