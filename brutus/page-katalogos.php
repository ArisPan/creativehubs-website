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

                <div class="form-subgroup filters-subgroup">
                    <div name="origin" id="origin" class="selected-option-label"><?php esc_html_e( 'Προέλευση', 'brutus' ) ?></div>
                    <input type="hidden" class="filter-input" name="origin" value=""/>
                    <ul class="selected-dropdown">
                        <li data-value="origin-all"><?php esc_html_e( 'Όλες οι προελεύσεις', 'brutus' ) ?></li>
                        <li data-value="Arta"><?php esc_html_e( 'Άρτα', 'brutus' ) ?></li>
                        <li data-value="Dodoni"><?php esc_html_e( 'Δωδώνη', 'brutus' ) ?></li>
                        <li data-value="Zagori"><?php esc_html_e( 'Ζαγόρι', 'brutus' ) ?></li>
                        <li data-value="Thesprotia"><?php esc_html_e( 'Θεσπρωτία', 'brutus' ) ?></li>
                        <li data-value="Ioannina"><?php esc_html_e( 'Ιωάννινα', 'brutus' ) ?></li>
                        <li data-value="Kastritsa"><?php esc_html_e( 'Καστρίτσα', 'brutus' ) ?></li>
                        <li data-value="Metsovo"><?php esc_html_e( 'Μέτσοβο', 'brutus' ) ?></li>
                        <li data-value="Nikopoli"><?php esc_html_e( 'Νικόπολη', 'brutus' ) ?></li>
                        <li data-value="Pogoni"><?php esc_html_e( 'Πωγώνι', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="period" id="period" class="selected-option-label"><?php esc_html_e( 'Περίοδος', 'brutus' ) ?></div>
                    <input type="hidden" class="filter-input" name="period" value=""/>
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
                        <li data-value="400BC"><?php esc_html_e( '5ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="500BC"><?php esc_html_e( '6ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="600BC"><?php esc_html_e( '7ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                        <li data-value="700BC"><?php esc_html_e( '8ος Αιώνας π.Χ.', 'brutus' ) ?></li>
                    </ul> <!-- .selected-dropdown -->
                </div> <!-- .form-subgroup.subgroup -->

                <div class="form-subgroup filters-subgroup">
                    <div name="material" id="material" class="selected-option-label"><?php esc_html_e( 'Υλικό', 'brutus' ) ?></div>
                    <input type="hidden" class="filter-input" name="material" value=""/>
                    <ul class="selected-dropdown">
                        <li data-value="material-all"><?php esc_html_e( 'Όλα τα υλικά', 'brutus' ) ?></li>
                        <li data-value="Limestone"><?php esc_html_e( 'Ασβεστόλιθος', 'brutus' ) ?></li>
                        <li data-value="Silver"><?php esc_html_e( 'Ασήμι', 'brutus' ) ?></li>
                        <li data-value="Tempera"><?php esc_html_e( 'Αυγοτέμπερα', 'brutus' ) ?></li>
                        <li data-value="Glass"><?php esc_html_e( 'Γυαλί', 'brutus' ) ?></li>
                        <li data-value="Volcanic"><?php esc_html_e( 'Ηφαιστειογενής Λίθος', 'brutus' ) ?></li>
                        <li data-value="Wool"><?php esc_html_e( 'Μαλλί', 'brutus' ) ?></li>
                        <li data-value="Marble"><?php esc_html_e( 'Μάρμαρο', 'brutus' ) ?></li>
                        <li data-value="Wood"><?php esc_html_e( 'Ξύλο', 'brutus' ) ?></li>
                        <li data-value="Clay"><?php esc_html_e( 'Πηλός', 'brutus' ) ?></li>
                        <li data-value="Porolith"><?php esc_html_e( 'Πωρόλιθος', 'brutus' ) ?></li>
                        <li data-value="Felt"><?php esc_html_e( 'Τσόχα', 'brutus' ) ?></li>
                        <li data-value="Copper"><?php esc_html_e( 'Χαλκός', 'brutus' ) ?></li>
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
        /**
         * For every Custom Taxonomy (origin, period, material), 
         * we construct a tax_query based on the filter option the user has chosen. 
         * ie artefacts made of copper and found in Dodoni in the 7th Century BC.
         * 
         * But what would happen if the user hasn't specified all taxonomies?
         * For example, only origin is specified.
         * We then have to include all periods and materials that appear in the specified taxonomy.
         * 
         * To achieve this, we pass a non existing operator to the tax_query argument
         * that corresponds to the unspecified taxonomy/taxonomies.
         * 
         * This solution is proposed here: https://wordpress.stackexchange.com/a/291315
         * For the complete documentation of tax_query, check here:
         * https://developer.wordpress.org/reference/classes/wp_query/#taxonomy-parameters
         * 
         */
            $origin = $_GET['origin'];
            $period = $_GET['period'];
            $material = $_GET['material'];

            $origin_query = null;
            $period_query = null;
            $material_query = null;

            $locale =  get_bloginfo('language');
            // Origin Query
            if ( isset( $origin ) AND !empty( $origin ) ) {
                // When the chosen language is greek, 'origin' and 'material' taxonomy's terms have an '-el' suffix.
                if ( $locale == 'el' ) { $origin .= '-el'; }

                $origin_query = array (
                    'taxonomy'  => 'origin',
                    'field'     => 'slug',
                    'terms'     => $origin
                );
            }
            else {
                $origin_query = array (
                    'taxonomy'  => 'origin',
                    'operator'  => 'XXX'
                );
            }

            // Period Query
            if ( isset( $period ) AND !empty( $period ) ) {
                $period_query = array (
                    'taxonomy'  => 'period',
                    'field'     => 'slug',
                    'terms'     => $period
                );
            }
            else {
                $period_query = array (
                    'taxonomy'  => 'period',
                    'operator'  => 'XXX'
                );
            }

            // Material Query
            if ( isset( $material ) AND !empty( $material ) ) {
                // When the chosen language is greek, 'origin' and 'material' taxonomy's terms have an '-el' suffix.
                if ( $locale == 'el' ) { $material .= '-el'; }

                $material_query = array (
                    'taxonomy'  => 'material',
                    'field'     => 'slug',
                    'terms'     => $material
                );
            }
            else {
                $material_query = array (
                    'taxonomy'  => 'material',
                    'operator'  => 'XXX'
                );
            }

            $args = array (
                'post_type'     => 'artefacts',
                'nopaging'      => true,
                'tax_query'     => array (
                    'relation' => 'AND',
                    $origin_query,
                    $period_query,
                    $material_query
                )
            );
            $loop = new WP_Query($args);
            while ( $loop->have_posts() ) {
                $loop->the_post();
                /**
                 * For English:
                 * pll_get_post_language( get_the_ID(), 'slug' ) returns 'en'
                 * pll_get_post_language( get_the_ID(), 'locale' ) returns 'en_US'
                 * get_bloginfo( 'language' ) returns 'en-US'
                 * 
                 * $locale gets its value from get_bloginfo('language');
                 * So we keep the first 2 letters of it...
                 * 
                 * Oh. And all this is to keep english posts from appearing in the greek catalog
                 * and vice versa.
                 */
                $post_language = pll_get_post_language( get_the_ID(), 'slug' );
                if ( strcmp( $post_language, substr( $locale, 0, 2) ) !== 0 ) { continue; }
                ?>
                <div class="post-thumbnail">
                    <a href="<?php esc_url( the_permalink() ) ?>">
                        <?php the_post_thumbnail( 'thumbnail' ); ?>
                    </a>
                    <div class="title-tag"><?php esc_html_e( the_title(), 'brutus' ) ?></div>
                </div>
                <?php
            }
            wp_reset_postdata();
        ?>
    </div> <!-- .artefacts-container -->
</main> <!-- .site-main -->

<?php
get_footer();