<?php
/**
 * scout_unite_template functions and definitions
 *
 *
 * @package scout_unite_template
 */

function register_my_menu(){
  register_nav_menus( 
	array(
	 'main-menu' => __('Menu principal' ),
	 'private-menu' => __( 'Menu Privé' ),
	 'footer-menu' => __( 'Menu Footer' ),
	 )
  );
}

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 'custom-size',
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}

function register_widget_areas() {

  register_sidebar( array(
    'name'          => 'Footer area one',
    'id'            => 'footer_area_one',
    'description'   => 'utilise le widget de gauche pour indiquer les coordonnées par exemple ',
    'before_widget' => '<section class="footer-area footer-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area two',
    'id'            => 'footer_area_two',
    'description'   => 'widget du milieux',
    'before_widget' => '<section class="footer-area footer-area-two">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar( array(
    'name'          => 'Footer area three',
    'id'            => 'footer_area_three',
    'description'   => 'Le widget de droite peut par exemple reprendre les liens vers les réseaux sociaux',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  
    register_sidebar( array(
    'name'          => 'Home page area one',
    'id'            => 'homepage_area_one',
    'description'   => 'Widget de droite de la home page, peut être utilisé pour insérer une carte pour situer les locaux, par exemple',
    'before_widget' => '<section class="homepage-area-one">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
	 register_sidebar( array(
    'name'          => 'Home page area two',
    'id'            => 'homepage_area_two',
    'description'   => 'Widget de gauche de la home page, peut être utilisé pour les coordonnées du staff, par exemple',
    'before_widget' => '<section class="footer-area footer-area-three">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
	
	register_sidebar( array(
	'name' => 'Sidebar principale',
	'id' => 'main_sidebar',
	'description' => 'Barre latérale principale',
	'before_widget' => '<section class="sidebar-widget">',
	'after_widget' => '</section>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
));
}

function sc_random_picture($folder_path = null){
 
    if( !empty($folder_path) ){ // if the folder path is not empty
        $files_array = scandir($folder_path);
        $count = count($files_array);
 
        if( $count > 2 ){ // if has files in the folder
            $minus = $count - 1;
            $random = rand(2, $minus);
            $random_file = $files_array[$random]; // random file, result will be for example: image.png
            $file_link =  get_site_url(null, $folder_path . "/" . $random_file); // file link, result will be for example: your-folder-path/image.png
            return '<a href="'.$file_link.'" target="_blank" title="'.$random_file.'"><img src="'.$file_link.'" alt="'.$random_file.'"></a>';
        }
 
        else{
            return "The folder is empty!";
        }
    }
 
    else{
        return "Please enter folder path!";
    }
 
}


add_action( 'widgets_init', 'register_widget_areas' );
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
add_action( 'after_setup_theme', 'register_my_menu' );
add_action( 'pre_get_posts', function ( $q )
{
    if ($q->is_home() && $q->is_main_query()
    ) {
        $q->set( 'posts_per_page', 4);
    }
});

add_theme_support( 'post-thumbnails' );
add_theme_support('widgets' );
add_theme_support('widgets-block-editor' );
add_theme_support( 'widget-customizer' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );  
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );

add_image_size('scout-thumbnail', 180,'auto', array( 'left', 'top' ));
add_image_size( 'custom-size', 220, 220,array( 'left', 'top' )  ); // Hard crop left top


function scout_unite_colors() {

    return array(

        'ls_vert_base' => array(
            'label' => 'Vert de base',
            'default' => '#95c11f',
        ),

        'ls_vert_fonce' => array(
            'label' => 'Vert foncé',
            'default' => '#304a3c',
        ),

        'ls_bleu_fonce' => array(
            'label' => 'Bleu foncé',
            'default' => '#0a4275',
        ),

        'ls_baladins' => array(
            'label' => 'Baladins',
            'default' => '#00a0de',
        ),

        'ls_louveteaux' => array(
            'label' => 'Louveteaux',
            'default' => '#296f52',
        ),

        'ls_eclaireurs' => array(
            'label' => 'Éclaireurs',
            'default' => '#004f9f',
        ),

        'ls_pionniers' => array(
            'label' => 'Pionniers',
            'default' => '#d51317',
        ),
		
		'ls_staffunite' => array(
            'label' => 'Staff d\'Unité',
            'default' => '#A0CDEB',
        ),

        'ls_mondial' => array(
            'label' => 'Mondial',
            'default' => '#622599',
        ),
		
		'ls_mainunite' => array(
            'label' => 'Couleur d\'Unité',
            'default' => '#001976',
        ),

        'ls_prune' => array(
            'label' => 'Prune',
            'default' => '#4e1d4f',
        ),

        'ls_orange' => array(
            'label' => 'Orange',
            'default' => '#ef7b00',
        ),

        'ls_gris' => array(
            'label' => 'Gris',
            'default' => '#809aaf',
        ),

        'ls_turquoise' => array(
            'label' => 'Turquoise',
            'default' => '#2b99a4',
        ),

        'ls_bleu_clair' => array(
            'label' => 'Bleu clair',
            'default' => '#15adea',
        ),

        'ls_rouge' => array(
            'label' => 'Rouge',
            'default' => '#d60f3c',
        ),

        'ls_rose' => array(
            'label' => 'Rose',
            'default' => '#e03f7b',
        )

    );
}

function scout_unite_customize_colors($wp_customize) {

	$colors = scout_unite_colors();

    $wp_customize->add_section(
        'scout_unite_colors',
        array(
            'title'    => 'Couleurs du thème',
            'priority' => 30,
        )
    );

    foreach ($colors as $id => $color) {

        $wp_customize->add_setting(
            $id,
            array(
                'default' => $color['default'],
                'sanitize_callback' => 'sanitize_hex_color',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                $id,
                array(
                    'label' => $color['label'],
                    'section' => 'scout_unite_colors',
                )
            )
        );
    }
}

add_action(
    'customize_register',
    'scout_unite_customize_colors'
);

function hex_to_rgb($hex) {

    $hex = str_replace('#', '', $hex);

    if (strlen($hex) == 3) {

        $r = hexdec(str_repeat(substr($hex, 0, 1), 2));
        $g = hexdec(str_repeat(substr($hex, 1, 1), 2));
        $b = hexdec(str_repeat(substr($hex, 2, 1), 2));

    } else {

        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
    }

    return "$r, $g, $b";
}

function scout_unite_custom_colors_css() {

	$colors = scout_unite_colors();

    echo '<style id="scout-theme-colors">:root{';

    foreach ($colors as $name => $color) {

    $value = get_theme_mod(
        $name,
        $color['default']
    );

    echo '--bs-' . str_replace('_', '-', $name)
        . ':' . esc_attr($value) . ';';

    echo '--bs-' . str_replace('_', '-', $name)
        . '-rgb:' . hex_to_rgb($value) . ';';
	}

    echo '}</style>';
}

add_action(
    'wp_head',
    'scout_unite_custom_colors_css'
);

function scout_unite_dynamic_classes_css() {

    echo '<style id="scout-theme-dynamic-classes">';

    foreach (scout_unite_colors() as $id => $color) {

        $slug = str_replace('_', '-', $id);

        echo "

        .btn-$slug{
            background-color:var(--bs-$slug)!important;
            border-color:var(--bs-$slug)!important;
        }
		
		.btn-outline-$slug{
			color:var(--bs-$slug)!important;
			border-color:var(--bs-$slug)!important;
		}

        .link-$slug{
            color:var(--bs-$slug)!important;
        }

        .border-$slug{
            border-color:var(--bs-$slug)!important;
        }
		
		.text-$slug{
			color:var(--bs-$slug)!important;
		}
		
		.bg-$slug{
			background-color:var(--bs-$slug)!important;
		}
		";
    }

    echo '</style>';
}

add_action(
    'wp_head',
    'scout_unite_dynamic_classes_css'
);

function scout_unite_editor_palette() {

    $palette = array();

    foreach (scout_unite_colors() as $id => $color) {

        $palette[] = array(
            'name'  => $color['label'],
            'slug'  => str_replace('_', '-', $id),
            'color' => get_theme_mod(
                $id,
                $color['default']
            ),
        );
    }

    add_theme_support(
        'editor-color-palette',
        $palette
    );
}

add_action(
    'after_setup_theme',
    'scout_unite_editor_palette'
);

?>
