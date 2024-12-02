<?php include "header.php"; ?>

<main>
    <h2>Adicionar nova Agenda</h2>
    <form method="post" action="agendas-salvar.php">
        <label>FUNCIONARIO:<input name="funcionario"></label> <br>
        <label>DATA:<input name="data"></label> <br>
        <label>HORÁRIO:<input name="horario"></label> <br>
        <label>SERVIÇOS:<input name="servico"></label> <br><br>

        <button type="submit">Salvar</button>
    </form>
</main>

<?php include "footer.php"; ?>