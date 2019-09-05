<!DOCTYPE html>
<html>
<head>
	<title>房间保留</title>
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
				<a href="index"><h1>保留房间</h1></a>
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
		<div class="res-main">
			<div class="res_online">
				<h4>续住须知</h4>
				<p class="para">提供各项设备和相关工作人员。酒店会场租赁的费用中就直接包括了会场各种类型设备的租赁费用，比如要使用到的多媒体设备，或者是音响设备等，这些都是酒店直接提供的。而且很多会场都是需要酒店的工作人员配合完成工作，这一点在签订协议的时候酒店就会明确指出。可以引导来宾，解决车位问题等等，尤其是很多会议酒店还会提供专门的会议记录人员，这样我们的工作也可以更加轻松地完成.</p>
			</div>
			<div class="span_of_2">
				<div class="span2_of_1">
					<div class="form-group">
						<label>房间号</label>
						<input class="form-control" type="text" />
					</div>
					<h4>续租时间:</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="年/月/日" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>

				</div>
				<div class="span2_of_1">
					<div class="form-group">
						<label>身份证号</label>
						<input class="form-control" type="text" />
					</div>
					<h4>离开时间:</h4>
					<div class="book_date btm">
						<form>
							<input class="date" id="datepicker1" type="text" value="年/月/日" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
						</form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="res_btn">
				<div class="read_more">
					<a href="xufei">立即续费</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- content-section-ends -->
<!-- footer-section-starts -->
<div class="footer">
	<div class="copy-rights text-center">
		<p>欢迎入住由it网提供酒店</p>
	</div>
</div>
<!-- footer-section-ends -->

</body>
</html>