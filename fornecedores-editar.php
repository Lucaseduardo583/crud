<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from fornecedores where id = $id";
$nome = $telefone = $email = $endereco = $produto = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $telefone = $linha['telefone'];
    $email = $linha['email'];
    $endereco = $linha['endereco'];
    $produto = $linha['produto'];
}

mysqli_close($conexao);

?>
<main>
    <h2>Editar Fornecedor</h2>
    <form method="post" action="fornecedores-atualizar.php?id=<?=$id;?>">
        <label>NOME:<input name="nome" value="<?=$nome;?>"></label><br>
        <label>TELEFONE:<input name="telefone" value="<?=$telefone;?>"></label><br>
        <label>EMAIL:<input name="email" value="<?=$email;?>"></label><br>
        <label>ENDEREÇO:<input name="endereco" value="<?=$endereco;?>"></label><br>
        <label>PRODUTO:<input name="produto" value="<?=$produto;?>"></label><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>