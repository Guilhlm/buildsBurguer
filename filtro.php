<?php include "./includes/header.php"; ?>

<section><a href="menu.php#hambs"><img id="bannersobre" src="./assets/img/BannerMenu.png" alt="banner do catalogo"></a></section>

<section class="container" id="produtos">
    <section id="produtos">
        <div class="row">

            <main class="col-2 filtro">
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
            <main class="col-10">
                <div class="row">

                    <?php

                    for ($i = 0; $i < 10; $i++) {

                        include "./includes/produtofiltro.php";
                    }

                    ?>
                </div>
            </main>
        </div>

    </section>
</section>



<script src="assets/script/temaescuro.js"></script>
<?php include "./includes/footer.php"; ?>