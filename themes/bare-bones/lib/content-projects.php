<?php
/**
 * Define projects module fields.  Just a sample.  Checkout the Fieldmanager docs for more info on what you can do: http://fieldmanager.org/
 *
 * @package BareBones
 * @author  Miguel Ceja <https://miguelceja.com>
 * @link    https://codex.wordpress.org/Template_Hierarchy
 */

add_action( 'fm_post_bb_projects', 'bb_projects' );

/**
 * Project card fields.
 */
function bb_projects() {

	$cards = new Fieldmanager_Group( array(
		'name'           => 'project_cards',
		'limit'          => 1,
		'add_more_label' => 'Add another project',
		'sortable'       => true,
		'label'          => 'Project Card',
		'children'       => array(
			'project_image' => new Fieldmanager_Media( 'Project image' ),
			'project_link' => new Fieldmanager_Textfield( 'Project Link' ),
			'project_description' => new Fieldmanager_Textarea( 'Project Description' ),
		),
	) );

	$cards->add_meta_box( 'Project cards', 'bb_projects' );
}
