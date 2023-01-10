<?php
/**
 * Template file for Catalog page in greek.
 *
 * This template is also assigned to Catalog page in english via
 * functions.php:set_custom_templates(). We will be providing a translation
 * through brutus.pot
 *
 * @package brutus
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="paragraph-container">
        <h1 class="title"><?php esc_html_e( 'Τι;', 'brutus' ) ?></h1>
        <p class="text"><?php esc_html_e( 'Ο ψηφιακός κατάλογος αποτελείται από ταξινομημένα και τεκμηριωμένα τεχνουργήματα της Περιφέρειας Ηπείρου.', 'brutus' ) ?></p>
    </div>
    <div class="paragraph-container">
        <h1 class="title"><?php esc_html_e( 'Γιατί;', 'brutus' ) ?></h1>
        <p class="text"><?php esc_html_e( 'Σκοπός του συλλεγόμενου υλικού είναι να βοηθήσει στον δημιουργικό σχεδιασμό. Τα μοτίβα που παρατηρούνται
στην παραδοσιακή χειροτεχνία μπορούν να διευκολύνουν τη διαδικασία της μετα-παραγωγής με αποτέλεσμα την
δημιουργία νέων αντικειμένων με ρίζες στους τρόπους μιας άλλης εποχής.', 'brutus' ) ?></p>
    </div>
    <div class="filters">
        <div class="filters-responsive">
            <!-- Placeholder -->
        </div> <!-- .filters-responsive -->
        <div class="form-group-flex filters-container">
            <form class="form-group-flex form-group filters-group">

            </form> <!-- .form-group.filters-group -->
            <form class="form-group-flex form-group search-group">

            </form>
        </div> <!-- .form-group -->
    </div> <!-- .filters -->
</main> <!-- .site-main -->

<?php
get_footer();