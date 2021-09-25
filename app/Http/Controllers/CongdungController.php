<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class CongdungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congdung = DB::table('congdung')->paginate(5);
        return view('admin.congdung.index',compact('congdung'));
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
        if($request->tenCD==''){
            $success = Session::put('alert-del', 'Tên công dụng không được trống');
            return redirect()->route('danhsachcongdung');
        }
        $congdung = DB::table('congdung')
                ->insert(
                    [
                        //'cdp_id' =>$request->idCDP,
                        'cd_ten' =>$request->tenCD,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($congdung)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachcongdung');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachcongdung');
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
        $congdung = DB::table('congdung')->where('cd_id', $id)->first();
        return view('admin.congdung.edit', compact('congdung'));
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
        if($request->tenCD==''){
            $success = Session::put('alert-del', 'Tên công dụng không được trống');
            return redirect()->back();
        }
        $data = DB::table('congdung')->where('cd_id',$id)
                    ->update(
                        [
                            'cd_ten' => $request->tenCongdung,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachcongdung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('congdung')->where('cd_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachcongdung');
    }
}
