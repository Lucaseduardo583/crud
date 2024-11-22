<?php
// requisitar os dados do formulário
$id = $_GET['id'];
$servico = $_POST['servico'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

// montar um sql de update
$sql = "update servicos set servico = '$servico', descricao = '$descricao', preco = '$preco' where id = $id  ";

// incluir o arquivo de conexão
include "conexao.php";

// executar o sql update 
