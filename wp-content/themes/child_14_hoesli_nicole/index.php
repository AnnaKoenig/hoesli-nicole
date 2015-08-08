<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////row 1
-->			
				<div class="row">
			        <div class="col-md-1"></div>
			        <div class="col-md-10">
			<a href ="<?php echo get_attachment_link(); ?>">      
			<?php
			    if ( have_posts() ) : ?>
			     
			        <?php echo $queried_object->name; ?>
			     
			            <?php // Start the Loop.
			                while ( have_posts() ) : the_post(); 
			                 
			                // define attributes for image display
			                $imgattr = array(
			                    'alt'   => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
			                ); ?>
			                
			         		<?php 
								// check if the post has a Post Thumbnail assigned to it.
							if ( has_post_thumbnail( $post_id ) ) {
								the_post_thumbnail();
							} 
								?>
							<div class="gallery-item"> 
							<?php the_content(); ?></a>
								
			                <?php echo wp_get_attachment_image( $post->ID, $imgattr ); ?>
			                 	</div>
			                <?php endwhile; ?>
			         
			 
			    <?php else :
			        // If no content, include the "No posts found" template.
			        get_template_part( 'content', 'none' );
			 
			    endif;
			?>
						
		     
			        </div><!-- end col -->

			        <div class="col-md-1"></div>

	    	<!-- isotope -->
	    	<!-- 
			<script>
				$('.grid').isotope({
				  itemSelector: '.grid-item',
				  percentPosition: true,
				  masonry: {
				    // use outer width of grid-sizer for columnWidth
				    columnWidth: '.grid-sizer'
				  }
				})
			</script>
-->
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();
