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

            <!-- js adiciona o produto -->
            <!-- js adiciona o produto -->

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