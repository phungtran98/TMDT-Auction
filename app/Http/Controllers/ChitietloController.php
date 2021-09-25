<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use Illuminate\Support\Facades\Session;

class ChitietloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ctl = DB::table('chitietlo')->where('l_id',)
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
        $validate = Validator::make(
            $request->all(),
            [
                'dongia' => 'required',
                'soluong' => 'required'
            ],
            [
                'dongia.required' => 'Đơn giá không được để trống',
                'soluong.required' => 'Số lượng không được để trống'
            ]
        );

        if ($validate->fails()) {
            return redirect()->route('chitietlo', ['id' => $id])->withErrors($validate);
        }
        else{
            $success = Session::put('alert-info', 'Chỉnh sửa thành công thành công');
            $lo = DB::table('chitietlo')->where('lo_id','=',$id)->update(
                [
                    'sp_id' => $request->sanpham,
                    'ctl_dongia' => $request->dongia,
                    'ctl_soluong' => $request->soluong    
                ]
            );
    
            return redirect()->route('chitietlo', ['id' => $id]);
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
        //
    }
}
