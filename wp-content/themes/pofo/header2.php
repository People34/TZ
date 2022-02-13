
<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- title -->
    <title>POFO – Creative Agency, Corporate and Portfolio Multi-purpose Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="/wp-content/themes/pofo/assets/images/favicon.png">
    <link rel="apple-touch-icon" href="/wp-content/themes/pofo/assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/wp-content/themes/pofo/assets/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/wp-content/themes/pofo/assets/images/apple-touch-icon-114x114.png">

    <!-- animation -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/bootstrap.min.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/font-awesome.min.css" />
    <!-- themify icon -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/themify-icons.css">
    <!-- swiper carousel -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/swiper.min.css">
    <!-- justified gallery  -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/justified-gallery.min.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/magnific-popup.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/pofo/assets/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/pofo/assets/css/layers.css">
    <link rel="stylesheet" type="text/css" href="/wp-content/themes/pofo/assets/css/navigation.css">
    <!-- bootsnav -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/bootsnav.css">
    <!-- style -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="/wp-content/themes/pofo/assets/css/responsive.css" />
    <!--[if IE]>
    <script src="/wp-content/themes/pofo/assets/js/html5shiv.js"></script>
    <![endif]-->
<?php wp_head(); ?>
</head>
<body>
<!-- start header -->
<header>
    <!-- start navigation -->
    <nav class="navbar navbar-default bootsnav navbar-top-scroll background-transparent nav-box-width white-link padding-four-lr menu-logo-center navbar-expand-lg">
        <div class="container nav-header-container">
            <!-- start logo -->
            <div class="center-logo">
                <a href="index.html" title="Pofo" class="logo"><img src="/wp-content/themes/pofo/assets/images/logo.png" data-rjs="/wp-content/themes/pofo/assets/images/logo@2x.png" class="logo-dark" alt="Pofo">
                    <img src="/wp-content/themes/pofo/assets/images/logo-full-white.png" data-rjs="/wp-content/themes/pofo/assets/images/logo-full-white@2x.png" alt="Pofo" class="logo-light default"></a>
            </div>
            <!-- end logo -->
            <div class="col col-lg-12 accordion-menu">
                <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                    <span class="sr-only">toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-collapse collapse justify-content-between" id="navbar-collapse-toggle-1">
                    <?php
                    wp_nav_menu( array(
                        'theme_location'   => 'menu-1',
                        'menu_id'   => 'primary-menu',
                        'menu_class' => 'nav navbar-nav alt-font text-normal width-40 md-width-100 sm-text-left justify-content-end',
                        'container_id'  =>  'navbar-collapse-toggle-1',
                        'container_class' => 'navbar-collapse collapse justify-content-between',
                    ));?>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
