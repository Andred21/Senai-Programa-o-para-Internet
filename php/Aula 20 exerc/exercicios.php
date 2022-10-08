<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Primeiro exercício !-->
    <fieldset>
        <legend>
            <p>Primeiro exercício:</p>
        </legend>
        <p>Meu nome é <?= "João Andreoli" ?> </p>
    </fieldset>
    <!-- Segundo exercício !-->
    <fieldset>
        <legend>
            <p>Segundo exercício:</p>
        </legend>
        <p> A multiplicação de 28 e 43 é:<?= 28 * 43 ?> </p>
    </fieldset>
    <!-- Terceiro exercício !-->
    <fieldset>
        <legend>
            <p>Terceiro exercício:</p>
        </legend>
        <p>A média de 8,9 e 7 é: <?= (9 + 8 + 7) / 3 ?></p>
    </fieldset>
    <!-- Quarto exercício !-->
    <fieldset>
        <legend>
            <p>Quarto exercício:</p>
        </legend>
        <p>O valor é <?= $var = 10 ?></p>
        <p>Seu sucessor é: <?= $var + 1 ?></p>
        <p>Seu antecessor é: <?= $var - 1 ?></p>
    </fieldset>
    <!-- Quinto exercício !-->
    <fieldset>
        <legend>
            <p>Quinto exercício:</p>
        </legend>
        <p>O 1 valor é <?= $var = 10 ?></p>
        <p>O 2 valor é: <?= $var2 = 34 ?></p>
        <p>A soma é: <?= $var + $var2 ?></p>
    </fieldset>
    <!-- sexto exercício -->
    <fieldset>
        <legend>Sexto Exercício:</legend>
        <p>O número real escolhido é <?= $vlr = 2022.02 ?></p>
        <p>A terça parte do número é <?= round($vlr / 3, 2) ?>.</p>
    </fieldset>
    <!-- sexto exercício -->
    <fieldset>
        <legend>Sexto Exercício:</legend>
        <p>O número real escolhido é <?= $vlr = 2022.02 ?></p>
        <p>A terça parte do número é <?= round($vlr / 3, 2) ?>.</p>
    </fieldset>
    <!-- sétimo exercício -->
    <fieldset>
        <legend>Sétimo Exercício:</legend>
        <p>Tendo os valores <?= $vlr1 = 10 ?> e <?= $vlr2 = 2 ?> </p>
        <p>Tendo os valores
            <?php
            $vlr1 = 10;
            $vlr2 = 2;
            echo "$vlr1 e $vlr2";
            ?> </p>
        <p>O dividendo é <?= $vlr1 ?>
            o divisor é <?= $vlr2 ?>.</p>
        <p>O quociente é <?= $vlr1 / $vlr2 ?>
            o resto é <?= $vlr1 % $vlr2 ?>.</p>
    </fieldset>
    <!-- oitavo exercício -->
    <fieldset>
        <legend>Oitavo Exercício:</legend>
        <p>Tendo o valor <?= $vlr1 = 123 ?>.</p>
        <?php
        $c = intdiv($vlr1, 100);
        $d = intdiv($vlr1 % 100, 10);
        $u = $vlr1 % 10;
        $resp = $u * 100 + $d * 10 + $c;
        ?>
        <p>O valor invertido é <?= $resp ?>.</p>
        <p>O valor invertido é <?= strrev($vlr1) ?>.</p>
    </fieldset>

    <!-- Nono exercício -->
     <fieldset>
        <legend>Nono Exercício:</legend>
        <p>
            <?php
            for ($vlr = 11; $vlr <= 99; $vlr++) {
                $d = intdiv($vlr, 10);
                if ($vlr % 10 != 0 && $vlr % $d == 0) {
                    echo $vlr . ",";
                }
            }

            ?>
        </p>
        </fieldset>
        <!-- Décimo exercício -->
        <fieldset>
            <legend>Décimo Exercício:</legend>
            <p>
                <?php
                $virgula = "";
                for ($vlr = 0; $vlr < 20; $vlr++) {
                    $numero = rand(0, 20);
                    if ($numero ** 2 < 225) {
                        echo $virgula . $numero;
                        $virgula = ", ";
                    }
                }

                ?>
            </p>
            </fildset>

</body>

</html>