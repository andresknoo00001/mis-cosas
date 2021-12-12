<?php get_header(); ?>

    <div id="main-wrapper">
        <div class="content-page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="box post">
                    <div class="container-content-fullcontent">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            <?php else : ?>
                <p>No hay nada para mostrar</p>
            <?php endif; ?>
        </div>
    </div>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>