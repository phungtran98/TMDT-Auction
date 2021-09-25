<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class XuatxuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xx = DB::table('xuatxu')->paginate(5);
        return view('admin.xuatxu.index', compact('xx'));
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
        if($request->tenXX==''){
            $success = Session::put('alert-del', 'Nơi xuất xứ không được trống');
            return redirect()->route('danhsachxuatxu');
        }
        $xuatxu = DB::table('xuatxu')
                ->insert(
                    [
                        'xx_ten' =>$request->tenXX,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($xuatxu)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachxuatxu');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachxuatxu');
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
        $xx = DB::table('xuatxu')->where('xx_id', $id)->first();
        return view('admin.xuatxu.edit', compact('xx'));
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
        if($request->tenXX==''){
            $success = Session::put('alert-del', 'Nơi xuất xứ không được trống');
            return redirect()->back();
        }
        $data = DB::table('xuatxu')->where('xx_id',$id)
                    ->update(
                        [
                            'xx_ten' => $request->tenXX,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachxuatxu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('xuatxu')->where('xx_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachxuatxu');
    }
}
