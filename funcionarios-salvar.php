<?php

// requisitar os dados do formulário
$nome = $_POST["nome"];
$telefone = $_POST["telefone"];
$horario = $_POST["horario"];
$data = $_POST["data"];
$preco = $_POST["preco"];

// montar um sql de insert
$sql = "insert into funcionarios(nome, telefone, horario, data, preco)
values('$nome', '$telefone', '$horario', '$data', '$preco')";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: funcionarios-listar.php");

?>