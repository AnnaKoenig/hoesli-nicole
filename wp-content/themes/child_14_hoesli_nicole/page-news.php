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

		<?php
					// The Query
					query_posts( array ( 'category_name' => 'news', 'posts_per_page' => 100 ) ); ?>
		<div class="col-md-2" id="news">



			<div id="primary" class="content-area">
				<div id="content" class="site-content" role="main">
				<?php if ( have_posts() ) : ?>

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( get_post_format() ); ?>
						<div id="allnews-texte">
							<div class="news-text">
								<?php if( get_field('fett') ): ?>
								<?php the_field('fett');  endif; ?>

								<span class="date-news"><?php the_field('number'); ?></span></div>
								<div class="subline-news"><?php the_field('small'); ?></div>
								<div class="subline-news"><a target="_blank" href="<?php the_field('pdf'); ?>"><?php the_field('pdf-text'); ?></a></div>

								<div class="news-text">
									<?php if( get_field('fett_2') ): ?>
									<?php the_field('fett_2');  endif; ?>

									<span class="date-news"><?php the_field('number_2'); ?></span></div>
									<div class="subline-news"><?php the_field('small_2'); ?></div>

					</div>
					<?php endwhile; ?>

				<!-- <?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?> -->

	</div><!-- #content -->
</div><!-- #primary -->
	</div>
		<div class="col-md-10" id="news">

<?php
							// The Loop
							while ( have_posts() ) : the_post();
							get_template_part( get_post_format() );
							echo '<div class="bildbeschr">';
							echo the_content ( );
							echo '</div>';
							endwhile;

						// Reset Query
						wp_reset_query();
						?>

					</div>
				</div>
</div><!-- #main-content -->

<?php
get_footer();
