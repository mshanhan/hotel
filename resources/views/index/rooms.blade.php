<!DOCTYPE html>
<html>
<head>
	<title>房间介绍</title>
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link rel="stylesheet" href="/css/font-awesome.css">
	<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--webfont-->
	<link href='http://fonts.useso.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='/text/css'>
	<link href='http://fonts.useso.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300,300italic,100italic,100' rel='stylesheet' type='/text/css'>
	<script src="/js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<script src="/js/jquery.easydropdown.js" type="text/javascript"></script>
	<!---strat-date-piker---->
	<link rel="stylesheet" href="/css/jquery-ui.css" />
	<script src="/js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker,#datepicker1" ).datepicker();
		});
	</script>
	<!---/End-date-piker---->

</head>
<body>
<!-- header-starts -->
<div class="page-header">
	<div class="container">
		<div class="page-header-info">
			<div class="page-header-info-head text-center">
				<a ><h1>房间详情</h1></a>
			</div>
			<!-- start h_menu4 -->
			<div class="h_menu4">
				<a class="toggleMenu" href="">Menu</a>
				<ul class="nav p-nav">
					<li class="active"><a href="index">首页</a></li>
					<li><a>酒店</a>
						<ul>
							<li><a href="booking">查找酒店</a></li>
							<li><a href="leixing">酒店房间类型</a></li>
						</ul>
					</li>
					<li><a>民宿</a>
						<ul>
							<li><a href="bookings">查找民宿</a></li>
							<li><a href="leixings">民宿房间类型</a></li>
						</ul>
					</li>
					<li><a class="root">热门推荐</a>
						<ul>
							<li><a href="destination">热门民宿</a></li>
							<li><a href="search">热门酒店</a></li>
						</ul>
					</li>
					<li><a >会员/续费</a>
						<ul>
							<li><a href="payments">会员注册</a></li>
							<li><a href="reservation">保留房间</a></li>
						</ul>
					</li>

					<li><a href="contact">联系</a></li>
				</ul>
				<script type="text/javascript" src="/js/nav.js"></script>
			</div>
			<!-- end h_menu4 -->
		</div>
	</div>
</div>
<!-- header-ends -->
<!-- content-section-starts -->
<div class="main_bg">
	<div class="container">
		<div class="room-main">
			<div class="room-content">
				<div class="room">
					<h4>名称</h4>
					<p class="para">Lorem Ipsum的段落有许多变化，但是大多数都会通过注入幽默或者看起来不太可信的随机单词进行某种形式的改变。如果你打算使用一段Lorem Ipsum，你需要确保在文本中间没有隐藏任何尴尬。互联网上的所有Lorem Ipsum生成器都会重复出现.</p>
				</div>
				<div class="grids_of_2">
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_img">
						<img src="/images/r-pic4.jpg" alt=""/>
					</div>
					<div class="grids_of_para">
						<p class="para">Lorem Ipsum的段落有许多变化，但是大多数都会通过注入幽默或者看起来不太可信的随机单词进行某种形式的改变。如果你打算使用一段Lorem Ipsum，你需要确保在文本中间没有隐藏任何尴尬。互联网上的所有Lorem Ipsum生成器都会重复出现.</p>
					</div>

					<div class="clearfix"></div>

					<div class="read_more">
						<a href="payment">立即预定</a>
					</div>
				</div>
			</div>
			<div class="sidebar">
				<div class="date_btn">
					<form>
						<h4>房间设施</h4>
					</form>
				</div>
				<ul class="s_nav">
					<li><a href="#">笔记本电脑</a></li>
					<li><a href="#">洗衣机.</a></li>
					<li><a href="#">空调</a></li>
				</ul>
				<!-- <h4>we accept</h4>
                <ul class="s_nav1">
                    <li><a class="icon1" href="#"></a></li>
                    <li><a class="icon2" href="#"></a></li>
                    <li><a class="icon3" href="#"></a></li>
                    <li><a class="icon4" href="#"></a></li>
                </ul> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer">
	<div class="copy-rights text-center">
		<p>欢迎入住由it网提供酒店</p>
	</div>
</div>
</body>
</html>