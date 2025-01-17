<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="zh-CN">

	<head>
		<meta charset="utf-8">
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
		<meta name="description" content="<?php echo $SEO['description'];?>">
		<!--移动端跳转代码-->
		<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/cn/zzxl/">
		<script type="text/javascript">
			if(window.location.toString().indexOf('pref=padindex') != -1) {} else {
				if(/AppleWebKit.*Mobile/i.test(navigator.userAgent) || (/MIDP|SymbianOS|NOKIA|SAMSUNG|LG|NEC|TCL|Alcatel|BIRD|DBTEL|Dopod|PHILIPS|HAIER|LENOVO|MOT-|Nokia|SonyEricsson|SIE-|Amoi|ZTE/.test(navigator.userAgent))) {
					if(window.location.href.indexOf("?mobile") < 0) {
						try {
							if(/Android|Windows Phone|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
								window.location.href = "http://m.cdwyzs.cn";
							} else if(/iPad/i.test(navigator.userAgent)) {} else {}
						} catch(e) {}
					}
				}
			}
		</script>
		<link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">
		<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>swiper.min.css">
		<script src="<?php echo JS_PATH;?>jquery-1.4.4.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/html/bootstrap.css">
		<script src="/html/bootstrap.js" ></script>
		<style>
			.relative {
				position: relative;
			}
			.zxlZhengZ {
				background: #fff;
			}
			.zxlZhengZ img {
				display: block;
			}
			.zxlZhengZ a {
				letter-spacing: 4px;
			}

			.zxlZhengZ .zxlBanner {
				min-width: 1200px;
				width: 100%;
				overflow: hidden;
			}

			.zxlZhengZ .zxlConBg {
				width: 100%;
				min-width: 1200px;
				overflow: hidden;
			}

			.zxlZhengZ .zxlCenter {
				margin: 0 auto;
				width: 1000px;
			}

			.zxlZhengZ .zxlConOne {
				background-color: #fff;
				padding-bottom: 42px;
				padding-top: 46px;
			}
			.zxlZhengZ .zxlConOne ul {
				margin-top: 32px;
			}

			.zxlZhengZ .zxlConOne ul li {
				box-sizing: border-box;
				float: left;
				width: 486px;
				height: 282px;
				background: #fff url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_03.jpg");
				background-size: 119px 104px;
				background-repeat: no-repeat;
				background-position: 328px 85px;
				box-shadow: 5px 5px 10px #cfcbcb;
				text-align: center;
			}
			.zxlZhengZ .zxlConOne ul li h3 {
				display: initial;
				font-size: 32px;
				line-height: 84px;
				color: #d51c17;
				border-bottom: 1px dashed #d51c17;
				padding-bottom: 10px;
				letter-spacing: 4px;
			}
			.zxlZhengZ .zxlConOne form {
				text-align: left;
				padding-left: 40px;
				margin-top: 9px;
			}
			.zxlZhengZ .zxlConOne form input {
				box-sizing: border-box;
				padding: 0 12px;
				margin-bottom: 6px;
				width: 272px;
				height: 42px;
				line-height: 42px;
				border: 1px solid #ddd;
				font-size: 18px;
				border-radius: 6px;
			}
			.zxlZhengZ .zxlConOne form input.zxlSubmit {
				margin-top: 14px;
				width: 86%;
				height: 52px;
				line-height: 52px;
				border: 0;
				background-color: #d51c17;
				color: #f0ff04;
				font-size: 24px;
				font-weight: bold;
				text-align: center;
				letter-spacing: 4px;
			}
			.zxlZhengZ .zxlConOne form input.zxlSubmit:hover {
				background-color: #f0ff04;
				color: #d51c17;
				cursor: pointer;
			}
			.zxlZhengZ .zxlConOne ul li:last-child {
				float: right;
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_04.jpg");
				background-position: 332px 97px;
				text-align: left;
				padding-left: 40px;
			}
			.zxlZhengZ .zxlConOne ul li:last-child h3 {
				font-size: 50px;
			}

			.zxlZhengZ .zxlConOne ul li:last-child p {
				margin: 22px 0;
				line-height: 38px;
				font-size: 29px;
				color: #666;
				letter-spacing: 4px;
			}

			.zxlZhengZ .zxlConOne ul li:last-child a {
				box-sizing: border-box;
				display: block;
				padding-left: 42px;
				font-size: 24px;
				font-weight: bold;
				width: 324px;
				height: 52px;
				line-height: 46px;
				border: 3px solid #d51c17;
				color: #d51c17;
				border-radius: 10px;
				background: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_b.png");
				background-repeat: no-repeat;
				background-position: 245px 10px;
			}
			.zxlZhengZ .zxlConOne ul li:last-child a:hover {
				color: #fff;
				border-color: #fff;
				background: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_b_h.png") #d51c17;
				background-repeat: no-repeat;
				background-position: 245px 10px;
			}
			.zxlZhengZ .zxlConTHree {
				padding-bottom: 50px;
				letter-spacing: 8px;
			}
			.zxlZhengZ .zxlConTHree .zxlHead {
				margin-bottom: 30px;
			}
			.zxlZhengZ .zxlConTHree .zxlTH_1 {
				width: 100%;
				height: 400px;
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_11.jpg");
				overflow: hidden;
			}
			.zxlZhengZ .zxlConTHree .zxlp {
				margin: 30px 0 20px 0;
				text-align: center;
				font-size: 37px;
				color: #cf1a09;
			}
			.zxlZhengZ .zxlConTHree a {
				display: block;
				margin: 0 auto;
				width: 616px;
				height: 66px;
				font-size: 45px;
				color: #fff;
				background-color: #d51c17;
				border: 2px solid #d51c17;
				border-radius: 8px;
				text-align: center;
			}
			.zxlZhengZ .zxlConTHree a:hover {
				color: #d51c17;
				background-color: #fff;
				border-color: #d51c17;
			}

			.zxlZhengZ .zxlConTHree .zxlTH_1 p {
				float: right;
				padding-top: 74px;
				display: block;
				width: 382px;
				height: 400px;
				background: #e42225;
				font-size: 46px;
				text-align: center;
				line-height: 66px;
				color: #fff;
				opacity: 0.94;
			}

			.zxlZhengZ .zxlConTHree .zxlPingP h3 span {
				color: #007cfe;
				font-size: 45px;
			}

			.zxlZhengZ .zxlConFour .zxlDeX {
				position: relative;
				margin-bottom: 46px;
			}

			.zxlZhengZ .zxlConFour .zxlDeX a {
				position: absolute;
				bottom: 28px;
				left: 348px;
				display: block;
				width: 228px;
				height: 74px;
			}

			.zxlZhengZ .zxlConFour .zxlDeX a p {
				font-size: 20.7px;
				color: #4e4d4d;
			}

			.zxlZhengZ .zxlConFive .zxlHead {
				margin-bottom: 50px;
			}
			.zxlZhengZ .zxlConFive .zxlWuY {
				background-color: #fff;
			}

			.zxlZhengZ .zxlConFive .zxlWuY ul {
				margin-top: 72px;
				font-size: 0;
				width: 1000px;
			}

			.zxlZhengZ .zxlConFive .zxlWuY ul li {
				display: inline-block;
				position: relative;
				margin: 0 80px;
				padding-top: 132px;
				font-size: 28px;
				color: #484848;
				width: 126px;
				text-align: center;
				background-repeat: no-repeat;
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li.zxlLi_1 {
				margin-left: 4px;
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_15.jpg");
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li.zxlLi_2 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_16.jpg");
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li.zxlLi_3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_17.jpg");
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li.zxlLi_4 {
				margin-right: 4px;
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_18.jpg");
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li:after {
				position: absolute;
				top: 0;
				right: -77px;
				content: url("http://www.cdwyzx.com/statics/images/zzxl/418/x418_14.jpg");
				width: 2px;
				height: 120px;
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li.zxlLi_4:after {
				content: "";
			}
			.zxlZhengZ .zxlConFive .zxlWuY ul li {
				font-size: 30px;
				color: #595959;
			}
			.zxlZhengZ .zxlConFive .zxlConSeven {
				padding-top: 0;
				width: 690px;
				height: 70px;
				line-height: 66px;
				font-size: 40px;
				color: #fff;
			}
			.zxlZhengZ .zxlConFive .zxlConSeven:hover {
				color: #d51c17;
			}

			.zxlZhengZ .zxlConSix .zxlFengG ul li {
				float: left;
				width: 492px;
				height: 330px;
				overflow: hidden;
			}

			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_1 {
				width: 100%;
				height: 242px;
				overflow: hidden;
			}
			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_1 img {
				transition:All 0.4s ease-in-out;
			    -webkit-transition:All 0.4s ease-in-out;
			    -moz-transition:All 0.4s ease-in-out;
			    -o-transition:All 0.4s ease-in-out;
			}

			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_1:hover img {
				transform:scale(1.2);
			    -webkit-transform:scale(1.2);
			    -moz-transform:scale(1.2);
			    -o-transform:scale(1.2);
			    -ms-transform:scale(1.2);
			}

			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_2 {
				line-height: 78px;
				font-size: 36px;
				color: #595959;
				text-align: center;
				letter-spacing: 8px;
			}

			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_2 a {
				font-size: 26px;
				border-radius: 6px;
				color: #d51c17;
				border: 2px solid #d51c17;
				padding: 4px 14px;
			}
			.zxlZhengZ .zxlConSix .zxlFengG ul li .zxlFG_2 a:hover {
				color: #fff;
				background-color: #d51c17;
			}

			.zxlZhengZ .zxlConSeven {
				display: block;
				text-align: center;
				font-size: 28px;

			}

			.swiper-container {
				margin-top: 114px;
				width: 1000px;
				height: 550px;
			}

			.swiper-pagination {
				top: 240px;
				margin-left: 80px;
			}

			.swiper-pagination-bullet {
				margin: 0 40px;
				width: 94px;
				height: auto;
				background-color: #fff;
				border-radius: 0;
				font-size: 30px;
				color: #666;
				opacity: 1;
			}
			.swiper-pagination-bullet:hover {
				cursor: pointer;
			}

			.swiper-pagination-bullet:after {
				position: relative;
				display: block;
				margin: -60px 0 0 40px;
				content: "";
				width: 12px;
				height: 12px;
				border-radius: 12px;
				background-color: #ccc;
			}
			.swiper-pagination-bullet:first-child:before {
				position: absolute;
				display: block;
				margin: -15px 0 0 -120px;
				content: "";
				width: 1000px;
				height: 2px;
				background-color: #e5e5e5;
			}


			.swiper-pagination-bullet-active:after {
				background-color: #d51c17;
			}

			.swiper-slide {
				color: #fff;
				letter-spacing: 2px;
				background-size: cover;
			}

			.swiper-slide h2 {
				margin: 14px 0 0 40px;
				line-height: 60px;
				font-size: 30px;
			}

			.swiper-slide p {
				margin-left: 40px;
				line-height: 42px;
				font-size: 24px;
			}

			.zxlFengG {
				margin-top: 50px;
				overflow: hidden;
			}
			.zxlZhengZ .zxlConSeven {
				box-sizing: border-box;
				margin: 40px auto 30px;
				display: block;
				padding-top: 11px;
				width: 760px;
				height: 84px;
				background-color: #d51c17;
				border-radius: 10px;
				border: 2px solid #d51c17;
			}
			.zxlZhengZ .zxlConSeven span {
				margin: 0 auto;
				display: block;
				width: 660px;
				height: 60px;
				line-height: 60px;
				text-align: center;
				color: #fff;
				font-size: 42px;
				border: 1px dashed #fff;
			}
			.zxlZhengZ .zxlConSeven:hover {
				background-color: #fff;
			}
			.zxlZhengZ .zxlConSeven:hover span {
				color: #d51c17;
				border-color: #d51c17;
			}
			.zxlZhengZ .zxlConSeven-2 {
				margin: 10px 0 0 40px;
				width: 318px;
				display: block;
				font-size: 28px;
				height: 50px;
				line-height: 50px;
				box-shadow: none;
				color: #f9fc04;
				border: 3px solid #f9fc04;
				border-radius: 10px;
				text-align: center;
				background-color: #d51c17;
			}
			.zxlZhengZ .zxlConSeven-2:hover {
				background-color: #f9fc04;
				border-color: #d51c17;
				color: #d51c17;
			}

			.One4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_1.jpg");
			}

			.Two4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_2.jpg");
			}

			.Three4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_4.jpg");
			}

			.Four4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_5.jpg");
			}

			.Five4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_6.jpg");
			}

			.Six4 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/418/418_06_6.jpg");
			}

			.One1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_1.jpg");
			}

			.Two1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_2.jpg");
			}

			.Three1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_4.jpg");
			}

			.Four1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_5.jpg");
			}

			.Five1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_6.jpg");
			}

			.Six1 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/198/198_06_6.jpg");
			}

			.One3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_1.jpg");
			}

			.Two3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_2.jpg");
			}

			.Three3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_4.jpg");
			}

			.Four3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_5.jpg");
			}

			.Five3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_6.jpg");
			}

			.Six3 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/338/338_06_6.jpg");
			}

			.One5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_1.jpg");
			}

			.Two5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_2.jpg");
			}

			.Three5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_4.jpg");
			}

			.Four5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_5.jpg");
			}

			.Five5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_6.jpg");
			}

			.Six5 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/518/518_06_6.jpg");
			}

			.One6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_1.jpg");
			}

			.Two6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_2.jpg");
			}

			.Three6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_4.jpg");
			}

			.Four6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_5.jpg");
			}

			.Five6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_6.jpg");
			}

			.Six6 {
				background-image: url("http://www.cdwyzx.com/statics/images/zzxl/618/618_06_6.jpg");
			}

			.zxlConSeven-3 {
				top: 294px;
				left: 311px;
				position: absolute;
				width: 370px;
				height: 60px;
				border-radius: 26px;
				text-indent: -9999999px;
			}
			.zxlGoTop {
				display: block;
				margin: 60px auto 30px;
				width: 726px;
				height: 90px;
				background-color: #d51c17;
				color: #fff;
				font-size: 40px;
				text-align: center;
				border: 2px solid #d51c17;
				letter-spacing: 8px;
			}
			.zxlGoTop:before {
				content: "^";
				display: block;
				transform: scaleX(6);
				height: 26px;
				line-height: 40px;
				font-size: 20px;
				letter-spacing: 0;
			}
			.zxlGoTop:hover {
				background-color: #fff;
				color: #d51c17;
			}
			/*.zxlConSix {
				padding-bottom: 30px;
			}*/
			.zxlZhengZ .zxlConTwo,
			.zxlZhengZ .zxlConSix,
			.zxlZhengZ .zxlConFive {
				background-color: #fff;
			}
			.zxlZhengZ .zxlConOne,
			.zxlZhengZ .zxlConTHree,
			.zxlZhengZ .zxlConFour {
				background-color: #f2f2f2;
			}
			.SWT_small:hover {
				cursor: pointer;
			}
		</style>
	</head>

	<body>
		<!--header start-->
		<?php include template("content","header"); ?>
		<!--header end-->

		<!--整装系列开始-->
		<?php echo $content;?>
		<!--整装系列结束-->

		<!--header start-->
		<?php include template("content","footer"); ?>
		<!--header end-->
		<!-- Swiper JS -->
		<script src="<?php echo JS_PATH;?>swiper.min.js"></script>
		<script>
			$(function(){
				$('.bj_r').click(function(){
		               $('.bj_f').submit();
		        });  
				
				duibi_yuan();
				$(window).resize(function(){
		 			 duibi_yuan();
				});	
				$('.duibi_ul li').mouseover(function(){
					var dbt = $(this).index();
					$('#duibi_l').attr('src','/html/jubu/jf_ban_'+dbt+'-1.png')
					$('#duibi_r').attr('src','/html/jubu/jf_ban_'+dbt+'-2.png')
					$(this).find('.db_ico').show();
					$(this).siblings().find('.db_ico').hide();
					$(this).find('.db_p').css('color','white');
					$(this).siblings().find('.db_p').css('color','black');
				})
			});
			var duibi_yuan = function(){
					var duibiw = $('.duibi_ul li').width();
					$('.duibi_ul li').height(duibiw);
					$('.duibi_ul li').css('line-height',duibiw+'px');
					$('.db_p').css('left',duibiw*0.4+'px');
					$('.db_p_jf').css('left',duibiw*0.15+'px');
					$('.db_ico').css('width',duibiw*1.35+'px');
					$('.bj_box').css('height',duibiw*1.8+'px');
			}
		</script>
		<script>
			var data = {
				"da": [{
					"0": "客餐厅",
					"1": "卧室",
					"2": "厨房",
					"3": "卫生间",
					"4": "阳台"
				}]
			};
			var swiper = new Swiper('.swiper-container', {
				pagination: '.swiper-pagination',
				//paginationClickable: true,
				paginationBulletRender: function(swiper, index, className) {
					return '<span class="' + className + '">' + (data.da[0][index]) + '</span>';
				}
			});
			$('.swiper-pagination-bullet').hover(function(index){
				swiper.slideTo($(this).index(), 2000, false);//切换到第一个slide，速度为1秒
			})
			$(".SWT_small").click(function(){
				$("#LRdiv2").css("display","block");
			})
			function lr_closemini(){
				$("#LRdiv2").css("display","none");
			}
	
		</script>
		<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
	</body>

</html>