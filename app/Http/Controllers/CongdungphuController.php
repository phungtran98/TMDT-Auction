<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class CongdungphuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $congdungphu = DB::table('congdungphu')->paginate(5);
        return view('admin.congdungphu.index',compact('congdungphu'));
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
        if($request->tenCongdungphu==''){
            $success = Session::put('alert-del', 'Tên công dụng phụ không được trống');
            return redirect()->route('danhsachcongdungphu');
        }
        $congdungphu = DB::table('congdungphu')
                ->insert(
                    [
                        //'cdp_id' =>$request->idCDP,
                        'cdp_ten' =>$request->tenCDP,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($congdungphu)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachcongdungphu');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachcongdungphu');
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
        $congdungphu = DB::table('congdungphu')->where('cdp_id', $id)->first();
        return view('admin.congdungphu.edit', compact('congdungphu'));
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
        if($request->tenCongdungphu==''){
            $success = Session::put('alert-del', 'Tên công dụng phụ không được trống');
            return redirect()->back();
        }
        $data = DB::table('congdungphu')->where('cdp_id',$id)
                    ->update(
                        [
                            'cdp_ten' => $request->tenCongdungphu,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachcongdungphu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('congdungphu')->where('cdp_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachcongdungphu');
    }
}
