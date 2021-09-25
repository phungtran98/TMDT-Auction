<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class HinhthucthanhtoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinhthucthanhtoan = DB::table('hinhthucthanhtoan')->paginate(5);
        return view('admin.hinhthucthanhtoan.index',compact('hinhthucthanhtoan'));
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
        if($request->tenHTTT == '' ){
            $success = Session::put('alert-del', 'Dữ liệu không được trống');
            return redirect()->route('danhsachhinhthucthanhtoan');
        }
        $hinhthucthanhtoan = DB::table('hinhthucthanhtoan')
                ->insert(
                    [
                        //'cdp_id' =>$request->idCDP,
                        'httt_ten' =>$request->tenHTTT,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($hinhthucthanhtoan)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachhinhthucthanhtoan');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachhinhthucthanhtoan');
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
        echo 'somthing';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hinhthucthanhtoan = DB::table('hinhthucthanhtoan')->where('httt_id', $id)->first();
        return view('admin.hinhthucthanhtoan.edit', compact('hinhthucthanhtoan'));
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
        $now = Carbon::now();
        if($request->tenHTTT == '' ){
            $success = Session::put('alert-del', 'Dữ liệu không được trống');
            return redirect()->back();
        }
        $data = DB::table('hinhthucthanhtoan')->where('httt_id',$id)
                    ->update(
                        [
                            'httt_ten' => $request->tenHinhthucthanhtoan,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachhinhthucthanhtoan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('hinhthucthanhtoan')->where('httt_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachhinhthucthanhtoan');
    }
}
