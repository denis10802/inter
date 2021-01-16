<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
    *
    * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
    *
    * @package Gbz-inter
    */

    ?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <title>ООО "ЖБЗ - ИНТЕР"</title>

        <meta name="keywords" content="ООО ЖБЗ - ИНТЕР, купить ЖБИ в Стерлитамаке, ЖБИ недорого в Стерлитамаке, приобрести жби с доставкой в Стерлитамаке, купить жби, купить фундаментные блоки, купить колодцы, купить товарный бетон, цемент">
        <meta name="description" content="ЖБИ изделия производство и продажа - завод ЖБЗ - Интер: ФУНДАМЕНТНЫЕ БЛОКИ , КОЛЬЦА КОЛОДЕЗНЫЕ, производство цемента, ТОВАРНЫЙ БЕТОН">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Libs CSS -->
        <link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/prettyPhoto.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri();?>/css/flexslider.css" rel="stylesheet">

        <!-- Template CSS -->
        <link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js" type="text/javascript"></script>

        <!-- Responsive CSS -->
        <link href="<?php echo get_template_directory_uri();?>/css/responsive.css" rel="stylesheet">

        <!-- Favicons -->
        <link rel="shortcut icon" href="<?php the_field('favicon')?>">


        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">


    </head>


    <body>



    <!-- PRELOADER
    ============================================= -->
    <div class="animationload">
        <div class="loader"></div>
    </div>



    <!-- HEADER
    ============================================= -->
    <header id="header">
        <div class="navbar navbar-fixed-top">
            <div class="container">


                <!-- Navigation Bar -->
                <div class="navbar-header">

                    <!-- Responsive Menu Button -->
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-menu">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Logo Image -->
                    <a id="GoToHome" class="navbar-brand" href="#intro"><img src="<?php the_field('logo')?>" alt="logo"></a>

                </div>	<!-- End Navigation Bar -->


                <!-- Navigation Menu -->
                <nav id="navigation-menu" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">

                        <li><a href="#promo">о компании</a></li>
                        <li><a href="#pricing">Каталог</a></li>
                        <li><a href="#services">Преимущества</a></li>
                        <li><a href="#portfolio">Наши Работы</a></li>
                        <li><a href="#contact">Контакты</a></li>
                        <li><a href="<?php the_field('downland_price')?>">Скачать прайс</a></li>

                    </ul>
                </nav>  <!-- End Navigation Menu -->


            </div>	  <!-- End container -->
        </div>	   <!-- End navbar fixed top  -->
    </header>