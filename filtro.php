<?php include "./includes/header.php"; ?>

<?php

class filtro
{
    public function listarfiltro()
    {

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $query = "SELECT * FROM tb_produtos";
        $resultado = $conn->query($query)->fetch();
        return $resultado;
    }
}

$produto = new filtro();
$dados = $produto->listarfiltro();

?>

<section><a href="menu.php#hambs"><img id="bannersobre" src="./assets/img/BannerMenu.png" alt=""></a></section>

<section class="container" id="produtos">
    <section class="produtos">
        <div class="row">

            <main class="col-12 filtro">
                <form action="#">
                    <label for="">Lanches</label>
                    <input type="checkbox" name="" id="">
                    <label for="">Combos</label>
                    <input type="checkbox" name="" id="">
                    <label for="">Bebidas</label>
                    <input type="checkbox" name="" id="">
                    <label for="">Porções</label>
                    <input type="checkbox" name="" id="">
                    <label for="">Sobremesas</label>
                    <input type="checkbox" name="" id="">
                </form>


            </main>
            <main class="col-12">
                <div class="row">

                    <?php

                    for ($i = 0; $i < 4; $i++) { ?>

                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <a href="?id=<?= $dados['id'] ?>" style="text-decoration: none;">
                                <figure>
                                    <img src="./assets/img/produtos/<?= $dados['imagem'] ?>" alt="<?= $dados['titulo'] ?>" class="foto-produto">
                                    <figcaption>
                                        <h4><?= $dados['titulo'] ?></h4>
                                        <span class="preco">
                                            <p class="preçoescrito precin">Preço ..........</p>
                                            <p class="precin"><?= $dados['preco'] ?></p>
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