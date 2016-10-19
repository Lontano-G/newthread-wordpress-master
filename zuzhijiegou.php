<?php 
	/**
 * Template Name: zuzhijiegou
 */
 ?>
 <?php get_header() ?>
 <div class="cate-sec">
		<div class="cateseccon">
			<div class="singleart">
		<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>
			
			<p><?php the_content(); ?></p>
		<?php else : ?>
			
	    <?php endif; ?>
			</div>
			
		</div>
</div>

<?php get_footer(); ?>