function toggleSidebar() {
    const sidebar = document.getElementById('sidebar');
    const body = document.body;
    if (sidebar.style.right === '0px') {
        sidebar.style.right = '-450px';
        body.classList.remove('sidebar-open');
    } else {
        sidebar.style.right = '0px';
        body.classList.add('sidebar-open');
    }
}

function fechar(){
    sidebar.style.right = '-500px';
}