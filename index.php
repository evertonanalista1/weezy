

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body style="background-image: url('./img/fundopiscina.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="fundo">
        <div class="login">
            <h2>Bem-vindo</h2>
            <form action="includes/login.php" method="post">
                <label class="label" for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label class="label" for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <a href="http://localhost/weezy/pages/cadastro" style="text-decoration: underline; color: white;" onmouseover="this.style.color='blue';" onmouseout="this.style.color='white';">
                    Não possui conta?/ Cadastre-se.
                </a>

                <button type="submit">Entrar</button>
            </form>
        </div>
        <p id="starcode"><a href="">@StarCode</a></p>
    </div>
    <div class="imagem-fixa">
        <div class="eclipse"></div>
        <img src="img/menino.png" alt="Logo">
    </div>
</body>

</html>
