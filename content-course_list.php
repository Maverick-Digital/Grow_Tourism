<?php

/**
 * The template for displaying content in the index.php template.
 */
?>

<article class="mb-3" id="post-<?php the_ID(); ?>">
	<div class="card border-primary border-2 shadow">
		<div class="row g-0">
			<div class="col-md-4 overflow-hidden">
				<img src="<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail', false);
							echo $src[0]; // the url of featured image
							?>" class="rounded-start img-fluid img-fluid-course-archive" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body p-2 text-primary">
					<header>
						<h4 class="card-title">
							<a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'grow-tourism'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h4>
						<?php
						if ('post' === get_post_type()) :
						?>
							<div class="card-text entry-meta">
								<?php
								grow_tourism_article_posted_on();

								$num_comments = get_comments_number();
								if (comments_open() && $num_comments >= 1) :
									echo ' <a href="' . get_comments_link() . '" class="badge badge-pill badge-secondary float-end" title="' . esc_attr(sprintf(_n('%s Comment', '%s Comments', $num_comments, 'grow-tourism'), $num_comments)) . '">' . $num_comments . '</a>';
								endif;
								?>
							</div><!-- /.entry-meta -->
						<?php
						endif;
						?>
					</header>
					<div class="card-text entry-content">
						<div class="course-summary d-flex mb-1">
							<div class="d-flex align-items-center me-2">
								<div class="category-wrap small">
									<span class="category-title text-uppercase small">Category<br></span>
									<span><?php the_field('category'); ?></span>
								</div>
							</div>
							<div class="d-flex align-items-center me-2">

								<div class="category-wrap small ms-1">
									<span class="category-title text-uppercase small">Duration<br></span>
									<span><?php the_field('duration'); ?> hours</span>
								</div>
							</div>
							<div class="d-flex align-items-center me-2">

								<div class="category-wrap small ms-1">
									<span class="category-title text-uppercase small">Level<br></span>
									<span><?php the_field('level'); ?></span>
								</div>
							</div>
						</div>
						<span class="category-title text-uppercase small">course description</span>
						<p class="small">
							<?php
							$my_excerpt = get_the_excerpt();
							if ('' != $my_excerpt) {
								// Some string manipulation performed
							}
							echo $my_excerpt; // Outputs the processed value to the page
							?>
						</p>
						<?php wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'grow-tourism') . '</span>', 'after' => '</div>')); ?>
					</div><!-- /.card-text -->
					<footer class="entry-meta">
						<a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm px-2 btn-primary rounded-pill mx-1"><?php esc_html_e('See course overview', 'grow-tourism'); ?></a>
						<a class="btn btn-sm px-2 btn-primary rounded-pill mx-1" href="">Add to curriculum</a>
					</footer><!-- /.entry-meta -->
				</div><!-- /.card-body -->
			</div>
		</div>
	</div><!-- /.col -->
</article><!-- /#post-<?php the_ID(); ?> -->