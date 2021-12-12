<?php get_header(); ?>

    <div id="container-wrap">
        <div class="container-row">
            <div class="content-page">
                <div class="container-row-content col-content-left">
                    <section class="container-news">
                        <div class="row-grid">
                            <h2 class="title-line tl-center">Noticias</h2>
                            <?php
                                $id_categoria = get_query_var('cat');
                                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                                
                                query_posts(array(
                                    "showposts" => 12,
                                    "category__in" => $id_categoria,
                                    "paged" => $paged
                                ));
                            ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <section class="content-box-row">
                                <section class="container-box">
                                    <a href="<?php the_permalink(); ?>" class="image featured">
                                        <?php if(has_post_thumbnail()){ ?>
                                            <section class="container-image">
                                                <?php
                                                the_post_thumbnail('category-thumb');
                                               ?>
                                           </section>
                                        <?php } ?>
                                    </a>
                                    <section class="container-hover">
                                        <section class="info-date">
                                            <a href="<?php the_permalink(); ?>">
                                                <i aria-hidden="true" class="fas fa-calendar"></i>
                                                <small><?php the_time('F d,Y') ?></small>
                                            </a>
                                        </section>
                                        <div class="categorias">
                                            <i aria-hidden="true" class="far fa-sticky-note"></i>
                                            <?php

                                                $get_cat        = get_the_category();
                                                $first_cat      = $get_cat[0];
                                                $category_name  = $first_cat->cat_name;
                                                $category_link  = get_category_link( $first_cat->cat_ID );

                                            ?>

                                            <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo esc_attr( $category_name ); ?>"><?php echo esc_html( $category_name ); ?></a>
                                        </div>
                                        <header class="header-title">
                                            <h3 class="dv-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        </header>
                                        <div class="more-container">
                                            <a href="<?php the_permalink(); ?>" class="more">Leer más</a>
                                        </div>
                                         
                                    </section>
                                </section>
                            </section>
                            <?php endwhile; ?>
                            <section id="pagination">
                                <div class="pagination-container">
                                    <?php wp_numer_pagination(); ?>
                                </div>
                            </section>
                        </div>
                        <div class="sidebar-widget">
                            <?php if(is_active_sidebar('post-category')) : ?>
                                <div id="post-category"><?php dynamic_sidebar('post-category'); ?></div>
                            <?php endif; ?>
                        </div>  
                        <?php else: ?>
                            <p>Ups!! no existe nada para esta categoria</p>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </section>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>