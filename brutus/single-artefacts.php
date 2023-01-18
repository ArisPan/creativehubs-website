<?php
/**
 * Template file for single Artefact post in greek.
 *
 * @package brutus
 */

get_header();
?>

<?php
    $origin_custom_field_name = 'Προέλευση';
    $period_custom_field_name = 'Περίοδος';
    $description_custom_field_name = 'Περιγραφή';
    $material_custom_field_name = 'Υλικό';

    while ( have_posts() ) :
        the_post();
?>
<main id="primary" class="site-main artefact-main">
    <h1 id="title-mobile" class="title"><?php the_title(); ?></h1>

    <div class="img-container">
        <?php the_post_thumbnail( array( 500, 500 ) ); ?>
    </div> <!-- .img-container -->

    <div class="fields-container">
        <h1 id="title-desktop" class="title"><?php the_title(); ?></h1>

        <div class="field-container origin">
            <h4 class="label"><?php esc_html_e( $origin_custom_field_name, 'brutus' ) ?></h4>
            <p class="content"><?php esc_html_e( get_post_meta( get_the_ID(), $origin_custom_field_name, true ) ) ?></p>
        </div> <!-- .field-container origin -->

        <div class="field-container period">
            <h4 class="label"><?php esc_html_e( $period_custom_field_name, 'brutus' ) ?></h4>
            <p class="content"><?php esc_html_e( get_post_meta( get_the_ID(), $period_custom_field_name, true ) ) ?></p>
        </div> <!-- .field-container period -->

        <div class="field-container material">
            <h4 class="label"><?php esc_html_e( $material_custom_field_name, 'brutus' ) ?></h4>
            <p class="content"><?php esc_html_e( get_post_meta( get_the_ID(), $material_custom_field_name, true ) ) ?></p>
        </div> <!-- .field-container material -->

        <div class="field-container description">
            <h4 class="label"><?php esc_html_e( $description_custom_field_name, 'brutus' ) ?></h4>
            <p class="content"><?php esc_html_e( get_post_meta( get_the_ID(), $description_custom_field_name, true ) ) ?></p>
        </div> <!-- .field-container description -->
    </div> <!-- .fields-container -->
    <?php endwhile; ?>
</main> <!-- .site-main -->
<?php
get_footer();
