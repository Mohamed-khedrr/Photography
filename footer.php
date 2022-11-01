<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">
    <div class="margin-from-left">
        <h2>Contact us for more information</h2>
        <div class="row">
            <div class="col-lg-4">
                <a href="#">
                    <i class="fa fa-phone"></i>
                    01018116145</a>
                <a href="#">
                    <i class="fa fa-envelope-o"></i>
                    khedr66664@gmail.com</a>
                <a href="#">
                    <i class="fa fa-map"></i>
                    Cairo Egypt</a>

            </div>
            <div class="col-lg-6 ">
                <?php echo do_shortcode('[contact-form-7 id="10" title="Footer Contact Form"]') ?>
            </div>
        </div>
    </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>