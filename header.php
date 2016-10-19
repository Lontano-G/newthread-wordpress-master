<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php if ( is_home() ) {
        bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	
</head>
<body>
	<div class="header">
		<div class="logo">
			<a href="/newthread"></a>
			<h3>湖北省制造企业智能管理工程技术研究中心</h3>
			<h3>中南民族大学制造企业质量物联检测及数据分析工程技术中心</h3>
		</div>
		<div class="navBar">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>">中心首页</a></li>
				<li class="menu-item-has-children">
					<a>中心概况</a>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=93">中心简介</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=114">发展历程</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=116">组织结构</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=118">科研队伍</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=120">研究领域</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php bloginfo('url'); ?>/?cat=4">新闻中心</a>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/?cat=15">通知公告</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?cat=16">中心要闻</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?cat=17">行业要闻</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php bloginfo('url'); ?>/?cat=5">科研成果</a>
					<ul style="width:104px">
						<li><a href="<?php bloginfo('url'); ?>/?cat=18">科研奖项</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?cat=19">国家专利</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?cat=20">国家软件著作</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?cat=21">学术论文</a></li>
					</ul>
				</li>
				<li class="menu-item-has-children">
					<a href="<?php bloginfo('url'); ?>/?cat=6">成果展示</a>
					<ul>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=101">智能工厂</a></li>
						<li><a href="<?php bloginfo('url'); ?>/?page_id=106">智慧农业</a></li>
					</ul>
				</li>
				<li><a href="<?php bloginfo('url'); ?>/?cat=7">工程案例</a></li>
				<li><a href="<?php bloginfo('url'); ?>/?cat=8">交流合作</a></li>
				<li><a href="<?php bloginfo('url'); ?>/?page_id=112">联系我们</a></li>
			</ul>
		</div>
	</div>
	<div class="body">
		<div class="mbx-dh">
			<?php if (function_exists('cmp_breadcrumbs')) cmp_breadcrumbs(); ?> 
		</div>
	