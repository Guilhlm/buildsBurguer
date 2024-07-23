<?php include './includes/header.php' ?>
<?php

class Produto
{
    public function ListarProdutos()
    {

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $query = "SELECT * FROM tb_produtos";
        $resultado = $conn->query($query)->fetchAll();
        return $resultado;
    }
}

$produto = new Produto();
$dados = $produto->ListarProdutos(); ?>


<!-- HAMBURGUERS -->
<section id="banner"></section>
<h2 class="titulo" id="hambs">Hamburguers</h2>
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-hamb carrossel">


                <?php for ($i = 0; $i < 12; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
        </section>
        <button class="anterior" onclick="javascript:anteriorSlide('hamb')"><i class="bi bi-caret-left"></i></button>
        <button class="proximo" onclick="javascript:proximoSlide('hamb')"><i class="bi bi-caret-right"></i></button>
    </main><br><br><br>
</section>


<!-- COMBOS -->
<h2 class="titulo" id="combos">Combos</h2>
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-combo carrossel">

                <?php for ($i = 12; $i < 24; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
            <button class="anterior" onclick="javascript:anteriorSlide('combo')"><i class="bi bi-caret-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide('combo')"><i class="bi bi-caret-right"></i></button>
        </section>
    </main><br><br><br>
</section>


<!-- POÇÕES -->
<h2 class="titulo" id="porcoes">Porções</h2>
<section id="banner4"></section>
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-porcao carrossel">

                <?php for ($i = 24; $i < 36; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
            <button class="anterior" onclick="javascript:anteriorSlide('porcao')"><i class="bi bi-caret-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide('porcao')"><i class="bi bi-caret-right"></i></button>
        </section>
    </main><br><br><br>
</section>


<!-- DRINKS -->
<h2 class="titulo" id="bebidas">Drinks</h2>
<section id="banner2"></section>
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-drink carrossel">

                <?php for ($i = 36; $i < 48; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
            <button class="anterior" onclick="javascript:anteriorSlide('drink')"><i class="bi bi-caret-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide('drink')"><i class="bi bi-caret-right"></i></button>
        </section>
    </main><br><br><br>
</section>


<!-- ALCOOL -->
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-alcoolico carrossel">

                <?php for ($i = 48; $i < 60; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
            <button class="anterior" onclick="javascript:anteriorSlide('alcoolico')"><i class="bi bi-caret-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide('alcoolico')"><i class="bi bi-caret-right"></i></button>
        </section>
    </main><br><br><br>
</section>


<!-- DOCES -->
<h2 class="titulo" id="sobremesa">Docinhos</h2>
<section id="banner3"></section>
<section class="container" id="produtos">
    <main class="carrossel-container">
        <section id="produtos">
            <div class="carrossel-doce carrossel">

                <?php for ($i = 60; $i < 72; $i++) { ?>

                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <a href="click-produto.php?id=<?= $dados[$i]['id'] ?>" style="text-decoration: none;">
                            <figure>
                                <img src="./assets/img/produtos/<?= $dados[$i]['imagem'] ?>" alt="Hamburguer Kids" class="foto-produto">
                                <figcaption>
                                    <h4><?= $dados[$i]['titulo'] ?></h4>
                                    <span class="preco">
                                        <p class="preçoescrito precin">Preço ..........</p>
                                        <p class="precin">R$ <?= $dados[$i]['preco'] ?></p>
                                    </span>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                <?php } ?>

            </div>
            <button class="anterior" onclick="javascript:anteriorSlide('doce')"><i class="bi bi-caret-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide('doce')"><i class="bi bi-caret-right"></i></button>
        </section>
    </main><br><br><br>
</section>

<?php include './includes/footer.php' ?>
<script src="assets/script/temaescuro.js"></script>
<script src="assets/script/script.js"></script>