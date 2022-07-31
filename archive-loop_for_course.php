<?php

/**
 * The template for displaying the archive loop.
 */

grow_tourism_content_nav('nav-above');

if (have_posts()) :
?>
	<div class="mx-auto course-archive my-5">
		<div class="row g-0">
			<div class="col-md-3 text-primary course-filter">
				<div class="search-wrap mb-3">
					<h5>Filter & Search</h5>
					<input class="form-control mb-2 rounded-pill border-primary border-2 w-75 text-primary" type="text" placeholder="Keyword or title" aria-label="Search">
				</div>
				<div class="categories-wrap  mb-3">
					<h5>Categories</h5>
					<div class="cheking-buttons-group d-grid gap-1">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								People & Networks
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								CX / Commercials
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Sustainability
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Culture
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Future Legacy
							</label>
						</div>
					</div>
				</div>
				<div class="level-wrap  mb-3">
					<h5>Level</h5>
					<div class="cheking-buttons-group d-grid gap-1">
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Level 1 - Entry to tourism
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Level 2 - Experienced pro
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault_1">
							<label class="form-check-label" for="flexCheckDefault_1">
								Level 3 – Industry leader
							</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="course-intro text-primary text-center">
					<header class="entry-header">
						<h1 class="entry-header">Course reviews</h1>
						<p>Select from individual courses or let us build your own curriculum.</p>
					</header>
				</div>
				<?php
				while (have_posts()) :
					the_post();

					/**
					 * Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part('content', 'course_list'); // Post format: content-index.php
				endwhile;
				?>
			</div>
		</div>
	</div>
<?php
endif;

wp_reset_postdata();

grow_tourism_content_nav('nav-below');
