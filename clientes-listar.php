<?php 
include "header.php";
include "conexao.php";
?>
<main>

<h2>Todos os Serviços</h2>
<a href="clientes-cadastro.php">Adicionar novo Cliente</a>

<table border="2">
    <tr>
        <th>NOME</th>
        <th>IDADE</th>
        <th>ENDEREÇO</th>
        <th>TELEFONE</th>
        <th>DELETAR</th>
        <th>EDITAR</th>
    </tr>

<?php

$sql = "select * from clientes";
$resultado = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($resultado)){
    echo "<tr>";
    echo "<td> {$linha['nome']} </td>";
    echo "<td> {$linha['idade']} </td>";
    echo "<td> {$linha['endereco']} </td>";
    echo "<td> {$linha['telefone']} </td>";

    echo "<td>";
    echo "<a href ='clientes-excluir.php?id={$linha['id']}'>";
    echo "<img src='excluir.png' width='25'>";
    echo "</a>";

    echo "<td>";
    echo "<a href ='clientes-editar.php?id={$linha['id']}'>";
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