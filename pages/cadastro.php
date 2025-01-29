<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastro.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body style="background-image: url('../img/fundopiscina.png'); background-size: cover; background-repeat: no-repeat;">
    <div class="fundo">
        <div class="login">
            <h2>Cadastre-se</h2>
            <form action="../includes/conexaobtn.php" method="POST">
                <label class="label" for="nome">Nome:</label>
                <input type="text" name="nome" required>

                <label class="label" for="email">E-mail:</label>
                <input type="email" name="email" required>

                <label class="label" for="senha">Senha:</label>
                <input type="password" name="senha" required>

                <a href="http://localhost/weezy/" style="text-decoration: underline; color: white;"
                    onmouseover="this.style.color='blue';" onmouseout="this.style.color='white';">
                    Já possui uma conta? / Entrar.
                </a>

                <button type="submit">Cadastre-se</button>
            </form>
        </div>
        <p id="starcode"><a href="">@StarCode</a></p>
    </div>
    <div class="imagem-fixa">
        <div class="eclipse"></div>
        <img src="../img/menino.png" alt="Logo">
    </div>


</body>

</html>