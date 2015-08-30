<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->

		
			<?php get_sidebar( 'footer' ); ?>

			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyfourteen' ), 'WordPress' ); ?></a>
			</div><!-- .site-info -->
		
	</div><!-- #page -->
<!--
		<script>
			$(document).ready( function() {
  
			  $('.grid').isotope({
			    itemSelector: '.grid-item',
			    masonry: {
			      columnWidth: 100
			    }
			  });

			});

		</script>-->
	<?php wp_footer(); ?>
	

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
    <script src = "<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
    

    

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('child_14_hoesli_nicole_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>