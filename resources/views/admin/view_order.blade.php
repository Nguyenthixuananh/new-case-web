@extends('admin_layout')
@section('admin_content')
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Thông tin khách hàng
            </div>


            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>

                        <th>Tên khách hàng</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Địa chỉ</th>
                        <th>Ghi chú</th>


                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

{{--                        <td>{{$order_by_id->customer_name}}</td>--}}
                        <td>{{$order_by_id->shipping_name}}</td>
{{--                        <td>{{$order_by_id->customer_phone}}</td>--}}
                        <td>{{$order_by_id->shipping_phone}}</td>
                        <td>{{$order_by_id->shipping_email}}</td>
                        <td>{{$order_by_id->shipping_address}}</td>
                        <td>{{$order_by_id->shipping_notes}}</td>



                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
    <br>

    <br><br>
    <div class="table-agile-info">

        <div class="panel panel-default">
            <div class="panel-heading">
                Liệt kê chi tiết đơn hàng
            </div>
            <div class="row w3-res-tb">

                <div class="col-sm-4">
                </div>
                <div class="col-sm-3">
                    <div class="input-group">
{{--                        <input type="text" class="input-sm form-control" placeholder="Search">--}}
{{--                        <span class="input-group-btn">--}}
{{--            <button class="btn btn-sm btn-default" type="button">Go!</button>--}}
{{--          </span>--}}
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>

                        <th style="width:30px;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>

{{--                        <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>--}}
                        <td>{{$order_by_id->product_name}}</td>
                        <td>{{$order_by_id->product_sales_quantity}}</td>
                        <td>{{$order_by_id->product_price}}</td>
                        <td>{{$order_by_id->product_price*$order_by_id->product_sales_quantity}}</td>


                    </tr>

                    </tbody>
                </table>

            </div>

        </div>
    </div>
@endsection
