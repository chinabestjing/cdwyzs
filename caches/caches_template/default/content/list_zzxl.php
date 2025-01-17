<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
     <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
    <meta name="keywords" content="<?php echo $SEO['keyword'];?>">
    <meta name="description" content="<?php echo $SEO['description'];?>">
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/zzxl/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
    <link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper.min.css">
    	<style>
		/*侧边栏区域*/
.sideWrap {
  width: 120px;
  height: 264px;
  position: absolute;
  top: 440px;
  left: 60px;
  z-index: 222;
}
.sideWrap .vertical {
  width: 10px;
  height: 264px;
  border: 1px solid #e50012;
  box-sizing: border-box;
  border-radius: 4px;
  position: relative;
  float: left;
}
.sideWrap .vertical span {
  display: inline-block;
  width: 8px;
  height: 66px;
  background: #e50012;
  border-radius: 3px;
  position: absolute;
  top: 0;
  left: 0;
}
.sideWrap .vertical.active-1 span{
  top: 0;
}
.sideWrap .vertical.active-2 span{
  top: 66px;
}
.sideWrap .vertical.active-3 span{
  top: 132px;
}
.sideWrap .vertical.active-4 span{
  top: 198px;
}
.sideWrap .nav {
  margin-left: 0;
  width: 110px;
  height: 164px;
  float: left;
}
.sideWrap .nav li {
  width: 100px;
  height: 30px;
  line-height: 30px;
  border: 1px solid #e50012;
  box-sizing: border-box;
  border-radius: 4px;
  margin: 17px 0;
  float: right;
  text-align: center;
  background: #fff;
  position: relative;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
}
.sideWrap .nav li.active:before {
  content: "";
  width: 14px;
  height: 32px;
  background: url(<?php echo IMG_PATH;?>zzxl/side_icon.png) no-repeat center;
  position: absolute;
  top: -2px;
  left: -12px;
}
.sideWrap .nav li.active {
  background: #e50012 !important;
}
.sideWrap .nav li:hover {
  background: #e50012 !important;
}
.sideWrap .nav li:hover a {
  color: #f6ff01;
}
.sideWrap .nav li a:hover{
  background: #e50012 !important;
  cursor: pointer;
}
.sideWrap .nav li a {
  display: block;
  margin: 0;
  color: #e50012 ;
  font-size: 22px;
  height:100%;
  line-height: 28px;
  -webkit-transition: all .3s ease;
  transition: all .3s ease;
  padding: 0 !important;
  font-weight: normal;
}
.sideWrap .nav li.active a {
  color: #f6ff01;
}
p{
  margin:0 !important;
}
a:hover{
  text-decoration: none !important;
}
a:visited{
  text-decoration: none !important;
}
a:active{
  text-decoration: none !important;
}
a:link{
  text-decoration: none !important;
}
.swiper-slide {
	display: none;
	background-image: url(<?php echo IMG_PATH;?>/zzxl/zxxl_bg.jpg);padding: 58px 0; min-width: 1000px; background-position: center; text-align: center;
}
.swiper-slide.on {
	display: block;
	animate: mymove .5s forwards ;
	-webkit-animation: mymove .5s forwards ;
	-o-animation: mymove .5s forwards ;
	-moz-animation: mymove .5s forwards ;
	opacity: 0;
}
@keyframes mymove {
	form {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
@-o-keyframes mymove {
	form {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
@-webkit-keyframes mymove {
	form {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
@-moz-keyframes mymove {
	form {
		opacity: 0;
	}
	to {
		opacity: 1;
	}
}
.swiper-slide div {
	width: 1000px; margin: 0 auto; position: relative;
}
.swiper-slide div span{
	position: absolute; left: 111px; bottom: 25px; width: 160px; height: 54px; line-height: 54px; background-color: #3593fe; border-radius: 6px; font-size: 26px; color: #fff; letter-spacing: 2px;
}
/*侧边栏区域 end*/
</style>
	<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH;?>/jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
    <script src="<?php echo JS_PATH;?>/script.js" type="text/javascript"></script>
  </head>
  <body>
   <!--header start-->
  	<?php include template("content","header"); ?>
	<!--header end-->

	<div class="top">

     </div>
	<!--套餐列表开始-->
<a href="http://www.cdwyzs.cn/zn/zzxl/2.html"><img src="/statics/images/zzxl/zzxl418.jpg" style="width:100%;" /></a>
<a href="http://www.cdwyzs.cn/zn/zzxl/1.html"><img src="/statics/images/zzxl/zzxl228.jpg" style="width:100%;" /></a>
<a href="http://www.cdwyzs.cn/zn/zzxl/3.html"><img src="/statics/images/zzxl/zzxl518.jpg" style="width:100%;" /></a>
<a href="http://www.cdwyzs.cn/zn/zzxl/4.html"><img src="/statics/images/zzxl/zzxl618.jpg" style="width:100%;" /></a>

	<!--侧边-->
	
	<!--套餐列表结束-->


	<!--底部开始-->
	<?php include template("content","footer"); ?>
	<!--底部结束-->
	<script>
  	$(".swiper-wrapper .swiper-slide").eq(0).addClass("on");
  	$(".sideWrap ul li").click(function(index){
  		$(".sideWrap ul li").removeClass("active");
  		$(this).addClass("active");
  		$$index = $(this).index();
  		$(".vertical span").animate({top:$$index*66+"px"},300);
  		$(".swiper-wrapper .swiper-slide").removeClass("on");
		$(".swiper-wrapper .swiper-slide").eq($$index).addClass("on");
  	})
  </script>
  </body>
</html>