<?php
/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<!-- Home Banner Section -->
<section class="home-banner margin-from-left">

    <h2>A community dedicated to the every day adventurer, photo taker and story maker. Photo printing photo scanning
        and beyond.</h2>

    <h3>
        No story untold
    </h3>
</section>
<!-- // HOME Call To Action  -->
<section class="home-call-to-acton margin-from-left">
    <div class="row">
        <div class="col-sm-4">
            <a href="#" class="action">
                <div class="title">fine art prints</div>
                <div class="img-holder">
                    <div class="img"
                        style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                    </div>
                </div>

            </a>

        </div>
        <div class="col-sm-4">
            <a href="#" class="action">
                <div class="title">Every day photo</div>
                <div class="img-holder">
                    <div class="img"
                        style=" background-image: url(<?php echo get_template_directory_uri()  ?>/imgs/108.jpg)">
                    </div>
                </div>
            </a>

        </div>
        <div class="col-sm-4">
            <a href="#" class="action">
                <div class="title">Beyond Photography</div>
                <div class="img-holder">
                    <div class="img"
                        style=" background-image: url(<?php echo get_template_directory_uri()  ?>/imgs/111.jpg)">
                    </div>
                </div>
            </a>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="info"><strong>Want Samples Before Ordering?</strong> Just Pay Shopping</div>
        </div>
        <div class="col-sm-6">
            <div class="info"><strong>Professional Photographer?</strong> Send Your Adobe RGB Images Direct</div>
        </div>
    </div>
</section>
<!-- Home About Section -->
<section class="home-about ">
    <div class="margin-from-left mr-0">
        <div class="row">
            <div class="col-md-8  ">
                <h2>Your story matters, we're here to make sure your celebrate it.</h2>
                <p>We're more than a photo printing store. We're a community of creatives.
                    We're passionate about what we do. About papers, printing, sharing your
                    memories as well as our own, about trave, adventure, life, love and the special
                    little moments that join together to tell your story.
                </p>
                <div class="btn btn-dark rounded-0 ">
                    About Mohamed Khedr
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>

        </div>
        <div class=" col-md-4 large-image">
        </div>
    </div>
</section>

<!-- JOIN OUT COMMUNITY SECTION -->
<section class="home-join-our-community">
    <div class="margin-from-left">
        <div class="row">
            <div class="col-md-8">
                <h2>Join out community</h2>
                <p>We're more than a phot printing store.
                    We're a community of creative.
                    we're passionate about what we do .
                </p>
                <?php echo do_shortcode('[contact-form-7 id="9" title="Newsletter Signup Homepage"]'); ?>
            </div>
        </div>

    </div>
</section>

<!-- HOME COLLECTION  -->
<section class="home-collections">
    <div class="margin-from-left">
        <h2>Our collections</h2>
        <div class="row">
            <div class="col-sm-3 collection-item">
                <a href="#">Photo Printing</a></li>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Photo Journals</a>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Accessories</a>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Gifts</a>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Reprographics</a>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Albums</a>
            </div>
            <div class="col-sm-3 collection-item">
                <a href="#">Best Sellers</a>
            </div>
        </div>

        <!--   -->
        <!-- <div class="action-holder">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#" class="action">
                        <div class="img-holder">
                            <div class="img"
                                style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                            </div>
                        </div>
                        <div class="title">fine art prints</div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#" class="action">
                        <div class="img-holder">
                            <div class="img"
                                style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                            </div>
                        </div>
                        <div class="title">fine art prints</div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#" class="action">
                        <div class="img-holder">
                            <div class="img"
                                style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                            </div>
                        </div>
                        <div class="title">fine art prints</div>

                    </a>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <a href="#" class="action">
                        <div class="img-holder">
                            <div class="img"
                                style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                            </div>
                        </div>
                        <div class="title">fine art prints</div>

                    </a>
                </div>
            </div>
        </div> -->

        <div class="row">
            <div class="col-lg-10">
                <div class="action-holder">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <a href="#" class="action">
                                <div class="img-holder">
                                    <div class="img"
                                        style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                                    </div>
                                </div>
                                <div class="title">fine art prints</div>

                            </a>
                        </div>

                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <a href="#" class="action">
                                <div class="img-holder">
                                    <div class="img"
                                        style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                                    </div>
                                </div>
                                <div class="title">fine art prints</div>

                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <a href="#" class="action">
                                <div class="img-holder">
                                    <div class="img"
                                        style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                                    </div>
                                </div>
                                <div class="title">fine art prints</div>
                            </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <a href="#" class="action">
                                <div class="img-holder">
                                    <div class="img"
                                        style=" background-image: url(<?php echo get_template_directory_uri()?>/imgs/101.jpg)">
                                    </div>
                                </div>
                                <div class="title">fine art prints</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  ">
                <div class="button-action-holder">
                    <div class="action">
                        <div class="button-holder">

                        </div>
                        <div class="title">
                            <div class="btn btn-dark rounded-0">
                                View Collections
                                <i class="fa fa-chevron-right"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- ========================== -->
    </div>
</section>


<?php
get_footer();