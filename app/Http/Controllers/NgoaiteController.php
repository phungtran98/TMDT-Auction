<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NgoaiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ngoaite = DB::table('ngoaite')->get();
        return view('admin.ngoaite.index',compact('ngoaite'));
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
        if($request->tenNgoaite==''){
            $success = Session::put('alert-del', 'Tên ngoại tệ không được trống');
            return redirect()->route('danhsachngoaite');
        }
        $ngoaite = DB::table('ngoaite')
                ->insert(
                    [
                        'nt_ten' =>$request->tenNgoaite,
                        'nt_tigia' =>$request->tigia,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($ngoaite)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachngoaite');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachngoaite');
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
        $ngoaite = DB::table('ngoaite')->where('nt_id', $id)->first();
        return view('admin.ngoaite.edit', compact('ngoaite'));
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
        if($request->tenNgoaite==''){
            $success = Session::put('alert-del', 'Tên loại không được trống');
            return redirect()->back();
        }
        $data = DB::table('ngoaite')->where('nt_id',$id)
                    ->update(
                        [
                            'nt_ten' => $request->tenNgoaite,
                            'nt_tigia'=> $request->tigia,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachngoaite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('ngoaite')->where('nt_id',$id)->delete();
        $success = Session::put('alert-info', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachngoaite');
    }

    public function doingoaite($ngoaite) {
        if ($ngoaite == 0) {
            # code...
            Session::forget('ngoaite');
            Session::forget('tigia');
            return redirect()->back();
        } else {
            # code...
            $ngoaite = DB::table('ngoaite')->where('nt_id','=',$ngoaite)->first();
            Session::put('ngoaite',$ngoaite->nt_ten);
            Session::put('tigia',$ngoaite->nt_tigia);
            return redirect()->back();
        }
    }
}
