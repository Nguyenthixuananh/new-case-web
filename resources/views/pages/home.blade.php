@extends('welcome')
@section('content')

    <div class="features_items">
        <!--features_items-->
        <h2 class="title text-center">Sản phẩm mới</h2>
        @foreach ($all_product as $key => $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">

                    <div class="single-products">
                        <div class="productinfo text-center">
                            <form>
                                @csrf
                                <input type="hidden" value="{{ $product->product_id }}"
                                    class="cart_product_id_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_name }}"
                                    class="cart_product_name_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_image }}"
                                    class="cart_product_image_{{ $product->product_id }}">
                                <input type="hidden" value="{{ $product->product_price }}"
                                    class="cart_product_price_{{ $product->product_id }}">
                                <input type="hidden" value="1" class="cart_product_qty_{{ $product->product_id }}">

                                <a
                                    href="{{ \Illuminate\Support\Facades\URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                                    <img src="{{ asset('upload/product/' . $product->product_image) }}" alt="" />
                                    <h2>{{ number_format($product->product_price) . ' ' . 'VNĐ' }}</h2>
                                    <p>{{ $product->product_name }}</p>


                                </a>
                                <a href="{{ \Illuminate\Support\Facades\URL::to('/chi-tiet-san-pham/' . $product->product_id) }}"><button type="button" class="btn btn-default add-to-cart">Xem chi tiết</button></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach



    </div>


@endsection
