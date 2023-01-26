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

    <div id="intro-container">
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
    </div> <!-- .intro-container -->

    <!-- Filters/Search Bar -->
    <div class="filters">
        <div class="filters-responsive"><?php esc_html_e( 'Φίλτρα', 'brutus' ) ?></div>
        <div class="form-group-flex filters-container">
            <form id="filters-form" class="form-group-flex form-group filters-group" method="GET" action="<?php get_permalink( get_the_ID() ) ?>">

                <div class="form-subgroup filters-subgroup">
                    <div name="origin" id="origin" class="selected-option-label"><?php esc_html_e( 'Προέλευση', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li class="origin" data-value="all"><?php esc_html_e( 'Όλες οι προελεύσεις', 'brutus' ) ?></li>
                        <li class="origin" data-value="Arta"><?php esc_html_e( 'Άρτα', 'brutus' ) ?></li>
                        <li class="origin" data-value="Dodoni"><?php esc_html_e( 'Δωδώνη', 'brutus' ) ?></li>
                        <li class="origin" data-value="Zagori"><?php esc_html_e( 'Ζαγόρι', 'brutus' ) ?></li>
                        <li class="origin" data-value="Thesprotia"><?php esc_html_e( 'Θεσπρωτία', 'brutus' ) ?></li>
                        <li class="origin" data-value="Ioannina"><?php esc_html_e( 'Ιωάννινα', 'brutus' ) ?></li>
                        <li class="origin" data-value="Kastritsa"><?php esc_html_e( 'Καστρίτσα', 'brutus' ) ?></li>
                        <li class="origin" data-value="Metsovo"><?php esc_html_e( 'Μέτσοβο', 'brutus' ) ?></li>
                        <li class="origin" data-value="Nikopoli"><?php esc_html_e( 'Νικόπολη', 'brutus' ) ?></li>
                        <li class="origin" data-value="Pogoni"><?php esc_html_e( 'Πωγώνι', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="period" id="period" class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li class="period" data-value="all"><?php esc_html_e( 'Όλες οι περίοδοι', 'brutus' ) ?></li>
                        <li class="period" data-value="1900AD"><?php esc_html_e( '20ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="1800AD"><?php esc_html_e( '19ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="1700AD"><?php esc_html_e( '18ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="1200AD"><?php esc_html_e( '13ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="500AD"><?php esc_html_e( '6ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="400AD"><?php esc_html_e( '5ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="100AD"><?php esc_html_e( '2ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="1AD"><?php esc_html_e( '1ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="100BC"><?php esc_html_e( '2ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="200BC"><?php esc_html_e( '3ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="300BC"><?php esc_html_e( '4ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="400BC"><?php esc_html_e( '5ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="500BC"><?php esc_html_e( '6ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="600BC"><?php esc_html_e( '7ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li class="period" data-value="700BC"><?php esc_html_e( '8ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="material" id="material" class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li class="material" data-value="all"><?php esc_html_e( 'Όλα τα υλικά', 'brutus' ) ?></li>
                        <li class="material" data-value="Limestone"><?php esc_html_e( 'Ασβεστόλιθος', 'brutus' ) ?></li>
                        <li class="material" data-value="Silver"><?php esc_html_e( 'Ασήμι', 'brutus' ) ?></li>
                        <li class="material" data-value="Tempera"><?php esc_html_e( 'Αυγοτέμπερα', 'brutus' ) ?></li>
                        <li class="material" data-value="Glass"><?php esc_html_e( 'Γυαλί', 'brutus' ) ?></li>
                        <li class="material" data-value="Volcanic"><?php esc_html_e( 'Ηφαιστειογενής Λίθος', 'brutus' ) ?></li>
                        <li class="material" data-value="Wool"><?php esc_html_e( 'Μαλλί', 'brutus' ) ?></li>
                        <li class="material" data-value="Marble"><?php esc_html_e( 'Μάρμαρο', 'brutus' ) ?></li>
                        <li class="material" data-value="Wood"><?php esc_html_e( 'Ξύλο', 'brutus' ) ?></li>
                        <li class="material" data-value="Clay"><?php esc_html_e( 'Πηλός', 'brutus' ) ?></li>
                        <li class="material" data-value="Porolith"><?php esc_html_e( 'Πωρόλιθος', 'brutus' ) ?></li>
                        <li class="material" data-value="Felt"><?php esc_html_e( 'Τσόχα', 'brutus' ) ?></li>
                        <li class="material" data-value="Copper"><?php esc_html_e( 'Χαλκός', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->
                <div class="form-subgroup search-subgroup">
                    <input class="search-input" type="text" name="q" placeholder="<?php esc_html_e( 'Αναζήτηση', 'brutus' ) ?>">
                    <input class="hidden-input" type="submit" value="<?php esc_html_e( 'Ψάξε', 'brutus' ) ?>">
                </div>
            </form> <!-- .form-group-flex.form-group.filters-group -->
        </div> <!-- .form-group-flex.filters-container -->
    </div> <!-- .filters -->

    <div class="artefacts-container">
        <?php get_template_part( 'template-parts/query-artefacts' ); ?>
    </div> <!-- .artefacts-container -->
</main> <!-- .site-main -->

<?php
get_footer();