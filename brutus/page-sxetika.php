<?php
/**
 * Template file for About page in greek.
 *
 * This template is also assigned to About page in english via
 * functions.php:set_custom_templates(). We will be providing a translation
 * through brutus.pot
 *
 * @package brutus
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="about-container">
        <div class="category-container">
            <div class="summary-button"><?php esc_html_e( 'Περιγραφή Έργου', 'brutus' ) ?></div>
            <div class="partners-button"><?php esc_html_e( 'Εταίροι', 'brutus' ) ?></div>
        </div>
        <div class="content-container">
            <div class="summary-review"></div>
            <div class="partners-review"></div>
        </div>
    </div>
</main> <!-- .site-main -->

<?php
get_footer();