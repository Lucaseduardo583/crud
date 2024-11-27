<?php

// requisitar os dados do formulário
$nome = $_POST["nome"];
$idade = $_POST["idade"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];

// montar um sql de insert
$sql = "insert into clientes(nome, idade, endereco, telefone)
values('$nome', '$idade', '$endereco', '$telefone')";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: clientes-listar.php");

?>