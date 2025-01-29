<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "academia-agua-viva";

$conexao = new mysqli($servidor, $usuario, $senha, $dbname);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}
