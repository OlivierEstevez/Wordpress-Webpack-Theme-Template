<?php
defined( 'ABSPATH' ) || exit;

get_header();
?>

CATEGORY PAGE ¿?¿?

<?php while ( have_posts() ) : the_post(); ?>
                 
    <h1 class="entry-title"><?php the_title(); ?></h1>
    
    <div class="entry-content">
    
    </div>
 
<?php endwhile; ?>

<?php get_footer(); ?>