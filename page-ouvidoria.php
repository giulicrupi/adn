<?php get_header(); ?>
<section class="sect-form-ouvi" style="background: url(<?php echo site_url(); ?>/wp-content/uploads/2024/07/ouvidoria.jpg);">
	<div class="container">
		<p class="title text-center">Ouvidora <span>ADN</span></p>
		<p class="texto text-center">Envie sua manifestação no formulário abaixo</p>
		<div class="row">
			<div class="col-lg-6">
				<div class="conteudo">
					<p class="title-sec">Como podemos te ajudar?</p> 
					<p class="normal">Na ADN Construtora, valorizamos sua opinião. Seja para elogios, sugestões ou para apontar algo que não esteja em conformidade, criamos um espaço dedicado para ouvir você diretamente. Nosso objetivo é garantir um atendimento ágil e eficiente.</p> <br>
					<p class="normal">Nossa empresa é fundamentada em dois valores essenciais: Transparência e Excelência. Comprometemo-nos em buscar soluções eficazes para assegurar sua completa satisfação.</p> <br>
					<p class="normal">Após preencher os campos, nossa equipe de Relacionamento ao Cliente entrará em contato com você prontamente.</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form">
					<?php echo do_shortcode('[contact-form-7 id="fdc529e" title="Ouvidoria"]'); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>

