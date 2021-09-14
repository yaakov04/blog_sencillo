<?php get_header(); ?>
<main>
	
	<div class="contenedor contenido">
		<h2 class="contenido__encabezado">Articulos</h2>
		<div class="entradas">
			<?php
			$args = [
					'post_type' => 'post',
					'post_per_page' => -1,
					'order'=> 'DESC',
					'orderby' => 'date'
				];
				
			$articulos = new WP_Query($args);
			if ($articulos->have_posts()){
				while ($articulos->have_posts()){
					$articulos->the_post(); ?>
				
					<article class="entrada">
						<figure class="entrada__figure"><?php the_post_thumbnail('large'); ?></figure>
						<h3 class="entrada__titular">
							<a href="<?php the_permalink();?>" ><?php the_title(); ?></a>
						</h3>
						<?php
						$excerpt = get_the_excerpt();
						$excerpt = substr($excerpt, 0, 110);
						$excerpt_result = substr($excerpt, 0, strrpos($excerpt, ' '));
						?>
						<p class="entrada__extracto"><?php echo $excerpt_result; ?></p>
					</article>
				
				<?php }
			}
			?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
