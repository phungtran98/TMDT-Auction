<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class LoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sp = DB::table('sanpham')->get();
        $lo = DB::table('lo')->join('chitietlo','chitietlo.lo_id','=','lo.lo_id')
                ->paginate(5);
        return view('admin.lo.index', compact(['lo','sp']));
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
        
        $now = Carbon::now();
        // $timsanpham = DB::table('chitietlo')->where('sp_id','=',$request->id_sp)->where('ctl_soluong','>',0)->first();
        // if($timsanpham){ 
        //     return dd('Sản phẩm còn hàng');
        // }
        $ngaysanxuat = Carbon::parse($request->ngaysanxuat)->format('d/m/Y');
        $hansudung = Carbon::parse($request->hansudung)->format('d/m/Y');
            $lo = DB::table('lo')
                ->insertGetId(
                    [
                        'lo_ten' =>$request->tenLo,
                        'created_at' => $now,
                        'updated_at' => $now,
                        'lo_hansudung' => $hansudung,
                        'lo_ngaysanxuat' => $ngaysanxuat
                    ]
                );
            $ctl = DB::table('chitietlo')->insert([
                'lo_id' => $lo,
                'sp_id' => $request->id_sp,
                'ctl_dongia' => $request->dongia,
                'ctl_soluong' => $request->soluong,
                'created_at' => $now->toDateString(),
                'updated_at' => $now->toDateString()
            ]);
            if($lo)
            {
                $soluongcu = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->first();
                $sp_trangthai = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->update([
                    'sp_trangthai' => '1',
                    'sp_giagoc' => $request->dongia,
                    'sp_soluong' => $soluongcu->sp_soluong+$request->soluong,
                ]);
                $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
                return redirect()->route('danhsachlo');
            }
            else
            {
                $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
                return redirect()->route('danhsachlo');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lo = DB::table('lo')->where('lo_id','=',$id)->first();
        $chitietlo = DB::table('chitietlo')->where('lo_id','=',$id)->join('sanpham','sanpham.sp_id','=','chitietlo.sp_id')->first();
        $sanpham = DB::table('sanpham')->get();
        if($chitietlo)
        {
            $soluong = $chitietlo->ctl_soluong;
            $dongia = $chitietlo->ctl_dongia;
            $giatien = $soluong*$dongia;
            return view('admin.lo.detail',compact(['lo','soluong','dongia','giatien','sanpham','chitietlo']));
        }
        else{
            $soluong = "0";
            $dongia = "0";
            $giatien = "0";
            return view('admin.lo.detail',compact(['lo','soluong','dongia','giatien','sanpham']));
        }
       
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
