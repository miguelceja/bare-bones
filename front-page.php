<?php get_header(); ?>

	<p>This is the front-page.php</p>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>There are no posts or pages here.</p>

		<?php endif; ?>

<?php get_footer(); ?>

