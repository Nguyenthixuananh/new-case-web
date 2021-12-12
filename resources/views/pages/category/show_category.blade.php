@extends('welcome')
@section('content');

    <div class="features_items">
        <!--features_items-->
        @foreach ($category_name as $key => $name)
            <h2 class="title text-center">{{ $name->category_name }}</h2>
        @endforeach

        @foreach ($category_by_id as $key => $product)
            <a href="{{ \Illuminate\Support\Facades\URL::to('/chi-tiet-san-pham/' . $product->product_id) }}">
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{ asset('upload/product/' . $product->product_image) }}" alt="" />
                                <img alt="">
                                <img src="{{ \Illuminate\Support\Facades\URL::to('public/upload/product/' . $product->product_image) }}"
                                    alt="" />                                <h3>{{ $product->product_price }} VNĐ</h3>
                                <p>{{ $product->product_name }}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm giỏ
                                    hàng</a>
                            </div>

                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>


@endsection
