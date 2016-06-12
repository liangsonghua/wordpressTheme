<?php get_header();?>
<?php
if ( have_posts() ) :
    /* Start the Loop */
        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        get_template_part( 'template-parts/content', get_post_format() );

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?>
<?php get_footer();?>
