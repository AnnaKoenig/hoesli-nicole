<?php
/**
* Template Name: works
 * The template for works
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div id="main-content" class="main-content">

<div class="row">
	<div class="col-md-4"><?php get_sidebar( ); ?></div>
			<div class="col-md-8" id="works">

<a href ="<?php echo get_attachment_link(); ?>">
				<?php
				// The Query
				query_posts( 'orderby=rand&posts_per_page=1' );

				// The Loop
				while ( have_posts() ) : the_post();
				    the_post_thumbnail( $size, $attr );

				endwhile;

				// Reset Query
				wp_reset_query();
				?>
			
				<?php
				$content = get_the_content('posts_per_page');
				print $the_post;
				?>
			</a>
			     
			</div><!-- end col -->
		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->

<?php
get_footer();
