<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 13</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $numero=$_POST['valor'] ?? 0;
    ?>
    <main>
        <h2>Caixa Eletrônico</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="valor">Qual valor você deseja sacar? (R$)<sup>*</sup></label>
            <input type="number" name="valor" id="idvalor" required step="5">
            <p><em>*Notas disponíveis: R$100, R$50, R$10, R$5</em></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <?php
        $sobra=$numero;
        $n100=(int)($sobra/100);
        $sobra%=100;
        $n50=(int)($sobra/50);
        $sobra%=50;
        $n10=(int)($sobra/10);
        $sobra%=10;
        $n5=(int)($sobra/5);
    ?>
    <section>
        <h2>Saque de R$<?=$numero?> Realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li>100 x <?=$n100?></li>
            <li>50 x <?=$n50?></li>
            <li>10 x <?=$n10?></li>
            <li>5 x <?=$n5?></li>
        </ul>
    </section>
</body>
</html>