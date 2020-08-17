<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FolioPress
 */

?>
		<?php global $foliopress_settings; ?>

		<?php if ( is_home() || is_archive() ) { 
			if ( $foliopress_settings['foliopress_post_layout'] == 'list_view' ) { ?>
				</div><!-- row -->
			<?php }
		} else { ?>
			</div><!-- row -->
		<?php	} ?>
		</div><!-- .container -->
	</div><!-- #content .site-content-->
	<footer id="colophon" class="site-footer clearfix" role="contentinfo">
		<?php if ( is_active_sidebar('foliopress_footer_sidebar') || is_active_sidebar('foliopress_footer_column2') || is_active_sidebar('foliopress_footer_column3') ) { ?>
			<div class="widget-area">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg">
							<?php
								// Calling the Footer Sidebar Column 1
								if ( is_active_sidebar( 'foliopress_footer_sidebar' ) ) :
									dynamic_sidebar( 'foliopress_footer_sidebar' );
								endif;
							?>
						</div><!-- footer sidebar column 1 -->
						<div class="col-md-6 col-lg">
							<?php
								// Calling the Footer Sidebar Column 2
								if ( is_active_sidebar( 'foliopress_footer_column2' ) ) :
									dynamic_sidebar( 'foliopress_footer_column2' );
								endif;
							?>
						</div><!-- footer sidebar column 2 -->
						<div class="col-md-6 col-lg">
							<?php
								// Calling the Footer Sidebar Column 3
								if ( is_active_sidebar( 'foliopress_footer_column3' ) ) :
									dynamic_sidebar( 'foliopress_footer_column3' );
								endif;
							?>
						</div><!-- footer sidebar column 3 -->
					</div><!-- .row -->
				</div><!-- .container -->
			</div><!-- .widget-area -->
		<?php } ?>
	</footer><!-- #colophon -->
	<div class="back-to-top"><a title="<?php esc_attr_e('Go to Top','foliopress');?>" href="#masthead"></a></div>
	<div class="search-block off">
		<div class="search-toggle"></div>
		<?php get_search_form(); ?>
	</div><!-- .search-block -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
