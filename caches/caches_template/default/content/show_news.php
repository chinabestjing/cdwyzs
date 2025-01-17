<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
	<!--移动端跳转代码-->
	<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/news/">
	<script type="text/javascript">if(window.location.toString().indexOf('pref=padindex') != -1){}else{if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))){if(window.location.href.indexOf("?mobile")<0){try{if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){window.location.href="http://m.cdwyzs.cn";}else if(/iPad/i.test(navigator.userAgent)){}else{}}catch(e){}}}}</script>
    <link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
	<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
<script src="<?php echo JS_PATH;?>/jquery1.42.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
  </head>
  <body>
    <!--header start-->
	<?php include template("content","header"); ?> 
	<!--header end-->

	<!--材料展厅开始-->
	<div class="new_bg">
		<div class="newsinfo-bg" >
			<div class="jz_left fl">
			   <div class="new_w">当前位置 : <?php echo catpos($catid);?></div>
			   <div class="title-info">
				  <h2><?php echo $title;?></h2>
				  <span id="date"></span>
				  <span>作者：小唯</span>
			   </div>
			   <div class="content">
				  <?php echo $content;?>  
			   </div>
			   <div class="turn"><!--
			      <p>上一篇:重磅！浙江省省长李强参访珀莱雅生产基地！</p>
				   <p>上一篇:重磅！浙江省省长李强参访珀莱雅生产基地！</p>-->
			   </div>
			</div>
		   <div class="page"></div>
		</div>
    </div>
	<!--材料展厅结束-->
	<!--header start-->
	<?php include template("content","footer"); ?> 
	<!--header end-->
			<script>
			Date.prototype.Format = function (fmt) { //author: meizz 
		    var o = {
		        "M+": this.getMonth() + 1, //月份 
		        "d+": this.getDate(), //日 
		        "h+": this.getHours(), //小时 
		        "m+": this.getMinutes(), //分 
		        "s+": this.getSeconds(), //秒 
		        "q+": Math.floor((this.getMonth() + 3) / 3), //季度 
		        "S": this.getMilliseconds() //毫秒 
		    };
		    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
		    for (var k in o)
		    if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
		    return fmt;
		}
			var time = new Date().Format("yyyy-MM-dd");
			$('#date').text('发布时间：'+time)
		</script>
  </body>
</html>