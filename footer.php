<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer id="colophon" class="site-footer" role="contentinfo">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu1','container_class' => 'footer-menu1' ) ); ?>
			</div>

			<div class="col-xs-4 col-md-2 col-md-offset-1">
			<img class= "img-responsive center-block"  src="http://www.johngiftah.com/logo.png" alt="john giftah international logo">
			
			</div>

			
			<div class="col-xs-4 col-md-offset-1">		


					<?php wp_nav_menu( array( 'theme_location' => 'footer-menu2','container_class' => 'footer-menu2' ) ); ?>
			</div>	
			<a href="http://winstonmarvel.com" class="col-xs-12 col-md-8 col-md-offset-2 site-footer copy-right">&copy;2016 John Giftah International. All Rights Reserved.</a>		

			<!--	<!--<div class="site-info"> //This whole thing was under a single div call site-footer-inner
					<?php do_action( '_tk_credits' ); ?>
					<a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', '_tk' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', '_tk' ), 'WordPress' ); ?></a>
					<!-- <span class="sep"> | </span>
                    <a class="credits" href="http://themekraft.com/" target="_blank" title="Themes and Plugins developed by Themekraft" alt="Themes and Plugins developed by Themekraft"><?php _e('Themes and Plugins developed by Themekraft.','_tk') ?> </a>
				</div> close .site-info -->

			
		</div>

	</div><!-- close .container -->
</footer><!-- close #colophon -->

<?php wp_footer(); ?>

</body>
</html>
