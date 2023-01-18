<?php
/**
 * Template file for Artefact posts in greek.
 *
 * @package brutus
 */

get_header();
?>
<main id="primary" class="site-main">
    <?php
    while ( have_posts() ) :
        the_post();
    endwhile;
    ?>
    <h1><?php the_title(); ?></h1>
</main> <!-- .site-main -->
<?php
get_footer();
