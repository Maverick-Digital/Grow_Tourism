<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('mt-5'); ?>>
	<div class="container">
		<header class="entry-header text-primary text-center">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<p class="mb-2"><span class="me-3"><strong>By <?php echo get_the_author(); ?></strong></span><span>Posted on <?php echo get_the_date(); ?></span></p>
				</div><!-- /.entry-meta -->
			<?php
			endif;
			?>
			<?php the_field('intro'); ?>
		</header><!-- /.entry-header -->
	</div>


	<div class="container-fluid post-feature-image my-3" style="background-image: url(<?php the_post_thumbnail_url($size = '2048x2048'); ?>);">

	</div>

	<div class="container">
		<div class="entry-content text-primary">
			<?php
			the_content();

			wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'grow-tourism') . '</span>', 'after' => '</div>'));
			?>



		</div><!-- /.entry-content -->

		<footer class="entry-meta author-meta-single">
			<hr>
			<?php
			$author_id = get_the_author_meta('ID');
			$author_badge = get_field('user_profile_picture', 'user_' . $author_id);
			?>
			<div class="row author-information text-primary">
				<div class="col-auto">
					<div class="author-image rounded-circle border justify-content-center align-items-center overflow-hidden "><img class="img-fluid" src="<?php echo $author_badge['url']; ?>" alt="<?php echo $author_badge['alt']; ?>" /></div>
				</div>
				<div class="col-8">
					<h5 class="mb-0"><?php echo get_the_author_meta('display_name', $author_id); ?></h5>
					<p class="mb-1"><strong>
							<?php the_field('author_profession', 'user_' . $author_id);
							?>
						</strong></p>
					<p><?php the_author_meta('description'); ?></p>
					<div class="author-links">
						<?php
						if (!empty(get_the_author_meta('user_url'))) :
							printf('<a href="%s" class="www btn btn-light btn-lg">' . '<i class="fab fa-internet-explorer"></i>' . esc_html__('', 'grow-tourism') . '</a>', esc_url(get_the_author_meta('user_url')));
						endif;

						// Add new Profile fields for Users in functions.php
						$fields = array(
							array(
								'meta'  => 'facebook_profile',
								'label' => 'Facebook',
								'icon'  =>	'<i class="fab fa-facebook-square"></i>'
							),
							array(
								'meta'  => 'twitter_profile',
								'label' => 'Twitter',
								'icon'  =>	'<i class="fab fa-twitter-square"></i>'
							),
							array(
								'meta'  => 'linkedin_profile',
								'label' => 'LinkedIn',
								'icon'  =>	'<i class="fa-brands fa-linkedin"></i>'
							),
							array(
								'meta'  => 'xing_profile',
								'label' => 'Xing',
								'icon'  =>	'<i class="fab fa-xing-square"></i>'
							),
							array(
								'meta'  => 'github_profile',
								'label' => 'GitHub',
								'icon'  =>	'<i class="fab fa-github-square"></i>'
							),
						);

						foreach ($fields as $key => $data) {
							$author_link = get_the_author_meta(esc_attr($data['meta']));
							if (!empty($author_link)) {
								$label = $data['label'];
								$iconz = $data['icon'];
								echo ' <a href="' . esc_url($author_link) . '" class="btn btn-light btn-lg" title="' . esc_attr($label) . '">' . $iconz . '</a> ';
							}
						}
						?>
					</div>
				</div>
			</div>
			<!-- <hr> -->
			<?php
			//get_template_part('author', 'bio');
			?>
		</footer><!-- /.entry-meta -->
		<div class="recent-post-grid mt-4 text-primary">
			<h2 class="text-center ">Read more posts</h2>
			<?php echo do_shortcode('[bs-isotope-equal-height type="post" tax="category" cat_parent="48"]'); ?>
		</div>
	</div>
	<?php
	edit_post_link(__('Edit', 'grow-tourism'), '<span class="edit-link">', '</span>');
	?>


</article><!-- /#post-<?php the_ID(); ?> -->