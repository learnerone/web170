<?php get_header("header.php"); ?>

<div id="content">
<?php if (have_posts()): while (have_posts()): the_post(); ?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(''); ?>
	
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
	
<?php endwhile; endif; ?>

</div>

<!--
<aside>
	<div id="accordion">
  <h3>TaiChi Everywhere</h3>
  <div>
    <p>
   Tai Chi can be practiced both indoors and outdoors.
    </p>
  </div>
  <h3>Thai Chi in Every Size</h3>
  <div>
    <p>
    Tai Chi can be practiced both by individuals and in groups.
    </p>
  </div>
  <h3>Tai Chi for Everyone</h3>
  <div>
    <p>
   Tai Chi can be benificial for every age group, gender, and physical ability.
    </p>
</div>
</div>
</aside>
-->

<?php get_footer("footer.php"); ?>