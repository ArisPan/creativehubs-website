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
            <form id="filters-form" class="form-group-flex form-group filters-group" action="<?php get_permalink( get_the_ID() ) ?>" method="GET">
                <input type="hidden" id="filters-option" name="filters-option" value=""/>

                <div class="form-subgroup filters-subgroup">
                    <div name="origin", id="origin", class="selected-option-label"><?php esc_html_e( 'Προέλευση', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li data-value="origin-all"><?php esc_html_e( 'Όλες οι προελεύσεις', 'brutus' ) ?></li>
                        <li data-value="arta"><?php esc_html_e( 'Άρτα', 'brutus' ) ?></li>
                        <li data-value="dodoni"><?php esc_html_e( 'Δωδώνη', 'brutus' ) ?></li>
                        <li data-value="zagori"><?php esc_html_e( 'Ζαγόρι', 'brutus' ) ?></li>
                        <li data-value="thesprotia"><?php esc_html_e( 'Θεσπρωτία', 'brutus' ) ?></li>
                        <li data-value="ioannina"><?php esc_html_e( 'Ιωάννινα', 'brutus' ) ?></li>
                        <li data-value="kastritsa"><?php esc_html_e( 'Καστρίτσα', 'brutus' ) ?></li>
                        <li data-value="metsovo"><?php esc_html_e( 'Μέτσοβο', 'brutus' ) ?></li>
                        <li data-value="nikopoli"><?php esc_html_e( 'Νικόπολη', 'brutus' ) ?></li>
                        <li data-value="pogoni"><?php esc_html_e( 'Πωγώνι', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="period", id="period", class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li data-value="period-all"><?php esc_html_e( 'Όλες οι περίοδοι', 'brutus' ) ?></li>
                        <li data-value="1900AD"><?php esc_html_e( '20ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="1800AD"><?php esc_html_e( '19ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="1700AD"><?php esc_html_e( '18ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="1300AD"><?php esc_html_e( '13ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="500AD"><?php esc_html_e( '6ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="400AD"><?php esc_html_e( '5ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="100AD"><?php esc_html_e( '2ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="1AD"><?php esc_html_e( '1ος Αιώνας μ.Χ.', 'brutus' ) ?></li>
                        <li data-value="200BC"><?php esc_html_e( '3ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="300BC"><?php esc_html_e( '4ος αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="hellenistic"><?php esc_html_e( 'Ελληνιστική Περίοδος', 'brutus' ) ?></li>
                        <li data-value="400BC"><?php esc_html_e( '5ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="500BC"><?php esc_html_e( '6ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="600BC"><?php esc_html_e( '7ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="700BC"><?php esc_html_e( '8ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="geometric"><?php esc_html_e( 'Γεωμετρική Περίοδος', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="material", id="material", class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                    <ul class="selected-dropdown">
                        <li data-value="material-all"><?php esc_html_e( 'Όλα τα υλικά', 'brutus' ) ?></li>
                        <li data-value="limestone"><?php esc_html_e( 'Ασβεστόλιθος', 'brutus' ) ?></li>
                        <li data-value="silver"><?php esc_html_e( 'Ασήμι', 'brutus' ) ?></li>
                        <li data-value="tempera"><?php esc_html_e( 'Αυγοτέμπερα', 'brutus' ) ?></li>
                        <li data-value="glass"><?php esc_html_e( 'Γυαλί', 'brutus' ) ?></li>
                        <li data-value="volcanic"><?php esc_html_e( 'Ηφαιστειογενής Λίθος', 'brutus' ) ?></li>
                        <li data-value="wool"><?php esc_html_e( 'Μαλλί', 'brutus' ) ?></li>
                        <li data-value="marble"><?php esc_html_e( 'Μάρμαρο', 'brutus' ) ?></li>
                        <li data-value="wood"><?php esc_html_e( 'Ξύλο', 'brutus' ) ?></li>
                        <li data-value="clay"><?php esc_html_e( 'Πηλός', 'brutus' ) ?></li>
                        <li data-value="porolith"><?php esc_html_e( 'Πωρόλιθος', 'brutus' ) ?></li>
                        <li data-value="felt"><?php esc_html_e( 'Τσόχα', 'brutus' ) ?></li>
                        <li data-value="copper"><?php esc_html_e( 'Χαλκός', 'brutus' ) ?></li>
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
            $filter = $_GET['filters-option'];
        ?>
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