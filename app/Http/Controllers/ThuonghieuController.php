<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Validator;

class ThuonghieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $th = DB::table('thuonghieu')->paginate(5);
        return view('admin.thuonghieu.index', compact('th'));
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
        if ($request->hasFile('hinhanh')) {
            if ($request->tenTH != '') {
                # code...
                $hinhanh = $request->file('hinhanh');
                $tenhinhanh = $hinhanh->getClientOriginalName();
                // if($request->tenTH=='' || $tenhinhanh == ''){
                //     $success = Session::put('alert-del', 'Thiếu tên thương hiệu hoặc logo');
                //     return redirect()->route('danhsachthuonghieu');
                // }
                $rd = rand(1000,9999);
                $thumuc = public_path('/upload/hinhanh');
                $hinhanh->move($thumuc,$rd.$tenhinhanh);
                $thuonghieu = DB::table('thuonghieu')
                        ->insert(
                            [
                                'th_ten' =>$request->tenTH,
                                'created_at' => $now,
                                'updated_at' => $now,
                                'th_logo'=>$rd.$tenhinhanh
                            ]
                        );
                if($thuonghieu)
                {
                    $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
                    return redirect()->route('danhsachthuonghieu');
                }
                else
                {
                    $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
                    return redirect()->route('danhsachthuonghieu');
                }
            }
            
        }else{
                $success = Session::put('alert-del', 'Dữ liệu không được trống');
                return redirect()->route('danhsachthuonghieu');

                
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
        $th = DB::table('thuonghieu')->where('th_id', $id)->first();
        return view('admin.thuonghieu.edit', compact('th'));
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
        if($request->tenTH == '' ){
            $success = Session::put('alert-del', 'Tên thương hiệu không được trống');
            return redirect()->back();
        }
        if ($request->hasFile('hinhanh')) {
            $now = Carbon::now();
            $hinhanh = $request->file('tenLG');
            $tenhinhanh = $hinhanh->getClientOriginalName();
            $rd = rand(1000,9999);
            $thumuc = public_path('/upload/hinhanh');
            $hinhanh->move($thumuc,$rd.$tenhinhanh);
            $data = DB::table('thuonghieu')->where('th_id',$id)
                        ->update(
                            [
                                'th_ten' => $request->tenTH,
                                'th_logo'=>$rd.$tenhinhanh,
                                'updated_at' => $now,
                            ]
                        );

            //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
            $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
            return redirect()->route('danhsachthuonghieu');
        }else{
            $now = Carbon::now();
            $data = DB::table('thuonghieu')->where('th_id',$id)
                        ->update(
                            [
                                'th_ten' => $request->tenTH,
                                'updated_at' => $now,
                            ]
                        );
            //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
            $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
            return redirect()->route('danhsachthuonghieu');
        }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('thuonghieu')->where('th_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachthuonghieu');
    }
}
