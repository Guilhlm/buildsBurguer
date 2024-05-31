//var variavel = "oi"  variavel normal
//let tchau = "oi"     variavel temporaria
//const toaki = "oi"   variavel que nao pode mudar.

let indexSlidie = 0;

function showSlide(index) {
    const carrossel = document.querySelector(".carrossel");

    const totalSlide = 5;

    if(index >= totalSlide ){
        indexSlidie = 0;
    }
    else if (index < 0){
        indexSlidie = totalSlide -1;
    }
    else{
        indexSlidie = index;
    }

    const offset = -indexSlidie * 51.60;
    console.log(offset);
    carrossel.style.transform = `translateX(${offset}%)`;
}

function anteriorSlide() {
    indexSlidie = indexSlidie - 1;
    showSlide(indexSlidie);
}

function proximoSlide() {
    indexSlidie = indexSlidie + 1;
    showSlide(indexSlidie);

} 


// //troca soziho 

// setInterval(() => {
//     proximoSlide()
// }, 10000);