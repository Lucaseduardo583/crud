<?php

// requisitar os dados do formulário
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$produto = $_POST["produto"];

// montar um sql de insert
$sql = "insert into fornecedores(nome, telefone, email, endereco, produto)
values('$nome', '$telefone', '$email', '$endereco', '$produto')";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: fornecedores-listar.php");

?>