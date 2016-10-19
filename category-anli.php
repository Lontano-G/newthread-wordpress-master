<?php get_header() ?>

	<div class="cate-sec">
		<div class="proList">
			<ul>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li>
					<div class="porimg">
						<img src="<?php echo catch_that_image(); ?>" alt="">
					</div>
					<div class="porart">
						<div class="proartcon">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
							<p><?php the_excerpt(); ?></p>
							<a class="progetmore" href="<?php the_permalink(); ?>">查看详情</a>
						</div>
					</div>
				</li>
				<?php endwhile; ?>
				<div class="page_navi"><?php par_pagenavi(3); ?></div>
		    	<?php endif; ?>
			</ul>
		</div>
	</div>
	
<?php get_header(2) ?>
<?php get_footer() ?>