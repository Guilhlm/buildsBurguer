<?php include "./includes/header.php"; ?>

<?php

class Produto
{
    public function ListarProdutos()
    {

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $query = "SELECT * FROM tb_produtos";
        $resultado = $conn->query($query)->fetch();
        return $resultado;
    }
}

$produto = new Produto();
$dados = $produto->ListarProdutos(); ?>

<section class="fundo-centro">

    <div class="container container-carrinho">

        <section id="header-compra">
            <h1>Carrinho</h1>
        </section>

        <main class="main-carrinho">

            <div class="produto">
                
                <div class="produto-imagem"><img src="<?= $dados['imagem'] ?>" alt="foto individual do produto"></div>

                <div class="produto-detalhes">
                    <h2><?= $dados['titulo'] ?></h2>
                    <p><?= $dados['descricao'] ?></p>
                    <span class="produto-preco">Valor: R$ <?= $dados['preco'] ?></span>
                </div>

                <div class="produto-acao">
                    <span class="produto-quantidade">1x</span>
                    <button class="add-button">Adicionar</button>
                    <button class="remove-button">Remover</button>
                </div>

            </div>



        </main>

        <section class="footer-carrinho">

            <div class="total">
                <div id="carrinho-itens"></div>
                <span>Total: R$ 0.00</span>
                <button class="finalizar-button">Finalizar</button>
            </div>

        </section>

    </div>
</section>

<script async src="assets/script/carrinho.js"></script>
<script src="assets/script/temaescuro.js"></script>
<?php include "./includes/footer.php"; ?>