<?php get_header(); ?>

<section id="container-content">
	<section id="content">
		<?php query_posts("paged=$paged"); ?>
		<?php if(have_posts()) : ?>
			
		<?php endif; ?>
	</section>

<?php get_sidebar(); ?>

</section>

<?php get_footer(); ?>