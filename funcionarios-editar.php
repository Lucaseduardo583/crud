<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from funcionarios where id = $id";
$nome = $telefone = $horario = $data = $preco = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $telefone = $linha['telefone'];
    $horario = $linha['horario'];
    $data = $linha['data'];
    $preco = $linha['preco'];
}

mysqli_close($conexao);

?>
<main>
    <h2>Editar Agenda</h2>
    <form method="post" action="funcionarios-atualizar.php?id=<?=$id;?>">
        <label>NOME:<input name="nome" value="<?=$nome;?>"></label><br>
        <label>TELEFONE:<input name="telefone" value="<?=$telefone;?>"></label><br>
        <label>HORÁRIO:<input name="horario" value="<?=$horario;?>"></label><br>
        <label>DATA:<input name="data" value="<?=$data;?>"></label><br>
        <label>PREÇO:<input name="preco" value="<?=$preco;?>"></label><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>