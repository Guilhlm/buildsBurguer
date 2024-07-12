<?php include './includes/header.php' ?>

<?php

class Produto
{
    public function Listar1Produto($id)
    {

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $query = "SELECT * FROM tb_produtos WHERE id = {$id}";
        $resultado = $conn->query($query)->fetch();

        return $resultado;
    }
}

$produto = new Produto();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $dados = $produto->Listar1Produto($id);
}

?>

<section class="body-produto">

    <figcaption><img class="fotinha" alt="foto do produto" src="./assets/img/produtos/<?= $dados['imagem'] ?>"></figcaption>

    <div class="container" id="ois">

        <section class="grid-1">
            <h1 class="titulo-produto"><?= $dados['titulo'] ?></h1>
        </section>

        <section class="grid-2">
            <div id="tamanho">Médio</div>
            <div id="tamanho">Grande</div>

            <p class="preco-produto">R$ <?= $dados['preco'] ?></p>
        </section>

        <section class="grid-3">
            <div id="adicionar">

                <div class="menos">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8" />
                    </svg>
                </div>

                <div class="numero">2</div>
                <div class="mais">+</div>
            </div>

            <div class="addcart">🛒 Adicionar ao carrinho</div>
        </section>

        <div class="grid-4">
            <h2 class="titulo-desc">Modo de Preparo:</h2>

            <section class="texto-desc">
                <p>
                    Esta delícia começa com ingredentes pre selecionados, cortados artesanalmente
                    textura ideal. Depois, são armazenados com muito cuidado em nosso restaurante, até atingirem seu tempo em nosso estoque
                    O diferencial está no tempero secreto, uma mistura harmoniosa de ervas finas, alho em pó, páprica
                    defumada e um toque de sal marinho. Essa combinação exclusiva proporciona um sabor profundo e único.
                </p>
            </section>
        </div>

        <div class="grid-5">
            <h3 class="avaliacao-title">Avaliação:</h3>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
        </div>
    </div>
</section>

<script src="assets/script/temaescuro.js"></script>

<?php include './includes/footer.php' ?>