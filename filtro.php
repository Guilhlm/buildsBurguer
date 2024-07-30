<?php

include "./includes/header.php";
require './classe/Produto.php';

?>

<section class="container" id="produtos">
    <section class="produtos">
        <div class="row">
            <main class="col-12">
                <div class="row">

                    <?php

                    $produto = new Produto();
                    $result = $produto->FiltroProduto();

                    foreach ($result as $valor) { ?>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <a href="click-produto.php?id=<?= $valor['id'] ?>" style="text-decoration: none;">
                                <figure>
                                    <img src="<?= $valor['imagem'] ?>" alt="foto individual do produto" class="foto-produto">
                                    <figcaption>
                                        <h4><?= $valor['titulo'] ?></h4>
                                        <span class="preco">
                                            <p class="preçoescrito precin">Preço ..........</p>
                                            <p class="precin"><?= $valor['preco'] ?></p>
                                        </span>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>

                    <?php } ?>

                </div>
            </main>
        </div>
    </section>
</section>

<script src="assets/script/temaescuro.js"></script>
<?php include "./includes/footer.php"; ?>