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
<div class="container">
<div class="row">
	<div class="col-md-4" id="works"><?php wp_nav_menu( array('menu' => 'works' )); ?></div>
			<div class="col-md-8" id="works">

<a href ="<?php echo get_attachment_link(); ?>">
				<?php
				// The Query
				query_posts( 'orderby=rand&posts_per_page=1&category_name=works' );

				while ( have_posts() ) : the_post(); ?>

				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php
					if ( has_post_thumbnail() ) {

					    echo the_post_thumbnail( $size, $attr, 'thumbnail' );
						}

					endwhile;

					wp_reset_query();
					?>
				</a>


</a>

			</div><!-- end col -->
			<div class="col-md-1"></div>
		</div><!-- #content -->
	</div><!-- #primary -->
</div>
</div><!-- #main-content -->

<?php
get_footer();
