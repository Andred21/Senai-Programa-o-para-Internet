<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 21 Exercício 1</title>
    <link rel="stylesheet" href="Style.css">
</head>

<body>
    <section id="formulario">
        <form action="#" method="POST">
            <table>
                <tr>
                    <td><label>Login:</label></td>
                    <td><input type="text" name="login" id="idlogin"></td>
                </tr>
                <tr>
                    <td><label>senha:</label></td>
                    <td><input type="text" name="senha" id="idsenha"></td>
                </tr>
                <tr>
                    <td colspan="2" class="txtCenter">
                        <input type="submit" value="Enviar">&nbsp;
                        <input type="reset" value="Limpar">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <p class="txtCenter">
                            Data/Hora:<?= date("d/m/Y H:i:s") ?><br>
                            Seu Ip:<?= $_SERVER["REMOTE_ADDR"] ?>
                        </p>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <section id="resposta">
        <div>
            <?php if($_POST): ?>
                <p>
                  Seu login foi 
                  <?=$_POST["login"]?><br>
                  Sua senha foi 
                  <?=$_POST["senha"]?>
                </p>
            <?php endif; ?>
        </div>
    </section>
</body>

</html>