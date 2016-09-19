<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx6a53808c16c3eed1", "63f7d5cee917f3d9d9a35613cfee91fd ");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		
		
		<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
		
		
		<script src="js/jquery-1.12.3.js" type="text/javascript"></script>
		<script src="js/require.js" data-main="app" type="text/javascript"></script>
		<script type="text/javascript">
			document.addEventListener('plusready', function() {
				//console.log("所有plus api都应该在此事件发生后调用，否则会出现plus is undefined。"
			});
		</script>
		<script type="text/javascript">
			window.onload = function() {
				//获取 当前屏幕宽度
				var w = window.innerWidth;
				//获取html元素
				var html = document.getElementsByTagName("html")[0];
				//设置html元素的fontsize 
				html.style.fontSize = w / 10 + "px";
				window.onresize = function() {
					//同上   通过resize 窗口改变事件动态改变html的fontsize
					var w1 = window.innerWidth;
					var html1 = document.querySelector("html");
					html1.style.fontSize = w1 / 10 + "px";
				}
			}
		</script>
	</head>

	<body>
		<!---->
		<div class="body_div">
			<!-- <header>
				<div class="left_div">
					<a href="#">
						<p></p>返回</a>
				</div>
				<div class="center_div">首页</div>
				<div class="right_div">
					<a href="#"></a>
				</div>
			</header> -->
			<div class="container">

			</div>
			<footer>
				<ul class="list">
					<li>
						<a href="#shouye"><span class="fa fa-home icon" aria-hidden="true"></span>
							<p>首页</p>
						</a>
					</li>
					<li>
						<a href="#paradise"><span class="fa fa-archive icon" aria-hidden="true"></span>
							<p>乐园</p>
						</a>
					</li>
					<li>
						<a href="#card"><span class="fa fa-credit-card icon" aria-hidden="true"></span>
							<p>乐享卡</p>
						</a>
					</li>
					<li>
						<a href="#my"><span class="fa fa-user icon" aria-hidden="true"></span>
							<p>我的</p>
						</a>
					</li>
				</ul>
			</footer>
		</div>
	</body>
	<script type="text/javascript">
		wx.config({
			debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
			appId: '', // 必填，公众号的唯一标识
			timestamp: , // 必填，生成签名的时间戳
			nonceStr: '', // 必填，生成签名的随机串
			signature: '', // 必填，签名，见附录1
			jsApiList: [] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
		});
		
		
		wx.ready(function() {

			// config信息验证后会执行ready方法，所有接口调用都必须在config接口获得结果之后，config是一个客户端的异步操作，所以如果需要在页面加载时就调用相关接口，则须把相关接口放在ready函数中调用来确保正确执行。对于用户触发时才调用的接口，则可以直接调用，不需要放在ready函数中。
		});
	</script>

</html>