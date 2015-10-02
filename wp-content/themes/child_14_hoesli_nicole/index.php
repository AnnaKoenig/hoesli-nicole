<?php
/**
* Template Name: home
 * The template for home
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
?><div class="container">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////row 1
-->
				<div class="row">

			        <div class="col-md-12" id="nomargin">

			        	 <div class="grid" id="container">
									 <div class="grid-item">

			<?php
			    if ( have_posts() ) : ?>

			        <?php echo $queried_object->name; ?>
								<?php query_posts($query_string."&orderby=date&order=ASC"); ?>
			            <?php // Start the Loop.
			                while ( have_posts() ) : the_post();

			                // define attributes for image display
			                $imgattr = array(
			                    'alt'   => trim( strip_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) ),
													'orderby' => 'date',
												); ?>

			                <a href ="<?php echo get_attachment_link();
											?>">

												<?php if (class_exists('MultiPostThumbnails')) :
												    MultiPostThumbnails::the_post_thumbnail(
												        get_post_type(),
												        'secondary-thumbnail'
												    );

													endif;?><span><?php the_title( $before ); ?></span>



							<?php endwhile; ?>


							<a href="http://localhost:8888/?p=10"><?php echo wp_get_attachment_image( 231,  $attachment->ID, 'full' );?><span>CV</span></a>
							<a href="http://localhost:8888/?p=8"><?php echo wp_get_attachment_image( 409,  $attachment->ID, 'full' ); ?><span>CONTACT</span></a>


						</div></a>

<?php
	else :
	echo ('Sorry, no posts were found' );
	endif;
?>
		</div>
 </div>
</div><!-- end col -->
</div>
</div><!-- primary -->
</div><!-- content -->

						</div>
			   </div>
			 </div><!-- end col -->
			</div>
		</div><!-- primary -->
	</div><!-- content -->

	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_footer();
