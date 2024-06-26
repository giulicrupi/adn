<?php get_header(); ?>
	
	<section class="banner-vagas">
		<div class="container">
			<div class="row">
				<div class="col-lg-5 p-0">
					<div class="content">
						<p class="title">Trabalhe com a gente!</p>
						<div class="texto">
							<p>Aqui na ADN valorizamos as diferenças, proporcionamos oportunidades e reconhecemos quem faz a diferença. Somos um verdadeiro celeiro de talentos. Geramos empregos, negócios e movimentamos a economia das cidades em que atuamos. #SejaADN, transforme a sua carreira e venha fazer parte da construtora que mais cresce no Estado de São Paulo. Faça parte de um time vencedor!</p>
						</div>
						<div class="botao">
							<a href="https://platform.senior.com.br/hcmrs/hcm/curriculo/?tenant=adnconstrutoracombr&tenantdomain=adnconstrutora.com.br&utm_source=Pessoas#!/vacancies/list" target="_blank">
							<div class="centro">
								<button>
									<span>Confira nossas <b>vagas</b></span>
								</button>												
							</div>
						</a>
						</div>	
					</div>
				</div>
				<div class="col-lg-7 p-0">
					<div class="img" style="background: url(<?php echo site_url(); ?>/wp-content/uploads/2024/06/1e1f5c3cb7f199d58b84743ff312899a-1.png);">
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="sect1-vagas">
		<div class="container">
			<p class="title text-center">Nossa Cultura</p>
					<?php 	get_template_part( 'templates-part/cultura' ) ?>	
				<div class="botao">
		
					<a href="<?php echo site_url(); ?>/institucional">
					<div class="centro">
						<button>
							<span>Mais sobre a  <b>ADN</b></span>
						</button>												
					</div>						
					</a>
				
				</div>				
		</div>
	</section>		
	<section class="sect2-vagas">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<p class="title">Processo Seletivo ADN</p>
					<div class="texto">
						<p>O <b>Grupo ADN</b> é formado por pessoas apaixonadas por gerar inovação, sustentabilidade e habitação de qualidade.</p>
						
						 <p>O <b>time de RH</b> tem como objetivo construir um ambiente agradável para trabalhar com times unidos em uma atmosfera mais harmoniosa, incentivando o desenvolvimento e contribuição de novas ideias.</p>
						<br>
						<p>Em 2022, fomos reconhecidos pela pesquisa da Fundação Instituto de Administração – Employee Experience (FIA FEEX) com o selo <b>“Lugares incríveis para trabalhar”</b>. Um dos mais importantes reconhecimentos da excelência de uma empresa na gestão de pessoas. </p>
						<br>
						<p>Nossos desafios são também a nossa dose de energia diária e nos direcionam em prol de um mesmo propósito: Transformar o futuro das pessoas gerando oportunidade e melhor qualidade de vida!</p>						
					</div>
					<div class="link"><a href="https://platform.senior.com.br/hcmrs/hcm/curriculo/?tenant=adnconstrutoracombr&tenantdomain=adnconstrutora.com.br&utm_source=Pessoas#!/vacancies/list" target="_blank">
						Bora ser <b>ADNlovers</b> <3
					</a></div>
				</div>
				<div class="col-lg-6">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/image-17.png" alt="" class="img-fluid">
				</div>
			</div>
			
		</div>
	</section>
	<section class="sect3-vagas">
		<div class="container">
			<p class="title text-center">Depoimentos dos <br> nossos <span>colaboradores</span></p>
			<?php if( have_rows('depoimentos') ): ?>
			    <div class="depoimentos">
			    <?php while( have_rows('depoimentos') ): the_row(); 
			       
			        ?>
			        <div class="item">
			        	<?php the_sub_field('url_do_video'); ?>
			        </div>
			    <?php endwhile; ?>
			    </div>
			<?php endif; ?>			
		</div>
		<button id="prevDepoimentos" class="leftButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/left.svg" alt="" class="img-fluid"></button>	
		<button id="nextDepoimentos" class="rightButton"><img src="<?php echo get_template_directory_uri(); ?>/svg/right.svg" alt="" class="img-fluid"></button>			
	</section>								
	<section class="sect4-vagas">
		<div class="container">
			<p class="title">#EssaVagaéMinha</p>
			<p class="texto">Confira nosso quadro com dicas de como aumentar as suas chances em processo seletivos e conquistar a tão sonhada vaga de emprego</p>

			<?php if( have_rows('essa_vaga_e_minha') ): ?>
			    <div class="row">
			    <?php while( have_rows('essa_vaga_e_minha') ): the_row(); 
			       
			        ?>
			        <div class="col-lg-4 p-0">
			        	<div class="video">
			        		<?php the_sub_field('url_do_video'); ?>
			        	</div>
			        </div>
			    <?php endwhile; ?>
			    </div>
			<?php endif; ?>			
			<div class="botao">
				<a href="https://www.youtube.com/c/ADNConstrutora" target="_blank">
				<div class="centro">
					<button>
						<span>Mais dicas</span>
					</button>												
				</div>
			</a>
			</div>	
		</div>
	</section>
	<section class="sect5-vagas">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/06/Group-1171275079.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6">
					<div class="content">
						<p class="title">Clube de <br> benefícios ADN</p>
						<p class="texto">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel ipsum molestie, dictum dolor ac, vestibulum arcu. Mauris tincidunt sollicitudin diam condimentum.
						</p>
						<div class="botao">

							<a href="#" target="_blank">
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
	<?php 	get_template_part( 'templates-part/sect-blog' ) ?>	
<?php get_footer(); ?>
