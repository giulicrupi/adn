<?php 


function pd_produtos_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/bootstrap.min.js', array( 'jquery' ), '4.4.1', true );



		wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array('jquery'), filemtime(get_template_directory() . '/js/menu.js'), true);


	


	
	wp_enqueue_script( 'jquery2','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'boot-js','https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script( 'slick-carousel','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js');
	wp_enqueue_script( 'fancybox-js','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js');
		// wp_enqueue_script( 'pointer-js','/wp-content/themes/Arqosv2/js/pointer.js');

	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '4.4.1', 'all' );

	wp_enqueue_style( 'galeria-css', get_template_directory_uri() . '/css/galeria.css', array(), '4.4.1', 'all' );



wp_enqueue_style('730-style-sass', get_template_directory_uri() . '/sass/style.css', array(), filemtime(get_template_directory() . '/sass/style.css'), false);


 	wp_enqueue_script( 'flickity-js','https://flickity.metafizzy.co/flickity.pkgd.min.js');
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	


 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000');
 	


}
add_action( 'wp_enqueue_scripts', 'pd_produtos_scripts' );

add_theme_support('title-tag');






// Create custom post type
function create_postype_banners() {
    $supports = array( 'title', 'editor', 'thumbnail', 'revisions');

    register_post_type( 'banners',
        array(
            'labels' => array(
                'name' => __( 'Banners' ),
                'singular_name' => __( 'Banner' ),
                'menu_name' => _x('Banners', 'admin menu'),
                'name_admin_bar' => _x('Banners', 'admin bar'),
                'add_new' => _x('Adicionar Banner', 'add new'),
                'add_new_item' => __('Adicionar Novo'),
                'new_item' => __('Novo Banner'),
                'edit_item' => __('Editar Banner'),
                'view_item' => __('Ver Banner'),
                'all_items' => __('Todos os Banners'),
                'search_items' => __('Procurar Banners'),
                'not_found' => __('Nenhum Banner encontrado'),                
            ),
            'public' => true,
            'menu_icon'   => 'dashicons-format-gallery',
            'has_archive' => true,
            'rewrite' => array('slug' => 'banners'),
           
            'supports' => $supports,
            'show_ui' => true, // Adicione essa linha para mostrar a interface do usuário
            'show_in_menu' => true, // Adicione essa linha para mostrar no menu
            'show_revisions' => true, // Adicione essa linha para mostrar as revisões
            'show_in_rest' => true,

        )
    );
}
add_action( 'init', 'create_postype_banners' );




// Create custom post type
function create_posttype() {
    $supports = array( 'title', 'editor', 'thumbnail', 'revisions');

    register_post_type( 'produtos',
        array(
            'labels' => array(
                'name' => __( 'Produtos' ),
                'singular_name' => __( 'Produto' ),
                'menu_name' => _x('Produtos', 'admin menu'),
                'name_admin_bar' => _x('Produtos', 'admin bar'),
                'add_new' => _x('Adicionar Produtos', 'add new'),
                'add_new_item' => __('Adicionar Novo'),
                'new_item' => __('Novo Produto'),
                'edit_item' => __('Editar Produto'),
                'view_item' => __('Ver Produto'),
                'all_items' => __('Todos os Produtos'),
                'search_items' => __('Procurar Produtos'),
                'not_found' => __('Nenhum produto encontrado'),                
            ),
            'public' => true,
            'menu_icon'   => 'dashicons-building',
            'has_archive' => true,
            'rewrite' => array('slug' => 'produtos'),
            'taxonomies'  => array( 'produtos-bairro', 'produtos-status', 'produtos-destaque'),
            'supports' => $supports,
            'show_ui' => true, // Adicione essa linha para mostrar a interface do usuário
            'show_in_menu' => true, // Adicione essa linha para mostrar no menu
            'show_revisions' => true, // Adicione essa linha para mostrar as revisões
            'show_in_rest' => true,

        )
    );
}
add_action( 'init', 'create_posttype' );
// Create custom post type


// Create category for specific post type
function tr_create_my_taxonom() {
    register_taxonomy(
        'produtos-bairro',
        'produtos',
        array(
            'label' => __( 'Bairro' ),
            // CHANGED SLUG
            
            'hierarchical' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonom' );


add_theme_support( 'post-thumbnails' );


// Create category for specific post type
function tr_create_my_taxonom2() {
    register_taxonomy(
        'produtos-status',
        'produtos',
        array(
            'label' => __( 'Status' ),
            // CHANGED SLUG
            
            'hierarchical' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonom2' );

// Create category for specific post type
function tr_create_my_taxonom3() {
    register_taxonomy(
        'produtos-destaque',
        'produtos',
        array(
            'label' => __( 'Destaque' ),
            // CHANGED SLUG
            
            'hierarchical' => true,
            'has_archive' => true,
            'show_ui' => true,
            'show_admin_column' => true,
        )
    );
}
add_action( 'init', 'tr_create_my_taxonom3' );


