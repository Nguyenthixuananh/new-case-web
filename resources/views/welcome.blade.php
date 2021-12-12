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
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +84 94 212 6862</a></li>
                            <li>
                                <a href="#"><i class="fa fa-envelope"></i> HoangVQ-Depzai-Top1@gmail.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="index.html"><img src="{{('public/frontend/images/home/logo.png')}}" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">



                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/trang-chu')}}"><i class="fa fa-lock"></i> Trang chủ</a></li>


                            <li><a href="#"><i class="fa fa-star"></i> Yêu thích</a></li>
                            <?php
                            use Illuminate\Support\Facades\Session;$customer_id =Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if($customer_id!=NULL && $shipping_id==NULL){
                            ?>
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>

                            <?php
                            }elseif($customer_id!=NULL && $shipping_id!=NULL){
                            ?>
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/payment')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }else{
                            ?>
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/login-checkout')}}"><i class="fa fa-crosshairs"></i> Thanh toán</a></li>
                            <?php
                            }
                            ?>


                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
                            <?php
                            $customer_id = Session::get('customer_id');
                            if($customer_id!=NULL){
                            ?>
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/logout-checkout')}}"><i class="fa fa-lock"></i> Đăng xuất</a></li>

                            <?php
                            }else{
                            ?>
                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/login-checkout')}}"><i class="fa fa-lock"></i> Đăng nhập</a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
{{--                    <div class="mainmenu pull-left">--}}
{{--                        <ul class="nav navbar-nav collapse navbar-collapse">--}}
{{--                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/trang-chu')}}" class="active">Trang chủ</a></li>--}}
{{--                            <li class="dropdown"><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>--}}
{{--                                <ul role="menu" class="sub-menu">--}}
{{--                                    <li><a href="shop.html">Products</a></li>--}}

{{--                                </ul>--}}
{{--                            </li>--}}
{{--                            <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>--}}

{{--                            </li>--}}
{{--                            <li><a href="{{\Illuminate\Support\Facades\URL::to('/show-cart')}}">Giỏ hàng</a></li>--}}
{{--                            <li><a href="contact-us.html">Liên hệ</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
                <div class="col-sm-5">
                    <form action="{{\Illuminate\Support\Facades\URL::to('/tim-kiem')}}" method="POST">
                        @csrf
                        <div class="search_box pull-right">
                            <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm"/>
                            <input type="submit" style="margin-top:0;color:#666" name="search_items" class="btn btn-primary btn-sm" value="Tìm kiếm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->


<section id="slider"><!--slider-->
    <div class="container">
        <div class="col-sm-12">
            <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                {{--                <ol class="carousel-indicators">--}}
                {{--                    <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>--}}
                {{--                    <li data-target="#slider-carousel" data-slide-to="1"></li>--}}
                {{--                    <li data-target="#slider-carousel" data-slide-to="2"></li>--}}
                {{--                </ol>--}}

                <div class="carousel-inner">

                    <div class="item active">
                        <div class="col-sm-12">
                            <img src="{{ asset('frontend/images/home/girl1.jpg') }}" class="girl img-responsive"
                                 alt=""/>
                            <img src="{{ asset('frontend/images/home/pricing.png') }}" class="pricing" alt=""/>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-sm-12">
                            <img src="{{ asset('frontend/images/home/girl2.jpg') }}" class="girl img-responsive"
                                 alt=""/>
                            <img src="{{ asset('frontend/images/home/pricing.png') }}" class="pricing" alt=""/>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-sm-12">
                            <img src="{{ asset('frontend/images/home/girl3.jpg') }}" class="girl img-responsive"
                                 alt=""/>
                            <img src="{{ asset('frontend/images/home/pricing.png') }}" class="pricing" alt=""/>
                        </div>
                    </div>

                    <div class="item">

                        <div class="col-sm-12">
                            <img src="{{ asset('frontend/images/home/girl4.jpg') }}" class="girl img-responsive"
                                 alt=""/>
                            <img src="{{ asset('frontend/images/home/pricing.png') }}" class="pricing" alt=""/>
                        </div>
                    </div>

                </div>

                <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">

                </a>
                <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">

                </a>
            </div>

        </div>

    </div>
</section><!--/slider-->

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Danh mục sản phẩm</h2>
                    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                        @foreach($category as $key=> $cate)

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a
                                            href="{{\Illuminate\Support\Facades\URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                                    </h4>
                                </div>
                            </div>
                        @endforeach

                    </div><!--/category-products-->

                    <div class="brands_products"><!--brands_products-->
                        <h2>Thương hiệu sản phẩm</h2>
                        <div class="brands-name">
                            @foreach($brand as $key=> $brand)
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="{{\Illuminate\Support\Facades\URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">
                                            <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div><!--/brands_products-->


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

<footer id="footer"><!--Footer-->
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
                        <h2>About Shopper</h2>
                        <form action="#" class="searchform">
                            <input type="text" placeholder="Your email address"/>
                            <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i>
                            </button>
                            <p>Get the most recent updates from <br/>our site and be updated your self...</p>
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
                        <h2>Service</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Online Help</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Change Location</a></li>
                            <li><a href="#">FAQ’s</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-widget">
                        <h2>Quock Shop</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">T-Shirt</a></li>
                            <li><a href="#">Mens</a></li>
                            <li><a href="#">Womens</a></li>
                            <li><a href="#">Gift Cards</a></li>
                            <li><a href="#">Shoes</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="single-widget">
                        <h2>Policies</h2>
                        <ul class="nav nav-pills nav-stacked">
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privecy Policy</a></li>
                            <li><a href="#">Refund Policy</a></li>
                            <li><a href="#">Billing System</a></li>
                            <li><a href="#">Ticket System</a></li>
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
                                                           href="http://www.themeum.com">Themeum</a></span></p>
            </div>
        </div>
    </div>

</footer><!--/Footer-->


<script src="{{ asset('frontend/js/jquery.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('frontend/js/price-range.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
{{--<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
<script src="{{ asset('frontend/js/sweetalert.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.add-to-cart').click(function(){


        var id = $(this).data('id_product');
            var cart_product_id = $('.cart_product_id_' + id).val();
            var cart_product_name = $('.cart_product_name_' + id).val();
            var cart_product_image = $('.cart_product_image_' + id).val();
            var cart_product_price = $('.cart_product_price_' + id).val();
            var cart_product_qty = $('.cart_product_qty_' + id).val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '{{url('/add-cart-ajax')}}',
                method: 'POST',
                data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token},
                success:function(){

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
                            window.location.href = "{{url('/gio-hang')}}";
                        });

                }

            });
        });
    }
    );
</script>

</body>
</html>
