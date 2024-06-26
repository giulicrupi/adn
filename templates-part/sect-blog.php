	<section class="sect6">
		<div class="container">
			<div class="linha">
				<div class="title">
					<p >Confira nosso <span>Blog</span></p>

				</div>
				<div class="botao">
					<a href="#">
						<button>Ver todos</button>
						<span class="mais">+</span>
					</a>
				</div>
			</div>
			<div class="row">
	     <?php
	          $cont = 0;
	          $args = array(
	              'post_type' => 'post',
	              'posts_per_page' => 3, // Exibir 10 posts na primeira carga
	              'orderby' => 'date',
	              'order' => 'DESC',
	              // 'offset' => 3,
	          );

	          $loop = new WP_Query($args);

	          if ($loop->have_posts()) :
	              while ($loop->have_posts()) : $loop->the_post();
	                  ?>                
	                  <div class="col-lg-4 col-12">	
	                  	<a href="<?php the_permalink(); ?>">
	                  	<div class="card-blog">
							<?php
							// Obtém o conteúdo do post
							$content = get_the_content();

							// Remove as tags HTML
							$content = wp_strip_all_tags($content);

							// Limita o texto a 200 caracteres
							$excerpt = mb_substr($content, 0, 180);
						
							?>

		                  <div class="img" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);">
		                    <div class="linha">
		                      <?php
		                        $categories = get_the_category();
		                        if ($categories) {
		                                
		                          if (!empty($categories)) {
		                              $category = reset($categories);
		                              echo '<div class="categoria"><p>' . $category->name . '</p></div>';
		                          }
		                          
		                        }
		                        ?>                       
		                      
		                        
		                    </div>	                    
		                  </div>
		                  <div class="desc">
		                  	<div class="line">
		                  		<div class="data">
		                  			<div class="quadrado"></div>
		                  			<p class="p"><?php echo get_the_date(); ?></p>
		                  		</div>
		                  		<div class="leitura">
		                  			<div class="quadrado"></div>
		                  			<p class="p"><?php echo calculate_reading_time(); ?></p>
		                  		</div>
		                  	</div>				
		                    <p class="title-blog"><?php the_title(); ?></p>
						    <p class="texto-blog"><?php 	echo $excerpt; ?>...</p>                 
                    
		                  </div>	                  
	                  	</div>	                  		
	                  	</a>
	                  </div>	
	                  <?php
	              endwhile;
	              wp_reset_postdata();
	          endif;
	          ?>   				
			</div>			
		</div>
	</section>	