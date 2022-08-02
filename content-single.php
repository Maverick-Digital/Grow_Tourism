<?php

/**
 * The template for displaying content in the single.php template.
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('mt-5'); ?>>
	<div class="container">
		<header class="entry-header text-primary">
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php
			if ('post' === get_post_type()) :
			?>
				<div class="entry-meta">
					<?php grow_tourism_article_posted_on(); ?>
				</div><!-- /.entry-meta -->
			<?php
			endif;
			?>
		</header><!-- /.entry-header -->
	</div>
	<img src="<?php the_post_thumbnail_url($size = '2048x2048'); ?>" class="img-fluid" alt="...">

	<div class="container">
		<div class="entry-content text-primary">
			<?php
			the_content();

			wp_link_pages(array('before' => '<div class="page-link"><span>' . esc_html__('Pages:', 'grow-tourism') . '</span>', 'after' => '</div>'));
			?>
		</div><!-- /.entry-content -->
		<footer class="entry-meta">
			<hr>
			<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list(__(', ', 'grow-tourism'));

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list('', __(', ', 'grow-tourism'));
			if ('' != $tag_list) :
				$utility_text = __('This entry was posted in %1$s and tagged %2$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grow-tourism');
			elseif ('' != $category_list) :
				$utility_text = __('This entry was posted in %1$s by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grow-tourism');
			else :
				$utility_text = __('This entry was posted by <a href="%6$s">%5$s</a>. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'grow-tourism');
			endif;

			printf(
				$utility_text,
				$category_list,
				$tag_list,
				esc_url(get_the_permalink()),
				the_title_attribute('echo=0'),
				get_the_author(),
				esc_url(get_author_posts_url((int) get_the_author_meta('ID')))
			);
			?>
			<hr>
			<?php
			get_template_part('author', 'bio');
			?>
		</footer><!-- /.entry-meta -->
	</div>
	<?php
	edit_post_link(__('Edit', 'grow-tourism'), '<span class="edit-link">', '</span>');
	?>


</article><!-- /#post-<?php the_ID(); ?> -->