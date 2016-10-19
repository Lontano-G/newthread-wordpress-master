$(function(){
	$(".navBar").children("ul").children(".menu-item-has-children").children("a").append("<i class='conmark'> &nbsp</i>");
	$(".navBar").children("ul").children(".menu-item-has-children").mouseover(function(){
		$(this).find("ul").stop();
		$(this).find("ul").css({"display":"block"})
		// $(this).find("ul").animate({"opacity":1,"margin-top":"10px"})
	});
	$(".navBar").children("ul").children(".menu-item-has-children").mouseout(function(){
			$(this).find("ul").css({"opacity":1,"display":"none","margin-top":"0px"})
		});
})

jQuery.extend( jQuery.easing,  
{  
    easeOutExpo: function (x, t, b, c, d) {  
        return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b;  
    },  
    easeOutBounce: function (x, t, b, c, d) {  
        if ((t/=d) < (1/2.75)) {  
            return c*(7.5625*t*t) + b;  
        } else if (t < (2/2.75)) {  
            return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;  
        } else if (t < (2.5/2.75)) {  
            return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;  
        } else {  
            return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;  
        }  
    } 
}); 

$(function(){
	var slidePicsbList = $(".slidePicsb").find("li");
	var len = slidePicsbList.length;
	var picWidth = $(slidePicsbList[0]).width();
	var nowIndex = 0;
	var inode = "<i class='iactive'></i>";

	for(var i=1;i<len;i++){
		inode = inode + "<i></i>";
	}
	$(".dots").html(inode);
	$(".dots").css("margin-left",-$(".dots").width()/2);
	console.log($(slidePicsbList[0]).width()*len);
	$($(".slidePicsb").find("ul")[0]).css("width",len * $(slidePicsbList[0]).width()); 
	var dots = $(".dots").find("i");
	$($(".dots").find("i")[nowIndex]).css("background-color","#2288dd");
	for(var i=0;i<dots.length;i++){
		dots[i].index = i;
		$(dots[i]).click(function(){
			clearInterval(timer);
			timer = "";
			nowIndex = this.index;
			move(nowIndex);
		})
	}
	var timer = setInterval(function(){
		nowIndex = (nowIndex+1)%len;
		move(nowIndex);
	},4000);
	function move(index){
		$(".slidePicsb").find("ul").stop();
		var orignopacity = $(".pic-desc").css("opacity");
			$(".pic-desc").css({"display":"none","opacity":0});
			for(var j=0;j<dots.length;j++){
				$(dots[j]).css("background-color","black");
			}
			$($(".dots").find("i")[nowIndex]).css("background-color","#2288dd");
			$(".slidePicsb").find("ul").animate({"margin-left":-picWidth * index},
				800,
				function(){
					var orginleft = $(".pic-desc").css("left");
					$(".pic-desc").css("left",0);
					$(".pic-desc").find("p").css("margin-left",200);
					$(".pic-desc").css("display","block");
					$(".pic-desc").animate({"left":orginleft,"opacity":1},600);
					$(".pic-desc").find("p").animate({"margin-left":0},600);
					if(!timer){
							timer = setInterval(function(){
							nowIndex = (nowIndex+1)%len;
							move(nowIndex);
						},4000);
					}
			})
	}
})
$(function(){
	var slidePicsb1List = $(".slidePicsb1").find("li");
	var len = slidePicsb1List.length;
	var picWidth = $(slidePicsb1List[0]).width();
	var nowIndex = 0;
	var inode = "<i class='iactive'></i>";

	for(var i=1;i<len;i++){
		inode = inode + "<i></i>";
	}
	$(".dots1").html(inode);
	$(".dots1").css("margin-left",-$(".dots1").width()/2);
	console.log($(slidePicsb1List[0]).width()*len);
	$($(".slidePicsb1").find("ul")[0]).css("width",len * $(slidePicsb1List[0]).width()); 
	var dots1 = $(".dots1").find("i");
	$($(".dots1").find("i")[nowIndex]).css("background-color","#2288dd");
	for(var i=0;i<dots1.length;i++){
		dots1[i].index = i;
		$(dots1[i]).click(function(){
			clearInterval(timer);
			timer = "";
			nowIndex = this.index;
			move(nowIndex);
		})
	}
	var timer = setInterval(function(){
		nowIndex = (nowIndex+1)%len;
		move(nowIndex);
	},4000);
	function move(index){
		$(".slidePicsb1").find("ul").stop();
		var orignopacity = $(".pic-desc1").css("opacity");
			$(".pic-desc1").css({"display":"none","opacity":0});
			for(var j=0;j<dots1.length;j++){
				$(dots1[j]).css("background-color","black");
			}
			$($(".dots1").find("i")[nowIndex]).css("background-color","#2288dd");
			$(".slidePicsb1").find("ul").animate({"margin-left":-picWidth * index},
				800,
				function(){
					var orginleft = $(".pic-desc1").css("left");
					$(".pic-desc1").css("left",0);
					$(".pic-desc1").find("p").css("margin-left",200);
					$(".pic-desc1").css("display","block");
					$(".pic-desc1").animate({"left":orginleft,"opacity":1},600);
					$(".pic-desc1").find("p").animate({"margin-left":0},600);
					if(!timer){
							timer = setInterval(function(){
							nowIndex = (nowIndex+1)%len;
							move(nowIndex);
						},4000);
					}
			})
	}
})
$(function(){
	var slidePicsb2List = $(".slidePicsb2").find("li");
	var len = slidePicsb2List.length;
	var picWidth = $(slidePicsb2List[0]).width();
	var nowIndex = 0;
	var inode = "<i class='iactive'></i>";

	for(var i=1;i<len;i++){
		inode = inode + "<i></i>";
	}
	$(".dots2").html(inode);
	$(".dots2").css("margin-left",-$(".dots2").width()/2);
	console.log($(slidePicsb2List[0]).width()*len);
	$($(".slidePicsb2").find("ul")[0]).css("width",len * $(slidePicsb2List[0]).width()); 
	var dots2 = $(".dots2").find("i");
	$($(".dots2").find("i")[nowIndex]).css("background-color","#2288dd");
	for(var i=0;i<dots2.length;i++){
		dots2[i].index = i;
		$(dots2[i]).click(function(){
			clearInterval(timer);
			timer = "";
			nowIndex = this.index;
			move(nowIndex);
		})
	}
	var timer = setInterval(function(){
		nowIndex = (nowIndex+1)%len;
		move(nowIndex);
	},4000);
	function move(index){
		$(".slidePicsb2").find("ul").stop();
		var orignopacity = $(".pic-desc2").css("opacity");
			$(".pic-desc2").css({"display":"none","opacity":0});
			for(var j=0;j<dots2.length;j++){
				$(dots2[j]).css("background-color","black");
			}
			$($(".dots2").find("i")[nowIndex]).css("background-color","#2288dd");
			$(".slidePicsb2").find("ul").animate({"margin-left":-picWidth * index},
				800,
				function(){
					var orginleft = $(".pic-desc2").css("left");
					$(".pic-desc2").css("left",0);
					$(".pic-desc2").find("p").css("margin-left",200);
					$(".pic-desc2").css("display","block");
					$(".pic-desc2").animate({"left":orginleft,"opacity":1},600);
					$(".pic-desc2").find("p").animate({"margin-left":0},600);
					if(!timer){
							timer = setInterval(function(){
							nowIndex = (nowIndex+1)%len;
							move(nowIndex);
						},4000);
					}
			})

	}
})


$(function(){
	var navBar = $(".navBar");
	var navBarList= $(".navBar").find("li");

	var navBarListLen = $(navBarList[0]).width();
	var Dvalue = (navBarListLen - navBarListLen/2)/2;
	for(var i=0;i<navBarList.length;i++){
		navBarList[i].index = i;
		$(navBarList[i]).mouseover(function(){
			$(".navMarker").stop();
			$(".navMarker").animate({"left":this.index * navBarListLen + Dvalue},100,'easeOutExpo');
		});
		$(navBarList[i]).mouseleave(back);
	} 
	function back(){
			for(var i=0;i<navBarList.length;i++){
				if($(navBarList[i]).hasClass("active")){
					$(".navMarker").animate({"left":navBarList[i].index * navBarListLen + Dvalue},300);
				}
			}
		}
	$(".navMarker").css("width",navBarListLen/2);
	
	for(var i=0;i<navBarList.length;i++){
		if($(navBarList[i]).hasClass("active")){
			$(".navMarker").css("left",navBarList[i].index * navBarListLen + Dvalue);
		}
	}
	
})

$(function(){

	var slidePicList = $(".slidePic").find("li");
	var len = slidePicList.length;
	var picWidth = $(slidePicList[0]).width();
	var nowIndex = 0;
	var inode = "<i class='iactive'></i>";

	for(var i=1;i<len;i++){
		inode = inode + "<i></i>";
	}
	$(".dotss").html(inode);
	$(".dotss").css("margin-left",-$(".dotss").width()/2);
	console.log($(slidePicList[0]).width()*len);
	$($(".slidePic").find("ul")[0]).css("width",len * $(slidePicList[0]).width()); 
	var dotss = $(".dotss").find("i");
	$($(".dotss").find("i")[nowIndex]).css("background-color","white");
	for(var i=0;i<dotss.length;i++){
		dotss[i].index = i;
		$(dotss[i]).click(function(){
			clearInterval(timer);
			timer = "";
			nowIndex = this.index;
			move(nowIndex);
		})
	}
	var timer = setInterval(function(){
		nowIndex = (nowIndex+1)%len;
		move(nowIndex);
	},6000);
	function move(index){
		$(".slidePic").find("ul").stop();
			for(var j=0;j<dotss.length;j++){
				$(dotss[j]).css("background-color","black");
			}
			$($(".dotss").find("i")[nowIndex]).css("background-color","white");
			$(".slidePic").find("ul").animate({"margin-left":-picWidth * index},
				800,
				function(){
					if(!timer){
							timer = setInterval(function(){
							nowIndex = (nowIndex+1)%len;
							move(nowIndex);
						},6000);
					}
			})
	}
})

$(document).ready(function(){
	// $(window).scrollTo("0px");
	var cateseccon = $(".cateseccon").find("li").children("div");
	if( $(window).scrollTop()>200){
				for(var i=0;i<cateseccon.length;i++){
					$(cateseccon[i]).animate({"float":"left","margin-left":"0px"});
					$(cateseccon[i + 1]).animate({"float":"right","margin-right":"0px"});
				}
			}
})















