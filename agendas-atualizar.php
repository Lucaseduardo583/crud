<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$funcionario = $_POST['funcionario'];
$data = $_POST['data'];
$horario = $_POST['horario'];
$servico = $_POST['servico'];

// montar um sql de update
$sql = "update agendas set funcionario  = '$funcionario', data = '$data', horario = '$horario', servico = '$servico' where id = $id ";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql update no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: agendas-listar.php");
?>