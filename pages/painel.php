<?php
session_start();

// Verifique se o usuário está logado
if (!isset($_SESSION['usuario_id'])) {
    // Se não estiver logado, redireciona para a página de login
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br"> <!-- Corrigido para 'pt-br' -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="../css/painel.css"> <!-- Link para o arquivo CSS externo -->
</head>
<body style="background-image: url('../img/fundopiscina.png'); background-size: cover; background-repeat: no-repeat;">
    <h1>Painel</h1>

    <!-- Div para os botões -->
    <div class="botoes-container">
        <button class="botao1" onclick="window.location.href='http://localhost/weezy/pages/dados'">
            <img src="../img/cadastro.png" alt="icone 1" class="icone">
            <span>Cadastro</span>
        </button>
        <button class="botao2" onclick="window.location.href='http://localhost/weezy/pages/pagamento'">
            <img src="../img/pagamento.png" alt="Icone 2">
            <span>Pagamento</span>
        </button>
        <button class="botao3" onclick="window.location.href='http://localhost/weezy/pages/alunos'">
            <img src="../img/alunos.png" alt="Icone 3">
            <span>Alunos</span>
        </button>
    </div>
</body>
</html>
