<?php
/**
 * The template for displaying posts in the Gallery post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


	<div class="entry-content"> 
		<?php 

		 $args = array(
		   'post_type' => 'attachment',
		   'numberposts' => -1,
		   'post_status' => null,
		   'post_parent' => $post->ID
		  );?>
		  
		  <div id="owl-demo" class="owl-carousel">
		  <?php $attachments = get_posts( $args );
				     if ( $attachments ); {
				        foreach ( $attachments as $attachment ) { ?>
		<div><?php echo wp_get_attachment_image( $attachment->ID, 'full' );
					echo '<div class="image-title">';
					echo $image_title = $attachment->post_title ;
					echo '</div>';
		?>
		
		</div>
		<?php

				          }
				     }

				?>

		</div>
		<div class="project-text">
			<?php
				/* translators: %s: Name of current post */
				the_content();

			?> 
    	</div>
	</div><!-- .entry-content --></div>
		  
	
	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
