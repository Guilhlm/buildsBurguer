const container = document.getElementById('box-marrom');
const registerBtn = document.getElementById('registrar');
const loginBtn = document.getElementById('logar');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});