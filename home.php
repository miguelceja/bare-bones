<?php
/**
 * Template for the home page template.
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://codex.wordpress.org/Template_Hierarchy
 */

get_header();

?>

	<div>
		<p>This is the home.php</p>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'post' ); ?>

		<?php endwhile; else : ?>
			<p>There are no posts or pages here.</p>
		<?php endif; ?>

	</div>

<?php get_footer(); ?>
