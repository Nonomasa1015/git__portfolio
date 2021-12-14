<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?></title>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">

    <!-- <link  rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css"/> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="global-container">
        <nav class="mobile">
            <div class="mobile__inner">
<?php
wp_nav_menu(
	array (
		'theme_location' => 'place_mobile',
		'container' => false,
        'menu_class' => 'mobile__ul',
	)
);
?>
            </div>
        </nav>
        <button class="mobileBtn">
            <span class="mobileBtn__bar"></span>
            <span class="mobileBtn__bar"></span>
            <span class="mobileBtn__bar"></span>
        </button>
        <div class="container">
            <aside class="aside">
                <div class="aside__inner">
                    <p class="aside__logo">PORTFOLIO</p>
                    <form class="search-form" role="search" method="get" action="<?php echo esc_url( home_url() ); ?>">
                        <div class="search-box">
                        <input type="text" class="search-input" name="s" placeholder="キーワードを検索" />
                        <!-- <button type="submit" class="button-submit"></button> -->
                        </div>
                        <!-- <div class="search-buttons">
                        <button type="button" class="close-icon js-searchIcon"></button>
                        <button type="button" class="search-icon js-searchIcon"></button>
                        </div> -->
                    </form>
<?php
wp_nav_menu(
	array (
		'theme_location' => 'place_global',
		'container' => false,
        'menu_class' => 'aside__ul',
	)
);
?>
                    <!-- <div class="aside__info">
                        <a href="">在学生・卒業生の方へ</a>
                        <a href="">教職員採用情報</a>
                    </div>
                    <div class="aside__btns">
                        <a href="">Online Open Campus</a>
                        <a href="">入学手続きサイトへ</a>
                    </div> -->
                </div>
            </aside>
            <main class="main">
<?php if( is_front_page() ): ?>
                <header class="header header-slide">
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bg-page-dummy.png" alt="advertisement-slide" class="slide-banner"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bg-page-dummy.png" alt="advertisement-slide" class="slide-banner"></div>
                    <div><img src="<?php echo get_template_directory_uri(); ?>/images/bg-page-dummy.png" alt="advertisement-slide" class="slide-banner"></div>
                </header>
                <?php else: ?>
                    <header class="header">
                        <div class="header__inner">
                            <h1 class="header__title"><?php echo get_main_title(); ?></h1>
                            <div class="header__img"><?php echo get_main_image(); ?></div>
                        </div>  
                    </header>
                    <?php endif; ?>
                    



                    
                    <!-- <h1><?php echo get_the_excerpt(); ?></h1>
                    <?php echo get_main_image(); ?> -->