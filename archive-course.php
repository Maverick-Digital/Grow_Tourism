<?php

/**
 * The Template for displaying Archive pages.
 */

get_header();

if (have_posts()) :
?>

	<header class="page-header">
		<h1 class="page-title">
			<?php
			if (is_day()) :
				printf(esc_html__('Daily Archives: %s', 'grow-tourism'), get_the_date());
			elseif (is_month()) :
				printf(esc_html__('Monthly Archives: %s', 'grow-tourism'), get_the_date(_x('F Y', 'monthly archives date format', 'grow-tourism')));
			elseif (is_year()) :
				printf(esc_html__('Yearly Archives: %s', 'grow-tourism'), get_the_date(_x('Y', 'yearly archives date format', 'grow-tourism')));
			else :
				esc_html_e('Blog Archives', 'grow-tourism');
			endif;
			?>
		</h1>
	</header>
	<script type="text/javascript">
		window.FiltersTaxonomy = <?php echo getFilteredOptionsTaxonomy(); ?>;
		window.ListingsTaxonomy = <?php echo getFilterListingsByTaxonomy(); ?>;
	</script>

<?php
 
if ( is_user_logged_in() ) { ?>
  
  <div class="container">
  <div id="course-div"></div>
<?php } 
else { ?>
  
  <div class="container">
  <h1 class="mt-4">please click the below link login to access this page</h1>
	<a href="/wp-login.php/">click</a>
  </div>
<?php }

?>



	<?php
else :
	// 404.
	get_template_part('content', 'none');
endif;

wp_reset_postdata(); // End of the loop. 
	?>
	</div>
<!-- 
	<div class="join-us">
    <div class="row g-0">
        <div class="col-md-6 background-gradiant">
            <div class="join-us-form p-2 p-md-3 p-lg-4 text-white">
                <h1 class="fw-normal">Join the <strong> movement</strong></h1>
                <p>Sign up and be a part of the Grow Tourism movement. <strong>Launching March 2023</strong></p>
                <div class="from-wrapper mt-3">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false"]'); ?>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="background-image:url(https://wordpress-572332-2777368.cloudwaysapps.com/wp-content/uploads/2022/07/contact-Image.png);background-size: cover;background-repeat: no-repeat;">
        </div>
    </div>

</div> -->

	<!-- <div class="syllabus background-gradiant text-white">
		<div class="container py-5">
			<div class="row">
				<div class="col-md-4">
					<h1>Build your<br><strong>own syllabus</strong></h1>
					<p>
						Lorem ipsum dolor sit amet, contetur adipiscing elit, sed eiusmod tempo. Ut enim ad minima veniam quisomo nostrum exercitationem ullam corpor.
					</p>
					<button type="button" class="btn btn-light btn-lg rounded-pill">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></button>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6">
							<h4>I am a...</h4>
							<div class="d-grid gap-3">
								<input type="checkbox" class="btn-check" id="btn-check-outlined1" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined1">New tourism proffesional</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined2" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined2">Tourism business owner</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined3" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined3">Experience guide</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined4" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined4">Manager with a team</label>
							</div>
						</div>
						<div class="col-md-6">
							<h4>Trying to...</h4>
							<div class="d-grid gap-3">
								<input type="checkbox" class="btn-check" id="btn-check-outlined5" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined5">Upskill my team</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined6" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined6">Build a legacy</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined7" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined7">Develop my skills</label>
								<input type="checkbox" class="btn-check" id="btn-check-outlined8" autocomplete="off">
								<label class="btn btn-outline-light" for="btn-check-outlined8">Take on 2023</label>
							</div>
							<p class="text-end"><a class="text-decoration-underline btn text-white" href="#">Start building <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<?php get_footer(); ?>