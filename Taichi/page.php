<?php get_header("header.php"); ?>

<div id="content">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
<?php endwhile; endif; ?>
	
<div id="blog">	
<?php 
	global $post;
	$posts = get_posts (array('posts_per_page' => 1));
	foreach ($posts as $post): setup_postdata($post); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
<?php the_excerpt(''); ?>
	<?php endforeach; 
	
wp_reset_postdata();?>
</div>
	
<div id="sidebar">	
<?php get_sidebar();?>   
</div>	

<blockquote><p><?php if(get_post_meta($post->ID, 'Taichi', true)):?>
	Taichi is a great exercise </p></blockquote>
<?php endif;?>
	
</div>
	
<?php get_sidebar(); ?>
<?php get_footer("footer.php"); ?>