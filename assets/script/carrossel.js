let indexSlidie = 0;
let resetIndex = "";

function showSlide(index, fucCarrossel) {
    const carrossel = document.querySelector(".carrossel-" + fucCarrossel);

    const totalSlide = 5;

    if (index >= totalSlide) {
        indexSlidie = 0;
    }
    else if (index < 0) {
        indexSlidie = totalSlide - 1;
    }
    else {
        indexSlidie = index;
    }

    const offset = -indexSlidie * 51.60;
    console.log(offset);
    carrossel.style.transform = `translateX(${offset}%)`;
}

function anteriorSlide(fucCarrossel) {

    if (resetIndex != fucCarrossel) {
        indexSlidie = 0;
    }
    resetIndex = fucCarrossel
    indexSlidie = indexSlidie - 1;
    showSlide(indexSlidie, fucCarrossel);
}

function proximoSlide(fucCarrossel) {

    if (resetIndex != fucCarrossel) {
        indexSlidie = 0;
    }
    resetIndex = fucCarrossel
    indexSlidie = indexSlidie + 1;
    showSlide(indexSlidie, fucCarrossel);

}


// //troca soziho

// setInterval(() => {
//     proximoSlide()
// }, 10000);