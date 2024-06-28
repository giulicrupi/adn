<?php get_header(); ?>
	<section class="banner-home">
		<div class="banner">	

			<?php		                
				$listagem_home = new WP_Query(array(
					'produtos-destaque' => 'banner-da-homepage',
					'posts_per_page' => 3
				));
				              
				if ($listagem_home->have_posts()) : 
					?>
					<?php while ($listagem_home->have_posts()) : $listagem_home->the_post();
  						$imagemBanner = get_field('imagem_do_banner');
					?> 

						<div class="slide">
							<div class="centro" style="background: url(<?php echo $imagemBanner['url']; ?>);">
								<div class="overlay">
									<div class="container">
		
										<div class="conts">
																					<div class="row">
											<div class="col-lg-6 col-6 padding">
												<div class="local">
													<div class="icon">
														<svg xmlns="http://www.w3.org/2000/svg" width="17" height="22" viewBox="0 0 17 22" fill="none">
														  <path d="M8.5 0C3.80588 0 0 3.69394 0 8.25C0 10.044 0.605979 11.6903 1.61323 13.0384C1.63129 13.0708 1.63412 13.1068 1.65467 13.1378L7.32133 21.3878C7.58413 21.7704 8.02683 22 8.5 22C8.97317 22 9.41587 21.7704 9.67867 21.3878L15.3453 13.1378C15.3662 13.1068 15.3687 13.0708 15.3868 13.0384C16.394 11.6903 17 10.044 17 8.25C17 3.69394 13.1941 0 8.5 0ZM8.5 11C6.93529 11 5.66667 9.76869 5.66667 8.25C5.66667 6.73131 6.93529 5.5 8.5 5.5C10.0647 5.5 11.3333 6.73131 11.3333 8.25C11.3333 9.76869 10.0647 11 8.5 11Z" fill="white"/>
														</svg>														
													</div>
													<p>
								                        <?php 

								                            $terms = get_the_terms( $post->ID, 'produtos-bairro' );
								                            if ( !empty( $terms ) ){
								                                // get the first term
								                                $term = array_shift( $terms );
								                                  echo $term->name ;
								                            }

								                         ?>														
													</p>														
												</div>
											</div>
											<div class="col-lg-6 col-6 padding">
												<div class="categoria">
													<p>
								                        <?php 

								                            $terms = get_the_terms( $post->ID, 'produtos-status' );
								                            if ( !empty( $terms ) ){
								                                // get the first term
								                                $term = array_shift( $terms );
								                                  echo $term->name ;
								                            }

								                         ?>														
													</p>				
												</div>
											</div>
										</div>	
										</div>
										<p class="title"><?php the_title(); ?></p>
										<div class="comandos">
											<div class="quarto">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
													  <path d="M1.80001 0C1.20517 0 0.72001 0.47168 0.72001 1.05V5.88438C1.18688 5.49062 1.77751 5.17207 2.52001 4.92188V3.5C2.52001 2.56895 4.15547 2.45 5.58 2.45C7.00453 2.45 8.64 2.56895 8.64 3.5V4.2C8.76094 4.19863 8.87625 4.2 9 4.2C9.12375 4.2 9.23906 4.19863 9.36 4.2V3.5C9.36 2.56895 10.9955 2.45 12.42 2.45C13.8445 2.45 15.48 2.56895 15.48 3.5V4.91094C16.2211 5.15977 16.8089 5.48516 17.28 5.88438V1.05C17.28 0.47168 16.7948 0 16.2 0H1.80001ZM9 4.9C2.12626 4.9 -0.0056139 6.13594 1.1096e-05 9.45H18C18.0056 6.11406 15.8737 4.9 9 4.9ZM1.1096e-05 10.15V14H2.52001V12.6C2.52001 12.0969 2.72251 11.9 3.24001 11.9H14.76C15.2775 11.9 15.48 12.0969 15.48 12.6V14H18V10.15H1.1096e-05Z" fill="white"/>
													</svg>													
												</div>
												<p><?php the_field('comando_de_produto'); ?></p>
											</div>	
											<div class="quarto">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
													  <path d="M4.02506 16.5668C4.02506 16.5668 3.93215 17.2593 4.02506 17.5882C4.0896 17.8165 4.15156 18.2011 4.39881 18.2011H5.787C6.03425 18.2011 6.09621 17.8165 6.16075 17.5882C6.25366 17.2595 6.16075 16.5668 6.16075 16.5668" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													  <path d="M18.7081 9.92749H4.29194C3.11243 9.92749 2.15625 10.8421 2.15625 11.9703V14.5239C2.15625 15.6522 3.11243 16.5668 4.29194 16.5668H18.7081C19.8876 16.5668 20.8438 15.6522 20.8438 14.5239V11.9703C20.8438 10.8421 19.8876 9.92749 18.7081 9.92749Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													  <path d="M16.8393 16.5668C16.8393 16.5668 16.7464 17.2593 16.8393 17.5882C16.9038 17.8165 16.9658 18.2011 17.213 18.2011H18.6012C18.8485 18.2011 18.9104 17.8165 18.975 17.5882C19.0679 17.2595 18.975 16.5668 18.975 16.5668" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													  <path d="M5.0929 14.5239C5.68266 14.5239 6.16077 14.0666 6.16077 13.5025C6.16077 12.9384 5.68266 12.481 5.0929 12.481C4.50313 12.481 4.02502 12.9384 4.02502 13.5025C4.02502 14.0666 4.50313 14.5239 5.0929 14.5239Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													  <path d="M4.29199 9.92749L5.52005 5.33105C5.72992 4.54556 6.64772 3.79889 7.4956 3.79889H15.5045C16.3524 3.79889 17.2702 4.54556 17.4801 5.33105L18.7082 9.92749" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													  <path d="M17.9071 14.5239C18.4969 14.5239 18.975 14.0666 18.975 13.5025C18.975 12.9384 18.4969 12.481 17.9071 12.481C17.3173 12.481 16.8392 12.9384 16.8392 13.5025C16.8392 14.0666 17.3173 14.5239 17.9071 14.5239Z" stroke="white" stroke-width="0.5" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>											
												</div>
												<p><?php the_field('vagas'); ?></p>
											</div>	
											<div class="quarto">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
													  <g clip-path="url(#clip0_113_124)">
													    <path d="M13.5433 4.24963H0.944896C0.422952 4.24963 0 4.65025 0 5.14476V17.0801C0 17.5746 0.422952 17.9753 0.944896 17.9753H13.5433C14.0652 17.9753 14.4882 17.5746 14.4882 17.0801V5.14476C14.4882 4.65025 14.0652 4.24963 13.5433 4.24963ZM12.5984 16.1849H1.88975V6.03989H12.5984V16.1849Z" fill="white"/>
													    <path d="M18.8127 15.084H17.7879V4.63712H18.8127C18.8884 4.63712 18.9567 4.59398 18.9856 4.52759C19.0148 4.46116 18.9988 4.38507 18.945 4.33413L17.2905 2.76674C17.2173 2.69738 17.0986 2.69738 17.0254 2.76674L15.3709 4.33413C15.3171 4.3851 15.3011 4.46116 15.3303 4.52759C15.3593 4.59398 15.4276 4.63712 15.5032 4.63712H16.5281V15.084H15.5032C15.4276 15.084 15.3593 15.1271 15.3303 15.1936C15.3012 15.26 15.3171 15.3361 15.3709 15.3871L17.0254 16.9545C17.0986 17.0239 17.2173 17.0239 17.2905 16.9545L18.945 15.3871C18.9988 15.3361 19.0148 15.2601 18.9856 15.1936C18.9567 15.1271 18.8884 15.084 18.8127 15.084Z" fill="white"/>
													    <path d="M2.73192 3.46285C2.78572 3.51383 2.86601 3.52899 2.93617 3.5013C3.00628 3.47395 3.05182 3.40924 3.05182 3.33754V2.36664H14.0791V3.33754C14.0791 3.40924 14.1246 3.47395 14.1947 3.5013C14.2649 3.52899 14.3451 3.51383 14.399 3.46285L16.0535 1.89546C16.1267 1.82607 16.1267 1.71357 16.0535 1.64425L14.399 0.0768989C14.3451 0.0258879 14.2649 0.0107274 14.1947 0.0384117C14.1246 0.0658032 14.0791 0.130473 14.0791 0.202174V1.17314H3.05182V0.202174C3.05182 0.13051 3.00632 0.0658032 2.93617 0.0384117C2.86605 0.0107274 2.78572 0.0258879 2.73192 0.0768989L1.07749 1.64425C1.00428 1.71357 1.00428 1.82607 1.07749 1.89546L2.73192 3.46285Z" fill="white"/>
													  </g>
													  <defs>
													    <clipPath id="clip0_113_124">
													      <rect width="19" height="18" fill="white"/>
													    </clipPath>
													  </defs>
													</svg>										
												</div>
												<p><?php the_field('metragem'); ?></p>
											</div>																										
										</div>	
										<div class="botao">
											<a href="<?php the_permalink(); ?>">
												<button><span>Quero conhecer</span> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="none">
  <path d="M1 12H29M29 12L17.3333 1M29 12L17.3333 23" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg></button>
											</a>
										</div>	
									</div>
								</div>							
							</div>
						</div>
					
				<?php endwhile; ?>		
			<?php wp_reset_postdata(); ?>	
			<?php endif; ?>
					
		</div>	
		<button id="prevBanner" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>	
		<button id="nextBanner" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>	
	</section>				
	<section class="sect1">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="content">
						<p class="title">
							Selecione a cidade <br>
							do seu <span>apê!</span>							
						</p>
						<div class="form">
							<?php get_template_part( 'templates-part/filtro' ); ?>
						</div>			
					</div>
				</div>
				<div class="col-lg-6">
					<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Group-1171275076.png" alt="" class="img-fluid"> -->
					<svg class="forma-1" xmlns="http://www.w3.org/2000/svg" width="117" height="266" viewBox="0 0 117 266" fill="none">
					<path d="M117 65.3136V236.899C117 259.268 92.6496 273.252 73.1652 262.067L16.8637 229.741C6.42776 223.748 0 212.671 0 200.686V29.1009C0 6.73201 24.3504 -7.25185 43.8348 3.93924L100.136 36.2661C110.572 42.2582 117 53.3293 117 65.3136Z" fill="#FFD100"/>
					</svg>	
					<svg class="forma-2" xmlns="http://www.w3.org/2000/svg" width="94" height="215" viewBox="0 0 94 215" fill="none">
					  <g clip-path="url(#clip0_194_204)">
					    <path d="M94 52.791V191.479C94 209.559 74.4364 220.861 58.7823 211.821L13.5486 185.693C5.16418 180.849 0 171.895 0 162.209V23.5213C0 5.44119 19.5636 -5.86155 35.2177 3.18388L80.4514 29.3127C88.8358 34.156 94 43.1044 94 52.791Z" fill="#0071CE"/>
					  </g>
					  <defs>
					    <clipPath id="clip0_194_204">
					      <rect width="94" height="215" fill="white"/>
					    </clipPath>
					  </defs>
					</svg>									
					<div class="mascara" style="-webkit-mask-image: url(<?php echo site_url(); ?>/wp-content/uploads/2024/06/Vector-1-1.png);">	
						<video id="myVideo" width="100%" autoplay="autoplay" muted="false" playsinline="" loop="">
					            <source src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/RENDER_FOTOS_ADN.mp4" type="video/mp4">
					     </video>
					</div>	
				</div>
			</div>
		</div>
	</section>			
	<section class="sect2">
		<div class="container">
			<div class="linha">
				<div class="title">
					<p >Empreedimentos <span>ADN</span></p>
					<div class="filtro">
				<!-- 	    <form action="<?php echo esc_url(home_url('/')); ?>" method="get" id="filter-form">
					        <select name="produtos-bairro" id="bairro" onchange="this.form.submit()">
					            <option >Selecione a cidade...</option>
					            <?php
					            $terms = get_terms(array(
					                'taxonomy' => 'produtos-bairro',
					                'hide_empty' => false,
					            ));
					            foreach ($terms as $term) {
					                echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
					            }
					            ?>
					        </select>
					    </form> -->
					    <?php echo render_produtos_local_filter(); ?>
					</div>
				
				</div>
				<div class="botao">
					<a href="<?php echo site_url(); ?>/produtos">
						<button>Ver todos</button>
						<span class="mais">+</span>
					</a>
				</div>
			</div>
			<div id="produtos-padrao">
				<div class="produtos " >
						<?php		                
						$listagem_home = new WP_Query(array(
							'post_type' => 'produtos',
							'posts_per_page' => 3
						));
						              
						if ($listagem_home->have_posts()) : 
							?>
							<?php while ($listagem_home->have_posts()) : $listagem_home->the_post();
		  						
							?> 

							<div class="item">
								<?php 

									$imagem_do_banner = have_rows('imagem_do_banner', false);
									if (!empty($imagem_do_banner)) {
								?>									
									<a href="<?php the_permalink(); ?>">
								<?php 	} ?>		
									<?php get_template_part( 'templates-part/cardProd' ); ?>
							<?php 

									$imagem_do_banner = have_rows('imagem_do_banner', false);
									if (!empty($imagem_do_banner)) {
								?>										
								</a>
							<?php 	} ?>	
							</div>
							
						<?php endwhile; ?>		
					<?php wp_reset_postdata(); ?>	
					<?php endif; ?>				
				</div>
				<button id="prevProdutos" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>	
				<button id="nextProdutos" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>								
			</div>

			<div class="resultado-filtros  " id="resultado-filtros"></div>
		</div>
	</section>
	<section class="sect3">
		<img src="<?php echo get_template_directory_uri(); ?>/svg/forma-azul.svg" alt="" class="img-fluid forma1">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 col-4 order-lg-1 order-2 p-r">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Rectangle-7-1.png" alt="" class="img-fluid" id="desk">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Rectangle-7-2.png" alt="" class="img-fluid" id="mob">
				</div>
				<div class="col-lg-7 col-8 order-lg-2 order-1 p-l">
					<div class="form">
						<p class="title">
							Fale agora mesmo <br>
							com um <span>corretor</span>							
						</p>				
						<?php echo do_shortcode('[contact-form-7 id="07df5c8" title="Formulário Home Page"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/svg/forma-amarela.svg" alt="" class="img-fluid forma2">
	</section>

		<?php 	get_template_part( 'templates-part/sect4' ) ?>	
	<section class="sect5">
		<div class="cont container"></div>
		<div class="container fluido">
			<p class="title">Veja os depoimentos de <br> quem já comprou:</p>
			<?php if( have_rows('comentarios') ): ?>
			    <div class="comentarios">
			    <?php while( have_rows('comentarios') ): the_row(); 
			        $image = get_sub_field('imagem_do_cliente');
			        ?>
			        <div class="item">
			        	<div class="depoimento">	
			        		<div class="head-dep">	
				        		<div class="stars">	<i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i> <i class="fa-solid fa-star"></i></div>
				        		<div class="nota">	
				        			<p>5/5</p>
				        		</div>	
			        		</div>
			        		<div class="comentario">
			        			<p>	<?php  the_sub_field('comentario');	 ?></p>	
			        		</div>	
			        		<div class="footer-dep">	
			        			<div class="img">
			        				<div class="center" style="background: url(<?php echo $image['url'];  ?>);">	
			        					
			        				</div>	
			        			</div>
			        			<div class="desc">	
			        				<p class="nome-cliente"><?php the_sub_field('nome_do_cliente'); ?></p>

			        				<p class="cargo"><?php the_sub_field('cargo'); ?></p>	
			        			</div>	
			        		</div>							
			        	</div>
			        </div>
			    <?php endwhile; ?>
			    </div>
			<?php endif; ?>
					<button id="prevComentarios" class="leftButton"><i class="fa-solid fa-chevron-left"></i></button>	
					<button id="nextComentarios" class="rightButton"><i class="fa-solid fa-chevron-right"></i></button>			
		</div>
	</section>				
		<?php 	get_template_part( 'templates-part/sect-blog' ) ?>			

<script>
jQuery(document).ready(function($) {
    const produtosLocalFilter = $('#produtos-local-filter');
    const resultadoFiltros = $('#resultado-filtros');
    const produtosDefault = $('#produtos-padrao'); 

    // Função para inicializar o Slick.js
    function initializeSlick() {
          $(".produtos2").slick({
        centerMode: false,
        slidesToShow: 3 ,
        arrows: true,
        infinite: false,
        
          prevArrow: '#prevProdutos2',
          nextArrow: '#nextProdutos2',           
      
          responsive: [
            {
              breakpoint: 500,
              settings: {
              slidesToShow: 1,
               centerPadding: '120px',
               centerMode: true,
              
              }
            }
          ]});
    }

    produtosLocalFilter.on('change', function() {
        const cidadeSlug = produtosLocalFilter.val();
        if (cidadeSlug !== '') {
            $.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                method: 'GET',
                data: {
                    action: 'buscar_resultados',
                    cidade: cidadeSlug
                },
                success: function(response) {
                    resultadoFiltros.html(response);
                    produtosDefault.hide();
                    // Re-inicializa o Slick.js após o carregamento do conteúdo via AJAX
                    initializeSlick();
                }
            });
        } else {
            resultadoFiltros.empty();
            produtosDefault.show();
        }
    });

    // Inicializa o Slick.js na carga inicial da página
    initializeSlick();
});

</script>


<?php get_footer(); ?>









