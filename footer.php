			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_single() || is_archive()) :
			?>
				</div><!-- /.col -->

				<?php
				//get_sidebar();
				?>

				</div><!-- /.row -->
			<?php
			endif;
			?>
			</main><!-- /#main -->
			<footer class="pt-4" id="footer">
				<div class="container text-primary">
					<div class="row pb-3">
						<div class="col-md-4 col-lg-6">
							<div class="company-details">
								<?php
								dynamic_sidebar('third_widget_area');

								if (current_user_can('manage_options')) :
								?>
									<span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'grow-tourism'); ?></a></span><!-- Show Edit Widget link -->
								<?php
								endif;
								?>
							</div>
						</div>

						<div class="col-md-8 col-lg-6">
							<div class="row g-0">
								<div class="col-md-5">
									<?php
									dynamic_sidebar('fourth_widget_area');

									if (current_user_can('manage_options')) :
									?>
										<span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'grow-tourism'); ?></a></span><!-- Show Edit Widget link -->
									<?php
									endif;
									?>
								</div>
								<div class="col-md-5">
									<?php
									dynamic_sidebar('fifth_widget_area');

									if (current_user_can('manage_options')) :
									?>
										<span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'grow-tourism'); ?></a></span><!-- Show Edit Widget link -->
									<?php
									endif;
									?>
								</div>
								<div class="col-md-2">
									<?php
									dynamic_sidebar('sixth_widget_area');

									if (current_user_can('manage_options')) :
									?>
										<span class="edit-link"><a href="<?php echo esc_url(admin_url('widgets.php')); ?>" class="badge badge-secondary"><?php esc_html_e('Edit', 'grow-tourism'); ?></a></span><!-- Show Edit Widget link -->
									<?php
									endif;
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-6">
							<p><?php printf(esc_html__('&copy; %1$s %2$s. All rights reserved.', 'grow-tourism'), date_i18n('Y'), get_bloginfo('name', 'display')); ?></p>
						</div>

						<?php
						if (has_nav_menu('footer-menu')) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-sm-12 col-md-6',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-md-end">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

						if (is_active_sidebar('third_widget_area')) :
						?>

						<?php
						endif;
						?>
					</div><!-- /.row -->
				</div><!-- /.container -->
			</footer><!-- /#footer -->
			</div><!-- /#wrapper -->
			<?php
			wp_footer();
			?>
			</body>

			</html>