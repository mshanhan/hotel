<!DOCTYPE html>
<html>
<head>
    <title>支付</title>
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
</head>
<body>
<!-- header-starts -->
<div class="page-header">
    <div class="container">
        <div class="page-header-info">
            <div class="page-header-info-head text-center">
                <h1>支付金额</h1></a>
            </div>
            <!-- start h_menu4 -->
            <div class="h_menu4">
                <a class="toggleMenu" href="">Menu</a>
                <ul class="nav p-nav">
                    <li class="active"><a href="reservation">返回上一级</a></li>
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
                                    <label>CVC</label>
                                    <input class="form-control" placeholder="xxxx" type="text" />
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="form-group form-group-cc-name">
                                    <label>持卡人姓名</label>
                                    <input class="form-control" type="text" />
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