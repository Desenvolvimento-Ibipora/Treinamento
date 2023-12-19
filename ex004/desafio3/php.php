<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolucao Desafio 3</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <main>
        <h1>Conversor de Moedas v1.0</h1>
        <?php
        $re=$_GET["dinheiro"];
        $cot=5.22;
        $dol= $re/$cot;
        //echo "<p> Seus R$ ". number_format($re, 2, ",", ".") ." equivalem a <strong>US$". number_format($dol, 2,",", ".") ."</strong>";
        $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus ". numfmt_format_currency($padrão, $re,"BRL") ."equivalem a <strong>". numfmt_format_currency($padrão, $dol, "USD") ."</strong>";
        echo "<p><strong>Cotação fixa de $cot</strong> informada diretamente no código.</p>";
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>