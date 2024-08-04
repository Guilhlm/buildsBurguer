if (document.readyState == "loading") {
    document.addEventListener("DOMContentLoaded", () => {

        funcoesCD();
        atualizarCarrinho();
    });
} else {

    funcoesCD();
    atualizarCarrinho();
}

totalPreco = "0.00";

function funcoesCD() {

    const removerProduto = document.getElementsByClassName("remove-button");
    for (var i = 0; i < removerProduto.length; i++) {
        removerProduto[i].addEventListener("click", removerProdutoCarrinho);
    }

    const adicionarProduto = document.getElementsByClassName("add-button");
    for (var i = 0; i < adicionarProduto.length; i++) {
        adicionarProduto[i].addEventListener("click", adicionarProdutoCarrinho);
    }

    const addBotao = document.getElementsByClassName("addcart");
    for (var i = 0; i < addBotao.length; i++) {
        addBotao[i].addEventListener("click", addaocarrinho);
    }

    const botaoEnviar = document.getElementsByClassName("finalizar-button")[0];
    botaoEnviar.addEventListener("click", fazerEnvio);

    updateTotal();
}

function adicionarProdutoCarrinho(event) {

    const produtoElemento = event.target.parentElement.parentElement;
    const tituloProduto = produtoElemento.getElementsByClassName("produto-detalhes")[0].getElementsByTagName("h2")[0].innerText;

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const index = carrinho.findIndex(item => item.titulo === tituloProduto);

    if (index > -1) {
        carrinho[index].quantidade += 1;
        localStorage.setItem("carrinho", JSON.stringify(carrinho));
        atualizarCarrinho();
    }
}

function removerProdutoCarrinho(event) {

    const produtoElemento = event.target.parentElement.parentElement;
    const tituloProduto = produtoElemento.getElementsByClassName("produto-detalhes")[0].getElementsByTagName("h2")[0].innerText;

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];
    const index = carrinho.findIndex(item => item.titulo === tituloProduto);

    if (index > -1) {
        if (carrinho[index].quantidade > 1) {
            carrinho[index].quantidade -= 1;
        } else {
            carrinho.splice(index, 1);
        }

        localStorage.setItem("carrinho", JSON.stringify(carrinho));
        atualizarCarrinho();
    }
}

function updateTotal() {

    totalPreco = 0;
    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    carrinho.forEach(produto => {
        const precoProduto = parseFloat(produto.preco.replace("R$ ", "").replace(",", "."));
        const quantidadeProduto = produto.quantidade;
        totalPreco += precoProduto * quantidadeProduto;
    });

    totalPreco = totalPreco.toFixed(2);
    document.querySelector(".total span").innerText = "Total: R$ " + totalPreco;
}

function atualizarCarrinho() {

    const mainCarrinho = document.querySelector(".main-carrinho");
    mainCarrinho.innerHTML = "";

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    carrinho.forEach(produto => {
        const novoProduto = document.createElement("div");
        novoProduto.classList.add("produto");

        novoProduto.innerHTML = `

            <div class="produto-imagem"><img src="${produto.imagem}" alt="${produto.titulo}"></div>
            <div class="produto-detalhes">
                <h2>${produto.titulo}</h2>
                <p>${produto.descricao}</p>
                <span class="produto-preco">Valor: R$ ${produto.preco}</span>
            </div>
            <div class="produto-acao">
                <span class="produto-quantidade">${produto.quantidade}x</span>
                <button class="add-button">Adicionar</button>
                <button class="remove-button">Remover</button>
            </div>
        `;

        mainCarrinho.append(novoProduto);
    });

    const removerProduto = document.getElementsByClassName("remove-button");
    for (var i = 0; i < removerProduto.length; i++) {
        removerProduto[i].addEventListener("click", removerProdutoCarrinho);
    }

    const adicionarProduto = document.getElementsByClassName("add-button");
    for (var i = 0; i < adicionarProduto.length; i++) {
        adicionarProduto[i].addEventListener("click", adicionarProdutoCarrinho);
    }

    updateTotal();
}

function addaocarrinho(event) {

    const botao = event.target;
    const gridInfos = botao.parentElement.parentElement.parentElement;

    const produto = {
        imagem: gridInfos.getElementsByClassName("fotinha")[0].src,
        titulo: gridInfos.getElementsByClassName("titulo-produto")[0].innerText,
        descricao: gridInfos.getElementsByClassName("texto-desc")[0].innerText,
        preco: gridInfos.getElementsByClassName("preco-produto")[0].innerText,
        quantidade: 1
    };

    let carrinho = JSON.parse(localStorage.getItem("carrinho")) || [];

    const index = carrinho.findIndex(item => item.titulo === produto.titulo);
    if (index > -1) {
        carrinho[index].quantidade += 1;
    } else {
        carrinho.push(produto);
    }

    localStorage.setItem("carrinho", JSON.stringify(carrinho));

    window.location.href = "carrinho.php";
}

function fazerEnvio() {
    
    if (parseFloat(totalPreco) === 0) {
        alert("O carrinho está vazio!");
    } else {
        alert(`Sua compra deu: R$ ${totalPreco}, volte sempre :]`);
    }

    localStorage.removeItem("carrinho");

    atualizarCarrinho();
    updateTotal();
}