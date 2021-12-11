<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fobos
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Фобос</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header>
<<<<<<< HEAD
        <div class="fix-header header">
            <div class="wrapper">
                <div class="topheader_fixed">
                    <div class="topheader__logo">ФОБОС</div>
                    <nav class="menu">
                        <div class="menu__list">
                            <div class="item menu_item_1">
                                <a href="#block1">
                                    <div class="text">Партнеры</div>
                                </a>
                            </div>
                            <div class="item menu_item_2">
                                <a href="#block2">
                                    <div class="text">Каток</div>
                                </a>
                            </div>
                            <div class="item menu_item_3">
                                <a href="#block3">
                                    <div class="text">Аренда</div>
                                </a>
                            </div>
                            <div class="item menu_item_4">
                                <a href="#block4">
                                    <div class="text">Контакты</div>
                                </a>

                            </div>
                        </div>
                    </nav>
                    <a href="http://ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=d787aafb36e9479c809c3ac2da5deb2a&autoplay=1&archive=1" target="_blank" class="topheader__link">
                        <img src="<?php print_r(get_template_directory_uri());?>/image/camera.png"  alt="Camera" class="camera">
                        <div class="text">Трансляция с катка</div>
                    </a>
                </div>
            </div>
        </div>
=======
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
        <div class="wrapper">
            <div class="header">
                <div class="topheader">
                    <div class="topheader__logo">ФОБОС</div>
<<<<<<< HEAD
                    <a href="http://ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=d787aafb36e9479c809c3ac2da5deb2a&autoplay=1&archive=1" target="_blank" class="topheader__link">
=======
                    <a href="" class="topheader__link">
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                        <img src="<?php print_r(get_template_directory_uri());?>/image/camera.png"  alt="Camera" class="camera">
                        <div class="text">Трансляция с катка</div>
                    </a>
                </div>
                <div class="siteinfo">
                    <div class="siteinfo__bc">бизнес-центр</div>
                    <div class="siteinfo__cn">фобос</div>
                </div>
                <nav class="menu">
                    <div class="menu__list">
<<<<<<< HEAD
                        <div class="item menu_item_1">
                            <a href="#block1">
                                <div class="text">Партнеры</div>
                            </a>
                        </div>
                        <div class="item menu_item_2">
                            <a href="#block2">
                                <div class="text">Каток</div>
                            </a>
                        </div>
                        <div class="item menu_item_3">
                            <a href="#block3">
                                <div class="text">Аренда</div>
                            </a>
                        </div>
                        <div class="item menu_item_4">
                            <a href="#block4">
=======
                        <div class="item">
                            <a>
                                <div class="text">Партнеры</div>
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <div class="text">Каток</div>
                            </a>
                        </div>
                        <div class="item">
                            <a>
                                <div class="text">Аренда</div>
                            </a>
                        </div>
                        <div class="item">
                            <a>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                                <div class="text">Контакты</div>
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

