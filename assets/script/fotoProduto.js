function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function () {
        var output = document.getElementById('imagemPreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function resetImage() {
    var output = document.getElementById('imagemPreview');
    output.src = './assets/img/perfil/inserirfoto.png';
}


const form = document.getElementById('form');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

form.removeEventListener('submit', (event) => {

    event.preventDefault();

    validarTitulo();
    validarPreco();
    validarCategoria();
    validarDesc();
});

function erro(index) {

    campos[index].style.border = '1px solid #e63636';
    campos[index].style.color = '#e63636';
    spans[index].style.display = 'block';
}

function removeErro(index) {

    campos[index].style.border = '';
    campos[index].style.color = '#000';
    spans[index].style.display = 'none';
}

function validarTitulo() {

    const regexTitulo = /^[a-zA-Z\s]+$/; // Aceita apenas letras e espaços

    if (!regexTitulo.test(campos[0].value)) {
        erro(0);
    } else {
        removeErro(0);
    }
}

function validarPreco() {

    const regexPreco = /^\d+(\.\d{2})?$/; // Aceita números com 0 ou 2 casas decimais

    if (!regexPreco.test(campos[1].value) || campos[1].value === '') {
        erro(1);
    } else {
        removeErro(1);
    }
}

function validarCategoria() {

    if (campos[2].value.trim() === '') { // Verifica se o valor não é uma string vazia

        erro(2);
    } else {
        removeErro(2);
    }
}

function validarDesc() {

    const regexDesc = /^[a-zA-Z\s]+$/; // Aceita apenas letras e espaços
    
    if (!regexDesc.test(campos[3].value)) {
        erro(3);
    } else {
        removeErro(3);
    }
}