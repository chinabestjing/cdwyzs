<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!--pc网页顶端Logo，图标，电话-->
<div style="width:100%; height:110px; min-width:1200px; background-color:#2d2a40">
  	<div class="zxlTop"><span style="margin-left: 12px;">欢迎访问成都唯意装饰工程有限公司[官方网站]</span><a target="_blank" href="http://dwz.cn/4H1GKt"><span style="float:right; margin-right: 15px; color: white;">24小时咨询热线:400-808-9193</span></a></div>
</div>
<!--header-->
<div id="J_m_nav" >
	<div class="header clear" style="border-right: 0; border-left: 0;">
    <!--二级下拉旋转导航-->
        <div class="zxlNav">
        <a href="http://www.cdwyzs.cn"><img src="/statics/images/LOGO.png" style="margin-top:5px; height:69px; float:left"></a>
          <ul class="zxmMenu" style="float:right">
            <li><a href="<?php echo siteurl($siteid);?>"> 网站首页 </a></li>
            <li><a href="/index.php?m=content&c=index&a=lists&catid=46"> 整装系列 </a>
			  <ul class="submenu">
                <li><a href="/zn/zzxl/2.html">精品整装</a></li>
				<!--<li><a href="/zn/zzxl/6.html">超值整装</a></li>-->
                <li><a href="/zn/zzxl/3.html">豪华整装</a></li>
				<li><a href="/zn/zzxl/4.html">奢华整装</a></li>
                <li><a href="/zn/zzxl/1.html">出租整装</a></li>
                <li><a href="/zn/zzxl/10.html">旧房改造</a></li>
              </ul>
			</li>
			<li><a href="/zn/hd"> 最新活动 </a></li>
            <li><a href="/index.php?m=content&c=index&a=lists&catid=8"> 装修案例 </a></li>
			<li><a href="/zn/dxgy"> 德系工艺 </a></li>
            <li><a href="/index.php?m=content&c=index&a=lists&catid=7"> 设计团队 </a></li>
            <li><a href="/zn/baoz"> 服务保障 </a>
              <ul class="submenu">
                <li><a href="/zn/hzlc"> 装修流程 </a></li>
                <!--<li><a href="<?php echo $CATEGORYS['32']['url'];?>"> 售后服务 </a></li>-->
              </ul>
            </li>
            <li><a href="/index.php?m=content&c=index&a=lists&catid=18"> 新闻中心</a>
              <ul class="submenu">
			      <li><a href="/index.php?m=content&c=index&a=lists&catid=18 " class=" ">活动新闻</a></li>
                  <li><a href="/index.php?m=content&c=index&a=lists&catid=21 " class=" ">家装攻略</a></li>
				  <li><a href="/index.php?m=content&c=index&a=lists&catid=47 " class=" ">家居布置</a></li>
				  <li><a href="/index.php?m=content&c=index&a=lists&catid=48 " class=" ">装修问答</a></li>
				  <li><a href="/index.php?m=content&c=index&a=lists&catid=20 " class=" ">公司动态</a></li>
              </ul>
            </li>
            <li><a href="/zn/guwm"> 关于我们 </a>
              <!--<ul class="submenu">
                <li><a href="<?php echo $CATEGORYS['37']['url'];?>"> 人才招聘 </a></li>
                <li><a href="<?php echo $CATEGORYS['36']['url'];?>"> 企业文化 </a></li>
                <li><a href="<?php echo $CATEGORYS['35']['url'];?>"> 组织架构 </a></li>
                <li><a href="<?php echo $CATEGORYS['34']['url'];?>"> 发展理念 </a></li>
                <li><a href="<?php echo $CATEGORYS['6']['url'];?>"> 联系我们 </a></li>
              </ul>-->
            </li>
          </ul>
        </div>
	</div>
</div>

	<script type='text/javascript' >
			var nt = !1;
			$(window).bind("scroll",
				function() {
				var st = $(document).scrollTop(); //取到当前下拉往下滚的高度
				nt = (nt ? nt: ($("#J_m_nav").offset().top - 84)); //获取的导航头部的高度
				var sel=$("#J_m_nav");
				if (nt < st) {
					sel.addClass("nav_fixed");
				} else {
					sel.removeClass("nav_fixed");

				}
			});
    </script>
