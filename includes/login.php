<?php
session_start();
include("../includes/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Verifica se o email e a senha estão corretos
    $stmt = $conexao->prepare("SELECT id, nome, senha FROM cadastro WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    // Verifica se o e-mail existe
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $nome, $hash_senha);
        $stmt->fetch();

        // Adicione esta linha para depurar a senha hashada
        echo "Senha Hashada: " . $hash_senha . "<br>";

        // Verifica a senha usando password_verify
        if (password_verify($senha, $hash_senha)) {
            // Login bem-sucedido
            $_SESSION['usuario_id'] = $id;
            $_SESSION['usuario_nome'] = $nome;
            header("Location: ../pages/painel.php"); // Redireciona para o painel
            exit();
        } else {
            // Adicione esta linha para depurar a falha de verificação de senha
            echo "Senha incorreta.<br>";
            header("Location: ../index.php?error=2"); // Erro senha incorreta
            exit();
        }
    } else {
        // E-mail não encontrado
        header("Location: ../index.php?error=1"); // Erro e-mail não encontrado
        exit();
    }

    $stmt->close();
    $conexao->close();
}
?>
