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

    $origin_query = array (
        'taxonomy'  => 'origin',
        'operator'  => 'XXX'
    );
    $period_query = array (
        'taxonomy'  => 'period',
        'operator'  => 'XXX'
    );
    $material_query = array (
        'taxonomy'  => 'material',
        'operator'  => 'XXX'
    );

    $locale =  get_bloginfo('language');
    // Origin Query
    if ( isset( $origin ) AND !empty( $origin ) ) {
        // When the chosen language is greek, 'origin' and 'material' taxonomy's terms have an '-el' suffix.
        if ( $locale == 'el' ) { $origin .= '-el'; }

        $origin_query = array (
            'taxonomy'  => 'origin',
            'field'     => 'slug',
            'terms'     => $origin,
            'operator'  => 'IN'         // Restore default
        );
    }

    // Period Query
    if ( isset( $period ) AND !empty( $period ) ) {
        $period_query = array (
            'taxonomy'  => 'period',
            'field'     => 'slug',
            'terms'     => $period,
            'operator'  => 'IN'
        );
    }

    // Material Query
    if ( isset( $material ) AND !empty( $material ) ) {
        // When the chosen language is greek, 'origin' and 'material' taxonomy's terms have an '-el' suffix.
        if ( $locale == 'el' ) { $material .= '-el'; }

        $material_query = array (
            'taxonomy'  => 'material',
            'field'     => 'slug',
            'terms'     => $material,
            'operator'  => 'IN'
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
            /**
             * Get value of origin, period and material from every artefact.
             * This value will then be used to fill the respective data-origin,
             * data-period and data-material attributes of the artefact's container <div>.
             * 
             * We need the data-* attributes to hide the appropriate divs upon filter application.
             */
            $data_origin = get_the_terms( get_the_ID(), 'origin' )[0]->name;
            $data_period = get_the_terms( get_the_ID(), 'period' )[0]->name;
            $data_material = get_the_terms( get_the_ID(), 'material' )[0]->name;
        ?>
        <div class="post-thumbnail" data-origin="<?php echo $data_origin ?>" data-period="<?php echo $data_period ?>" data-material="<?php echo $data_material ?>">
            <a href="<?php esc_url( the_permalink() ) ?>">
                <?php the_post_thumbnail( 'thumbnail' ); ?>
            </a>
            <div class="title-tag"><?php esc_html_e( the_title(), 'brutus' ) ?></div>
        </div>
        <?php
    }
    wp_reset_postdata();
?>