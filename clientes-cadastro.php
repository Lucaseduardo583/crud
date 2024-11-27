<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo Clientes</h2>
    <form method="post" action="clientes-salvar.php">
        <label>NOME: <input name="nome"></label> <br>
        <label>IDADE: <input name="idade"></label> <br>
        <label>ENDEREÇO: <input name="endereco"></label> <br>
        <label>TELEFONE: <input name="telefone"></label> <br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>