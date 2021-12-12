@extends('welcome')
@section('content');
<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="{{\Illuminate\Support\Facades\URL::to('/')}}">Trang chủ</a></li>
                <li class="active">Giỏ hàng của bạn</li>
            </ol>
        </div>
        <?php
        $message = \Illuminate\Support\Facades\Session::get('message');
        if ($message) {
            echo '<p class="text-danger" style="color: red">'.$message.'</p>';
            \Illuminate\Support\Facades\Session::put('message', null);
        }
        ?>
        <div class="table-responsive cart_info">
            <form action="{{url('/update-cart')}}" method="POST">
                @csrf
            <table class="table table-condensed">
                <thead>
                <tr class="cart_menu">
                    <td class="image">Hình ảnh</td>
                    <td class="description">Tên sản phẩm</td>
                    <td class="price">Giá sản phẩm</td>
                    <td class="quantity">Số lượng</td>
                    <td class="total">Thành tiền</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>

                @php
                    $total = 0;
                @endphp
                @foreach(\Illuminate\Support\Facades\Session::get('cart') as $key => $cart)
                    @php
                        $subtotal = $cart['product_price']*$cart['product_qty'];
                        $total+=$subtotal;
                    @endphp

                    <tr>
                        <td class="cart_product">
                            <img src="{{asset('upload/product/'.$cart['product_image'])}}" width="90" alt="{{$cart['product_name']}}" />
                        </td>
                        <td class="cart_description">
                            <h4><a href=""></a></h4>
                            <p>{{$cart['product_name']}}</p>
                        </td>
                        <td class="cart_price">
                            <p>{{number_format($cart['product_price'],0,',','.')}}đ</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">

                                    <input class="cart_quantity_" type="number" min="1" name="cart_qty[{{$cart['session_id']}}]" value="{{$cart['product_qty']}}"  >

                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">
                                {{number_format($subtotal,0,',','.')}}đ

                            </p>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href="{{url('/delete-product-ajax/'.$cart['session_id'])}}"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                @endforeach

                <tr>
                        <td>
                            <input type="submit" value="Cập nhật giỏ hàng" name="update_qty" class="btn btn-default btn-sm check_out">
                        </td>
                    </tr>

                </tbody>

            </table>
            </form>

        </div>




    </div>
</section> <!--/#cart_items-->
<section id="do_action">
    <div class="container">
{{--        <div class="heading">--}}
{{--            <h3>What would you like to do next?</h3>--}}
{{--            <p>Choose if you have a discount code or reward points you want to use or would like to estimate your--}}
{{--                delivery cost.</p>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-sm-6">
                <div class="total_area">
                    <ul>
                        <li>Tổng <span>{{number_format($total)}}</span></li>
                        <li>Thuế <span></span></li>
                        <li>Phí vận chuyển <span>Free</span></li>
                        <li>Thành tiền <span></span></li>
                    </ul>
{{--                    <a class="btn btn-default check_out" href="">Thanh toán</a>--}}
                    <?php
                    $customer_id = \Illuminate\Support\Facades\Session::get('customer_id');
                    if($customer_id!=NULL){
                    ?>

                    <a class="btn btn-default check_out" href="{{\Illuminate\Support\Facades\URL::to('/checkout')}}">Thanh toán</a>
                    <?php
                    }else{
                    ?>

                    <a class="btn btn-default check_out" href="{{\Illuminate\Support\Facades\URL::to('/login-checkout')}}">Thanh toán</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section><!--/#do_action-->


@endsection
