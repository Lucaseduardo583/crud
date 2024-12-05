<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo Funcionarios</h2>
    <form method="post" action="funcionarios-salvar.php">
        <label>NOME:<input name="nome"></label> <br>
        <label>TELEFONE:<input name="telefone"></label> <br>
        <label>HORÁRIO:<input name="horario"></label> <br>
        <label>DATA:<input name="data"></label> <br><br>
        <label>PREÇO:<input name="preco"></label> <br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>