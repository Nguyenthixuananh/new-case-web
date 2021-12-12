@extends('admin_layout')
@section('admin_content')

    <div class="table-agile-info">
        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê sản phẩm
            </div>
            <div class="row w3-res-tb">
                <div class="col-sm-3">
                    <div class="input-group">

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <?php
                $message = \Illuminate\Support\Facades\Session::get('message');
                if ($message) {
                    echo '<p class="text-danger" style="color: red">' . $message . '</p>';
                    \Illuminate\Support\Facades\Session::put('message', null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên sản phẩm</th>
                        <th>Gía</th>
                        <th>Hình sản phẩm</th>
                        <th>Danh mục</th>
                        <th>Thương hiệu</th>
                        <th>Hiển thị</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_product as $key=> $pro)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{ $pro->product_name }}</td>
                            <td>{{ $pro->product_price }}</td>
                            <td><img src="{{ asset('upload/product/'. $pro->product_image) }}" width="100px"></td>
{{--                            <td><img src="{{ asset('upload/product/' . $pro->product_image) }}" width="100px"></td>--}}
                            <td>{{ $pro->category_name }}</td>
                            <td>{{ $pro->brand_name }}</td>
                            <td><span class="text-ellipsis">
                                <?php
                                    if ($pro->product_status == 0) {
                                    ?>
                                    <a href="{{\Illuminate\Support\Facades\URL::to('/unactive-product/'.$pro->product_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-up"></span>
                                    </a>
                                    <?php
                                    } else {
                                    ?>
                                        <a href="{{\Illuminate\Support\Facades\URL::to('/active-product/'.$pro->product_id)}}">
                                        <span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                    <?php
                                    }
                                    ?>
                            </span></td>
                            <td>
                                <a href="{{\Illuminate\Support\Facades\URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class=""><i
                                        class="fa fa-pencil-square-o text-success text-active"></i></a>
                                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không???')" href="{{\Illuminate\Support\Facades\URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-delete" ui-toggle-class=""><i
                                        class="fa fa-times text-danger text"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <footer class="panel-footer">
                <div class="row">

                    <div class="col-sm-5 text-center">
                        <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
                    </div>
                    <div class="col-sm-7 text-right text-center-xs">
                        <ul class="pagination pagination-sm m-t-none m-b-none">
                            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                            <li><a href="">1</a></li>
                            <li><a href="">2</a></li>
                            <li><a href="">3</a></li>
                            <li><a href="">4</a></li>
                            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
