<section class="produtos-tela">
        <h2 class="titulo">Filmes</h2>
        <main class="container">
            <div class="row">

            <?php for ($i = 0; $i < 8; $i++) { 
               include './includes.produto-card.php';
            } ?>
            
            </div>
        </main>
    </section>