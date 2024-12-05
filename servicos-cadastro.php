<?php include "header.php"; ?>

<main>
    <h2>Adicionar novo serviço</h2>
    <form method="post" action="servicos-salvar.php">
        <label>SERVIÇO:<input name="servico"></label> <br>
        <label>DESCRIÇÃO:<input name="descricao"></label> <br>
        <label>PREÇO:<input name="preco"></label> <br>
        <label>CATEGORIA:<input name="categoria"></label> <br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>