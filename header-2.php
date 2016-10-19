<div class="slideBoxs">
			<div class="slidePic">
				<ul>
				<?php query_posts('cat=24&showposts=5&paged='.$page_num); ?> 
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		        <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt=""></a></li>
				<?php endwhile; ?>
				<?php else : ?>
					<p style="width: 200px;">文章仍在更新中</p>
				<?php endif; ?>
				</ul>
				<div class="dotss">
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(function(){
			$(".slidePic").find("li").css("width",$(window).width());
			$(".slideBoxs").css("width",$(window).width());
			$(".mbx-dh").before($(".slideBoxs"));
			
		})
		</script>