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
                    <ul class="selected-dropdown">
                        <li value="placeholder1">Placeholder 1</li>
                        <li value="placeholder2">Placeholder 2</li>
                        <li value="placeholder3">Placeholder 3</li>
                        <li value="placeholder4">Placeholder 4</li>
                        <li value="placeholder5">Placeholder 5</li>
                        <li value="placeholder6">Placeholder 6</li>
                        <li value="placeholder7">Placeholder 7</li>
                        <li value="placeholder8">Placeholder 8</li>
                        <li value="placeholder9">Placeholder 9</li>
                        <li value="placeholder10">Placeholder 10</li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->
                <div class="form-subgroup filters-subgroup">
                    <div name="period", id="period", class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li value="placeholder1">Placeholder 1</li>
                        <li value="placeholder2">Placeholder 2</li>
                        <li value="placeholder3">Placeholder 3</li>
                        <li value="placeholder4">Placeholder 4</li>
                        <li value="placeholder5">Placeholder 5</li>
                        <li value="placeholder6">Placeholder 6</li>
                        <li value="placeholder7">Placeholder 7</li>
                        <li value="placeholder8">Placeholder 8</li>
                        <li value="placeholder9">Placeholder 9</li>
                        <li value="placeholder10">Placeholder 10</li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->
                <div class="form-subgroup filters-subgroup">
                    <div name="material", id="material", class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li value="placeholder1">Placeholder 1</li>
                        <li value="placeholder2">Placeholder 2</li>
                        <li value="placeholder3">Placeholder 3</li>
                        <li value="placeholder4">Placeholder 4</li>
                        <li value="placeholder5">Placeholder 5</li>
                        <li value="placeholder6">Placeholder 6</li>
                        <li value="placeholder7">Placeholder 7</li>
                        <li value="placeholder8">Placeholder 8</li>
                        <li value="placeholder9">Placeholder 9</li>
                        <li value="placeholder10">Placeholder 10</li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->
                <div class="form-subgroup search-subgroup">
                    <input class="search-input" type="text" placeholder="<?php esc_html_e( 'Αναζήτηση', 'brutus' ) ?>">
                    <input class="hidden-input" type="submit", value="Search">
                </div>
            </form> <!-- .form-group-flex.form-group.filters-group -->

        </div> <!-- .form-group-flex.filters-container -->
    </div> <!-- .filters -->
</main> <!-- .site-main -->

<?php
get_footer();