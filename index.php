<?php get_header()?>
<?php get_header(2)?>


		<div class="conlist">
			<div class="longye">
				<a href="<?php bloginfo('url'); ?>/?page_id=106">智慧农业</a>
			</div>
			<div class="gongchang">
				<a href="<?php bloginfo('url'); ?>/?page_id=101">智慧工厂</a>
			</div>
			<div class="chengguo">
				<a href="<?php bloginfo('url'); ?>/?cat=5">科研成果</a>
			</div>
		</div>
		<div class="newscenter">
			<div class="newstitle"></div>
			<div class="h3list">
				<h3 class="active"><strong>中心要闻</strong></h3>
				<h3><strong>通知公告</strong></h3>
				<h3><strong>行业要闻</strong></h3>
			</div>
			
			<div class="newstab">
				<div class="newstabbox">
					<div class="cennews">
						<div class="cenlist">
							<div class="artpicslide">
								<div class="slideBox">
									<div class="slidePicsb">
										<ul>
											<?php query_posts('cat=16&showposts=6&paged='.$page_num); ?> 
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		       								 <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt=""></a><span class="pic-desc"><p><?php the_title() ?></p></span></li>
											<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										</ul>
										<div class="dots">
										</div>
									</div>
								</div>
							</div>
							<div class="artlist">
								<ul>
									<?php query_posts('cat=16&showposts=6&paged=.$page_num'); ?>
									<?php while (have_posts()) : the_post();?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div>
					<div class="noticecen">
						<div class="artpicslide">
							<div class="slideBox">
									<div class="slidePicsb1">
										<ul>
											<?php query_posts('cat=15&showposts=6&paged='.$page_num); ?> 
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		       								 <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt=""></a><span class="pic-desc1"><p><?php the_title() ?></p></span></li>
											<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										</ul>
										<div class="dots1">
										</div>
									</div>
								</div>
							</div>
							<div class="artlist">
								<ul>
									<?php query_posts('cat=15&showposts=6&paged=.$page_num'); ?>
									<?php while (have_posts()) : the_post();?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>
								</ul>
							</div>
					</div>
					<div class="tradecen">
						<div class="artpicslide">
							<div class="slideBox">
									<div class="slidePicsb2">
										<ul>
											<?php query_posts('cat=17&showposts=6&paged='.$page_num); ?> 
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		       								 <li><a href="<?php the_permalink(); ?>"><img src="<?php echo catch_that_image(); ?>" alt=""></a><span class="pic-desc2"><p><?php the_title() ?></p></span></li>
											<?php endwhile; ?>
											<?php else : ?>
											<?php endif; ?>
										</ul>
										<div class="dots2">
										</div>
									</div>
								</div>
							</div>
							<div class="artlist">
								<ul>
									<?php query_posts('cat=17&showposts=6&paged=.$page_num'); ?>
									<?php while (have_posts()) : the_post();?>
									<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
	<div class="aboutus">
		<div class="aboutcon">
			<div class="aboutart">
				<p>湖北省中南民族大学是湖北省国家民委直属的民族类院校，在几所大学中   湖北省中
南民族大学是湖北省国家民委直属的民族类院校，在几所大学中   湖北省中南民族大学
是湖北省国家民委直属的民族类院校，在几所大学中。
   湖北省中南民族大学是湖北省国家民委直属的民族类院校，在几所大学中   湖北省中
南民族大学是湖北省国家民委直属的民族类院校，在几所大学中   湖北省中南民族大学
是湖北省国家民委直属的民族类院校，在几所大学中特别好看，尤其是迷人的风景哈啊
大学是湖北省国家民委直属的民族类院校，在几所大学中   湖北省中南民族大学的地域
是湖北省国家民委直属的民族类院校，在几所大学中特别好看，尤其是迷人哈。</p>
			</div>
			<div class="aboutimg">
				<img src="<?php bloginfo('template_url'); ?>/images/minda.png">
			</div>
		</div>
		<div class="aboutmore"><a href="<?php bloginfo('url'); ?>"></a></div>
	</div>
	<script type="text/javascript">
		$(function(){
			$(".slidePic").find("li").css("width",$(window).width());
			$(".slideBoxs").css("width",$(window).width());
			for(var i = 0;i<$(".h3list").find("strong").length;i++){
				$(".h3list").find("strong")[i].index = i;
			}
			$(".h3list").find("strong").mouseover(function(){
				$(".newstabbox").stop();
				for(var i=0;i<$(".h3list").find("strong").length;i++){
					$(".h3list").find("strong").css({"background-color":"white","color":"black"});
				}
				$($(".h3list").find("strong")[this.index]).css({"background-color":"#2288dd","color":"white"});
				var height = $($(".newstabbox").children("div")[0]).height();
				$(".newstabbox").animate({"top":-height * this.index});
	
			})
		})
	</script>
<?php get_footer() ?>