<?php get_header(); ?>
<section class="banner-sobre" style="background: url(<?php echo site_url(); ?>/wp-content/uploads/2024/06/Group-1171275080.jpg);">
	<div class="container">
		<p class="title">
			<span>Trabalhamos</span> hoje <br>
			para construir os <br> sonhos de <span>amanhã</span>			
		</p>
	</div>				
</section>
<section class="sect1-sobre">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="content">
					<p class="title">Colocamos a felicidade do <br>cliente no centro de tudo 🙂</p>
					<p class="texto">
						Provocar sorrisos, emoções e alegrias é o motor que nos leva cada vez mais longe. Realizar sonhos é o nosso principal combustível.
					</p>
				</div>
			</div>
			<div class="col-lg-5">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Rectangle-6561.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="sect1-vagas">
	<div class="container">
		<?php 	get_template_part( 'templates-part/cultura' ) ?>	
	</div>
</section>
<section class="sect2-sobre">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<p class="title">Nossa atuação</p>
				<p class="texto">Nossa atuação abrange todo o interior do Estado de São Paulo</p>
			</div>
			<div class="col-lg-8">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/image-18.png" alt="" class="img-fluid">
			</div>
		</div>
	</div>
</section>
<section class="sect3-sobre">
	<div class="container">
		<p class="title text-center">Nossa história</p>
		<p class="texto text-center">Temos muita história para contar e muito ainda para acontecer</p>
		<div class="row">
		<?php if( have_rows('nossa_historia') ): ?>
		    
		    <?php while( have_rows('nossa_historia') ): the_row(); 
		    	$icone	= get_sub_field('icone');
		        ?>
				<div class="col-lg-3 p-0">
					<div class="card-historia">

						<div class="centro">
							<div class="icon">
								<div class="center" style="background: url(<?php echo $icone['url']; ?>);"></div>					
							</div>							
							<div class="conteudo">
							<p class="number"> <?php the_sub_field('numero'); ?> </p>
							<p class="menor"> <?php the_sub_field('texto_menor'); ?> </p>								
							</div>
						</div>
					</div>
				</div>
		    <?php endwhile; ?>
		    
		<?php endif; ?>			

		</div>
	</div>
</section>				
<section class="sect4-sobre">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Rectangle-6550.png" alt="" class="img-fluid">
			</div>
			<div class="col-lg-6">
				<div class="conteudo">
					<p class="title">
						Resultados <br>
						Grupo ADN						
					</p>
					<p class="texto">
						Prezando pela transparência, o Grupo ADN, disponibiliza seus resultados através do acesso ao seu balanço contábil e relatório de posicionamento ESG.
					</p>
						<div class="botao">

							<a href="https://materiais.adnconstrutora.com.br/resultados-grupo-adn" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
								  <g clip-path="url(#clip0_1001_513)">
								    <path d="M6.57386 32H18.8022C21.409 32 22.6431 30.6777 22.6431 28.0457V25.7158H25.0988C27.6932 25.7158 28.9903 24.3935 28.9903 21.7615V3.95434C28.9903 1.32234 27.6932 0 25.0988 0H12.9336C10.3393 0 9.02958 1.32234 9.02958 3.95434V6.28411H6.57386C3.97964 6.28411 2.66992 7.60646 2.66992 10.2385V28.0457C2.66992 30.6903 3.97964 32 6.57386 32ZM15.9434 4.44549C15.3893 4.44549 15.1374 4.08029 15.1374 3.70251V3.438C15.1374 3.0476 15.3893 2.69497 15.9434 2.69497H22.089C22.6306 2.69497 22.895 3.0476 22.895 3.438V3.70251C22.895 4.08029 22.6306 4.44549 22.089 4.44549H15.9434ZM6.67461 29.9725C5.37747 29.9725 4.69746 29.2672 4.69746 28.0079V10.2637C4.69746 9.02954 5.37747 8.31171 6.68718 8.31171H11.0571V15.6159C11.0571 17.2027 11.8631 17.9835 13.4247 17.9835H20.6156V28.0079C20.6156 29.2672 19.9355 29.9725 18.6258 29.9725H6.67461ZM13.664 16.0818C13.1603 16.0818 12.9588 15.8803 12.9588 15.3892V8.70206L20.2252 16.0818H13.664Z" fill="#454545"/>
								  </g>
								  <defs>
								    <clipPath id="clip0_1001_513">
								      <rect width="32" height="32" fill="white"/>
								    </clipPath>
								  </defs>
								</svg>	
								<p>Acesse os documentos</p>						
							</a>
						</div>					
				</div>
			</div>
		</div>
	</div>
</section>		
<section class="sect5-sobre">
	<div class="container">
		<p class="title text-center">Nossas premiações e certificações</p>
		<?php if( have_rows('premios') ): ?>
		    <div class="premiacao">
		    <?php while( have_rows('premios') ): the_row(); 
		        $image = get_sub_field('premio');
		        ?>
		        <div class="item">
		        	<div class="img">
		        		<div class="branco">
			        		<div class="centro" style="background: url(<?php echo $image['url']; ?>);">
			        			
			        		</div>		        			
		        		</div>
		        	</div>
		        </div>
		    <?php endwhile; ?>
		    </div>
			<button id="prevPremiacao" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>	
			<button id="nextPremiacao" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>		    
		<?php endif; ?>	

	</div>
</section>	
<?php 	get_template_part( 'templates-part/sect-blog' ) ?>			
<?php get_footer(); ?>