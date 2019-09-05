<!DOCTYPE html>
<html>
<head>
    <title>人员登记</title>
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
    <link href='http://fonts.useso.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300,300italic,100italic,100' rel='stylesheet' type='text/css'>
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
</head>
<body>
<!-- header-starts -->
<div class="page-header">
    <div class="container">
        <div class="page-header-info">
            <div class="page-header-info-head text-center">
                <h1>入住人员信息登记</h1></a>
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
<div class="content-section">
    <div class="container">
        <div class="paymemt-row-wrap">
            <div class="col-md-8 ">
                <h3>入住人员</h3>
                <ul class="list booking-item-passengers">
                    <li>
                        <div class="row">
                            <div class="col-md-3">
                                <label>性别</label>
                                <div class="radio-inline radio-small">
                                    <label>
                                        <input class="i-radio" type="radio" name="passenger-1-sex" />男</label>
                                </div>
                                <div class="radio-inline radio-small">
                                    <label>
                                        <input class="i-radio" type="radio" name="passenger-1-sex" />女</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>酒店名称</label>
                                    <input class="date-pick-years form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>姓名</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>电话</label>
                                    <input class="date-pick-years form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <div class="form-group">
                                    <label>国籍</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>身份证号</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>房间号</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!-- <div class="col-md-3">
                                <div class="form-group">
                                    <label>Expiry Date</label>
                                    <input class="date-pick-years form-control" type="text" />
                                </div>
                            </div> -->
                        </div>
                    </li>
                    <li>
                        <div class="row">
                            <div class="col-md-3">
                                <label>性别</label>
                                <div class="radio-inline radio-small">
                                    <label>
                                        <input class="i-radio" type="radio" name="passenger-2-sex" />男</label>
                                </div>
                                <div class="radio-inline radio-small">
                                    <label>
                                        <input class="i-radio" type="radio" name="passenger-2-sex" />女</label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>酒店名称</label>
                                    <input class="date-pick-years form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>姓名</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>电话</label>
                                    <input class="date-pick-years form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <div class="form-group">
                                    <label>国籍</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>身份证号</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>房间号</label>
                                    <input class="form-control" type="text" />
                                </div>
                            </div>
                            <!--  <div class="col-md-3">
                                 <div class="form-group">
                                     <label>Expiry Date</label>
                                     <input class="date-pick-years form-control" type="text" />
                                 </div>
                             </div> -->
                        </div>
                    </li>
                </ul>
                <div class="gap gap-small"></div>
                <div class="row">
                    <div class="col-md-6">
                        <img class="pp-img" src="/images/paypal.png" alt="Image Alternative text" title="Image Title" />
                        <p>重要提示：您将被重定向到PayPal的网站以安全地完成付款.</p><a class="btn btn-primary">通过Paypal</a>
                    </div>
                    <div class="col-md-6">
                        <form class="cc-form">
                            <div class="clearfix">
                                <div class="form-group form-group-cc-number">
                                    <label>卡号</label>
                                    <input class="form-control" placeholder="xxxx xxxx xxxx xxxx" type="text" /><span class="cc-card-icon"></span>
                                </div>
                                <div class="form-group form-group-cc-cvc">
                                    <label>密码</label>
                                    <input class="form-control" placeholder="xxxxxx" type="text" />
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="form-group form-group-cc-name">
                                    <label>持卡人姓名</label>
                                    <input class="form-control" type="text" placeholder="请输入名字" />
                                </div>
                            </div>
                            <div class="checkbox checkbox-small">
                                <label>
                                    <input class="i-check" type="checkbox" checked/>添加到我的卡片</label>
                            </div>
                            <input class="btn btn-primary" type="submit" value="继续付款" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="booking-item-payment">
                    <header class="clearfix">
                        <h5 class="mb0">本酒店安全条令</h5>
                    </header>
                    <ul class="booking-item-payment-details">
                        <li>
                            <h3>入住须知</h3>
                            <div class="booking-item-flight">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="booking-item-flight-details">
                                            <div class="booking-item-departure">
                                                <p>　一、入住须知
                                                    　　1、客房结帐时间为中午12时，如需延住，请您提前通知总台接待员办理相关手续，延期退房，如无预先约定，延期时间要视宾馆客房安排情况由宾馆确定，请您谅解。
                                                    　　2、延期退房按如下标准收费：退房时间为第二天中午12:00，若超过12:00延续一小时加收10:00元。
                                                    　　3、当您入住客房时，请将随身携带的贵重物品等寄存到总台保险箱，否则如有丢失，宾馆概不负责。违禁品及珍贵艺术品、古董谢绝寄存。
                                                    　　4、退房后，请您勿忘将钥匙卡等到交还总服务台。
                                                    　　二、住宿规章
                                                    　　根据宁波市公安部门的有关规定，为了所有宾客能拥有舒适、安全、温馨的休憩环境，希望大家能遵守本宾馆的下列规则，如有违反，宾馆将保留终止违章者逗留居住的权利。如因违反规章而引起火灾、伤害事故的，对造成的所有经济损失及责任由当事人全权负责。
                                                    　　1、办理入住登记时，请出示您的护照、身份证等有效证件；
                                                    　　2、入住期间如有亲友、同事、客户探访的，请在总台或房务中心做好访客登记，晚上24:00以后，宾馆谢绝访客服务；
                                                    　　3、严禁将易爆、易燃、有毒、放射性和产生扰人噪声的物品、化学药剂等及可能伤害他人的动物、鸟禽如小猫、小狗等带入宾馆；
                                                    　　4、不得在客房内使用燃油、液化气、烹调设备及各类加热设备（宾馆提供的除外），客房内不得烹制各种食品</p>
                                                <!--  <p class="booking-item-date">太阳, 3月22日</p> -->
                                                <!-- <p class="booking-item-destination">London, England, United Kingdom (LHR)</p> -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-3">
                                        <div class="booking-item-flight-duration">
                                            <p>航程时间</p>
                                            <h5>10小时</h5>
                                        </div>
                                    </div> -->
                                </div>


                            </div>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="gap"></div>
    </div>

    <div class="footer">
        <div class="copy-rights text-center">
            <p>欢迎入住由it网提供酒店</p>
        </div>

    </div>
</div>
</body>
</html>