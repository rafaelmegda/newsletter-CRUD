<?php

$emailLogin = $_GET['emailLogin'];

// acessando o banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "rafael"; 

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Insere Email na tabela
$sql = "INSERT INTO email (email) VALUES ('$emailLogin')";

if ($conexao->query($sql) === TRUE) {
    echo "Cadastro Realizado com sucesso!<br>";
} else {
    // acessando a propriedade error de $conexao
    echo "<br>Erro na criação da tabela: " . $conexao->error; 
}
mysqli_close($conexao);

?>