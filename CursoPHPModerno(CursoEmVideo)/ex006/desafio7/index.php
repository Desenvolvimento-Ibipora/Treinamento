<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 7</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php
    $salmin = 1_380.6;
    $salario = $_POST["salario"] ?? 0;
    ?>
    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="idsalario" step="0.01">
            <p>Considere o salário mínimo de <strong>R$<?= number_format($salmin, 2, ",", ".") ?></strong></p>
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <?php
        $quant = (int)($salario / $salmin);
        $resto = ($salario*100) % ($salmin*100);
        $resto/=100;
        ?>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$<?= number_format($salario, 2, ",", ".") ?> ganha <strong><?= $quant ?> salários mínimos</strong> + R$<?= number_format($resto, 2, ",", ".") ?>.</p>
    </section>
</body>

</html>