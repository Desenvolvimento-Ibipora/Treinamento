<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $val1=$_GET['v1'] ?? 0;
        $val2=$_GET['v2'] ?? 0; 
    ?>
    <main>
        <h1>Somador de Valores</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="idv1" value="<?=$val1?>">
            <label for="v1">Valor 2</label>
            <input type="number" name="v2" id="idv2" value="<?=$val2?>">
            <input type="submit" value="Somar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado da Soma</h2>
        <?php
            echo"<p>A soma entre os valores $val1 e $val2 é igual a <strong>".$val1+$val2."!</strong></p>";
        ?>
    </section>
</body>
</html>