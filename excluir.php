<?php

// acessando o banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "rafael"; 

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//recebe os dados do outro forms
$id = $_GET['ID'];

//Pesquisa
$sql = "DELETE FROM email WHERE ID = $id";

$resultado = mysqli_query($conexao, $sql);

echo "Email Excluído com sucesso";

mysqli_close($conexao);

?>