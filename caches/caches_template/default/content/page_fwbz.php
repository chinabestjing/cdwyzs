<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>

<html lang="zh-CN">

	<head>

		<meta charset="utf-8">

		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>

		<link href="<?php echo CSS_PATH;?>/common.css" rel="stylesheet">

		<link href="<?php echo CSS_PATH;?>main.css" rel="stylesheet">

		<link href="<?php echo CSS_PATH;?>css.css" rel="stylesheet">
		<!--移动端跳转代码-->
		<meta http-equiv="mobile-agent" content="format=xhtml;url=http://m.cdwyzs.cn/">
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
		<script src="<?php echo JS_PATH;?>jquery1.42.min.js" type="text/javascript"></script>
		<style>
			.zxlFwcnBg {
				position: relative;
				margin: 0 auto;
				width: 1200px;
				overflow: hidden;
				background: url(<?php echo IMG_PATH;?>fwcn/fwcn_bg_01.jpg);
				background-size: contain;
			}
			h2 {
				box-sizing: border-box;
				margin: 44px auto 38px;
				width: 400px;
				height: 70px;
				line-height: 70px;
				text-align: center;
				background: -webkit-linear-gradient(left, #ff1d73, #680bf1);
				border-radius: 50px;
				overflow: hidden;
			}

			h2 p {
				margin: 1px;
				width: 398px;
				height: 68px;
				border-radius: 50px;
				font-size: 38px;
				font-family: "宋体";
				font-weight: normal;
				background: #fff;
				color: #353535;
			}

			.zxlFwcn {
				margin: 0 auto;
				width: 1200px;
				height: auto;
				background-size: contain;
			}

			.zxlFwcn ul {
				margin-top: -150px;
				font-size: 0;
			}

			.zxlFwcn ul li {
				margin-top: 70px;
				display: inline-block;
				height: auto;
				width: 50%;
				text-align: center;
				vertical-align: top;
			}

			.zxlFwcn ul li h3 {
				line-height: 66px;
				font-size: 30px;
				color: #fa0059;
				font-weight: normal;
			}

			.zxlFwcn ul li p {
				font-size: 24px;
				color: #484848;
			}
			.zxlHead {
				text-align: center;
			}
			.zxlHead_2 {
				margin-top: 114px;
			}
			.zxlFwcn_02 {
				padding: 0 60px;
			}
			.zxlFwcn_02 .zxlBiaoTi {
				margin-top: 68px;
			}
			.zxlFwcn_02 .zxlBiaoTi h3 {
				font-size: 26px;
				color: #313131;
				font-weight: normal;
			}
			.zxlFwcn_02 .zxlBiaoTi hr {
				margin: 8px 0 50px 26px;
				width: 128px;
				height: 3px;
				border: 0;
				background-color: #777575;
			}
			.zxlFwcn_02 ul li h4 {
				font-size: 24px;
				line-height: 50px;
				color: #4c4c4c;
				letter-spacing: 4px;
				font-family: "黑体";
				font-weight: normal;
			}
			.zxlFwcn_02 ul li p {
				font-size: 14px;
				color: #595959;
				text-indent: 2em;
				line-height: 21px;
				letter-spacing: 1px;
			}
			.zxlFwcn_02 ul li {
				margin-bottom: 10px;
				box-sizing: border-box;
				padding-left: 460px;
				width: 100%;
				background-size: 100%;
			}
			.zxlFwcn_02 ul .zxlLi_01 {
				height: 230px;
				background-image: url("<?php echo IMG_PATH;?>fwcn/fwcn_04.jpg");
			}
			.zxlFwcn_02 ul .zxlLi_02 {
				height: 177px;
				background-image: url("<?php echo IMG_PATH;?>fwcn/fwcn_05.jpg");
			}
			.zxlFwcn_02 ul .zxlLi_03 {
				height: 177px;
				background-image: url("<?php echo IMG_PATH;?>fwcn/fwcn_06.jpg");
			}
			.zxlFwcn_02 .zxlZyfw {
				font-size: 20px;
				color: #313131;
				line-height: 40px;
			}
			.zxlFwcn_02 .zxlShfwlc p {
				text-indent: 2em;
				line-height: 23px;
			}
			.zxlBottomBg {
				margin-top: 56px;
				width: 100%;
				height: 68px;
				background-image: url("<?php echo IMG_PATH;?>fwcn/fwcn_bg_02.jpg");
				background-size: 100%;
			}
		</style>

	</head>

	<body>

		<!--header start-->

		<?php include template("content","header"); ?>

		<!--header end-->

		<!--内容开始-->
		<a href="<?php echo $php_siteurl;?>/zn/zzxl/2.html"><img src="<?php echo IMG_PATH;?>fwcn/fwcn_01.jpg" width="100%" /></a>
		<div class="zxlFwcnBg">
			<h2><p class="SWT_small">只为给您专业体验</p></h2>
			<div class="zxlHead SWT_small">
				<img src="<?php echo IMG_PATH;?>fwcn/fwcn_02.png" width="387"/>
			</div>
			<div class="zxlFwcn">
				<ul>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_01.png" width="131"/>
						<h3>费用清晰</h3>
						<p>费用清晰透明，0增项</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_02.png" width="131"/>
						<h3>三大免费项目</h3>
						<p>免费量房、免费设计、免费出预算、满意后再合作</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_03.png" width="131"/>
						<h3>自有服务体系</h3>
						<p>自有产业工人施工，专业监理团队监管</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_04.png" width="131"/>
						<h3>客户验收合格再施工</h3>
						<p>工程和材料 ，客户当面验收合格签字后才可施工</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_05.png" width="131"/>
						<h3>真材实料</h3>
						<p>真材实料，杜绝以次充好，杜绝偷工减料</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_06.png" width="131"/>
						<h3>工期保障</h3>
						<p>按合同约定时间完工，<br />工期无故延误，公司承担全责并赔偿</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_07.png" width="131"/>
						<h3>质量标准</h3>
						<p>工程质量达到国家质量评定标准，<br />不达标不满意，我们马上砸掉重做；
						</p>
					</li>
					<li class="SWT_small">
						<img src="<?php echo IMG_PATH;?>fwcn/ico_08.png" width="131"/>
						<h3>售后保障服务</h3>
						<p>装饰装修主材质保为15年，<br />厨房、卫生间防渗漏工程保修期为8年。</p>
					</li>
				</ul>
			</div>
			<div class="zxlHead zxlHead_2">
				<img class="SWT_small" src="<?php echo IMG_PATH;?>fwcn/fwcn_03.png" width="387"/>
			</div>
			<div class="zxlFwcn_02">
				<div class="zxlBiaoTi">
					<h3>常见的售后问题</h3>
					<hr />
				</div>
				<ul>
					<li class="zxlLi_01">
						<h4>1、墙面开裂</h4>
						<p style="text-indent: inherit;">造成墙面开裂的原因：</p>
						<p>A、轻体墙开裂。</p>
						<p>B、承重墙施工洞的开裂。</p>
						<p>C、由于施工工艺和施工材料未按照正常程序执行，造成开裂。</p>
						<p>在入住后第一年的时间里，由于气候原因，会造成墙面开裂的原因；</p>
						<p>在冬季，气候干燥，室内温度较高，空气中失水较快，乳胶漆墙面容易开裂。</p>
						<p>对于此类维修最佳季节是在停暖后的春天里进行。</p>
						<p>维修过后，在第二年里基本上不会发生类似的维修了。</p>
					</li>
					<li class="zxlLi_02">
						<h4>2、瓷砖碰瓷</h4>
						<p style="text-indent: inherit;">瓷砖碰瓷的主要部位：</p>
						<p>管道的阳角处，容易发生瓷砖的碰瓷现象。</p>
					</li>
					<li class="zxlLi_03">
						<h4>3、防水漏水</h4>
						<p style="text-indent: inherit;">水管出现漏水或不出水现象。</p>
						<p>建议业主在装修时找知名的大型家装公司，一旦出现售后问题，可给家装公司的售后服务打电话，由售后服务安排相关工作人员为业主维修。</p>
					</li>
				</ul>
				<p class="zxlZyfw">主要的售后服务：水电施工项目、木工施工项目、瓦工施工项目、油工施工项目和基础安装部分。</p>
				<div class="zxlBiaoTi" style="margin-top: 62px;">
					<h3>售后服务流程</h3>
					<hr style="margin-left: 14px; margin-bottom: 30px;"/>
				</div>
				<div class="zxlShfwlc">
					<p style="text-indent: inherit; margin-top: 28px;">1、客户工作部：</p>
					<p>（1）接到客户报修后，由客户工作部助理详细、准确地记录客户资料、施工队负责人(维修人员)姓名和报修内容；如客户有具体要求维修时间需要说明。</p>
					<p>（2）客户工作部助理通知维修人员联系客户上门维修。如客户在来电时未确定维修时间的，要求维修人员在接到通知24小时内与客户约定初次维修时间并反馈客户工作部，客户工作部助理将在24小时内回访维修人员，如维修人员未联系客户或未约定维修时间，将由客户工作部再重新安排维修人员。</p>
					<p>（3）接到客户报修后由客户工作部助理打印工程维修任务单转工程部以供维修人员领取，同时将客户报修内容记录到《维修统计表》中。</p>
					<p style="text-indent: inherit; margin-top: 28px;">2、工程部：</p>
					<p>在接到客户报修后详细记录保修情况，把维修单交维修人员，《主材维修通知单》转客户工作部助理处理，同时由客户工作部助理将该报修资料录入到《维修统计表》中。工分部及其它：分部反映来的详细记录和客户相关情况以书面形式通知客户工作部处理。由客户工作部助理根据维修项目打印出相应得维修单转交给相应的部门，由工程部安排进行维修。</p>
					<p>（2）客户工作部助理通知维修人员联系客户上门维修。如客户在来电时未确定维修时间的，要求维修人员在接到通知24小时内与客户约定初次维修时间并反馈客户工作部，客户工作部助理将在24小时内回访维修人员，如维修人员未联系客户或未约定维修时间，将由客户工作部再重新安排维修人员。</p>
					<p>（3）接到客户报修后由客户工作部助理打印工程维修任务单转工程部以供维修人员领取，同时将客户报修内容记录到《维修统计表》中。</p>
					<p style="text-indent: inherit; margin-top: 28px;">3、项目维修完成后，客户工作部门应及时与客户联络对此次维修项目给予评价打分，并做好登记工作。</p>
				</div>
			</div>
			<div class="zxlBottomBg"></div>
		</div>

		<!--内容结束-->

		<!--header start-->

		<?php include template("content","footer"); ?>

		<!--header end-->
		<script src="<?php echo JS_PATH;?>jquery.SuperSlide.2.1.1.js" type="text/javascript"></script>
		<script>
		$(".SWT_small").click(function(){
				$("#LRdiv2").css("display","block");
			})
			function lr_closemini(){
				$("#LRdiv2").css("display","none");
			}
	</script>
	</body>

</html>