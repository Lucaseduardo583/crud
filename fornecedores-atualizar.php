<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];
$produto = $_POST['produto'];

// montar um sql de update
$sql = "update fornecedores set nome = '$nome', telefone = '$telefone', email = '$email', endereco = '$endereco', produto = '$produto' where id = $id ";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: fonecedores-listar.php");
?>