let carrinho = [];
let total = 0;

function addCarrinho(produto, valor) {
    let fim = false;

    for (let i = 0; i < carrinho.length; i++) {
        if (carrinho[i].produto === produto) {
            carrinho[i].qtd++;
            fim = true;
            break;
        }
    }

    if (!fim) {
        carrinho.push({ produto, valor, qtd: 1 });
    }

    atualizaCarrinho();
}

function atualizaCarrinho() {
    const cartItens = document.getElementById('carrinho-itens');
    cartItens.innerHTML = '';
    total = 0;

    carrinho.forEach((item) => {
        total += item.valor * item.qtd;

        const produtoQuantitySpan = document.querySelector(`.produto-quantidade[data-produto="${item.produto}"]`);
        if (produtoQuantitySpan) {
            produtoQuantitySpan.innerText = `${item.qtd}x`;
        }
    });

    document.getElementById('carrinho-total').innerText = total.toFixed(2);
}

function removeItemCarrinho(produto) {
    for (let i = 0; i < carrinho.length; i++) {
        if (carrinho[i].produto === produto) {
            if (carrinho[i].qtd > 1) {
                carrinho[i].qtd--;
            } else {
                carrinho.splice(i, 1);
            }
            break;
        }
    }
    atualizaCarrinho();
}

function fecharPedido() {
    if (carrinho.length === 0) {
        alert('Seu carrinho está vazio');
        return;
    }

    alert(`Compra finalizada com sucesso: R$ ${total.toFixed(2)}`);
    carrinho = [];
    atualizaCarrinho();
}