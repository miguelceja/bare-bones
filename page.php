<?php get_header(); ?>

	<div>

		<p>This is the page.php</p>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<p>There are no posts or pages here.</p>

		<?php endif; ?>

	</div>

<?php get_footer(); ?>
