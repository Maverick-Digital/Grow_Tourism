<?php
/**
 * Template Name: Page (No Sidebar blog)
 * Description: Page template with no sidebar.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('content container pt-5 text-primary'); ?>>
	<div class="text-center text-primary py-3">
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p>Lorem ipsum dolor sit amet contetur adipiscing elit sed eiusmod. Contetur adipiscing elitsed eiusmod tempor incididunt Honim ad minima Fenim ad minima veniam.</p>
		</header><!-- /.entry-header -->
	</div>
	<div class="course-highlight background-gradiant p-3 text-white mb-3">
		<div class="row">
			<div class="col-6">
				<p><strong>COURSE OVERVIEW </strong></p>
				<h4 class="mb-1">What NZ tourism needs to know about deliveringhigh-value tourism</h4>
				<p class="mb-0">The development of a high-value tourism model for Aotearoa, New Zealand will continue to be nothing more than a utopian ideal unless we work quickly.</p>
			</div>
			<div class="col-6">
				<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mx-auto" alt="...">
			</div>
		</div>
	</div>
	<div class="blog-post-wrap">
		<h2 class="text-center mb-1">All posts</h2>
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'grow-tourism'),
			'after'  => '</div>',
		));
		edit_post_link(__('Edit', 'grow-tourism'), '<span class="edit-link">', '</span>');
		?>
	</div>
</div><!-- /#post-<?php the_ID(); ?> -->


<div class="background-gradiant p-4">
	<div class="container text-center text-white">
		<h1><strong>Are you ready to grow your <br> business with us?</strong></h1>
		<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p>
		<button type="button" class="btn btn-light btn-lg rounded-pill mt-2">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
	</div>
</div>

<?php
// If comments are open or we have at least one comment, load up the comment template.
if (comments_open() || get_comments_number()) :
	comments_template();
endif;

get_footer();
