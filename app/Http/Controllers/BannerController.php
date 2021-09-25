<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Session;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $data = DB::table('banner')->get();
        return view('admin.banner.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.add-banner');
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

        $hinhanh = $request->file('hinhanh');
        if ($request->file('hinhanh')->isValid()) {
            # code...
            $uploadPath = public_path('/upload/banner');
            $random = rand(1,1000);
            $tenHA = $hinhanh->getClientOriginalName();
            $hinhanh->move($uploadPath,$random.$tenHA);
            $banner = DB::table('banner')
            ->insert(
                [
                    'bn_tieude' => $request->tieude,
                    'bn_hinhanh' => $random.$tenHA,
                    'bn_noidung' => $request->noidung,
                    'bn_trangthai' => 1,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]
            );
            if($banner)
            {
                $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
                return redirect()->route('banner');
            }
            else
            {
                $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
                return redirect()->route('banner');
            }
        }
        else {
            echo "Lỗi";
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
        $banner = DB::table('banner')->where('bn_id','=',$id)->first();
        return view('admin.banner.detail',compact('banner'));
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

    public function CapNhatTrangThai($id,$trangthai) {
        switch ($trangthai) {
            case '1':
                # code...
                DB::table('banner')->where('bn_id','=',$id)->update(['bn_trangthai' => '1']);
                return redirect()->route('banner');
                break;
            case '0':
                # code...
                DB::table('banner')->where('bn_id','=',$id)->update(['bn_trangthai' => '0']);
                return redirect()->route('banner');
                break;
        }
    }
}
