<?php get_header(); ?>
    
    <div class="container">
        <div class="row">
            <section class="main col-md-8">
                <div class="row single-post">
                    <article class="col-md-6 post">
                        <div class="contenedor">
                            <div class="info">
                                <h2 class="titulo">Error</h2>
                                <div class="extracto"><p>La publicacion que buscas no existe</p>
                                <p>Revisa que la URL que ingresaste sea correcta</p></div>
                            </div>
                        </div>
                    </article>                 
                </div>
                <section class="row paginacion">
                    <div class="col-md-12">
                        <div class="pagination"><?php wp_pagenavi(); ?></div>
                    </div>
                </section>

            </section>
           <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer(); ?>   