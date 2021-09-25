<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ChiTietKhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {
        // $info = DB::table('khachhang')->where('username','=',$username)->first();
        //     return view('client.cusDetail',compact('khachhang'));
            // return dd($loai);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $khachhang = DB::table('khachhang')->where('kh_id', $id)->first();
        // return view('client.cusEdit', compact('khachhang'));

    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $now = Carbon::now();
        // $data = DB::table('khachhang')->where('username',$id)
        //             ->update(
        //                 [
        //                     'kh_hoten' => $request->hoten,
        //                     'kh_sdt' => $request->sdt,
        //                     'kh_gioitinh' => $request->gioitinh,
        //                     'kh_diachi' => $request->diachi,
        //                     'password' => $request->matkhau,
        //                     'updated_at' => $now,
        //                 ]
        //             );

        
        // $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        // return redirect()->route('chitietkhachhang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    // public function getInfoClient($username){
    //     $info = DB::table('khachhang')->where('username','=',$username)->first();
    //         return view('client.cusDetail',compact('khachhang'));
            
    // }
}
