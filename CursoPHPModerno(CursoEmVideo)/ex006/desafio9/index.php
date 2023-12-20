<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 9</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
        $valor1=$_POST['val1'] ?? 0;
        $valor2=$_POST['val2'] ?? 0;
        $peso1=$_POST['peso1'] ?? 1;
        $peso2=$_POST['peso2'] ?? 1;
    ?>
    <main>
        <h2>Médias Aritméticas</h2>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label for="val1">1 Valor</label>
            <input type="number" name="val1" id="idval1" required>
            <label for="peso1">1 Peso</label>
            <input type="number" name="peso1" id="idpeso1" min="1" required>
            <label for="val2">2 Valor</label>
            <input type="number" name="val2" id="idval2" required>
            <label for="peso2">2 Peso</label>
            <input type="number" name="peso2" id="idpeso2" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das Médias</h2>
        <?php
            $MedArit=($valor1+$valor2)/2;
            $MedPond=(($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);
            echo"<p>Analisando os valores $valor1 e $valor2</p>";
            echo"<ul>";
            echo"<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a ".number_format($MedArit,2)."</li>";
            echo"<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a ".number_format($MedPond,2)."</li>";
            echo"</ul>";
        ?>
    </section>
</body>
</html>