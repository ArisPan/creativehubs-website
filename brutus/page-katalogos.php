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

    <!-- Intro paragraphs -->
    <div class="paragraph-container">
        <h1 class="title"><?php esc_html_e( 'Τι;', 'brutus' ) ?></h1>
        <p class="text"><?php esc_html_e( 'Ο ψηφιακός κατάλογος αποτελείται από ταξινομημένα και τεκμηριωμένα τεχνουργήματα της Περιφέρειας Ηπείρου.', 'brutus' ) ?></p>
    </div> <!-- .paragraph-container -->
    <div class="paragraph-container">
        <h1 class="title"><?php esc_html_e( 'Γιατί;', 'brutus' ) ?></h1>
        <p class="text"><?php esc_html_e( 'Σκοπός του συλλεγόμενου υλικού είναι να βοηθήσει στον δημιουργικό σχεδιασμό. Τα μοτίβα που παρατηρούνται
στην παραδοσιακή χειροτεχνία μπορούν να διευκολύνουν τη διαδικασία της μετα-παραγωγής με αποτέλεσμα την
δημιουργία νέων αντικειμένων με ρίζες στους τρόπους μιας άλλης εποχής.', 'brutus' ) ?></p>
    </div> <!-- .paragraph-container -->

    <!-- Filters/Search Bar -->
    <div class="filters">
        <div class="filters-responsive"><?php esc_html_e( 'Φίλτρα', 'brutus' ) ?></div>
        <div class="form-group-flex filters-container">

            <form class="form-group-flex form-group filters-group">
                <div class="form-subgroup filters-subgroup">
                    <div name="origin", id="origin", class="selected-option-label"><?php esc_html_e( 'Προέλευση', 'brutus' ) ?></div>
                </div> <!-- .form-subgroup subgroup -->
                <div class="form-subgroup filters-subgroup">
                    <div name="period", id="period", class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                </div> <!-- .form-subgroup subgroup -->
                <div class="form-subgroup filters-subgroup">
                    <div name="material", id="material", class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                </div> <!-- .form-subgroup subgroup -->
                <div class="form-subgroup search-subgroup">
                    <input class="search-input" type="text" placeholder="<?php esc_html_e( 'Αναζήτηση', 'brutus' ) ?>">
                    <input class="hidden-input" type="submit", value="Search">
                </div>
            </form> <!-- .form-group-flex.form-group.filters-group -->

            <!-- <form class="form-group-flex form-group search-group">
                <div class="form-subgroup search-subgroup">
                    <input class="search-input" type="text" placeholder="<?php esc_html_e( 'Αναζήτηση', 'brutus' ) ?>">
                    <input class="hidden-input" type="submit", value="Search">
                </div>
            </form> .form-group-flex.form-group.search-group -->
        </div> <!-- .form-group -->
    </div> <!-- .filters -->
</main> <!-- .site-main -->

<?php
get_footer();