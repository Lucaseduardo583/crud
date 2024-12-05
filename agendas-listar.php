<?php 
include "header.php";
include "conexao.php";
?>
<main>

<h2>Todas as Agendas</h2>
<a href="agendas-cadastro.php">Adicionar nova Agenda</a>

<table border="2">
    <tr>
        <th>FUNCIONARIO</th>
        <th>DATA</th>
        <th>HORÁRIO</th>
        <th>SERVIÇO</th>
        <th>DELETAR</th>
        <th>EDITAR</th>
    </tr>

<?php

$sql = "select * from agendas";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['funcionario']} </td>";
    echo "<td> {$linha['data']} </td>";
    echo "<td> {$linha['horario']} </td>";
    echo "<td> {$linha['servico']} </td>";

    echo "<td>";
    echo "<a href ='agendas-excluir.php?id={$linha['id']}'>";
    echo "<img src='excluir.png' width='25'>";
    echo "</a>";

    echo "<td>";
    echo "<a href ='agendas-editar.php?id={$linha['id']}'>";
    echo "<img src='editar.png' width='25'>";
    echo "</a>";

    echo "</td>";
    echo "</tr>";
}

mysqli_close($conexao);

/*para debugar
echo "<pre>";
print_r($resultado);
echo "</pre>";
fim debugar
*/

?>
</table>
</main>
<?php include "footer.php"; ?>