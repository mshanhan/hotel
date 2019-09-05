<!DOCTYPE html>
<html>
<head>
    <title>热门民宿</title>
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
                <a ><h1>民宿推荐</h1></a>
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
    <div class="confer">
        <script src="/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
                $("#conference-slider").responsiveSlides({
                    auto: true,
                    manualControls: '#slider3-pager',
                });
            });
        </script>
        <div class="container">
            <h2>民宿图片展示</h2>
            <div class="conference-slider">
                <!-- Slideshow 3 -->
                <ul class="conference-rslide" id="conference-slider">
                    <li><img src="/images/c1.jpg" alt=""></li>
                    <li><img src="/images/c2.jpg" alt=""></li>
                    <li><img src="/images/c3.jpg" alt=""></li>
                    <li><img src="/images/c4.jpg" alt=""></li>
                    <li><img src="/images/c5.jpg" alt=""></li>
                    <li><img src="/images/c6.jpg" alt=""></li>
                    <li><img src="/images/c7.jpg" alt=""></li>
                </ul>
                <!-- Slideshow 3 Pager -->
                <ul id="slider3-pager">
                    <li><a href="#"><img src="/images/c11.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c22.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c33.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c44.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c55.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c66.jpg" alt=""></a></li>
                    <li><a href="#"><img src="/images/c77.jpg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mb20">热门民宿排行</h3>
        <div class="row row-wrap">
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/1.jpg" alt="Image Alternative text" title="Gaviota en el Top" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/2.jpg" alt="Image Alternative text" title="Sydney Harbour" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/3.jpg" alt="Image Alternative text" title="Street" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/4.jpg" alt="Image Alternative text" title="the journey home" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/5.jpg" alt="Image Alternative text" title="lack of blue depresses me" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/6.jpg" alt="Image Alternative text" title="waipio valley" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/7.jpg" alt="Image Alternative text" title="the best mode of transport here in maldives" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/8.jpg" alt="Image Alternative text" title="Upper Lake in New York Central Park" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/9.jpg" alt="Image Alternative text" title="Viva Las Vegas" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/10.jpg" alt="Image Alternative text" title="El inevitable paso del tiempo" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/11.jpg" alt="Image Alternative text" title="new york at an angle" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-3 thumb">

                <a class="hover-img" href="detail">
                    <img src="/images/12.jpg" alt="Image Alternative text" title="196_365" />
                    <div class="hover-inner hover-inner-block hover-inner-bottom hover-inner-bg-black hover-hold">
                        <div class="text-small">
                            <h5>上海民宿</h5>
                            <p>54642评价</p>
                            <p class="mb0">$530</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
        <div class="gap"></div>
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