<?php get_header(); ?>

<section class="sect1-achive">
	<div class="container text-center">
		<p class="title">Encontre aqui seu <span>futuro</span>apê</p>
		<div class="produto">
			<?php if (have_posts()) : ?>
			    <ul>
			        <?php while (have_posts()) : the_post(); ?>
			            <li>
			                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			            </li>
			        <?php endwhile; ?>
			    </ul>
			<?php else : ?>
			    <p>Nenhum produto encontrado.</p>
			<?php endif; ?>			
		</div>
	</div>
</section>






<?php get_footer(); ?>
