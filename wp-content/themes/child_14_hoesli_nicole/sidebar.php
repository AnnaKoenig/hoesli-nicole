<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<div id="secondary">
	<?php
		$description = get_bloginfo( 'description', 'display' );
		if ( ! empty ( $description ) ) :
	?>
	<h2 class="site-description"><?php echo esc_html( $description ); ?></h2>
	<?php endif; ?>

	<?php if ( has_nav_menu( 'secondary' ) ) : ?>
	<nav role="navigation" class="navigation site-navigation secondary-navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
	</nav>
	<?php endif; ?>


		<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php query_posts('category_name=works'); ?>
		<?php if (have_posts()) : the_post(); ?>
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #primary-sidebar -->
		<?php endif; ?>
		</div><!-- #secondary -->
