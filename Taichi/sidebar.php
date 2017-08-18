<aside id="sidebar">
	
<?php dynamic_sidebar('primary');?>
<blockquote><p><?php if(get_post_meta($post->ID, 'Book', true)):?>
	My Favotite Book </p></blockquote>
	<?php endif;?>
	
<?php if (get_post_meta($post->ID, 'Pull-Quote', true)): ?>
<blockquote><?php echo get_post_meta($post->ID, 'Pull-Quote', true); ?></blockquote>
<?php endif; ?>
	
</aside>
        