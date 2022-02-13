<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pofo
 */

get_header ();
?>

	<main id="primary" class="site-main">
        <section class="wow fadeIn p-0 cover-background color-code" data-color="1"  style="background-image: url('http://placehold.it/1920x1161');">
            <div class="container full-screen position-relative">
                <div class="slider-typography text-left">
                    <div class="slider-text-middle-main">
                        <div class="slider-text-middle">
                            <div class="col-12 col-xl-7 col-md-10 mx-auto text-center">
                                <span class="after-before-separator text-extra-small alt-font text-white-2 letter-spacing-3 sm-letter-spacing-0 text-uppercase margin-20px-bottom sm-margin-5px-bottom d-inline-block">we work hard, we play hard</span>
                                <h2 class="font-weight-600 text-white-2 alt-font margin-40px-bottom sm-margin-25px-bottom">We combine design, thinking and technical</h2>
                                <a href="portfolio-full-width-grid-transform.html" class="btn btn-transparent-white btn-rounded btn-medium text-link-white-2">Featured Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end hero section -->
        <!-- start section -->
        <section class="wow fadeIn color-code lg-no-background-img" data-color="2" style="background: url('wp-content/themes/pofo/assets/images/back-image1.png') left bottom no-repeat,url('wp-content/themes/pofo/assets/images/back-image2.png') right top no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">about branding agency</div>
                        <h3 class="text-white-2 alt-font width-95 md-width-100 margin-70px-bottom md-no-margin-bottom">Pofo is a branding agency based in London. I design thoughtful digital experiences & beautiful brand aesthetics.</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start portfolio section -->
        <section class="wow fadeIn color-code p-0 sm-padding-50px-tb" data-color="3">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Selected Works</div>
                    </div>
                </div>
                <div class="row">
                    <div class="filter-content overflow-hidden w-100 padding-100px-lr md-no-padding-lr sm-padding-15px-lr">
                        <ul class="portfolio-grid work-3col hover-option8 gutter-medium">
                            <li class="grid-sizer"></li>
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUplast-paragraph-no-margin">
                                <a href="single-project-page-01.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Tailoring Interior</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="single-project-page-02.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Love Fashion</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Brochure</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item advertising branding photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="single-project-page-06.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Pixflow Studio</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising design wow fadeInUp last-paragraph-no-margin">
                                <a href="single-project-page-03.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Designblast Inc</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Web and Photography</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web branding design wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                                <a href="single-project-page-04.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Harddot Stone</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                            <!-- start portfolio item -->
                            <li class="grid-item web advertising branding design photography wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                                <a href="single-project-page-05.html">
                                    <figure>
                                        <div class="portfolio-img"><img src="http://placehold.it/800x650" alt=""/></div>
                                        <figcaption>
                                            <div class="portfolio-hover-main">
                                                <div class="portfolio-hover-box vertical-align-middle">
                                                    <div class="portfolio-icon alt-font font-weight-600 icon-medium text-deep-pink">+</div>
                                                    <span class="text-medium alt-font text-extra-dark-gray margin-5px-bottom">Educamp School</span>
                                                    <p class="text-small no-letter-spacing text-medium-gray">Branding and Identity</p>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- end portfolio item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end portfolio section -->
        <!-- start counter section -->
        <section class="wow fadeIn lg-no-background-img" style="background: url('images/back-image3.png') right center no-repeat">
            <div class="container">
                <div class="row">
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="650">350</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Happy Clients</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="987">1500</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Photo Capture</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 sm-margin-30px-bottom text-center wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="350">875</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Work Completed</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                    <!-- start counter item -->
                    <div class="col-12 col-md-3 text-center wow zoomIn" data-wow-delay="0.6s">
                        <h5 class="text-white-2 m-0 timer alt-font" data-speed="2000" data-to="850">984</h5>
                        <span class="text-extra-small text-uppercase text-white-2 d-block margin-three-bottom md-margin-15px-bottom">Telephonic Talk</span>
                        <div class="separator-line-verticle-large bg-transparent-white d-inline-block"></div>
                    </div>
                    <!-- end counter item -->
                </div>
            </div>
        </section>
        <!-- end counter section -->
        <!-- start blog section -->
        <section class="wow fadeIn color-code pt-0 lg-no-background-img sm-padding-50px-tb" data-color="4" style="background: url('images/back-image4.png') left bottom no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Recent Blogs</div>
                    </div>
                </div>
                <div class="row">
                    <!-- start blog post item -->
                    <div class="col-12 col-md-4 sm-margin-15px-bottom wow fadeIn">
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">25 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-01.html" class="text-white-2">The only important thing about design is how it relates to people.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Jay Benjamin</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start blog post item -->
                    <!-- end blog post item -->
                    <div class="col-12 col-md-4 sm-margin-15px-bottom fadeIn" data-wow-delay="0.2s">
                        <!-- fresh news item -->
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">20 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-02.html" class="text-white-2">Do good work for good people. Good design is a language, not a style.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Herman Miller</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start blog post item -->
                    <!-- end blog post item -->
                    <div class="col-12 col-md-4 fadeIn" data-wow-delay="0.4s">
                        <div class="blog-post blog-post-style6 border border-white-light padding-fourteen-all lg-padding-ten-all sm-padding-30px-all h-100">
                            <div class="post-details">
                                <span class="text-extra-small text-white-2 text-uppercase d-block margin-four-bottom md-margin-two-bottom opacity7">15 March 2017</span>
                                <span class="text-large alt-font margin-50px-bottom sm-margin-30px-bottom d-block"><a href="blog-post-layout-03.html" class="text-white-2">Leopard is an animal design, and my designs come from nature.</a></span>
                                <div class="author padding-10px-top position-relative">
                                    <span class="text-white-2 text-uppercase text-extra-small">by <a href="blog-only-text.html" class="text-white-2">Hugh Macleod</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- start blog post item -->
                </div>
            </div>
        </section>
        <!-- end blog section -->
        <!-- start clients logo section  -->
        <section class="color-code py-0 sm-padding-50px-tb" data-color="5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Our Clients</div>
                    </div>
                </div>
                <div class="row text-center">
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown">
                        <a href="https://envato.com" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-9.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.2s">
                        <a href="https://woocommerce.com" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-10.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.4s">
                        <a href="https://magento.com" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-11.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 margin-three-bottom sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.6s">
                        <a href="https://lesscss.org" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-12.png" alt=""></a>
                    </div>
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="0.8s">
                        <a href="https://www.pingdom.com" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-13.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1s">
                        <a href="www.wordpress.com" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-14.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 sm-margin-15px-bottom wow fadeInDown" data-wow-delay="1.2s">
                        <a href="https://jquery.com/" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-15.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                    <!-- start client logo item -->
                    <div class="col-12 col-md-3 wow fadeInDown" data-wow-delay="1.4s">
                        <a href="https://google.com/" target="_blank"><img src="wp-content/themes/pofo/assets/images/logo-16.png" alt=""></a>
                    </div>
                    <!-- end client logo item -->
                </div>
            </div>
        </section>
        <!-- end client logo section -->
        <!-- start contact section -->
        <section class="wow fadeIn color-code lg-no-background-img" data-color="6" style="background: url('wp-content/themes/pofo/assets/images/back-image5.png') left 51% no-repeat,url('wp-content/themes/pofo/assets/images/back-image6.png') right top no-repeat">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-9 col-md-10 text-center wow fadeIn">
                        <div class="text-extra-small letter-spacing-3 alt-font text-white-2 text-uppercase margin-70px-bottom md-margin-50px-bottom sm-margin-30px-bottom d-inline-block">Fill out the form and we'll be in touch soon!</div>
                    </div>
                </div>
                <form id="contact-form" action="javascript:void(0)" method="post">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8 input-border-white text-center">
                            <div id="success-contact-form" class="mx-0"></div>
                            <input type="text" name="name" id="name" placeholder="Name*" class="input-border-bottom border-white-light">
                            <input type="text" name="email" id="email" placeholder="E-mail*" class="input-border-bottom border-white-light">
                            <input type="text" name="subject" id="subject" placeholder="Subject" class="input-border-bottom border-white-light">
                            <textarea name="comment" id="comment" placeholder="Your Message" class="input-border-bottom border-white-light"></textarea>
                            <button id="contact-us-button" type="submit" class="btn btn-very-small btn-transparent-white sm-margin-15px-top">send message</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- end contact section -->

	</main><!-- #main -->

<?php

get_footer();
?>