<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 6</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php 
        $dividen=$_POST["dividen"] ?? 0;
        $divisor=$_POST["divisor"] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="dividen">Dividendo</label>
            <input type="number" name="dividen" id="iddividen" min="0">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="iddivisor" min="1">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section>
        <h2>Estrutura da Divisão</h2>
        <?php
            $resultado=(int)($dividen/$divisor);
            $resto=$dividen%$divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividen?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$resultado?></td>
            </tr>
        </table>
    </section>
</body>
</html>