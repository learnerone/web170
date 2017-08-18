<?php get_header("header.php"); ?>

<div id="content">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="postmetadata">
                           	<span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                            <span class="cat"><?php the_category(', ') ?></span>
                            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                        </p>
<?php the_post_thumbnail('thumbnail'); ?> 
<?php the_excerpt(''); ?>
<?php endwhile; endif; ?>
</div>

<?php get_sidebar();?>

<?php get_footer("footer.php"); ?>