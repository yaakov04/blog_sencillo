<?php get_header(); ?>
<main class="contenedor">
	<?php if (have_posts()){
				while (have_posts()){
					the_post();?>
					
					<div class="contenido contenido--post">
						<?php the_content(); ?>				
					</div>
					
				<?php }
			}?>
</main>
 <?php get_footer(); ?>
