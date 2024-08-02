document.addEventListener('DOMContentLoaded', (event) => {
    const cpf = document.querySelector('#cpf');
    const telefone = document.querySelector('#telefone');
    const anoNascimento = document.querySelector('#ano_nascimento');

    cpf.addEventListener('input', (event) => {
        let cpfValue = cpf.value.replace(/\D/g, '');
        let cpfFormatted = '';

        if (cpfValue.length > 0) {
            cpfFormatted += cpfValue.substring(0, 3);
            if (cpfValue.length >= 4) {
                cpfFormatted += '.' + cpfValue.substring(3, 6);
            }
            if (cpfValue.length >= 7) {
                cpfFormatted += '.' + cpfValue.substring(6, 9);
            }
            if (cpfValue.length >= 10) {
                cpfFormatted += '-' + cpfValue.substring(9, 11);
            }
        }

        cpf.value = cpfFormatted;
    });

    telefone.addEventListener('input', (event) => {
        let telefoneValue = telefone.value.replace(/\D/g, '');
        let telefoneFormatted = '';

        if (telefoneValue.length > 0) {
            telefoneFormatted += telefoneValue.substring(0, 2);
            if (telefoneValue.length >= 3) {
                telefoneFormatted += '-' + telefoneValue.substring(2, 7);
            }
            if (telefoneValue.length >= 8) {
                telefoneFormatted += '-' + telefoneValue.substring(7, 11);
            }
        }

        telefone.value = telefoneFormatted;
    });

    anoNascimento.addEventListener('input', (event) => {
        anoNascimento.value = anoNascimento.value.replace(/\D/g, '').substring(0, 4);
    });
});


const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

form.removeEventListener('submit', (event) => {

    event.preventDefault();

    validarNome(); 
    validarTelefone();
    validarCpf();
    validarAno();
})

function erro(index) {

    campos[index].style.border = '2px solid #e63636';
    spans[index].style.display = 'block';

}

function removeErro(index) {

    campos[index].style.border = '';
    spans[index].style.display = 'none';

}

function validarNome() {

    if (campos[0].value.length < 3) {

        erro(0);

    } else {

        removeErro(0);
    }
}

function validarTelefone() {

    if (campos[1].value.length < 13) {

        erro(1);

    } else {

        removeErro(1);
    }
}

function validarCpf() {

    if (campos[2].value.length < 14) {

        erro(2);

    } else {

        removeErro(2);
    }
}

function validarAno() {

    if (campos[3].value.length < 4) {

        erro(3);

    } else {

        removeErro(3);
    }
}