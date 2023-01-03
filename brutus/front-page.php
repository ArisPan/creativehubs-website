<?php
/**
 * If it exists, the front-page.php template file is used on the site’s front page
 * regardless of whether ‘Settings -> Reading -> Your homepage displays’ 
 * is set to “A static page” or “Your latest posts”.
 * 
 * For more information on configuring your front page take a look at:
 * https://developer.wordpress.org/themes/functionality/custom-front-page-templates/
 * https://wordpress.stackexchange.com/questions/110349/template-hierarchy-confused-with-index-php-front-page-php-home-php
 * 
 * @package brutus
 */

 get_header();
?>

<main id="primary" class="site-main">

    <?php
    // Allow front-page.php to account for both options for 
    // "Settings -> Reading -> Your homepage displays"
    if ( 'posts' == get_option( 'show_on_front' ) ) {
        include( get_home_template() );
    } else {
    ?>
    <!-- Our custom front page markup -->
    <header>
        <h1 class="hero-text screen-reader-text">Creative@Hubs</h1>
    </header>
    <?php
    }
    ?>
</main><!-- .site-main -->

<?php
get_footer();