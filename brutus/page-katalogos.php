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
                        <li value="origin-all"><?php esc_html_e( 'Όλες οι προελεύσεις', 'brutus' ) ?></li>
                        <li value="arta"><?php esc_html_e( 'Άρτα', 'brutus' ) ?></li>
                        <li value="dodoni"><?php esc_html_e( 'Δωδώνη', 'brutus' ) ?></li>
                        <li value="zagori"><?php esc_html_e( 'Ζαγόρι', 'brutus' ) ?></li>
                        <li value="thesprotia"><?php esc_html_e( 'Θεσπρωτία', 'brutus' ) ?></li>
                        <li value="ioannina"><?php esc_html_e( 'Ιωάννινα', 'brutus' ) ?></li>
                        <li value="kastritsa"><?php esc_html_e( 'Καστρίτσα', 'brutus' ) ?></li>
                        <li value="metsovo"><?php esc_html_e( 'Μέτσοβο', 'brutus' ) ?></li>
                        <li value="nikopoli"><?php esc_html_e( 'Νικόπολη', 'brutus' ) ?></li>
                        <li value="pogoni"><?php esc_html_e( 'Πωγώνι', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="period", id="period", class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li value="period-all"><?php esc_html_e( 'Όλες οι περίοδοι', 'brutus' ) ?></li>
                        <li value="1900AD"><?php esc_html_e( '20ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="1800AD"><?php esc_html_e( '19ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="1700AD"><?php esc_html_e( '18ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="1300AD"><?php esc_html_e( '13ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="500AD"><?php esc_html_e( '6ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="400AD"><?php esc_html_e( '5ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="100AD"><?php esc_html_e( '2ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="1AD"><?php esc_html_e( '1ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li value="200BC"><?php esc_html_e( '3ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="300BC"><?php esc_html_e( '4ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="hellenistic"><?php esc_html_e( 'Ελληνιστική Περίοδος', 'brutus' ) ?></li>
                        <li value="400BC"><?php esc_html_e( '5ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="500BC"><?php esc_html_e( '6ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="600BC"><?php esc_html_e( '7ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="700BC"><?php esc_html_e( '8ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li value="geometric"><?php esc_html_e( 'Γεωμετρική Περίοδος', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="material", id="material", class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li value="material-all"><?php esc_html_e( 'Όλα τα υλικά', 'brutus' ) ?></li>
                        <li value="limestone"><?php esc_html_e( 'Ασβεστόλιθος', 'brutus' ) ?></li>
                        <li value="silver"><?php esc_html_e( 'Ασήμι', 'brutus' ) ?></li>
                        <li value="tempera"><?php esc_html_e( 'Αυγοτέμπερα', 'brutus' ) ?></li>
                        <li value="glass"><?php esc_html_e( 'Γυαλί', 'brutus' ) ?></li>
                        <li value="volcanic"><?php esc_html_e( 'Ηφαιστειογενής Λίθος', 'brutus' ) ?></li>
                        <li value="wool"><?php esc_html_e( 'Μαλλί', 'brutus' ) ?></li>
                        <li value="marble"><?php esc_html_e( 'Μάρμαρο', 'brutus' ) ?></li>
                        <li value="wood"><?php esc_html_e( 'Ξύλο', 'brutus' ) ?></li>
                        <li value="clay"><?php esc_html_e( 'Πηλός', 'brutus' ) ?></li>
                        <li value="porolith"><?php esc_html_e( 'Πωρόλιθος', 'brutus' ) ?></li>
                        <li value="felt"><?php esc_html_e( 'Τσόχα', 'brutus' ) ?></li>
                        <li value="copper"><?php esc_html_e( 'Χαλκός', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->
                <div class="form-subgroup search-subgroup">
                    <input class="search-input" type="text" placeholder="<?php esc_html_e( 'Αναζήτηση', 'brutus' ) ?>">
                    <input class="hidden-input" type="submit", value="Search">
                </div>
            </form> <!-- .form-group-flex.form-group.filters-group -->
        </div> <!-- .form-group-flex.filters-container -->
    </div> <!-- .filters -->

    <div class="artefacts-container">
        <?php
            $args = array (
                'post_type'     => 'artefacts',
                'nopaging'      => true,
            );
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) {
                $loop->the_post();
                ?>
                <div class="post-thumbnail">
                    <a href="<?php esc_url( the_permalink() ) ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                    <div class="title-tag"><?php esc_html_e( the_title(), 'brutus' ) ?></div>
                </div>
                <?php
            }
        ?>
    </div> <!-- .artifact-container -->
</main> <!-- .site-main -->

<?php
get_footer();