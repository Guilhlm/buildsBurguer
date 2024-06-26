<?php include "./includes/header.php"; ?>

<section class="fundo-centro">
        <div class="container container-carrinho">
            <section id="header-compra">
                <h1>Carrinho</h1>
            </section>
            <main class="main-carrinho">
                <div class="produto">
                    <div class="produto-imagem"><img src="./assets/img/lanches/hmbSimples.png" alt="Produto 1"></div>
                    <div class="produto-detalhes">
                        <h2>Nome do produto 1</h2>
                        <p>Descrição adaptada aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span class="produto-preco">Valor: R$ 240,68</span>
                    </div>
                    <div class="produto-acao">
                        <span class="produto-quantidade" data-produto="Produto 1">0x</span>
                        <button class="add-button" onclick="addCarrinho('Produto 1', 240.68)">Adicionar</button>
                        <button class="remove-button" onclick="removeItemCarrinho('Produto 1')">Remover</button>
                    </div>
                </div>

                <div class="produto">
                    <div class="produto-imagem"><img src="./assets/img/bebidas/cerveja.jpg" alt="Produto 2"></div>
                    <div class="produto-detalhes">
                        <h2>Nome do produto 2</h2>
                        <p>Descrição adaptada aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span class="produto-preco">Valor: R$ 150,00</span>
                    </div>
                    <div class="produto-acao">
                        <span class="produto-quantidade" data-produto="Produto 2">0x</span>
                        <button class="add-button" onclick="addCarrinho('Produto 2', 150.00)">Adicionar</button>
                        <button class="remove-button" onclick="removeItemCarrinho('Produto 2')">Remover</button>
                    </div>
                </div>

                <div class="produto">
                    <div class="produto-imagem"><img src="./assets/img/doces/brigadeiro.jpg" alt="Produto 3"></div>
                    <div class="produto-detalhes">
                        <h2>Nome do produto 3</h2>
                        <p>Descrição adaptada aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span class="produto-preco">Valor: R$ 99,90</span>
                    </div>
                    <div class="produto-acao">
                        <span class="produto-quantidade" data-produto="Produto 3">0x</span>
                        <button class="add-button" onclick="addCarrinho('Produto 3', 99.90)">Adicionar</button>
                        <button class="remove-button" onclick="removeItemCarrinho('Produto 3')">Remover</button>
                    </div>
                </div>

                <div class="produto">
                    <div class="produto-imagem"><img src="./assets/img/porcoes/bannafrita.jpg" alt="Produto 4"></div>
                    <div class="produto-detalhes">
                        <h2>Nome do produto 3</h2>
                        <p>Descrição adaptada aqui. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <span class="produto-preco">Valor: R$ 789,99</span>
                    </div>
                    <div class="produto-acao">
                        <span class="produto-quantidade" data-produto="Produto 4">0x</span>
                        <button class="add-button" onclick="addCarrinho('Produto 4', 789.99)">Adicionar</button>
                        <button class="remove-button" onclick="removeItemCarrinho('Produto 4')">Remover</button>
                    </div>
                </div>
                <!-- Adicione mais produtos conforme necessário -->
            </main>
            <section class="footer-carrinho">
                <div class="total">
                    <div id="carrinho-itens"></div>
                    <span>Total: R$ <span id="carrinho-total">0.00</span></span>
                    <button class="finalizar-button" onclick="fecharPedido()">Finalizar</button>
                </div>
            </section>
        </div>
    </section>

    <script src="assets/script/carrinho.js"></script>

<script src="assets/script/temaescuro.js"></script>
<?php include "./includes/footer.php"; ?>