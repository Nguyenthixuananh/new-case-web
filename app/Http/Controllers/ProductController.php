<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //
    public function authLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('admin.dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }

    public function add_product()
    {
        $this->authLogin();
        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderBy('brand_id', 'desc')->get();


        return view('admin.product.add_product')
            ->with('cate_product', $cate_product)
            ->with('brand_product', $brand_product)
            ;
    }

    public function all_product()
    {
        $this->authLogin();
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
            ->orderBy('tbl_product.product_id', 'desc')->get();
        $manager_products = view('admin.product.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.product.all_product', $manager_products);

    }

    public function save_product(Request $request)
    {
        $this->authLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $image = $request->file('product_image');
        $data['product_image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/product');
        $image->move($path, $data['product_image']);


        DB::table('tbl_product')->insert($data);
        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }

//    public function save_product(Request $request){
//        $this->authLogin();
//        $data = array();
//        $data['product_name'] = $request->product_name;
//        $data['product_price'] = $request->product_price;
//        $data['product_desc'] = $request->product_desc;
//        $data['product_content'] = $request->product_content;
//        $data['category_id'] = $request->product_cate;
//        $data['brand_id'] = $request->product_brand;
//        $data['product_status'] = $request->product_status;
//        $data['product_image'] = $request->product_image;
//        $get_image = $request->file('product_image');
//
//        if($get_image){
//            $get_name_image = $get_image->getClientOriginalName();
//            $name_image = current(explode('.',$get_name_image));
//            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
//            $get_image->move('public/upload/product',$new_image);
//            $data['product_image'] = $new_image;
//            DB::table('tbl_product')->insert($data);
//            Session::put('message','Thêm sản phẩm thành công');
//            return Redirect::to('all-product');
//        }
//        $data['product_image'] = '';
//        DB::table('tbl_product')->insert($data);
//        Session::put('message','Thêm sản phẩm thành công');
//        return Redirect::to('all-product');
//    }

    public function unactive_product($product_id)
    {
        $this->authLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 1]);
        Session::put('message', 'Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');

    }

    public function active_product($product_id)
    {
        $this->authLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->update(['product_status' => 0]);
        Session::put('message', 'Kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id)
    {
        $this->authLogin();

        $cate_product = DB::table('tbl_category_product')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->orderBy('brand_id', 'desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manager_products = view('admin.product.edit_product')
            ->with('edit_product', $edit_product)
            ->with('cate_product', $cate_product)
            ->with('brand_product', $brand_product);
        return view('admin_layout')->with('admin.product.edit_product', $manager_products);

    }

    public function update_product(Request $request, $product_id)
    {
        $this->authLogin();
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_price'] = $request->product_price;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['brand_id'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $image = $request->file('product_image');
        $data['product_image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('upload/product');
        $image->move($path, $data['product_image']);
        DB::table('tbl_product')->where('product_id', $product_id)->update($data);
        Session::put('message', 'Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id)
    {
        $this->authLogin();
        DB::table('tbl_product')->where('product_id', $product_id)->delete();
        Session::put('message', 'Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }

    //user page

    public function detail_product($product_id)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status', '=', '0')->orderBy('category_id', 'desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status', '=', '0')->orderBy('brand_id', 'desc')->get();

        $detail_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
            ->where('tbl_product.product_id', '=', $product_id)->get();

        foreach ($detail_product as $key => $value) {
            $category_id = $value->category_id;

        }

        $related_product = DB::table('tbl_product')
            ->join('tbl_category_product', 'tbl_category_product.category_id', '=', 'tbl_product.category_id')
            ->join('tbl_brand_product', 'tbl_brand_product.brand_id', '=', 'tbl_product.brand_id')
            ->where('tbl_category_product.category_id', '=', $category_id)
            ->whereNotIn('tbl_product.product_id', [$product_id])
            ->get();


        return view('pages.product.show_detail')
            ->with('category', $cate_product)
            ->with('brand', $brand_product)
            ->with('product_detail', $detail_product)
            ->with('relate', $related_product);
    }
}
