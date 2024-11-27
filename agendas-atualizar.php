<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];

// montar um sql de update
$sql = "update clientes set nome  = '$nome', idade = '$idade', endereco = '$endereco', telefone = '$telefone' where id = $id ";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: clientes-listar.php");
?>