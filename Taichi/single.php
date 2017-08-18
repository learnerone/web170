<?php get_header("header.php"); ?>

<div id="content">

	
	<?php if (have_posts()) : ?>
                 
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="post-box">
                        <h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p class="postmetadata">
                            <span class="date">Posted on <?php the_time('F jS, Y') ?></span> in 
                            <span class="cat"><?php the_category(', ') ?></span>
                            <span class="author"><?php _e('By');?> <?php the_author_posts_link(); ?></span>
                            <span class="comments">with <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></span>
                        </p>
						<?php 
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail();
							} 
						?>
                        <?php the_content('More &raquo;'); ?>
							<?php the_tags(); ?>
                        <?php edit_post_link('Edit.', '<p><small>', '</small></p>'); ?>
                        </div>
                    <?php endwhile; ?>
                
                        <nav class="post-nav">
                            <p class="alignleft"><?php next_posts_link('&laquo; Older Posts') ?></p>
                            <p class="alignright"><?php previous_posts_link('Newer Posts &raquo;') ?></p>
                        </nav>
						<?php comments_template(); ?>
                
                 
				
                <?php endif; ?>
	
	
</div>

<?php get_sidebar();?>

<?php get_footer("footer.php"); ?>