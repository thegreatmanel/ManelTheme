<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() . '/style.css'?>">
    </head>
    <body>
        <?php
get_header();
wp_nav_menu();
?>
<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2><?php echo the_title() ?></h2>
<?php the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
    </body>
    </html>  