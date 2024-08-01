<?php

require './classe/Produto.php';

$produto = new Produto();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    $id = (int)$_GET['id'];
    $dados = $produto->Listar1Produto($id);

    if (!$dados) {
        header('Location: menu.php');
        exit();
    }
} else {
    header('Location: menu.php');
    exit();
}

include './includes/header.php';
?>

<section class="body-produto">

    <figcaption>
        <img class="fotinha" alt="foto individual do produto" src="<?= htmlspecialchars($dados['imagem']) ?>">
    </figcaption>

    <div class="container" id="grid-principal">

        <section class="grid-1">

            <h1 class="titulo-produto"><?= htmlspecialchars($dados['titulo']) ?></h1>

        </section>

        <section class="grid-2">

            <div id="tamanho">Médio</div>
            <div id="tamanho">Grande</div>
            <p class="preco-produto">R$ <?= htmlspecialchars($dados['preco']) ?></p>

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
            <div class="addcart"><a href="carrinho.php">🛒 Adicionar ao carrinho</a></div>

        </section>

        <div class="grid-4">
            <h2 class="titulo-desc">Descrição:</h2>

            <section class="texto-desc">
                <p><?= htmlspecialchars($dados['descricao']) ?></p>
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
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="orange" class="bi bi-star-fill" viewBox="0 0 16 16">
                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
            </svg>
        </div>
    </div>
</section>

<script src="assets/script/temaescuro.js"></script>
<?php include './includes/footer.php' ?>