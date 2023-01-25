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
    <header class="front-page-header">
        <h1 class="title">Creative@Hubs</h1>
        <?php
            $locale =  get_bloginfo('language');
            // If the chosen language is English, display the intro text in one line.
            // This one line will be translated separately
            if ($locale == 'en-US') {
                ?>
                <span class="text">
                    <?php esc_html_e( 'Ολιστική δικτύωση δημιουργικών ΜμΕ μέσω συνεργατικών χώρων δημιουργικών επιχειρήσεων', 'brutus' ) ?>
                </span>
                <?php
            }
            else {
                ?>
                <span class="text">
                    <?php esc_html_e( 'Ολιστική δικτύωση δημιουργικών ΜμΕ', 'brutus' ) ?>
                </span>
                <span class="text">
                    <?php esc_html_e( 'μέσω συνεργατικών χώρων δημιουργικών επιχειρήσεων', 'brutus' ) ?> 
                </span>
                <?php
            }
        ?>
        <div class="button-container">
            <!-- Change home page action links' href based on user's language. -->
            <?php
                // Default Catalog and About page redirects in Greek.
                $catalog_href = 'https://creativehubs.gr/el/catalog/';
                $about_href = 'https://creativehubs.gr/el/about/';

                if ($locale == 'en-US') {
                    $catalog_href = 'https://creativehubs.gr/en/catalog/';
                    $about_href = 'https://creativehubs.gr/en/about/';
                }
            ?>
            <div class="front-page-button">
                <a title="<?php esc_html_e( 'Κατάλογος', 'brutus' ) ?>" href="<?php echo esc_url( $catalog_href ) ?>">
                    <?php esc_html_e( 'Δες τον κατάλογο', 'brutus' ) ?>
                </a>
            </div>
            <div class="front-page-button">
                <a title="<?php esc_html_e( 'Σχετικά', 'brutus' ) ?>" href="<?php echo esc_url( $about_href ) ?>">
                    <?php esc_html_e( 'Μάθε περισσότερα', 'brutus' ) ?>
                </a>
            </div
        </div>
    </header>
    <?php
    }
    ?>
</main><!-- .site-main -->

<?php
get_footer();