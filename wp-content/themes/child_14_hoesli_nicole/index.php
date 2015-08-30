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
			        	 <div class="grid"><div class="grid-item">
			     
			<?php
			    if ( have_posts() ) : ?>
			     
			        <?php echo $queried_object->name; ?>
			     
			            <?php // Start the Loop.
			                while ( have_posts() ) : the_post(); 
			                 
			                // define attributes for image display
			                $imgattr = array(
			                    'alt'   => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
			                ); ?>

			                <a href ="<?php echo get_attachment_link(); ?>">

			                
			                 
			         		<?php 
								// check if the post has a Post Thumbnail assigned to it.
							if ( has_post_thumbnail( $post_id ) ) {
								the_post_thumbnail( $size, $attr );
							} 
								?>
							
		
								
			                <?php echo wp_get_attachment_image( $post->ID, $imgattr ); ?>
			                 	
			                <?php endwhile; ?></div></a>
			         
			
			    <?php else :
			        // If no content, include the "No posts found" template.
			        get_template_part( 'content', 'none' );
			 
			    endif;
			?>
						
		     			</div>
			        </div><!-- end col -->

			        
	    	
		</div><!-- #content -->
	</div><!-- #primary --><div class="col-md-1"></div>

	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();
