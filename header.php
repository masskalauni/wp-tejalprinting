<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Tejal Printing - The best and top printing in Mahendranagar, Nepal.</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/add_on.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive_add_on.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tejal.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <?php wp_head();  ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@200;300;400;500;600&family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:wght@100;200;300;400;500;600;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="active-preloader-ovh">

    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- /.preloader -->
    <!-- hello eps -->
    <div class="preloader">
        <div class="spinner"></div>
    </div><!-- /.preloader -->



    <header class="header home-page-one">
        <nav class="nav_bar_main">
            <div class="nav_div_left">
                <div>
                    <a class="" href="<?php echo site_url(''); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>\img\Tejal-Logo.png" alt="Awesome Image" height="80px" />
                    </a>


                    <ul class="nav navbar-nav navigation-box">
                        <li class="<?php if (is_page('about')) echo 'current' ?>">
                            <a href="<?php echo site_url('/about'); ?>">About</a>
                        </li>
                        <!-- <li class="<?php // if (is_page('services')) echo 'current' 
                                        ?>">
                               <a href="<?php //echo site_url('/services'); 
                                        ?>">Services</a>
                                  </li> -->
                        <li class="<?php if (is_page('contact')) echo 'current' ?>">
                            <a href="<?php echo site_url('/contact'); ?>">Contact</a>
                        </li>
                        <li class="<?php if (is_page('contact')) echo 'current' ?>">
                            <a href="<?php echo site_url('/contact'); ?>">Services</a>
                        </li>
                    </ul>
                </div>
                <div class="menu_icon_div">
                    <i class="bx bx-menu" class="active" id="menu_icon"></i>
                </div>
                <!-- <i class="fa-solid fa-xmark"></i> -->
            </div>

            <div class="nav_container">


                <div class="search">
                    <input class="searchFilter" id="searchQuery" placeholder="Search Product..." type="text"><i style=" font-size: 1.3rem;" class="fas fa-search"></i>
                </div>

                <div class="nav_div_right">
                    <a href="tel:9806422528" class="thm-btn yellow-bg custom_padding"><i class="fa-solid fa-phone-volume"></i> 9806422528</a>
                </div><!-- /.right-side-box -->
            </div><!-- /.container -->
            </div>
        </nav>
        <div class="banner_categories m_banner_categories" id="menu_icon_show_hidden">
            <ul class="list">
                <?php
                $menu_args = array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'items_wrap'     => '%3$s',
                    'walker'         => new Custom_Walker(),
                );

                wp_nav_menu($menu_args);
                ?>
            </ul>
        </div>
    </header><!-- /.header -->