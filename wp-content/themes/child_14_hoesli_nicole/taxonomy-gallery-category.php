<?php
/**
  * template for displaying documents
  * uses a custom query which displays a link to the atachment file instead of outputting the content
  */ get_header();
?>
<div class="main-content" id="main-content">
  <div class="content-area" id="primary">
    <div class="site-content" id="content" role="main">
      <header class="page-header">
        <?php $queried_object = get_queried_object();
        echo '<h1 class="page-title">Gallery Category - ' . $queried_object->name . '</h1>'; ?>
      </header><!-- .page-header -->
        <?php
         if ( have_posts() ) :
         else :
            // If no content, include the "No posts found" template.
            get_template_part( 'content', 'none' );
        endif;
        ?>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
 
<?php get_sidebar(); get_footer(); ?>