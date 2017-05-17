<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mua bán máy photocopy toàn quốc</title>


    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow"/>
    <?php } ?>

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/slider.js"></script>

    <?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page-wrap">

    <div id="page-wrap">
        <header>
            <div class="inner-header">
                <div class="banner">
                    <div class="logo">
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" alt="muamayphoto.net">
                    </div>
                    <div class="khau_hieu">
                        <h1>TẬP ĐOÀN TÂN ĐẠI PHÁT</h1>
                        <h3>giải pháp thương hiệu cho văn phòng</h3>
                    </div>

                    <div class="phone">
                        <h4><i class="fa fa-phone"></i> 0913 - 765 - 563</h4>
                        <h3><input type="text" alt="từ khóa"><a href="#"><i class="fa fa-search"></i></a></h3>
                    </div>
                </div>

                <nav>
                    <button id="menu-button">menu</button>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" alt="mua may photocopy" id="logo_mobile">
                    <ul>
                        <li><a href="#">trang chủ</a></li>
                        <li><a href="#">giới thiệu</a></li>
                        <li><a href="#">sản phẩm</a></li>
                        <li><a href="#">dịch vụ thuê máy</a></li>
                        <li><a href="#">quy định bảo hành</a></li>
                        <li><a href="#">tin tức</a></li>
                        <li><a href="#">liên hệ</a></li>
                        <li><a href="#">chính sách</a></li>
                    </ul>
                </nav>

                <!--slider-->
                <div class="slider">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider1.jpg" class="slider-image"/>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider2.jpg" class="slider-image"/>
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider3.jpg" class="slider-image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider4.jpg" class="slider-image">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/slider5.jpg" class="slider-image">
                </div>
                <div class="slider-nav">
                    <div class="slider-nav-item"></div>
                    <div class="slider-nav-item"></div>
                    <div class="slider-nav-item"></div>
                    <div class="slider-nav-item"></div>
                    <div class="slider-nav-item"></div>
                </div>

            </div><!--end inner-header-->
        </header>
        <!--end header-->
