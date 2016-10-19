<?php 
/**
 * Template Name: zhihuinongye
 */
 ?>
 <?php get_header() ?>
 <div class="cate-sec">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
</div>


<script type="text/javascript">
		$(function(){
			$("html,body").css({scrollTop:0},1000);
			$(".slidePic").find("li").css("width",$(window).width());
			$(".slideBoxs").css("width",$(window).width());
		})
	</script>
	<script type="text/javascript">
	$(function(){
		var cateseccon = $(".cateseccon").find("li").children("div");
		// console.log(cateseccon);
		$(cateseccon).css("display","none");
		for(var i=2;i<cateseccon.length;i++){
			if(i%2 == 0){
				$(cateseccon[i]).css({"float":"left","margin-left":"-550px"});
			}else{
				$(cateseccon[i]).css({"float":"right","margin-right":"-550px"});
			}
		}
		$(cateseccon).css("display","block");
		var index = 0;

		$(window).scroll(function () {
			if ($(window).scrollTop() > index*100){
				for(var i=0;i<=index;i++){
					$(cateseccon[i]).animate({"float":"left","margin-left":"0px"});
					$(cateseccon[i + 1]).animate({"float":"right","margin-right":"0px"});
				}
				index = index + 2;
			}
		});
		window.onload = function(){
			// alert($(window).scrollTop());
			if($.browser.msie) {
			    // 此浏览器为 IE
			    setTimeout(function(){
			    	for(var i=0;i<cateseccon.length;i++){
						$(cateseccon[i]).animate({"float":"left","margin-left":"0px"});
						$(cateseccon[i + 1]).animate({"float":"right","margin-right":"0px"});
					}
			    },1000);
			} 
			
		}
	})

	</script>

<?php get_footer(); ?>