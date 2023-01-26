<?php
/**
 * Template part for quering the artefact custom post type.
 * By default, retrieves all artefacts.
 * If a search is performed, we change the WP_Query parameter to the search query
 * limiting the resulting displayed posts to the ones matching user's input.
 * 
 * For more information about The Loop and searching, check:
 * https://developer.wordpress.org/reference/classes/wp_query/
 * https://stackoverflow.com/a/9962112/13272522
 * 
 */
$args = array (
    'post_type'     => 'artefacts',
    'nopaging'      => true,
);

$search_query = $_GET['q'];
if ( isset( $search_query ) AND !empty( $search_query ) ) {
    $args = array( 's' => htmlspecialchars( $search_query ) );
}

$loop = new WP_Query($args);
$locale =  get_bloginfo('language');
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
         * Get value of origin, period and material for every artefact.
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