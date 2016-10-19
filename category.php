<?php get_header() ?>

	<div class="cate-sec">
		<div class="cateseccon">
		<p><?php the_excerpt(); ?></p>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="cateartlist">
				<ul>

					<li>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a><span>


							<?php
								$author = get_post_meta($post->ID, 'authors', true);
								if($author){
								echo '作者：'.$author;
								}else{
									echo '作者：newthread';
								}
							?> 


						 | 日期：<?php the_time('Y年n月j日') ?></span></h3>
						<p><?php the_excerpt(); ?></p>
					</li>
				</ul>
			</div>
			<?php endwhile; ?>
			<div class="page_navi"><?php par_pagenavi(9); ?></div>
		    <?php endif; ?>
			
		</div>
	</div>
	
<?php get_header(2) ?>
<?php get_footer() ?>