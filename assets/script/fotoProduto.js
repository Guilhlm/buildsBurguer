function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
        var output = document.getElementById('imagemPreview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}

function resetImage() {
    var output = document.getElementById('imagemPreview');
    output.src = './assets/img/perfil/inserirfoto.png';
}