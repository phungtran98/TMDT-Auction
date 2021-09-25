<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use DB;
use Cart;
class GiohangController extends Controller
{
    public function addCart(Request $request, $idSP){
        $product = DB::table('sanpham')->where('sp_id','=',$idSP)->first();
        if($request->qty)
        {
            $qty = $request->qty;
        }else{
            $qty = 1;
        }
        if($product->sp_giakhuyenmai > 0){
            $price = $product->sp_giakhuyenmai;
        }
        else{
            $price = $product->sp_giaban;
        }
        $cart = Cart::add([
            'id' => $idSP,
            'name' => $product->sp_ten,
            'price' => $price,
            'quantity' => $qty,
            'associatedModel' => $product
        ]);
        // dd($cart);
        if ($cart) {
            # code...
            return redirect()->back();
            // return response()->json('Đã thêm sản phẩm vào giỏ hàng', 200);
        }
        else{
            return redirect()->back();
        }
    }


    //get all product from cart
    public function getCart(){
        $cart = Cart::getContent();
        // $cart = Cart::remove($rowId);
        // Cart::remove($rowId);
        dd($cart);
        // if($cart)
        // {
        //     dd($cart);
        // }
    }

    //Remove one product from cart
    public function remove($id) {
        $cart = Cart::remove($id);
        return redirect()->back();
    }

    //clear all product from cart
    public function clearCart() {
        Cart::clear();
        return redirect()->back();
    }

    public function checkOut() {
        if(Session::has('kh')){
            $username = Session::get('kh');
            $cart = Cart::getContent();
            $khachhang = DB::table('khachhang')->where('username','=',$username)->first();
            return view('client.checkout',compact(['khachhang','cart']));
        }else {
            return redirect()->route('dangnhapkhachhang');
        }
    }

    public function checkOut2() {
        if(Session::has('kh')){
            $username = Session::get('kh');
            $cart = Cart::getContent();
            $khachhang = DB::table('khachhang')->where('username','=',$username)->first();
            return view('client.checkout-2',compact(['khachhang','cart']));
        }else {
            return redirect()->route('dangnhapkhachhang');
        }
    }

    public function getMethodCheckout (Request $request){
        $method = $request->get('thanhtoan');
        switch ($method) {
            case 'vnpay':
                # code...
                return redirect()->route('vnpay');
                break;

            //Ship code
            case 'shipcod':
                $now = Carbon::now();
                $username = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
                $sanpham = Cart::getContent();
                
                $madon = rand(1000,9999);

                $hoadon = DB::table('donhang')->insertGetId(
                    [
                        'dh_madon' => $madon,
                        'dh_nguoinhan' => $username->kh_hoten,
                        'dh_noinhan' => $username->kh_diachi,
                        'dh_tongtien' => Cart::getTotal() + 30000,
                        'dh_thoigiandathang' => $now,
                        'kh_id' => $username->kh_id,
                    ]
                );

                foreach ($sanpham as $key => $value) {
                    # code...
                    DB::table('chitietdonhang')->insert([
                        'sp_id' => $value->id,
                        'dh_id' => $hoadon,
                        'sp_dongia' => $value->price,
                        'sp_soluongsp' => $value->quantity
                    ]);
                }


                Cart::clear();
                return redirect()->route('trangchu');

            default:
                # code...
                break;
        }
    }


    public function shipCod (Request $request) {
        $now = Carbon::now();
        $username = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
        $sanpham = Cart::getContent();
        
        $madon = rand(1000,9999);

        $hoadon = DB::table('donhang')->insertGetId(
            [
                'dh_madon' => $madon,
                'dh_nguoinhan' => $username->kh_hoten,
                'dh_noinhan' => $username->kh_diachi,
                'dh_tongtien' => Cart::getTotal() + 30000,
                'dh_thoigiandathang' => $now,
                'kh_id' => $username->kh_id,
            ]
        );

        foreach ($sanpham as $key => $value) {
            # code...
            DB::table('chitietdonhang')->insert([
                'sp_id' => $value->id,
                'dh_id' => $hoadon,
                'sp_dongia' => $value->price,
                'sp_soluongsp' => $value->quantity
            ]);
        }
    }
}
