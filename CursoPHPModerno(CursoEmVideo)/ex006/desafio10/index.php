<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 10</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $nasc=$_POST['nasc'] ?? 'xxxx';
        $ano=$_POST['ano'] ?? date("Y");
    ?>
    <main>
        <h2>Calculando a sua idade</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="nasc">Em que ano você nasceu?</label>
            <input type="number" name="nasc" id="idnasc" required max="<?= date("Y")?>">
            <label for="ano">Quer saber sua idade em que ano?(Atualmente estamos em <strong><?=date("Y")?></strong>)</label>
            <input type="number" name="ano" id="idano" required>
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php
            $idade=$ano-$nasc;
            echo"<p>Quem nasceu em $nasc vai ter <strong>$idade anos</strong> em $ano!</p>";
        ?>
    </section>
</body>
</html>