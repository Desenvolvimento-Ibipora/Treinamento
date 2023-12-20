<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 12</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $totalSecs=$_POST['secs'] ?? 0;
    ?>
    <main>
        <h2>Calculadora de Tempo</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="secs">Qual é o total de segundos?</label>
            <input type="number" name="secs" id="idsecs" required min="1">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando Tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?=$totalSecs?> segundos</strong> equivalem a um total de:</p>
        <?php
            $sobra=$totalSecs;
            $semanas=(int)($totalSecs/604800);
            $sobra=$sobra%604800;
            $dias=(int)($sobra/86400);
            $sobra=$sobra%86400;
            $horas=(int)($sobra/3600);
            $sobra=$sobra%3600;
            $minutos=(int)($sobra/60);
            $sobra=$sobra%60;
            $segundos=$sobra;
            echo"<ul>";
            echo"<li>$semanas semana(s)</li>";
            echo"<li>$dias dia(s)</li>";
            echo"<li>$horas hora(s)</li>";
            echo"<li>$minutos minuto(s)</li>";
            echo"<li>$segundos segundo(s)</li>";
            echo"</ul>";
        ?>
    </section>
</body>
</html>