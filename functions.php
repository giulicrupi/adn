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


 	wp_enqueue_script( 'font-js','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js');
 	
 	wp_enqueue_style( 'slick-css','http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
 	// wp_enqueue_style( 'pointer-css','/wp-content/themes/Arqosv2/sass/pointer.css');
 	wp_enqueue_style( 'fancy-box-css','https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css');
 	wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.14.0/css/all.css');
 	




 	// Google Fonts
 	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000');
 	
    // Enfileira o script customizado
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true );

    // Localiza os parâmetros do AJAX
    wp_localize_script('custom-script', 'ajax_params', array(
        'ajax_url' => admin_url('admin-ajax.php')
    ));
    wp_add_inline_script('fancybox-script', 'jQuery(document).ready(function($) { $(".fancybox").fancybox({
        thumbs : {
            autoStart : true,
            axis      : "x"
        }
    }); });');


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




function render_produtos_local_filter() {
    $terms = get_terms(array(
        'taxonomy' => 'produtos-bairro',
        'hide_empty' => false,
    ));

    if (is_wp_error($terms)) {
        echo 'Erro ao obter termos: ' . $terms->get_error_message();
        return;
    }

    if (!empty($terms)) {
        $archive_link = get_post_type_archive_link('produtos');
        ?>
        <form action="<?php echo esc_url($archive_link); ?>" method="get" id="produtos-local-form">
            <select name="produtos-local-filter" id="produtos-local-filter">
                <option value="">Selecione a cidade..</option>
                <?php foreach ($terms as $term) : ?>
                    <?php
                    $posts_with_term = get_posts(array(
                        'post_type' => 'produtos',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'produtos-bairro',
                                'field' => 'slug',
                                'terms' => $term->slug,
                            ),
                        ),
                    ));

                    if (!empty($posts_with_term)) {
                        ?>
                        <option value="<?php echo esc_attr($term->slug); ?>"><?php echo esc_html($term->name); ?></option>
                        <?php
                    }
                    ?>
                <?php endforeach; ?>
            </select>
        </form>
        <?php
    }
}

// Função para carregar resultados de filtragem por AJAX
add_action('wp_ajax_buscar_resultados', 'buscar_resultados_callback');
add_action('wp_ajax_nopriv_buscar_resultados', 'buscar_resultados_callback');



function buscar_resultados_callback() {
    $cidade_slug = sanitize_text_field($_GET['cidade']);
    $cidade_term = get_term_by('slug', $cidade_slug, 'produtos-bairro');

    ob_start();

    if ($cidade_term) {
        

        $args = array(
            'post_type' => 'produtos',
            'tax_query' => array(
                array(
                    'taxonomy' => 'produtos-bairro',
                    'field' => 'slug',
                    'terms' => $cidade_slug,
                ),
            ),
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            echo  '     <button id="prevProdutos2" class="leftButton"><img src=" '.  get_template_directory_uri() . '/svg/left.svg" alt="" class="img-fluid"></button>   
        <button id="nextProdutos2" class="rightButton"><img src="'.  get_template_directory_uri() . '/svg/right.svg" alt="" class="img-fluid"></button> ';
            echo '<div class="produtos2">';
            while ($query->have_posts()) {
                $query->the_post();
                echo '<div class="item">';?>
                          <a href="<?php the_permalink(); ?>">
                           <?php get_template_part( 'templates-part/cardProd' ); ?>    
                           </a>
              <?php  echo '</div>';
            }
            echo '</div>';
            wp_reset_postdata();
        } else {
            echo '<p>Nenhum produto encontrado nessa cidade.</p>';
        }
    }

    $content = ob_get_clean();
    echo $content;

    wp_die();
}



function dynamic_taxonomy_values( $tag, $unused ) {
    if ( $tag['name'] != 'cidade' ) {
        return $tag;
    }

    $args = array(
        'taxonomy'     => 'produtos-bairro',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => true,
    );

    $terms = get_terms( $args );

    if ( ! $terms ) {
        return $tag;
    }

    foreach ( $terms as $term ) {
        // Get the value of 'id empreendimento fake' using Advanced Custom Fields
        $id_empreendimento_fake = get_field( 'id_empreendimento_fake', 'produtos-bairro_' . $term->term_id );

        $tag['raw_values'][] = $id_empreendimento_fake;
        $tag['values'][] = $id_empreendimento_fake;
        $tag['labels'][] = $term->name;
    }

    return $tag;
}

add_filter( 'wpcf7_form_tag', 'dynamic_taxonomy_values', 10, 2 );


function calculate_reading_time() {
  // Obtém o conteúdo do post
  $content = get_the_content();

  // Remove tags HTML para calcular apenas o texto
  $text = wp_strip_all_tags($content);

  // Define a velocidade média de leitura em palavras por minuto
  $words_per_minute = 200;

  // Calcula o tempo estimado de leitura em minutos
  $reading_time = ceil(str_word_count($text) / $words_per_minute);

  // Retorna o tempo estimado de leitura
  if ($reading_time <= 1) {
    return $reading_time . ' min';
  } else {
    return $reading_time . ' min';
  }
}


function load_contact_form() {
    if (isset($_POST['topic'])) {
        $topic = sanitize_text_field($_POST['topic']);
        
        switch ($topic) {
            case 'comprar':
                echo do_shortcode('[contact-form-7 id="b40f49d" title="Contato"]');
                break;
            case 'relacionamento':
                echo do_shortcode('[contact-form-7 id="a2036f0" title="Relacionamento com o cliente"]');
                break;
            case 'terreno':
                echo do_shortcode('[contact-form-7 id="ca5ae4d" title="Venda seu terreno"]');
                break;
            default:
                echo 'Opção inválida';
        }
    }
    wp_die();
}
add_action('wp_ajax_load_contact_form', 'load_contact_form');
add_action('wp_ajax_nopriv_load_contact_form', 'load_contact_form');


add_action( 'wpcf7_init', 'custom_add_form_tag_customlist' );

function custom_add_form_tag_customlist() {
    wpcf7_add_form_tag( array( 'customlist', 'customlist*' ), 
'custom_customlist_form_tag_handler', true );
}


function custom_customlist_form_tag_handler( $tag ) {

    $tag = new WPCF7_FormTag( $tag );

    if ( empty( $tag->name ) ) {
        return '';
    }

    $customlist = '';

    $query = new WP_Query(array(
        'post_type' => 'produtos',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'orderby'       => 'title',
        'order'         => 'ASC',
    ));

    while ($query->have_posts()) {
        $query->the_post();
        $post_title = get_the_title();
        $customlist .= sprintf( '<option value="%1$s">%2$s</option>', 
esc_html( $post_title ), esc_html( $post_title ) );
    }

    wp_reset_query();

    $customlist = sprintf(
        '<select name="%1$s" id="%2$s"><option value="">Empreendimento de interesse</option>   %3$s </select> ', $tag->name,
    $tag->name . '-options',
        $customlist );

    return $customlist;
}

//use this tag in your form
//[customlist your-field-name]



function add_svg_to_upload_mimes($upload_mimes) {
    $upload_mimes['svg'] = 'image/svg+xml';
    return $upload_mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');


function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');


function add_webp_upload_mimes($upload_mimes) {
    $upload_mimes['webp'] = 'image/webp';
    return $upload_mimes;
}
add_filter('upload_mimes', 'add_webp_upload_mimes');






// function enqueue_custom_admin_script() {
//     wp_enqueue_script('youtube-playlist', get_template_directory_uri() . '/js/youtube-playlist.js', array('jquery'), null, true);
//     wp_localize_script('youtube-playlist', 'youtubeApi', array(
//         'apiKey' => 'AIzaSyAkb5OTlwEJhsjSaJV_iWJg1ynXT3ERm4s', // Substitua pela sua chave de API
//     ));
// }
// add_action('acf/input/admin_enqueue_scripts', 'enqueue_custom_admin_script');
