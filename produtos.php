<?php include "./includes/header.php"; ?>

<section class="container" id="produtos">
    <section id="produtos">
        <div class="row">

            <main class="col-2">
                <form action="#">
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                    <input type="checkbox" name="" id="">
                </form>


            </main>
            <main class="col-10">
                <div class="row">

                    <?php

                    for ($i = 0; $i < 4; $i++) {

                        include "./includes/produto.php";
                    }

                    ?>
                </div>
            </main>
        </div>

    </section>
</section>



<script src="assets/script/temaescuro.js"></script>
<?php include "./includes/footer.php"; ?>