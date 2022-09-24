<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo de html com php</title>
</head>

<body>
    <h1>Vamos começar a rodar um php</h1>
    <?php
    $teste = true;
    ?>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non tempora expedita, aperiam consequuntur aspernatur unde. Tempore odio laudantium explicabo vel, autem optio, voluptas nisi maxime voluptatem dolore vitae ipsum eius.</p>
    <!-- Colocando o if em conjunto com o html -->
    <?php if ($teste) : ?>
        <div>
            <p>Olá, so vou aparecer se o teste for verdadeiro!</p>
        </div>
    <?php else : ?>
        <div>
            <p>So vou aparecer se o teste for falso!</p>
        </div>
    <?php endif; ?>
    <!-- colocando o mesmo código acima ,porém somente utilizando o php -->
    <?php
    if ($teste) {
        echo "<div>
       <p>Olá, so vou aparecer se o teste for verdadeiro!</p>
   </div>";
    } else {
        echo" <div>
            <p>Olá, so vou aparecer se o teste for falso!</p>
        </div>";
    }
    ?>
</body>

</html>