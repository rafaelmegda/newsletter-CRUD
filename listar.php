<?php

// acessando o banco
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "rafael"; 

// Cria a conexão:
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

//Pesquisa
$sql = "SELECT * FROM email";

$resultado = mysqli_query($conexao, $sql);

while($rows_emails = mysqli_fetch_array($resultado)){
        echo "ID: ".$rows_emails ['ID'];
        echo " Email: ".$rows_emails ['email'];
        echo "<a href='excluir.php?ID={$rows_emails['ID']}'> Excluir</a>" . "<br>";
    }

mysqli_close($conexao);

?>