<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
    <fieldset>
    <table>
        <label>Login:</label>
        <input type="text" name="login" id="idlogin">
        <br>
        <label>senha:</label>
        <input type="text" name="senha" id="idsenha">
        <br>
        <p>Data:<?php echo date('d/m/Y'); ?><p>
        <p>Hora:<?php echo date("h"); ?></p>
        <br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">
    </table>
    </fieldset>
    </form>
</body>
</html>