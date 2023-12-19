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
            $semanas=floor($totalSecs/604800);
            $semanasRest=$totalSecs%604800;
            $dias=floor($semanasRest/86400);
            $diasRest=$totalSecs%86400;
            $horas=floor($diasRest/3600);
            $horasRest=$totalSecs%3600;
            $minutos=floor($horasRest/60);
            $segundos=$totalSecs%60;
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