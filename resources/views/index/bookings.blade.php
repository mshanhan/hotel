<!DOCTYPE html>
<html>
<head>
	<title>民宿详情</title>
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
				<h1>查找民宿房间</h1>
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
<!--start main -->
<div class="main_bg">
	<div class="container">
		<div class="online_reservation">
			<div class="b_room">
				<div class="booking_room">
					<h4>在线预定房间</h4>
					<p>请根据个人行程规划好自己的旅行计划</p>
					<p>请根据个人行程规划好自己的旅行计划</p>
					<p>请根据个人行程规划好自己的旅行计划</p>
					<p>请根据个人行程规划好自己的旅行计划</p>
					<p>请根据个人行程规划好自己的旅行计划</p>

				</div>
				<div class="reservation">
					<ul>
						<li class="span1_of_1">
							<h5>地方选择:</h5>
							<!----------start section_room----------->
							<div class="section_room">
								<select id="country" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">选择一个地方</option>
									<option value="null">北京</option>
									<option value="AX">上海</option>
									<option value="AX">天津</option>
								</select>
							</div>
						</li>
						<li class="span1_of_1">
							<h5>房间类型:</h5>
							<!----------start section_room----------->
							<div class="section_room">
								<select id="country" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">选择一种房间</option>
									<option value="null">民宿小家</option>
									<option value="AX">民宿海景</option>
									<option value="AX">民宿摇篮</option>
								</select>
							</div>
						</li>
						<li  class="span1_of_1 left">
							<h5>入住日期:</h5>
							<div class="book_date">
								<form>
									<input class="date" id="datepicker" type="text" value="年/月/日" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '年/月/日';}">
								</form>

							</div>
						</li>
						<li  class="span1_of_1 left">
							<h5>离开时间:</h5>
							<div class="book_date">
								<form>
									<input class="date" id="datepicker1" type="text" value="年/月/日" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '年/月/日';}">
								</form>
							</div>
						</li>
						<li class="span1_of_2 left">
							<h5>人数:</h5>
							<!----------start section_room----------->
							<div class="section_room">
								<select id="country" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">1</option>
									<option value="null">2</option>
									<option value="AX">3</option>
									<option value="AX">4</option>
								</select>
							</div>
						</li>
						<li class="span1_of_3">
							<div class="date_btn">
								<form>
									<input type="submit" value="查找房间" />
								</form>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!--start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic2.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">小家<span>120$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic1.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">爱的家<span>180$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic3.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">温柔的窝<span>210$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic2.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">豪华民宿<span>120$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic1.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">公主民宿<span>180$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="grid1_of_3">
				<div class="grid1_of_3_img">
					<a href="rooms">
						<img src="/images/b-pic3.jpg" alt="" />
						<span class="next"> </span>
					</a>
				</div>
				<h4><a href="#">公子民宿<span>210$</span></a></h4>
				<p>出门在外主管比较困难要不要找个人暖床.</p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--start main -->
<!-- content-section-ends -->
<!-- footer-section-starts -->
<div class="footer">
	<div class="copy-rights text-center">
	</div>
</div>
<!-- footer-section-ends -->

</body>
</html>