<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;


class LoaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $loai = DB::table('loai')->get();
        return view('admin.loaisanpham.index',compact('loai'));
        // return dd($loai);
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
        if($request->tenLoai==''){
            $success = Session::put('alert-del', 'Tên loại không được trống');
            return redirect()->route('danhsachloai');
        }
        $loai = DB::table('loai')
                ->insert(
                    [
                        'l_ten' =>$request->tenLoai,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );

        if($loai)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachloai');
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachloai');
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
        $loai = DB::table('loai')->where('l_id', $id)->first();
        return view('admin.loaisanpham.edit', compact('loai'));
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
        if($request->tenLoai==''){
            $success = Session::put('alert-del', 'Tên loại không được trống');
            return redirect()->back();
        }
        $data = DB::table('loai')->where('l_id',$id)
                    ->update(
                        [
                            'l_ten' => $request->tenLoai,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachloai');
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('loai')->where('l_id',$id)->delete();
        $success = Session::put('alert-del', 'Xóa dữ liệu thành công');
        return redirect()->route('danhsachloai');
    }

    public function search(Request $request)
    {
        $output = '';
        $stt = 1;
        if ($request->ajax()) {
            $query = $request->get('query');
            if ($query != '') {
                # code...
                $data = DB::table('loai')->where('l_ten','like','%' . $query . '%')->get();
            }
            else
            {
                $data = DB::table('loai')->get();
            }
            $total_row = $data->count();
            if ($total_row > 0) {
                # code...http://127.0.0.1:8000/admin/loai/1/edit
                foreach ($data as $row) {
                    # code...
                    $output .= '
                    <tr>
                        <td>'. $stt++ .'</td>
                        <td>'. $row->l_id .'</td>
                        <td>'. $row->l_ten .'</td>
                        <td>'. $row->created_at .'</td>
                        <td>'. $row->updated_at .'</td>
                        <td>'. '<a href="http://127.0.0.1:8000/admin/loai/'. $row->l_id .'/edit" class="btn btn-primary">Sửa</a>' 
                            .'<a href="http://127.0.0.1:8000/admin/loai/'. $row->l_id .'/delete" class="btn btn-danger">Xóa</a>' 
                        .'</td>
                    </tr>';
                }
            }
            else
            {
                $output .= '
                    <tr>
                        <td align="center" colspan="6">Không có dữ liệu</td>
                    <tr>
                ';
            }

            $data = array(
                'table_data' => $output,
            );
            echo json_encode($data);
        }
    }
}
