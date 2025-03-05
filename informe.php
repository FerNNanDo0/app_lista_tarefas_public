<!-- informe o usuário que a tarefa foi atualizada -->
<?  if(isset($_GET['atualizacao']) && $_GET['atualizacao'] == 1) { ?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h2>Tarefa atualizada com sucesso!</h2>
    </div>
<? } ?>

<!-- informe o usuário que a tarefa foi removida -->
<?  if(isset($_GET['remocao']) && $_GET['remocao'] == 1) { ?>
    <div class="bg-success pt-2 text-white d-flex justify-content-center">
        <h2>Tarefa removida com sucesso!</h2>
    </div>
<? } ?>