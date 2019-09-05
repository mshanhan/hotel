<!DOCTYPE html>
<html>
<head>
	<title>首页</title>
	<link href="/css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
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
	<script src="/js/jquery.easydropdown.js"></script>
</head>
<body>
<!-- header-starts -->
<div class="header">
	<div class="container">
		<div class="header-info">
			<div class="header-info-head text-center">
				<a href="index.html"><h1>选择我们</h1></a>
				<h2>与我们一起计划您的完美旅程</h2>
			</div>
			<div class="top-search">
				<input type="text" class="text" value="请输入酒店名称" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '寻找酒店';}">
			</div>
			<div class="dropdown-button">
				<select class="dropdown" tabindex="9" data-settings='{"wrapperClass":"flat"}'>
					<option value="0">请选择</option>
					<option value="1">上海</option>
					<option value="2">澳门</option>
					<option value="3">香港</option>
					<option value="4">江苏</option>
					<option value="5">南京</option>
					<option value="6">广东</option>
					<option value="7">天津</option>
					<option value="8">黑龙江</option>
				</select>
			</div>
			<div class="clearfix"></div>
			<!-- start h_menu4 -->
			<div class="h_menu4">
				<a class="toggleMenu" href="">Menu</a>
				<ul class="nav">
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
		</div>
	</div>
</div>
<!-- header-ends -->
<!-- content-section-starts -->
<div class="content-section">
	<div class="services-section">
		<div class="services-section-right">
			<div class="services-section-image">
				<img src="/images/serviceimg.jpg" alt="" />
			</div>
			<div class="services-section-right-text">
				<p><img src="/images/quotes.png" alt="" />悲哀是真的，泪是假的，没有什么可执着；一百年前，你不认识我，我不认识你；背影是真的，人是假的，本没有因果；一百年后，没有你，也没有我。 欣赏与深思 悲哀和眼泪都是真的，区别只是内在和外在，无形和有形.</p>
				<p class="end-q">悲哀是真的，泪是假的，没有什么可执着；一百年前，你不认识我，我不认识你；背影是真的，人是假的，本没有因果；一百年后，没有你，也没有我。 欣赏与深思 悲哀和眼泪都是真的，区别只是内在和外在，无形和有形.<img src="/images/quot.png" alt="" /></p>
				<a href="#">张三</a>
				<span>旅行者</span>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="planning-section">
		<div class="container">
			<div class="col-md-8 planning-section-left">
				<h3>旅行计划</h3>
				<h4>本网站推荐建议如下：</h4>
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>酒店</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>民宿</span></li>
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>商场</span></li>
							<div class="clearfix"></div>
						</ul>
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<ul class="tab_img">
									<li>
										<div class="view view-first">
											<img src="/images/pic1.jpg" class="img-responsive" alt=""/>
											<div class="info1"> </div>
											<div class="mask">
											</div>
											<div class="tab_desc">
												<h5>北京</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li>
										<div class="view view-first">
											<img src="/images/pic6.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>上海</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li class="last">
										<div class="view view-first">
											<img src="/images/pic3.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>天津</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<ul class="tab_img">
									<li>
										<div class="view view-first">
											<img src="/images/pic8.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>北京</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li>
										<div class="view view-first">
											<img src="/images/pic7.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>江苏</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li class="last">
										<div class="view view-first">
											<img src="/images/pic9.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>南京</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<ul class="tab_img">
									<li>
										<div class="view view-first">
											<img src="/images/pic10.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>黑龙江</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li>
										<div class="view view-first">
											<img src="/images/pic2.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>江苏</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li class="last">
										<div class="view view-first">
											<img src="/images/pic12.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>济南</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<div class="clearfix"></div>
								</ul>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<ul class="tab_img">
									<li>
										<div class="view view-first">
											<img src="/images/pic10.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>青岛</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li>
										<div class="view view-first">
											<img src="/images/pic2.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>菏泽</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<li>
										<div class="view view-first">
											<img src="/images/pic9.jpg" class="img-responsive" alt=""/>
											<div class="mask">
												<div class="info1"> </div>
											</div>
											<div class="tab_desc">
												<h5>江西</h5>
												<span>平均消费$990</span>
												<a href="details">查看详情</a>
											</div>
										</div>
									</li>
									<div class="clearfix"></div>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyrights">Collect from <a href="http://www.cssmoban.com/" >企业网站模板</a></div>
			<div class="col-md-4 planning-section-right">
				<div class="planning-section-right-grid">
					<div class="yup-text">
						<h3>热门酒店</h3>
					</div>
					<div class="image">
						<img src="/images/yup.jpg" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="planning-section-right-grid2">
					<div class="couple-text">
						<h3>热门民宿</h3>
					</div>
					<div class="couple-image">
						<img src="/images/couple.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="planning-section-right-grid2">
					<div class="couple-text">
						<h3>热门商场</h3>
					</div>
					<div class="couple-image">
						<img src="/images/couple.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="mail text-center">
		<h3><i class="msg"></i>电子邮箱 : 1104074080@qq.com</h3>
	</div>


	<div class="contact-section">
		<div class="container">
			<input type="text" class="text" value="名" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Name';}">
			<input type="text" class="text" value="姓" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Phone';}">
			<input type="text" class="text" value="邮箱" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}">
			<textarea value="Message" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Message';}">内容</textarea>
			<input type="submit" value="发送">
		</div>
	</div>
	<div class="footer">
		<div class="copy-rights text-center">
			<p>欢迎入住由it网提供酒店</p>
		</div>
	</div>
</div>
</body>
</html>