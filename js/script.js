function editarTarefa(id, txt_tarefa, pag){
    // criar um form de edição
    let form = document.createElement('form');
    form.action = 'tarefa_controller.php?acao=atualizar'+'&pag='+pag;
    form.method = 'POST';
    form.className = 'row';

    // criar um input para o texto do texto
    let input = document.createElement('input');
    input.type = 'text';
    input.name = 'tarefa';
    input.className = 'col-9 form-control';
    input.style = 'color: red;';
    input.value = txt_tarefa;

    // criar um input para o id da tarefa
    let input_id = document.createElement('input');
    input_id.type = 'hidden';
    input_id.name = 'id';
    input_id.value = id;

    // criar um button para enviar
    let button = document.createElement('button');
    button.type = 'submit';
    button.className = 'col-3 btn btn-primary';
    button.innerHTML = 'Atualizar';

    // inserir os elementos no form
    form.appendChild(input);
    form.appendChild(input_id);
    form.appendChild(button);

    // selecionar a div tarefa clicada
    let tarefa = document.getElementById('tarefa_' + id);

    // limpar o texto da tarefa clicada
    tarefa.innerHTML = '';

    // inserir o form na tarefa clicada
    tarefa.insertBefore(form, tarefa[0]);
}

/**
 * Remove uma tarefa pelo id.
 * @param {number} id - Identificador da tarefa a ser removida.
 */
function removerTarefa(id, pagina){

    // exibir uma mensagem de confirmação
    var confirma = confirm('Tem certeza que deseja remover essa tarefa?');

    if(confirma)
        // location href para enviar o id pela url
        location.href = `${pagina}.php?acao=remover&id=${id}&pag=${pagina}`;
}

function marcarTarefaConcluida(id ,pagina){
    // exibir uma mensagem de confirmação
    var confirma = confirm('Tem certeza que deseja marcar essa tarefa como comcluida?');

    if(confirma)
        // location href para enviar o id pela url
        location.href = `${pagina}.php?acao=marcarConcluida&id=${id}&pag=${pagina}`;
}