<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 11</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $precoAntigo=$_POST['preco'] ?? 0;
        $aument=$_POST['reajus'] ?? 0;
    ?>
    <main>
        <h2>Reajustador de Preços</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="preco">Preço do Produto (R$)</label>
            <input type="number" name="preco" id="idpreco" required step="0.01">
            <label for="reajus">Qual será o percentual de reajuste?(<strong><span id="range"></span>%</strong>)</label>
            <input type="range" name="reajus" id="idreajus" value="<?=$aument?>" min="0" max="100" step="1" oninput="mudaValor()">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section>
        <h2>Resultado do Reajuste</h2>
        <?php
            $precoNovo=$precoAntigo+(($precoAntigo*$aument)/100);
            echo"<p>O produto que custava R$".number_format($precoAntigo,2)." , com <strong>$aument% de aumento</strong> vai passar a custar <strong>R$".number_format($precoNovo,2)."</strong> a partir de agora.</p>";
        ?>
    </section>
    <script>
        mudaValor()
        function mudaValor(){
            range.innerText=idreajus.value;
        }
    </script>
</body>
</html>