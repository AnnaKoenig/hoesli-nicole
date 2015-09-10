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

					<div>
						<div class="wrapper-with-margin">
							<?php echo wp_get_attachment_image( $attachment->ID, 'full' );


								 	echo '<div class="image-title">';
									echo $image_title = $attachment->post_title ;
									echo '</div>';


							?>
						</div>
					</div>
		<?php
	          	}
				     }
				?>

				<?php if( get_field('video') ): ?>
						<div>
							<div class="wrapper-with-margin">
								<?php the_field('video'); ?>
							</div>
						</div>
				<?php endif; ?>

		</div><!-- Owl-Demo End-->

			<?php
				the_content();
			?>
			<div class="texts-lang">
			<!-- TITLE/DATUM/SUBLINE -->
		      	<div class="project-title"><em><?php the_field('project_title'); ?></em>
		      			<span class="date"><?php the_field('datum'); ?></span>
						</div>
						<div class="subline"><br><?php the_field('subline'); ?></br></div>

			<!-- TITLE/DATUM/SUBLINE 2 -->
						<?php if( get_field('project_title_2') ): ?>
						<div class="project-title"><em><?php the_field('project_title_2'); ?></em><?php endif; ?>
							<?php if( get_field('datum_2') ): ?>
								<span class="date"><?php the_field('datum_2'); ?></span><?php endif; ?>
						</div>
						<?php if( get_field('subline_2') ): ?>
						<div class="subline-extra"><br><?php the_field('subline_2'); ?></br></div><?php endif; ?>

			<!-- TITLE/DATUM/SUBLINE 3 -->
						<?php if( get_field('project_title_3') ): ?>
						<div class="project-title"><em><?php the_field('project_title_3'); ?></em><?php endif; ?>
							<?php if( get_field('datum_3') ): ?>
								<span class="date"><?php the_field('datum_3'); ?></span><?php endif; ?>
						</div>
						<?php if( get_field('subline_3') ): ?>
						<div class="subline-extra"><br><?php the_field('subline_3'); ?></br></div><?php endif; ?>
			<!-- TEXT -->
						<div class="project-text"><?php the_field('project_texts'); ?></div>
			 </div>

			<div class="container">
  				<div class="texts">
							<!-- ENGLISH -->
							<?php if( get_field('subline_eng') ): ?>
		          <div class="subline-eng"><br><?php the_field('subline_eng'); ?></br></div><?php endif; ?>

							<?php if( get_field('project_texts_eng') ): ?>
							<div class="project-text-eng"><?php the_field('project_texts_eng'); ?></div><?php endif; ?>

						</div>
				</div>
	</div><!-- .entry-content -->
	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
