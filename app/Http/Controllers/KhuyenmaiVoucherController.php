<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;

class KhuyenmaiVoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function useVoucher(Request $request){
        $vccode =  DB::table('kmvouchers')
            ->join('khuyenmai','khuyenmai.km_id','=','kmvouchers.km_id')
            ->join('vouchers','vouchers.vc_id','=','kmvouchers.vc_id')
            ->where('vc_code','=',$request->get('code'))
            ->first();
        if($vccode){

            // dd($vccode->kmvc_giatri);
            Session::put('thanh-cong','Áp dụng voucher thành công');
            Session::put('sotiengiam',$vccode->kmvc_giatri);
            Session::put('code',$request->get('code'));
            return redirect()->back();
        }
        else{
            // dd('vouchers không tồn tại');
            Session::put('alert','Voucher không tồn tại');
            return redirect()->back();
        }
    }

    public function clearVoucher ()
    {
        Session::put('thanh-cong',null);
        Session::put('sotiengiam',null);
        Session::put('code',null);
        return redirect()->back();
    }

    public function index()
    {   
        $voucher = DB::table('kmvouchers')
                    ->join('khuyenmai','khuyenmai.km_id','=','kmvouchers.km_id')
                    ->join('vouchers','vouchers.vc_id','=','kmvouchers.vc_id')
                    ->get();
        return view('admin.khuyenmai.voucher',compact('voucher'));
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

        //insert get id khuyenmai
        $khuyenmai = DB::table('khuyenmai')->insertGetId(
            [
                'km_ten' => $request->km_ten,
                'km_noidung' => $request->km_noidung,
                'km_giatri' => $request->km_giatri,
                'km_batdau' => $request->km_batdau,
                'km_ketthuc' => $request->km_ketthuc,
                'km_trangthai' => 1
            ]
        );

        //insert get id vouchers
        $voucher = DB::table('vouchers')->insertGetId(
            [
                'vc_code' => $request->vc_code,
                'vc_ngaybatdau' => $request->km_batdau,
                'vc_ngayketthuc' => $request->km_ketthuc,
                'vc_trangthai' => 1
            ]
        );

        $ctl = DB::table('kmvouchers')->insert([
            'km_id' => $khuyenmai,
            'vc_id' => $voucher,
            'kmvc_giatri' => $request->km_giatri,
            'kmvc_soluong' => $request->km_soluong,
        ]);
            
        return redirect()->back();
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
        //
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
        //
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
}
