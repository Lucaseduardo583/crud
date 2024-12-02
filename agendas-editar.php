<?php include "header.php"; ?>
<?php
$id = $_GET['id'];
$sql = "select * from agendas where id = $id";
$funcionario = $data = $horario = $servico = "";

include "conexao.php";
$resultado = mysqli_query($conexao, $sql);
while($linha = mysqli_fetch_assoc($resultado)){
    $funcionario = $linha['funcionario'];
    $data = $linha['data'];
    $horario = $linha['horario'];
    $servico = $linha['servico'];
}

mysqli_close($conexao);

?>
<main>
    <h2>Editar Agenda</h2>
    <form method="post" action="agendas-atualizar.php?id=<?=$id;?>">
        <label>FUNCIONARIO:<input name="funcionario" value="<?=$funcioanario;?>"></label><br>
        <label>DATA:<input name="idade" value="<?=$idade;?>"></label><br>
        <label>HORÁRIO: <input name="horario" value="<?=$horario;?>"></label><br>
        <label>SERVIÇO: <input name="servico" value="<?=$servico;?>"></label><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>