<?php 
include "header.php";
include "conexao.php";
?>
<main>

<h2>Todos os Funcionarios</h2>
<a href="funcionarios-cadastro.php">Adicionar novo funcionario</a>

<table border="2">
    <tr>
        <th>NOME</th>
        <th>TELEFONE</th>
        <th>HORÁRIO</th>
        <th>DATA</th>
        <th>PREÇO</th>
        <th>DELETAR</th>
        <th>EDITAR</th>
    </tr>

<?php

$sql = "select * from funcionarios";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['nome']} </td>";
    echo "<td> {$linha['telefone']} </td>";
    echo "<td> {$linha['horario']} </td>";
    echo "<td> {$linha['data']} </td>";
    echo "<td> {$linha['preco']} </td>";

    echo "<td>";
    echo "<a href ='funcionarios-excluir.php?id={$linha['id']}'>";
    echo "<img src='excluir.png' width='25'>";
    echo "</a>";

    echo "<td>";
    echo "<a href ='funcionarios-editar.php?id={$linha['id']}'>";
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