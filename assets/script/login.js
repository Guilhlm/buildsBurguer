const container = document.getElementById('box-marrom');
const registerBtn = document.getElementById('registrar');
const loginBtn = document.getElementById('logar');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{3,}$/;

form.removeEventListener('submit', (event) => {

    event.preventDefault();

    validarNome();
    validarEmail();
    validarSenha();
    compararSenhas();
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

function validarEmail() {

    if (!emailRegex.test(campos[1].value)) {

        erro(1);

    } else {

        removeErro(1);

    }
}

function validarSenha() {

    if (campos[2].value.length < 5) {

        erro(2);

    } else {

        removeErro(2);
        compararSenhas();

    }
}

function compararSenhas() {

    if (campos[2].value == campos[3].value && campos[3].value.length >= 5) {

        removeErro(3);

    } else {

        erro(3);

    }
}