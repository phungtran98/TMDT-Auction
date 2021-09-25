<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class DonhangController extends Controller
{
    //hien nguoi dung
    public function getOrders()
    {
        $user = DB::table('khachhang')->where('username','=',Session::get('kh'))->first();
        $orders = DB::table('donhang')
                ->where('kh_id','=',$user->kh_id)
                ->get();
        // dd($orders);
        return view('client.orders',compact('orders'));
    }


    public function getOrdersAdmin()
    {
        $donhang = DB::table('donhang')->get();
        return view('admin.donhang.index',compact('donhang'));
        // return dd($loai);
    }

    public function show($id,$user)
    {   
        $donhang = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->first();
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        //$user = DB::table('khachhang')->where('kh_hoten','=',$user)->first();
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->join('sanpham','sanpham.sp_id','=','chitietdonhang.sp_id')
        ->where('dh_madon','=',$id)
        ->get();
        //dd($donhang->sp_id);
        // dd($donhang2);

        return view('admin.donhang.detail', compact(['donhang','donhang1','donhang2']));

    }

    public function trangthai($id, $trangthaihientai, Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $trangthai = $request->trangthai;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_trangthai' => $trangthai]);
        $donhang2 = DB::table('chitietdonhang')
        ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
        ->where('dh_madon','=',$donhang->dh_madon)
        ->get();


        //Trạng thái đã thanh toán
        if($trangthaihientai == 3 && $trangthai != 3){
            foreach ($donhang2 as $key => $value1) {
                # code...
                $chitietlo = DB::table('chitietlo')->where('sp_id','=',$value1->sp_id)->get();
                $sanpham = DB::table('sanpham')->where('sp_id','=',$value1->sp_id)->get();
                foreach ($chitietlo as $key => $value2) {
                    # code...
                    $chitietloedit = DB::table('chitietlo')->where('sp_id','=', $value2->sp_id)->update([
                        'ctl_soluong' => $value2->ctl_soluong + $value1->sp_soluongsp
                    ]);
                }
                foreach ($sanpham as $key => $value3) {
                    # code...
                    $sanphamedit = DB::table('sanpham')->where('sp_id','=',$value3->sp_id)->update([
                        'sp_soluong' => $value3->sp_soluong + $value1->sp_soluongsp
                    ]);
                }
            }
            DB::table('donhang')->where('dh_id',$id)->update(['dh_thoigiannhanhang' => null]);
            $success = Session::put('alert-info', 'Cập nhật trạng thái thành công');
            return redirect()->back();
        }
        //Thanh toán thành công thì trừ số lượng đi
        else if($trangthai == 3)
        {
            foreach ($donhang2 as $key => $value1) {
                # code...
                $chitietlo = DB::table('chitietlo')->where('sp_id','=',$value1->sp_id)->get();
                $sanpham = DB::table('sanpham')->where('sp_id','=',$value1->sp_id)->get();
                // dd($sanpham);
                foreach ($chitietlo as $key => $value2) {
                    # code...
                    $chitietloedit = DB::table('chitietlo')->where('sp_id','=', $value2->sp_id)->update([
                        'ctl_soluong' => $value2->ctl_soluong - $value1->sp_soluongsp
                    ]);
                }
                foreach ($sanpham as $key => $value3) {
                    # code...
                    $sanphamedit = DB::table('sanpham')->where('sp_id','=',$value3->sp_id)->update([
                        'sp_soluong' => $value3->sp_soluong - $value1->sp_soluongsp
                    ]);
                }
                
            }
            DB::table('donhang')->where('dh_id',$id)->update(['dh_thoigiannhanhang' => Carbon::now()]);
            $success = Session::put('alert-info', 'Cập nhật trạng thái thành công');
            return redirect()->back();
    
            
        }
        else if($trangthai == $trangthaihientai){
            $success = Session::put('alert-info', 'Cập nhật trạng thái thành công');
            return redirect()->back();
        }
        //Còn lại thì cộng số lượng lại
        else {
            
            $success = Session::put('alert-info', 'Cập nhật trạng thái thành công');
            return redirect()->back();
        }
        
    }

    public function update($id)
    {
        $now = Carbon::now();
        $data = DB::table('donhang')->where('dh_madon',$id)
                    ->update(
                        [
                            'dh_trangthai' => 2,
                            'updated_at' => $now,
                        ]
                    );

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->route('danhsachdonhang');
    } 

    public function vanchuyen($id,  Request $request)
    {
        $donhang = DB::table('donhang')->where('dh_id',$id)->first();
        $vanchuyen = $request->vanchuyen;
        $donhang1 = DB::table('donhang')->join('khachhang','khachhang.kh_id','=','donhang.kh_id')->where('dh_madon','=',$id)->first();
        DB::table('donhang')->where('dh_id',$id)->update(['dh_quatrinhvanchuyen' => $vanchuyen]);
        $success = Session::put('alert-info', 'Cập nhật thành công');
        return redirect()->back();
    }


    
}
