<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class BinhluanController extends Controller
{

    //Show comment
    public function getComment()
    {
        
    }


    //Comment ở đây
    public function comment(Request $request, $product_id)
    {
        $product = DB::table('sanpham')->where('sp_id','=',$product_id)->first();
        $rating_old = $product->sp_danhgia;
        $rating_new = ($rating_old + $request->rating) / 2;
        if($rating_old == '')
        {
            DB::table('sanpham')->where('sp_id','=',$product_id)->update(
                [
                    'sp_danhgia' => $request->rating
                ]
            );
        }
        else
        {
            DB::table('sanpham')->where('sp_id','=',$product_id)->update(
                [
                    'sp_danhgia' => $rating_new
                ]
            );
        }

        $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
        $binhluan = DB::table('binhluan')->insert([
            'sp_id' => $product_id,
            'kh_id' => $user->kh_id,
            'bl_noidung' => $request->noidung
        ]);
        return redirect()->back();
    }
}
