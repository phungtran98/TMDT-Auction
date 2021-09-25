<?php

namespace App\Http\Controllers;

use App\Nhanvien;
use Illuminate\Http\Request;
use DB;

class NhanvienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nhanvien = DB::table('nhanvien')->where('q_id','=',2)->get();
        return view('admin.nhanvien.index', compact('nhanvien'));
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
        //
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
            $data = Nhanvien::findOrFail($id);
            return response()->json($data,200);
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
        $nv_ten = $request->nv_ten;
        DB::table('nhanvien')->where('nv_id','=',$id)->update(
            [
                'nv_ten' => $nv_ten,
                'nv_diachi' => $request->nv_diachi,
                'nv_sdt' => $request->nv_sdt,
                'nv_email' => $request->nv_email
            ]
        );
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('nhanvien')->where('nv_id','=',$id)->delete();
        return back();
    }
}
