<?php get_header(); 
$imagemBanner = get_field('imagem_do_banner');
$imagemBannerMobile = get_field('imagem_do_banner_mobile');
$imagemApresentacaoDigital = get_field('imagem_da_apresentacao_digital');
?>

<?php 

	$ficha_tecnica = have_rows('ficha_tecnica', false);
	if (!empty($ficha_tecnica)) {
?>	
	<div class="modal fade" id="ficha-tecnica" tabindex="-1" aria-labelledby="ficha-tecnicaLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-lg tecnica">
	    <div class="modal-content">
	      <div class="modal-header">
	        <p class="modal-title fs-5" id="ficha-tecnicaLabel">Ficha Técnica</p>
	        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
	      </div>
	      <div class="modal-body">
			<div class="row">
				<?php if( have_rows('ficha_tecnica') ): ?>
				   
				    <?php while( have_rows('ficha_tecnica') ): the_row(); 
				    
				        ?>
				        <div class="col-lg-6">
				            <div class="topico">
								<p class="nome-top"><?php the_sub_field('nome_do_topico'); ?>:</p>
								<p class="text-ficha"><?php the_sub_field('topico'); ?></p>
					           		            	
				            </div>			
				        </div>
				    <?php endwhile; ?>
				    
				<?php endif; ?>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
<?php } ?>


	<section class="banner-single">

		<div class="slide" id="desk">
			<div class="centro" style="background: url(<?php echo $imagemBanner['url']; ?>);">
				<div class="overlay">
					<div class="container">
						<div class="alinhamento">
						<div class="row">
							<div class="col-lg-6 padding">
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
							<div class="col-lg-6 padding">
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


					</div>
				</div>							
			</div>
		</div>
		<div class="slide" id="mob">
			<div class="centro" style="background: url(<?php echo $imagemBannerMobile['url']; ?>);">
				<div class="overlay">
					<div class="container">
						<div class="alinhamento">
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


					</div>
				</div>							
			</div>
		</div>		
					

					


	</section>

	<?php 

		$galeria_de_fachadas = get_field('galeria_de_fachadas', false);
		if (!empty($galeria_de_fachadas)) {
	?>		
	<section class="sect1-single">
		<img src="<?php echo get_template_directory_uri(); ?>/svg/forma-amarela-prod.svg" alt="" class="img-fluid forma">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="content">
						<p class="nome-prod"><?php the_title(); ?></p>
						<p class="endereco"><?php the_field('endereco'); ?></p>
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

							<?php if( have_rows('informacoes_adicionais') ): ?>
							    
							    <?php while( have_rows('informacoes_adicionais') ): the_row(); 
							        $image = get_sub_field('icone');
							        ?>
							        
							        	<div class="quarto">
							        		<div class="icon">
							        			<img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
							        		</div>
							        		<p><?php the_sub_field('texto'); ?></p>
							        	</div>
							        	
							       
							    <?php endwhile; ?>
							
							<?php endif; ?>																																	
						</div>	
						<div class="texto-conceito">
							<?php the_field('texto_conceito'); ?>
						</div>
					<?php 

						$ficha_tecnica = have_rows('ficha_tecnica', false);
						if (!empty($ficha_tecnica)) {
					?>									
						<div class="botao" data-bs-toggle="modal" data-bs-target="#ficha-tecnica"> 
							<a href="#">
								<div class="linha">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
										  <path d="M8.33272 28.4598H21.667C24.266 28.4598 25.5592 27.154 25.5592 24.5298V5.4827C25.5592 2.87109 24.266 1.54016 21.667 1.54016H8.33272C5.74623 1.54016 4.44043 2.87109 4.44043 5.4827V24.5298C4.44043 27.154 5.74623 28.4598 8.33272 28.4598ZM8.43316 26.4383C7.13989 26.4383 6.46189 25.7477 6.46189 24.4921V5.52036C6.46189 4.27734 7.13989 3.56163 8.4457 3.56163H21.5665C22.8723 3.56163 23.5378 4.26475 23.5378 5.52036V24.4921C23.5378 25.7477 22.8723 26.4383 21.5791 26.4383H8.43316ZM10.2537 8.80996H19.771C20.2105 8.80996 20.5495 8.45843 20.5495 8.01893C20.5495 7.59202 20.2105 7.26561 19.771 7.26561H10.2537C9.78916 7.26561 9.4627 7.59202 9.4627 8.01893C9.4627 8.45843 9.78916 8.80996 10.2537 8.80996ZM10.2537 13.1919H19.771C20.2105 13.1919 20.5495 12.8404 20.5495 12.4009C20.5495 11.974 20.2105 11.6476 19.771 11.6476H10.2537C9.78916 11.6476 9.4627 11.974 9.4627 12.4009C9.4627 12.8404 9.78916 13.1919 10.2537 13.1919ZM10.2537 17.5739H14.7613C15.2007 17.5739 15.5397 17.2349 15.5397 16.808C15.5397 16.3686 15.2007 16.0295 14.7613 16.0295H10.2537C9.78916 16.0295 9.4627 16.3686 9.4627 16.808C9.4627 17.2349 9.78916 17.5739 10.2537 17.5739Z" fill="#2F2F2F"/>
										</svg>								
									</div>
									<p>Ver <b>ficha técnica</b></p>									
								</div>					
							</a>
						</div>	
				<?php } ?>		
					<?php 

						$numero_whatsapp = get_field('numero_whatsapp', false);
						if (!empty($numero_whatsapp)) {
					?>					
						<div class="botao-whats">
							<a href="https://api.whatsapp.com/send?phone=<?php the_field('numero_whatsapp'); ?>" target="_blank">
								<div class="linha">
									<div class="icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="43" height="43" viewBox="0 0 43 43" fill="none">
											  <g clip-path="url(#clip0_850_487)">
											    <path fill-rule="evenodd" clip-rule="evenodd" d="M34.0152 30.3604C33.497 31.8271 31.4373 33.0405 29.7947 33.3953C28.6703 33.6341 27.2039 33.8229 22.2632 31.7755C16.7141 29.4765 9.00851 21.2871 9.00851 15.8374C9.00851 13.063 10.6081 9.83247 13.4053 9.83247C14.7512 9.83247 15.0479 9.85872 15.4908 10.9211C16.0089 12.1728 17.2731 15.2567 17.4236 15.5728C18.045 16.8696 16.7915 17.6288 15.882 18.7579C15.5918 19.0977 15.2629 19.4652 15.6305 20.0975C15.996 20.7169 17.2602 22.7772 19.1178 24.4311C21.5172 26.5688 23.4629 27.2513 24.1595 27.5416C24.6777 27.7567 25.2969 27.7066 25.6753 27.3023C26.1548 26.784 26.7503 25.924 27.3566 25.0767C27.7844 24.4702 28.3284 24.3945 28.8982 24.6095C29.283 24.7429 34.1742 27.0144 34.3806 27.3779C34.5333 27.6424 34.5333 28.8936 34.0152 30.3604ZM21.5043 0H21.4935C9.64059 0 0 9.6435 0 21.5C0 26.2013 1.51577 30.563 4.09362 34.1008L1.41471 42.0898L9.67717 39.4496C13.0763 41.6992 17.1333 43 21.5043 43C33.3573 43 43 33.3565 43 21.5C43 9.6435 33.3573 0 21.5043 0Z" fill="white"/>
											  </g>
											  <defs>
											    <clipPath id="clip0_850_487">
											      <rect width="43" height="43" fill="white"/>
											    </clipPath>
											  </defs>
											</svg>							
									</div>
									<p>Converse <br>pelo <b>WhatsApp</b></p>									
								</div>					
							</a>
						</div>	
					<?php } ?>							
												
					</div>
				</div>
				<div class="col-lg-6">
					<div class="fachada">
					<div class="galeria-fachadas">
						<?php 
						$images = get_field('galeria_de_fachadas');
						if( $images ): ?>
						        <?php foreach( $images as $image_id ): ?>
						            <div class="item">
						            	<a href="<?php echo  $image_id['url']; ?>" data-fancybox="galeria">
							                <div class="img" style="background: url(<?php echo  $image_id['url']; ?>);">
							                	
							                </div>						            		
						            	</a>
						            </div>
						        <?php endforeach; ?>
						<?php endif; ?>
					</div>
					<button id="prevFachada" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>	
					<button id="nextFachada" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>								
					</div>											
				</div>
			</div>
		</div>
	</section>		
	<?php } ?>
	<?php 

		$fotos = get_field('fotos', false);
		if (!empty($fotos)) {
	?>		
	<section class="sect2-single">
		<div class="container">
			<p class="title">Galeria de <span>imagens</span></p>
			<ul class="nav nav-tabs" id="myTab" role="tablist">
			  <li class="nav-item">
			    <a class="nav-link active" id="Fotos-tab" data-toggle="tab" href="#Fotos" role="tab" aria-controls="Fotos" aria-selected="true">Fotos</a>
			  </li>
				<?php 

					$plantas = get_field('plantas', false);
					if (!empty($plantas)) {
				?>				  
				  <li class="nav-item">
				    <a class="nav-link" id="Plantas-tab" data-toggle="tab" href="#Plantas" role="tab" aria-controls="Plantas" aria-selected="false">Plantas</a>
				  </li>
				<?php } ?>  
				<?php 

					$implantacao = get_field('implantacao', false);
					if (!empty($implantacao)) {
				?>				
				  <li class="nav-item">
				    <a class="nav-link" id="imp-tab" data-toggle="tab" href="#imp" role="tab" aria-controls="imp" aria-selected="false">Implantação</a>
				  </li>
				<?php } ?> 
				<?php 

					$tour_virtual = get_field('tour_virtual', false);
					if (!empty($tour_virtual)) {
				?>					 
				  <li class="nav-item">
				    <a class="nav-link" id="tour-tab" data-toggle="tab" href="#tour" role="tab" aria-controls="tour" aria-selected="false">Tour Virtual</a>
				  </li>
				<?php } ?>  
				<?php 

					$youtube = get_field('youtube', false);
					if (!empty($youtube)) {
				?>				
				  <li class="nav-item">
				    <a class="nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">Vídeo</a>
				  </li>
				<?php } ?>  
			</ul>

			<div class="tab-content" id="myTabContent">
			  <div class="tab-pane fade show active" id="Fotos" role="tabpanel" aria-labelledby="Fotos-tab">
					<div class="row">
					    <div class="col-lg-9 p-0">
					        <div class="slider-galeria">
								<?php 
								$images = get_field('fotos');
								if( $images ): ?>

								        <?php foreach( $images as $image_id ): ?>
								        	<div class="item">
									           <a href="<?php echo $image_id['url']; ?>" data-fancybox="galeria-fotos">
									           	 <div class="img" style="background: url(<?php echo $image_id['url']; ?>);">
									               
									            </div>	
									           </a>							        		
								        	</div>
								        <?php endforeach; ?>
								<?php endif; ?>					                       
					        </div>
					    </div>                  
					    <div class="col-lg-3 p-0">
					        <div class="slider-galeria-thumbs">
								<?php 
								$images = get_field('fotos');
								if( $images ): ?>

								        <?php foreach( $images as $image_id ): ?>
								        	<div class="item">
									            <div class="img" style="background: url(<?php echo $image_id['url']; ?>);">
									               
									            </div>								        		
								        	</div>
								        <?php endforeach; ?>
								<?php endif; ?>		
					        </div>
					    </div>
					</div>	
					<div class="topicos">
						<button id="prevGaleria" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>
					<div id="customDots"></div>
					<button id="nextGaleria" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>
					</div>	

			  </div>
				<?php 

					$plantas = get_field('plantas', false);
					if (!empty($plantas)) {
				?>				  
			  <div class="tab-pane fade" id="Plantas" role="tabpanel" aria-labelledby="Plantas-tab">
					<div class="row">
					    <div class="col-lg-12 p-0">
					        <div class="slider-planta">
								<?php 
								$images = get_field('plantas');
								if( $images ): ?>

								        <?php foreach( $images as $image_id ): ?>
								        	<div class="item">
									           <a href="<?php echo $image_id['url']; ?>" data-fancybox="galeria-plantas">
									           	 <div class="img" style="background: url(<?php echo $image_id['url']; ?>);">
									               
									            </div>	
									           </a>							        		
								        	</div>
								        <?php endforeach; ?>
								<?php endif; ?>					                       
					        </div>
					    </div>                  

					</div>	
					<div class="topicos">
						<button id="prevPlanta" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>
					<div id="customDotsPlanta"></div>
					<button id="nextPlanta" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>
					</div>				  	
			  </div>
			<?php } ?>
				<?php 

					$implantacao = get_field('implantacao', false);
					if (!empty($implantacao)) {
				?>			
			  <div class="tab-pane fade" id="imp" role="tabpanel" aria-labelledby="imp-tab">
					<div class="row">
					    <div class="col-lg-12 p-0">
					        <div class="slider-implantacao">
								<?php 
								$images = get_field('implantacao');
								if( $images ): ?>

								        <?php foreach( $images as $image_id ): ?>
								        	<div class="item">
									           <a href="<?php echo $image_id['url']; ?>" data-fancybox="galeria-implantacao">
									           	 <div class="img" style="background: url(<?php echo $image_id['url']; ?>);">
									               
									            </div>	
									           </a>							        		
								        	</div>
								        <?php endforeach; ?>
								<?php endif; ?>					                       
					        </div>
					    </div>                  

					</div>	
					<div class="topicos">
						<button id="prevImplantacao" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>
					<div id="customDotsImplantacao"></div>
					<button id="nextImplantacao" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>
					</div>			  	
			  </div>
			<?php } ?>
				<?php 

					$tour_virtual = get_field('tour_virtual', false);
					if (!empty($tour_virtual)) {
				?>				
				  <div class="tab-pane fade" id="tour" role="tabpanel" aria-labelledby="tour-tab">
				  	<iframe src="<?php the_field('tour_virtual'); ?>" frameborder="0"></iframe>
				  </div>
				<?php } ?>  
				<?php 

					$youtube = get_field('youtube', false);
					if (!empty($youtube)) {
				?>					
				  <div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
				  	<?php the_field('youtube'); ?>
				  </div>
				<?php } ?>  
			</div>

	</section>
	<?php } ?>
	<?php 

		$comuns = have_rows('comuns', false);
		if (!empty($comuns)) {
	?>		
	<section class="sect3-single">
		<div class="container">

			<div class="row">
				<div class="col-lg-8">
					<div class="content">
				<p class="title">Características</p>					
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="Comum-tab" data-toggle="tab" href="#Comum" role="tab" aria-controls="Comum" aria-selected="true">Comum</a>
						  </li>
							<?php 

								$lazer = have_rows('lazer', false);
								if (!empty($lazer)) {
							?>							  
							  <li class="nav-item">
							    <a class="nav-link" id="Lazer-tab" data-toggle="tab" href="#Lazer" role="tab" aria-controls="Lazer" aria-selected="false">Lazer</a>
							  </li>
							<?php } ?>  
							<?php 

								$andamento = have_rows('andamento', false);
								if (!empty($andamento)) {
							?>								
							  <li class="nav-item">
							    <a class="nav-link" id="Acabamento-tab" data-toggle="tab" href="#Acabamento" role="tab" aria-controls="Acabamento" aria-selected="false">Acabamento</a>
							  </li>
							<?php } ?>  
							<?php 

								$sustentabilidade = have_rows('sustentabilidade', false);
								if (!empty($sustentabilidade)) {
							?>								
							  <li class="nav-item">
							    <a class="nav-link" id="Sustentabilidade-tab" data-toggle="tab" href="#Sustentabilidade" role="tab" aria-controls="Sustentabilidade" aria-selected="false">Sustentabilidade</a>
							  </li>
							<?php } ?>  

						</ul>

						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="Comum" role="tabpanel" aria-labelledby="Comum-tab">
							<div class="row">	
								<?php if( have_rows('comuns') ): ?>

								    <?php while( have_rows('comuns') ): the_row(); 
								        $image = get_sub_field('icone');
								        ?>
								        <div class="col-lg-4">
								            <div class="linha">	
								            	<div class="icon">	
								            		<div class="img-icon" style="background: url(<?php echo $image['url']; ?>);">	</div>
								            	</div>
								            	<p>	<?php 	the_sub_field('topico'); ?></p>		
								            </div>	
								        </div>
								    <?php endwhile; ?>

								<?php endif; ?>
							</div>							  	
						  </div>
							<?php 

								$lazer = have_rows('lazer', false);
								if (!empty($lazer)) {
							?>						  
							  <div class="tab-pane fade" id="Lazer" role="tabpanel" aria-labelledby="Lazer-tab">
								<div class="row">	
									<?php if( have_rows('lazer') ): ?>

									    <?php while( have_rows('lazer') ): the_row(); 
									        $image = get_sub_field('icone');
									        ?>
									        <div class="col-lg-4">
									            <div class="linha">	
									            	<div class="icon">	
									            		<div class="img-icon" style="background: url(<?php echo $image['url']; ?>);">	</div>
									            	</div>
									            	<p>	<?php 	the_sub_field('topico'); ?></p>		
									            </div>	
									        </div>
									    <?php endwhile; ?>

									<?php endif; ?>
								</div>						  	
							  </div>
							<?php } ?>  
							<?php 

								$andamento = have_rows('andamento', false);
								if (!empty($andamento)) {
							?>							
							  <div class="tab-pane fade" id="Acabamento" role="tabpanel" aria-labelledby="Acabamento-tab">
								<div class="row">	
									<?php if( have_rows('andamento') ): ?>

									    <?php while( have_rows('andamento') ): the_row(); 
									        $image = get_sub_field('icone');
									        ?>
									        <div class="col-lg-4">
									            <div class="linha">	
									            	<div class="icon">	
									            		<div class="img-icon" style="background: url(<?php echo $image['url']; ?>);">	</div>
									            	</div>
									            	<p>	<?php 	the_sub_field('topico'); ?></p>		
									            </div>	
									        </div>
									    <?php endwhile; ?>

									<?php endif; ?>
								</div>						  	
							  </div>
							<?php } ?> 
							<?php 

								$sustentabilidade = have_rows('sustentabilidade', false);
								if (!empty($sustentabilidade)) {
							?>								 
							  <div class="tab-pane fade" id="Sustentabilidade" role="tabpanel" aria-labelledby="Sustentabilidade-tab">
								<div class="row">	
									<?php if( have_rows('sustentabilidade') ): ?>

									    <?php while( have_rows('sustentabilidade') ): the_row(); 
									        $image = get_sub_field('icone');
									        ?>
									        <div class="col-lg-4">
									            <div class="linha">	
									            	<div class="icon">	
									            		<div class="img-icon" style="background: url(<?php echo $image['url']; ?>);">	</div>
									            	</div>
									            	<p>	<?php 	the_sub_field('topico'); ?></p>		
									            </div>	
									        </div>
									    <?php endwhile; ?>

									<?php endif; ?>
								</div>							  	
							  </div>
							<?php } ?>  
						
						</div>
						
					</div>
				</div>
				<div class="col-lg-4 p-0">
					<div class="imagem" style="background: url(<?php echo site_url(); ?>/wp-content/uploads/2024/06/AnyConv.com__b0aa89236b1d9549ef4d5725b59efabc-1.jpg);">	</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
	<?php 

		$apresentacao_digital = get_field('apresentacao_digital', false);
		if (!empty($apresentacao_digital)) {
	?>		
	<section class="sect4-single">
		<img src="<?php echo get_template_directory_uri(); ?>/svg/forma-azul2.svg" alt="" class="img-fluid forma">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="imagem-book" style="background: url(<?php echo $imagemApresentacaoDigital['url']; ?>);"></div>
				</div>
				<div class="col-lg-6">
					<div class="content">
						<p class="title">Baixe a <br><span>apresentação virtual</span></p>
						<div class="texto">
							<?php the_field('texto_da_apresentacao_digital'); ?>
						</div>
						<div class="botao">
							<?php 
								$file = get_field('apresentacao_digital');
							 ?>
							<a href="<?php echo $file['url']; ?>" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42" fill="none">
								  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 21C3.5 12.7504 3.5 8.62563 6.06282 6.06282C8.62563 3.5 12.7504 3.5 21 3.5C29.2495 3.5 33.3744 3.5 35.9371 6.06282C38.5 8.62563 38.5 12.7504 38.5 21C38.5 29.2495 38.5 33.3744 35.9371 35.9371C33.3744 38.5 29.2495 38.5 21 38.5C12.7504 38.5 8.62563 38.5 6.06282 35.9371C3.5 33.3744 3.5 29.2495 3.5 21ZM21 10.9375C21.7248 10.9375 22.3125 11.5251 22.3125 12.25V21.3313L25.322 18.322C25.8345 17.8094 26.6654 17.8094 27.178 18.322C27.6906 18.8345 27.6906 19.6654 27.178 20.178L21.928 25.428C21.682 25.6742 21.3481 25.8125 21 25.8125C20.6519 25.8125 20.318 25.6742 20.072 25.428L14.8219 20.178C14.3094 19.6654 14.3094 18.8345 14.8219 18.322C15.3345 17.8094 16.1655 17.8094 16.6781 18.322L19.6875 21.3313V12.25C19.6875 11.5251 20.2751 10.9375 21 10.9375ZM14 28.4375C13.2751 28.4375 12.6875 29.0251 12.6875 29.75C12.6875 30.4748 13.2751 31.0625 14 31.0625H28C28.7248 31.0625 29.3125 30.4748 29.3125 29.75C29.3125 29.0251 28.7248 28.4375 28 28.4375H14Z" fill="#454545"/>
								</svg>		
								<p>Download</p>						
							</a>
						</div>				
					</div>
				</div>
			</div>
		</div>
	</section>		
	<?php } ?>	
	<section class="sect5-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Rectangle-7.jpg" alt="" class="img-fluid border">
				</div>
				<div class="col-lg-8">
					<div class="form">
						<p class="title">
							Fale agora mesmo <br>
							com um <span>corretor</span>							
						</p>				
						<?php echo do_shortcode('[contact-form-7 id="193e82b" title="Formulário pg produto"]'); ?>
					</div>					
				</div>
			</div>
		</div>
	</section>	
	<?php 

		$mapa_incorporado2 = get_field('mapa_incorporado', false);
		if (!empty($mapa_incorporado2)) {
	?>			
		<section class="sect6-single">
			<div class="container">
				<p class="title text-center">Endereço do <span>empreendimento</span></p>
				<p class="endereco text-center"><?php the_field('endereco'); ?></p>
				<div class="mapa">
					<?php echo get_field('mapa_incorporado'); ?>
				</div>
			</div>
		</section>
	<?php } ?>
	<?php 

		$proximidades2 = have_rows('proximidades', false);
		if (!empty($proximidades2)) {
	?>	
	<section class="sect7-single">
		<div class="container">
			<p class="title text-center">Proximidades</p>
			<?php if( have_rows('proximidades') ): ?>
			    <div class="proximidades">
			    <?php while( have_rows('proximidades') ): the_row(); 
			        $image = get_sub_field('imagem_do_local');
			        ?>
			        <div class="item">
			            <div class="content text-center">
			            	<div class="img" style="background: url(<?php echo $image['url']; ?>);">
			            		
			            	</div>
			            	<p class="nome-local"><?php the_sub_field('nome_do_local'); ?></p>
			            	<p class="distancia"><?php the_sub_field('kms_de_distancia'); ?></p>
							<a href="<?php the_sub_field('link_do_local_no_google_maps'); ?>" target="_blank">
			            	<div class="botao">
			            		<div class="icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
									  <path d="M13 0C7.61556 0 3.25 4.36556 3.25 9.75C3.25 11.8702 3.94509 13.8158 5.10047 15.4091C5.12119 15.4473 5.12444 15.4899 5.148 15.5265L11.648 25.2765C11.9494 25.7286 12.4572 26 13 26C13.5428 26 14.0506 25.7286 14.352 25.2765L20.852 15.5265C20.876 15.4899 20.8788 15.4473 20.8995 15.4091C22.0549 13.8158 22.75 11.8702 22.75 9.75C22.75 4.36556 18.3844 0 13 0ZM13 13C11.2052 13 9.75 11.5448 9.75 9.75C9.75 7.95519 11.2052 6.5 13 6.5C14.7948 6.5 16.25 7.95519 16.25 9.75C16.25 11.5448 14.7948 13 13 13Z" fill="white"/>
									</svg>			            			
			            		</div>
			            		<p>Acessar <b>Google Maps</b></p>
			            	</div>								
							</a>				
			            </div>
			        </div>
			    <?php endwhile; ?>
			    </div>
			<?php endif; ?>			
					<button id="prevProx" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>
				
				<button id="nextProx" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>			
		</div>
	</section>	
	<?php } ?>
	<?php 

		$endereco_do_showrrom = get_field('endereco_do_showrrom', false);
		if (!empty($endereco_do_showrrom)) {
	?>		
	<section class="sect8-single">
		<div class="container">
			<p class="title text-center">Visite o <span>Showroom</span></p>
			<div class="endereco">
				<div class="button">
        		<div class="icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
					  <path d="M13 0C7.61556 0 3.25 4.36556 3.25 9.75C3.25 11.8702 3.94509 13.8158 5.10047 15.4091C5.12119 15.4473 5.12444 15.4899 5.148 15.5265L11.648 25.2765C11.9494 25.7286 12.4572 26 13 26C13.5428 26 14.0506 25.7286 14.352 25.2765L20.852 15.5265C20.876 15.4899 20.8788 15.4473 20.8995 15.4091C22.0549 13.8158 22.75 11.8702 22.75 9.75C22.75 4.36556 18.3844 0 13 0ZM13 13C11.2052 13 9.75 11.5448 9.75 9.75C9.75 7.95519 11.2052 6.5 13 6.5C14.7948 6.5 16.25 7.95519 16.25 9.75C16.25 11.5448 14.7948 13 13 13Z" fill="white"/>
					</svg>			            			
        		</div>
        		<p><?php the_field('endereco_do_showrrom'); ?></p>								
				</div>	
			</div>
		</div>
	</section>	
	<?php } ?>
	<?php 

		$cronograma_de_obras = get_field('iframe_da_playlist_de_obras', false);
		if (!empty($cronograma_de_obras)) {
	?>			
	<section class="sect9-single">
		<div class="container">
			<p class="title">Andamento de <span>obra</span></p>

			<div class="cont">
				<?php echo get_field('iframe_da_playlist_de_obras'); ?>
			</div>
		</div>
	</section>
	<?php } ?>
	<?php 

		$empreendimentos_sugeridos = get_field('empreendimentos_sugeridos', false);
		if (!empty($empreendimentos_sugeridos)) {
	?>	
	<section class="sect10-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="title">Empreendimentos <span>semelhantes</span></p>
				</div>
				<div class="col-lg-6">
					<div class="btn-todos">
						<div class="botao">
							<a href="<?php echo site_url(); ?>/produtos/">
								<button>Ver todos</button>
								<span class="mais">+</span>
							</a>
						</div>						
					</div>
				</div>
			</div>	
			<div class="semelhantes">
				<?php
				$featured_posts = get_field('empreendimentos_sugeridos');
				if( $featured_posts ){ ?>
				    
				    <?php foreach( $featured_posts as $featured_post ): 
				        $permalink = get_permalink( $featured_post->ID );
				        $title = get_the_title( $featured_post->ID );
				        $thumbnail = get_the_post_thumbnail_url( $featured_post->ID );
				        $comando_de_produto = get_field( 'comando_de_produto', $featured_post->ID );
				        $vagas = get_field( 'vagas', $featured_post->ID );
				        $metragem = get_field( 'metragem', $featured_post->ID );
				        ?>
						<div class="item ">
							<a href="<?php echo esc_url( $permalink ); ?>">
								<div class="card-prod">
									<div class="img" style="background-image: url(<?php echo $thumbnail; ?>);">
										<div class="categoria">
											<p>
						                        <?php 

						                            $terms = get_the_terms( $featured_post->ID, 'produtos-status' );
						                            if ( !empty( $terms ) ){
						                                // get the first term
						                                $term = array_shift( $terms );
						                                  echo $term->name ;
						                            }

						                         ?>														
											</p>				
										</div>
									</div>
									<div class="infos">
										<div class="centro">
											<div class="local">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="17" height="22" viewBox="0 0 17 22" fill="none">
													  <path d="M8.5 0C3.80588 0 0 3.69394 0 8.25C0 10.044 0.605979 11.6903 1.61323 13.0384C1.63129 13.0708 1.63412 13.1068 1.65467 13.1378L7.32133 21.3878C7.58413 21.7704 8.02683 22 8.5 22C8.97317 22 9.41587 21.7704 9.67867 21.3878L15.3453 13.1378C15.3662 13.1068 15.3687 13.0708 15.3868 13.0384C16.394 11.6903 17 10.044 17 8.25C17 3.69394 13.1941 0 8.5 0ZM8.5 11C6.93529 11 5.66667 9.76869 5.66667 8.25C5.66667 6.73131 6.93529 5.5 8.5 5.5C10.0647 5.5 11.3333 6.73131 11.3333 8.25C11.3333 9.76869 10.0647 11 8.5 11Z" fill="white"/>
													</svg>														
												</div>
												<p>
							                        <?php 

							                            $terms = get_the_terms( $featured_post->ID, 'produtos-bairro' );
							                            if ( !empty( $terms ) ){
							                                // get the first term
							                                $term = array_shift( $terms );
							                                  echo $term->name ;
							                            }

							                         ?>														
												</p>														
											</div>												
										</div>
										<p class="nome-prod"><?php echo $title; ?></p>
										<div class="content">
										<div class="comandos">
											<div class="quarto">
												<div class="icon">
													<svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none">
													  <path d="M1.80001 0C1.20517 0 0.72001 0.47168 0.72001 1.05V5.88438C1.18688 5.49062 1.77751 5.17207 2.52001 4.92188V3.5C2.52001 2.56895 4.15547 2.45 5.58 2.45C7.00453 2.45 8.64 2.56895 8.64 3.5V4.2C8.76094 4.19863 8.87625 4.2 9 4.2C9.12375 4.2 9.23906 4.19863 9.36 4.2V3.5C9.36 2.56895 10.9955 2.45 12.42 2.45C13.8445 2.45 15.48 2.56895 15.48 3.5V4.91094C16.2211 5.15977 16.8089 5.48516 17.28 5.88438V1.05C17.28 0.47168 16.7948 0 16.2 0H1.80001ZM9 4.9C2.12626 4.9 -0.0056139 6.13594 1.1096e-05 9.45H18C18.0056 6.11406 15.8737 4.9 9 4.9ZM1.1096e-05 10.15V14H2.52001V12.6C2.52001 12.0969 2.72251 11.9 3.24001 11.9H14.76C15.2775 11.9 15.48 12.0969 15.48 12.6V14H18V10.15H1.1096e-05Z" fill="white"/>
													</svg>													
												</div>
												<p><?php echo $comando_de_produto; ?></p>
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
												<p><?php echo $vagas; ?></p>
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
												<p><?php echo $metragem; ?></p>
											</div>																										
										</div>												
										</div>
										<div class="botao">
								
											<div class="centro">
												<button>
													<span>Quero conhecer</span> <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="none">
													  <path d="M1 12H29M29 12L17.3333 1M29 12L17.3333 23" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
													</svg>
												</button>												
											</div>
										
										</div>									
									</div>	
								</div>
							</a>
						</div>				        
				    <?php endforeach; ?>
				  
				<?php } ?>				
			</div>	
					<button id="prevSem" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>
				
				<button id="nextSem" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>					
		</div>
	</section>
	<?php } ?>			
<?php 	get_template_part( 'templates-part/sect4' ) ?>											
<?php get_footer(); ?>