<?php include "header.php"; ?>

<main>
    <h2>Adicionar nova Agenda</h2>
    <form method="post" action="fornecedores-salvar.php">
        <label>NOME:<input name="nome"></label> <br>
        <label>TELEFONE:<input name="telefone"></label> <br>
        <label>EMAIL:<input name="email"></label> <br>
        <label>ENDEREÇO:<input name="endereco"></label> <br>
        <label>PRODUTO:<input name="produto"></label> <br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>