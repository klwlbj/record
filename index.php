<?php
//echo time();
//echo REMOTE_ADDR;die;
if($_COOKIE["total_num"]=='')setcookie("total_num", 1, time()+999999999);
//else setcookie("times", 0, time()+999999999);

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection" content="telephone=no,email=no" />
	<meta name="screen-orientation" content="portrait">
	<meta name="x5-orientation" content="portrait">
	<link rel="stylesheet" href="css/layout.css"/>
	<title>大转盘抽奖 demo</title>
</head>
<body>
<!--wrapper-->	
<div id="wrapper" class="fw oh">
	<div class="lottery_txt tc">
		<strong class="fd dy05">当日抽奖机会：<span id="lottery_num"><?php echo $_COOKIE["total_num"]; ?></span>次</strong>
		<p class="fd dy08">每个用户可免费获得 <?php echo $_COOKIE["times"]; ?>次抽奖机会</p>
	</div>
	<div class="lottery_box fd dy05">
		<div class="lottery_turntable pr">
			<div class="turntable fw"></div>
			<canvas id="lotterys" width="300" height="300"></canvas>
			<div id="go" class="fd dy05"></div>
		</div>
	</div>
	<div class="lottery_btns oh">
		<a href="javascript:;" id="btn1" class="btn fl tl fd dy05"></a>
		<a href="javascript:;" id="btn2" class="btn fr tr fd dy05"></a>
	</div>
</div>

<!--popover-->
<div class="popover fw pf dn">
	<!--活动规则-->
	<div class="modal m1">
		<h2 class="modal_title tc">活动规则</h2>
		<p>1. 活动时间：2015年xx月xx日-xx月xx日 </p>
		<p>2. 活动期间，通过活动专题页面参与线上大转盘抽奖；</p>
		<p>3. 每个手机号每天登录APP可以获得3次抽奖机会；</p>
		<p>4. 每天首次分享给好友，即可获得额外的抽奖机会一次；</p>
		<p>5. 大转盘奖项设为xx等，一等奖为xxx，二等奖为xxx，三等奖为xxx……</p>
		<a href="javascript:;" class="close_btn"></a>
	</div>
	<!--我的中奖记录--->
	<div class="modal m2">
		<h2 class="modal_title tc">我的中奖记录</h2>
		<ul class="lottery_records"></ul>
		<a href="javascript:;" class="close_btn"></a>
	</div>
	<!--分享--->
<!--	<div class="modal m3">-->
<!--		<p>分享到朋友圈</p>-->
<!--		<p>再送 1 次抽奖机会哦！</p>-->
<!--		<a href="javascript:;" id="share_btn" class="modal_btns"></a>-->
<!--		<a href="javascript:;" class="close_btn"></a>-->
<!--	</div>-->
	<!--很遗憾--->
	<div class="modal m4">
		<p><img class="sorry" width="100%" src="img/sorry.png" /></p>
		<p class="tip_txt">很遗憾你没有中奖</p>
		<a href="javascript:;" id="come_again_btn" class="modal_btns"></a>
		<a href="javascript:;" class="close_btn"></a>
	</div>
	<!--恭喜您中奖啦--->
	<div class="modal m5">
		<p><img class="ok" width="100%" src="img/ok.png" /></p>
		<p class="tip_txt">恭喜你中了<font color="#fb4727">一等奖</font>哦！</p>
		<a href="javascript:;" id="receives_btn" class="modal_btns"></a>
		<a href="javascript:;" class="close_btn"></a>
	</div>
	<!--分享提示--->
	<div class="modal m6">
		<p class="share_arrow tr"><img width="100%" src="img/share_arrow.png"/></p>
		<p>每日首次分享，可多获一次抽奖机会哦</p>
		<p>快去分享吧 !</p>
	</div>
</div>

<!--js-->
<script src="js/zepto.min.js"></script>
<script src="js/zepto.rotate.min.js"></script>
<script src="js/lottery.js"></script>
</body>
</html>