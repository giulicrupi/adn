<?php get_header(); ?>

	



	<section class="sect1-produtos">
		<div class="container">
			<p class="title text-center">Encontre aqui seu <span>futuro</span> apê</p>
			<div class="produtos-prod">
				<div class="sub">
					<p>Empreendimentos <span>ADN</span></p>
					<?php get_template_part( 'templates-part/filtro' ); ?>
				</div>
				<?php if (have_posts()) : ?>
				    <div class="row">
				        <?php while (have_posts()) : the_post(); ?>
						<div class="col-lg-4">
							<a href="<?php the_permalink(); ?>">
								<?php get_template_part( 'templates-part/cardProd' ); ?>
							</a>
						</div>
				        <?php endwhile; ?>
				    </div>
				<?php else : ?>
				    <p>Nenhum produto encontrado.</p>
				<?php endif; ?>				
			</div>
		</div>
	</section>

<?php get_footer(); ?>
