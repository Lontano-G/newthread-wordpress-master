<?php get_header() ?>

	<div class="cate-sec">
		<div class="cateseccon">
			<div class="singleart">
	   			<?php if (have_posts()) : the_post(); update_post_caches($posts); ?>

				<h3><?php the_title(); ?></h3>
				<span class="authormes">发表时间：<?php the_time('Y年n月j日') ?> &nbsp&nbsp 




					<?php
						$author = get_post_meta($post->ID, 'author', true);
						if($author){
						echo '作者：'.$author;
						}else{
							echo '作者：newthread';
						}
					?>



				 &nbsp&nbsp阅读量：<?php echo getPostViews(get_the_ID()); ?></span>
				<p><?php the_content(); ?><?php setPostViews(get_the_ID()); ?></p>
				<?php else : ?>
			  <!--   <div class="errorbox">
			        没有文章！
			    </div> -->
	    		<?php endif; ?>
			</div>
			
		</div>
	</div>
	
	<script type="text/javascript">
		$(function(){
			$("html,body").css({scrollTop:0},1000);
			$(".slidePic").find("li").css("width",$(window).width());
			$(".slideBoxs").css("width",$(window).width());
		})
	</script>
	<script type="text/javascript" src="./js/index.js"></script>
<?php get_header(2) ?>

<?php get_footer() ?>