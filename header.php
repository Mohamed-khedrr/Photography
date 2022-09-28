<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link
        href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@0;1&family=Fira+Sans:wght@200;400;500;700&family=Lobster&family=Poppins:wght@100&display=swap"
        rel="stylesheet"> <?php wp_head(); ?>
</head>

<body <?php 
		body_class();
	?> <?php 
		understrap_body_attributes(); 
	?>>
    <?php
		do_action( 'wp_body_open' ); 
		?>
    <div class="site" id="page">

        <!-- ******************* The TopBar Area ******************* -->
        <div id="top-bar">

            <div class="login-register-mobile">
                <i class="fa fa-user-circle"></i>
                Login
            </div>
            <!-- Contact -->
            <div class="contact-info">
                <div class="phone contact-item">
                    <i class="fa fa-phone"></i>
                    +20 101 811 6145
                </div>
                <div class="email contact-item">
                    <i class="fa fa-envelope-o"></i>
                    khedr@gamail.com
                </div>
                <div class="search contact-item">
                    <i class="fa fa-search"></i>
                    <input type="text" placeholder="Search.." />
                </div>
            </div>

            <!-- Shipping  -->
            <div class="shipping-info">
                <i class="fa fa-truck"></i>
                Free shipping on orders over $100
            </div>
            <div class="login-register">
                Login / Register
                <i class="fa fa-user-circle"></i>
            </div>

            <div class="mobile-menu">
                Menu
                <i class="fa fa-bars"></i>
            </div>

        </div>


        <header id="wrapper-navbar">

            <!-- Shipping  -->
            <div class="mobile-top-shipping-info margin-from-left">
                <div class="shipping-info">
                    <i class="fa fa-truck"></i>
                    Free shipping on orders over $100
                </div>
            </div>

            <!-- ******************* Home Banner ******************* -->
            <div class="top-logo-holder margin-from-left">
                <div class="logo-title">
                    <div class="logo">
                        Mohamed Khedr
                    </div>
                    <div class="social-media">
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ========================================================== -->


            <!-- <a class="skip-link sr-only sr-only-focusable"
                href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a> -->

            <?php 
			// get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); 
		?>

        </header><!-- #wrapper-navbar end -->