<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$horario = $_POST['horario'];
$data = $_POST['data'];
$preco = $_POST['preco'];

// montar um sql de update
$sql = "update funcionarios set nome = '$nome', telefone = '$telefone', horario = '$horario', data = '$data', preco = $preco where id = $id ";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: funcionarios-listar.php");
?>