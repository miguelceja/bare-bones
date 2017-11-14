<?php
/**
 * Template for the homepage.
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

	<p>This is the front-page.php</p>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>

	<?php endwhile; else : ?>

		<p>There are no posts or pages here.</p>

	<?php endif; ?>


	<!-- Project Cards Example -->
	<?php
		$args = array(
			'post_type' => 'bb_projects',
			'posts_per_page' => 50,
			'orderby' => 'menu_order',
			'order' => 'ASC',
		);

		$query = new WP_Query( $args );

		foreach ( $query->posts as $projects_post ) {
			$cards = get_post_meta( $projects_post->ID, 'project_cards', true );
		?>

		<div class="project">
			<!-- Project Image -->
			<div>
				<img src="<?php echo esc_url( wp_get_attachment_url( $cards['project_image'] ) ); ?>" />
			</div>

			<!-- Project Title -->
			<?php
			// If project link field is not empty, render project title as a link to project.
			if ( ! empty( $cards['project_link'] ) ) {
			?>
				<a href="<?php echo esc_url( $cards['project_link'] ); ?>">
					<?php echo esc_html( get_the_title( $projects_post ) ); ?>
				</a>
			<?php
			// Else, if project link is empty, render as just text.
			} else {
				echo esc_html( get_the_title( $projects_post ) );
			}
			?>

			<!-- Project Description -->
			<p>
				<?php echo esc_html( $cards['project_description'] ); ?>
			</p>
		</div>

	<?php } ?>

<?php get_footer(); ?>
