<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | MAYBI</title>
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/sweetalert.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('frontend/js/html5shiv.js') }}"></script>
    <script src="{{ asset('frontend/js/respond.min.js') }}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('frontend/images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ asset('frontend/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ asset('frontend/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ asset('frontend/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed"
        href="{{ asset('frontend/images/ico/apple-touch-icon-57-precomposed.png') }}">

        <link rel="shortcut icon" href="https://theme.hstatic.net/1000341902/1000733930/14/favicon.png?v=222" />
</head>
<!--/head-->

<body>
    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="tel://0942126862"><i class="fa fa-phone"></i> +84 94 212 6862</a></li>
                                <li>
                                    <a href="mailto:pedona.hoangvq@gmail.com?subject='subject text'"><i
                                            class="fa fa-envelope"></i> HoangVQ-Depzai-Top1@gmail.com</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><?php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){
                                    ?>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/logout-checkout') }}"><i
                                            class="fa fa-lock"></i> Đăng xuất</a></li>

                                <?php
                                    }else{
                                    ?>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/login-checkout') }}"><i
                                            class="fa fa-lock"></i> Đăng nhập</a></li>
                                <?php
                                    }
                                    ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="{{ asset('frontend/images/home/logo.png') }}"
                                    alt="" /></a>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <form action="{{ \Illuminate\Support\Facades\URL::to('/tim-kiem') }}" method="POST">
                                    @csrf
                                    <div class="search_box pull-right">
                                        <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm" />
                                        <input type="submit" style="margin-top:0;color:#fff" name="search_items"
                                            class="btn btn-primary btn-sm" value="Tìm kiếm">
                                    </div>
                                </form>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/trang-chu') }}"
                                        class="active"><strong>TRANG CHỦ</strong></a></li>
                                <li class="dropdown"><a href="#"><strong>CHỦ ĐỀ</strong><i
                                            class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#"><strong>CHIA SẺ</strong><i
                                            class="fa fa-angle-down"></i></a>

                                </li>
                                <li><a href="{{ \Illuminate\Support\Facades\URL::to('/show-cart') }}"><strong>GIỎ
                                            HÀNG</strong></a>
                                </li>
                                <li><a href="tel://0942126862" style="color: red"><strong>LIÊN HỆ</strong></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->


    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>M</span>AYBI</h1>
                                    <h2>Tôi...</h2>
                                    <p>“Thời trang phải phản chiếu được con người bạn là ai, bạn đang cảm thấy ra sao và
                                        bạn sẽ đi đến đâu”</p>
                                    <button type="button" class="btn btn-default get">Xem thêm</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl1.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MA</span>YBI</h1>
                                    <h2>thích =)</h2>
                                    <p>“Họ sẽ nhìn bạn chằm chằm, hãy khiến họ được mãn nhãn”</p>
                                    <button type="button" class="btn btn-default get">Xem thêm</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl2.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>MAY</span>BI</h1>
                                    <h2>...một tâm hồn đẹp !</h2>
                                    <p>“Tận hưởng việc diện đồ là nghệ thuật đích thực”</p>
                                    <button type="button" class="btn btn-default get">Xem thêm</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('/frontend/images/home/girl3.png') }}"
                                        class="girl img-responsive" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            <h2>Danh mục sản phẩm</h2>
                            @foreach ($category as $key => $cate)

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a
                                                href="{{ \Illuminate\Support\Facades\URL::to('/danh-muc-san-pham/' . $cate->category_id) }}">{{ $cate->category_name }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <div class="brands-name">
                                <h2>Thương hiệu sản phẩm</h2>
                                @foreach ($brand as $key => $brand)
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a
                                                href="{{ \Illuminate\Support\Facades\URL::to('/thuong-hieu-san-pham/' . $brand->brand_id) }}">
                                                <span class="pull-right"></span>{{ $brand->brand_name }}</a>
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>
                        <!--/brands_products-->


                    </div>
                </div>

                <div class="col-sm-9 padding-right">

                    @yield('content')
                    <!--features_items-->

                    <!--/category-tab-->

                    <!--/recommended_items-->

                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <!--Footer-->
        {{-- <div class="footer-top"> --}}
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <div class="companyinfo">
                        <h2><span>S2</span>-Maybi</h2>
                        <p>
                            “Thời trang phải phản chiếu được con người bạn là ai, bạn đang cảm thấy ra sao và bạn sẽ đi
                            đến đâu”
                        </p>
                    </div>
                </div>
                <div class="col-sm-1">

                </div>
                <div class="col-sm-5">
                    <div class="single-widget">
                        <h2>Đăng ký nhận thông báo</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Nhập Email của bạn tại đây" />
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Nhận những món quà bất ngờ <br />và ý nghĩa nhất từ Maybi...</p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Chính sách</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Chính sách khách hàng</a></li>
                                <li><a href="#">Giao hàng - Thanh toán</a></li>
                                <li><a href="#">Bảo mật thông tin</a></li>
                                <li><a href="#">Chính sách đổi trả</a></li>
                                {{-- <li><a href="#">FAQ’s</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Chính sách đối tác</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Đối tác bán hàng của MAYBI</a></li>
                                <li><a href="#">Chính sách bán sỉ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-widget">
                            <h2>Thông tin</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Thông tin showroom</a></li>
                                <li><a href="#">Thông tin liên hệ</a></li>
                                <li><a href="#">Tuyển dụng</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © .</p>
                    <p class="pull-right">Designed by <span><a target="_blank"
                                href="https://github.com/HoangVQ-112714/">HoangVQ depzai top1 vũ trụ</a></span></p>
                </div>
            </div>
        </div>

    </footer>
    <!--/Footer-->


    <script src="{{ asset('frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/price-range.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    {{-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    <script src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {


                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url: '{{ url('/add-cart-ajax') }}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function() {

                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{ url('/gio-hang') }}";
                            });

                    }

                });
            });
        });
    </script>

</body>

</html>
