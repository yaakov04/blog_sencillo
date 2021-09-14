<?php get_header(); ?>
<main>
	<?php 
	if (have_posts()){
		while (have_posts()){
			the_post();?>
			
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			
			<div>
				<?php the_content(); ?>
			</div>
			
		<?php }
	}
	?>
	<div>
		<h2>Articulos</h2>
		<div>
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
				
				<article>
					<figure><?php the_post_thumbnail('large'); ?></figure>
					<h3>
						<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
					</h3>
				</article>
				
				<?php }
			}
			?>
		</div>
	</div>
</main>
<?php get_footer(); ?>
