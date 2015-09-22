<?php
/**
* Template Name: news
 * The template for news
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
		<div class="col-md-4">
			<div id="allnews-texte">
				<div class="news-text">
						<?php the_field('hed_news'); ?>
						
					<span class="date-news"><?php the_field('dat_news'); ?></span></div>
					<div class="subline-news"><?php the_field('sub_news'); ?></div>

		</div>
	</div>
		<div class="col-md-8">
			<?php
						// The Query
						query_posts( array ( 'category_name' => 'news', 'posts_per_page' => -1 ) );

							// The Loop
							while ( have_posts() ) : the_post();
							echo '<div class="bildbeschr">';
							the_content( 'Read the full post »' );
							echo '</div>';
							endwhile;

						// Reset Query
						wp_reset_query();
						?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">


		</div>

		</div><!-- #content -->
	</div><!-- #primary -->

</div><!-- #main-content -->

<?php
get_footer();
