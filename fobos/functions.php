<?php
/**
 * fobos functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fobos
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'fobos_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fobos_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fobos, use a find and replace
		 * to change 'fobos' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fobos', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'fobos' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'fobos_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'fobos_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fobos_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fobos_content_width', 640 );
}
add_action( 'after_setup_theme', 'fobos_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fobos_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fobos' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fobos' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fobos_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fobos_scripts() {
	wp_enqueue_style( 'fobos-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fobos-style', 'rtl', 'replace' );
	wp_enqueue_style( 'fobos-main-style', get_template_directory_uri() . '/css/style.css');

	wp_enqueue_script("jquery");
	wp_enqueue_script( 'fobos-navigation', get_template_directory_uri() . '/js/app.js');
	wp_enqueue_script( 'fobos-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fobos_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
	Container::make( 'theme_options', 'Управление' )
	->add_tab( 'Контакты', array(
		Field::make( 'text', 'rent_phone', 'Телефон Аренды' )->help_text( 'Телефон для связи' ),
<<<<<<< HEAD
		Field::make( 'text', 'rent_phone_description', 'Описание времени для звонка' )->help_text( 'Текст: "Для справок по аренде звонить в рабочее время ежедневно с 9:00–19:00"' ),
=======
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
		Field::make( 'text', 'ice_rink_phone', 'Телефон Каток' )->help_text( 'Телефон для связи' ),
		Field::make( 'text', 'address', 'Адрес' )->help_text( 'Укажите адрес ТЦ' ),
	) )
	->add_tab( 'Партнеры', array(
		Field::make( 'complex', 'partner', 'Список Партнеров' )
			 ->add_fields( array(
				 Field::make( 'text', 'partner_name', 'Название партнера' )->set_width( 33 ),
				 Field::make( 'complex', 'partner_contacts', 'Список контактов' ) ->add_fields( array(
					Field::make( "select", "contact_type", "В какой валюте отображать награду?" )
					->add_options( array(
						'tel_m'  => 'мобильный телефон',
						'tel'  => 'телефон стационарный',
						'link'  => 'ссылка',
					)),
					Field::make( 'text', 'mob_phone_contact', 'Телефон' )
					->set_width( 33 )
<<<<<<< HEAD
					->help_text( 'Мобильный телефон в формате визуального отображения на сайте, пример:"+7(9хх) ххх-хх-хх"' )
=======
					->help_text( 'Мобильный телефон в формате вихуального отображения на сайте, пример:"+7(9хх) ххх-хх-хх"' )
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
					->set_conditional_logic(array(
						'relation' => 'AND',
						array(
							'field' => 'contact_type',
							'value' => 'tel_m',
							'compare' => '=',
						)
					)),
					Field::make( 'text', 'phone_contact', 'Телефон' )
					->set_width( 33 )
					->help_text( 'Стационарный телефон партнера' )
					->set_conditional_logic(array(
						'relation' => 'AND',
						array(
							'field' => 'contact_type',
							'value' => 'tel',
							'compare' => '=',
						)
					)),
					Field::make( 'text', 'site_link_url', 'Ссылка' )
						->set_width( 33 )
						->help_text( 'Поле для ввода ссылки, без сокращений, ссылка на соцсеть или сайт' )
						->set_conditional_logic(array(
							'relation' => 'AND',
							array(
								'field' => 'contact_type',
								'value' => 'link',
								'compare' => '=',
							)
						)),
					Field::make( 'text', 'site_link_name', 'Название' )
						->set_width( 33 )
						->help_text('Название, которое отобразиться в карточке')
						->set_conditional_logic(array(
							'relation' => 'AND',
							array(
								'field' => 'contact_type',
								'value' => 'link',
								'compare' => '=',
							)
						)),
				 ) ),
				
			 ) )
	) )
<<<<<<< HEAD
	->add_tab( 'Каток', array(
		//Каток
		Field::make( 'text', 'ice_rink_work_day', 'Дни работы катка' )->set_width( 20 )
		->help_text( 'Дни работы катка в виде "пн-вс"' ),
		Field::make( 'text', 'ice_rink_work_time', 'Часы работы катка' )->set_width( 20 )
		->help_text( 'Часы работы катка в виде "10.00 - 24.00"' ),
		Field::make( 'text', 'ice_rink_help_text', 'Часы работы катка' )->set_width( 20 )
		->help_text( 'Текст подсказка под расписанием работы в виде "(без перерывов и выходных)"' ),
		//Каток цены
		Field::make( 'complex', 'ice_rink_price', 'Цены на билеты' )
		->add_fields( array(
			Field::make( 'text', 'ice_rink_price_year', 'Возраст покупателя билетов' )->set_width( 20 )
			->help_text( 'Возраст' ),
			Field::make( 'text', 'ice_rink_price_value', 'Цена' )->set_width( 20 )
			->help_text( 'Цена' ),
		)),
		//Прокат
		Field::make( 'complex', 'rental_price', 'Цена проката' )
		->add_fields( array(
			Field::make( 'text', 'rental_price_time', 'Время проката' )->set_width( 20 )
			->help_text( 'Тут указывается время на которое берут прокат' ),
			Field::make( 'text', 'rental_price_value', 'Цена' )->set_width( 20 )
			->help_text( 'Цена проката на определенное время' ),
			Field::make( 'text', 'rental_price_help_text', 'Подсказка к строке проката' )->set_width( 20 )
		->help_text( 'Текст подсказка в виде "(при себе иметь залог)"' ),
		)),
		//Заточка
		Field::make( 'complex', 'sharpening_skates', 'Заточка коньков' )
		->add_fields( array(
			Field::make( 'text', 'sharpening_skates_work_day', 'Дни работы катка' )->set_width( 20 )
			->help_text( 'Дни работы заточки коньков в виде "пн-пт"' ),
			Field::make( 'text', 'sharpening_skates_work_time', 'Часы работы катка' )->set_width( 20 )
			->help_text( 'Часы работы заточки коньков в виде "10.00 - 24.00"' ),
			Field::make( 'text', 'sharpening_skates_help_text', 'Часы работы катка' )->set_width( 20 )
			->help_text( 'Текст подсказка под расписанием работы в виде "(без перерывов и выходных)"' ),
		)),
		Field::make( 'text', 'sharpening_skates_price', 'Цена заточки коньков' )->set_width( 20 )
			->help_text( 'Цену указать в виде "200 руб."' ),
	));
=======
	->add_tab( 'СЕО', array(
		Field::make( 'text', 'title-lp', 'Title лендинга' ),
		Field::make( 'text', 'description-lp', 'Description лендинга' ),
		Field::make( "header_scripts", "header_google_analytics", 'Код счётчика Гугл.Аналитикс' ),
		Field::make( "header_scripts", "header_script_yandex_metrika", 'Код счётчика Яндекс.Метрики' ),
	) );
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
}


