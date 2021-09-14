<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
	<?php 
	if ($_SERVER['REQUEST_URI']==='/'){
		if (have_posts()){
			while (have_posts()){
				the_post();?>
				
				<header class="encabezado" style="background-image: linear-gradient( rgba(41 41 41 / 70%), rgba(41 41 41 / 70%)), url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<h1><?php the_title(); ?></h1>
				
					<div class="encabezado__descripcion">
						<?php the_content(); ?>
					</div>
				</header>
				
			<?php }
		}
	}else{
		if (have_posts()){
			while (have_posts()){
				the_post();?>
				
				<header class="encabezado encabezado--page" style="background-image: linear-gradient( rgba(41 41 41 / 70%), rgba(41 41 41 / 70%)), url(<?php echo get_the_post_thumbnail_url(); ?>);">
					<span><a href="<?php echo get_home_url(); ?>"><?php echo get_bloginfo( 'name' ); ?></a></span>
					<h1><?php the_title(); ?></h1>
				</header>
				
			<?php }
		}
	}
	?>
