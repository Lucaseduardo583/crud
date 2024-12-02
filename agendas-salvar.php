<?php

// requisitar os dados do formulário
$funcionario = $_POST["funcionario"];
$data = $_POST["data"];
$horario = $_POST["horario"];
$servico = $_POST["servico"];

// montar um sql de insert
$sql = "insert into agendas(funcionario, data, horario, servico)
values('$funcionario', '$data', '$horario', '$servico')";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql insert no BD
$resultado = mysqli_query($conexao, $sql);

// fechar a conexão
mysqli_close($conexao);

// redirecionar para a página listar
header("Location: agendas-listar.php");

?>