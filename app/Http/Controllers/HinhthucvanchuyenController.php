<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class HinhthucvanchuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hinhthucvanchuyen = DB::table('hinhthucvanchuyen')->paginate(5);
        return view('admin.hinhthucvanchuyen.index',compact('hinhthucvanchuyen'));
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
        if($request->tenHTVC == '' ){
            $success = Session::put('alert-del', 'Dữ liệu không được trống');
            return redirect()->route('danhsachhinhthucvanchuyen');
        }
        $hinhthucvanchuyen = DB::table('hinhthucvanchuyen')
                ->insert(
                    [
                        //'cdp_id' =>$request->idCDP,
                        'htvc_ten' =>$request->tenHTVC,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($hinhthucvanchuyen)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachhinhthucvanchuyen');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachhinhthucvanchuyen');
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
        $hinhthucvanchuyen = DB::table('hinhthucvanchuyen')->where('htvc_id', $id)->first();
        return view('admin.hinhthucvanchuyen.edit', compact('hinhthucvanchuyen'));
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
        if($request->tenHTVC == '' ){
            $success = Session::put('alert-del', 'Dữ liệu không được trống');
            return redirect()->back();
        }
        $data = DB::table('hinhthucvanchuyen')->where('htvc_id',$id)
                    ->update(
                        [
                            'htvc_ten' => $request->tenHinhthucvanchuyen,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachhinhthucvanchuyen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('hinhthucvanchuyen')->where('htvc_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachhinhthucvanchuyen');
    }
}
