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
        <div class="wrapper">
            <div class="header">
                <div class="topheader">
                    <div class="topheader__logo">ФОБОС</div>
                    <a href="" class="topheader__link">
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
                                <div class="text">Контакты</div>
                            </a>

                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

