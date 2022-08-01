<?php
/**
 * Template Name: Page (No Sidebar)
 * Description: Page template with no sidebar.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content container pt-5 text-primary' ); ?>>
	<!-- <h1 class="entry-title"><?php the_title(); ?></h1> -->
	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'grow-tourism' ),
			'after'  => '</div>',
		) );
		edit_post_link( __( 'Edit', 'grow-tourism' ), '<span class="edit-link">', '</span>' );
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;

get_footer();
