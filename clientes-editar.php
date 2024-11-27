<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from clientes where id = $id";
$nome = $idade = $endereco = $telefone = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $idade = $linha['idade'];
    $endereco = $linha['endereco'];
    $telefone = $linha['telefone'];
}

mysqli_close($conexao);

?>
<main>
    <h2>Editar Clientes</h2>
    <form method="post" action="clientes-atualizar.php?id=<?=$id;?>">
        <label>NOME: <input name="nome" value="<?=$nome;?>"></label><br>
        <label>IDADE: <input name="idade" value="<?=$idade;?>"></label><br>
        <label>ENDEREÇO: <input name="endereco" value="<?=$endereco;?>"></label><br>
        <label>TELEFONE: <input name="telefone" value="<?=$telefone;?>"></label><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>