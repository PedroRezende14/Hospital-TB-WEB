function validarFormulario() {
    let cpf = document.getElementById('cpf').value;
    let idade = document.getElementById('idade').value;
    let observacoes = document.getElementById('observacoes').value;

    if (!validarCPF(cpf)) {
        alert('CPF inválido!');
        return false;
    }

    if (idade <= 0) {
        alert('Idade inválida!');
        return false;
    }

    if (observacoes.length > 100) {
        alert('Observações não podem exceder 100 caracteres!');
        return false;
    }

    return true;
}

function validarCPF(cpf) {
    // Adicione aqui a validação do CPF
    return true; // Retorne true ou false de acordo com a validação
}
