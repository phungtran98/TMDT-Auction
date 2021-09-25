<?php

namespace App\Http\Controllers;
use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ThongkeController extends Controller
{
    public function index(){
        $data = [];
        // $tongluotxem = Analytics::fetchTotalVisitorsAndPageViews(Period::days(10));
        // $data ['date'] = $tongluotxem->pluck("date");
        // $data ['visitors'] = $tongluotxem->pluck("visitors");
        // $data ['pageViews'] = $tongluotxem->pluck("pageViews");
       
        // return view('admin.index');
        // $sanpham = DB::table('congdung')->paginate(5);
        // return view('admin.congdung.index',compact('congdung')); 
        //retrieve visitors and pageview data for the current day and the last seven days

        // $data ['fetchTopReferrers'] = Analytics::fetchTopReferrers(Period::days(7));
        
        //$countDH = DB::table('donhang')->where('dh_trangthai'=='1')->count('dh_id');
        $countKH = DB::table('khachhang')->count();
        $countSP = DB::table('chitietdonhang')
                    ->join('donhang','donhang.dh_id','=','chitietdonhang.dh_id')
                    ->whereMonth('dh_thoigiandathang','=',Carbon::now())
                    ->sum('sp_soluongsp');
        $countDHCD = DB::table('donhang')->where('dh_trangthai','=',1)->count();
        $countTT = DB::table('donhang')->where('dh_trangthai','=',3)->sum('dh_tongtien');
        // Tháng 1
        $dt1 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',1)->sum('dh_tongtien');
        //Tháng 2
        $dt2 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',2)->sum('dh_tongtien');
        //Tháng 3
        $dt3 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',3)->sum('dh_tongtien');
        //Tháng 4
        $dt4 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',4)->sum('dh_tongtien');
        // Tháng 5
        $dt5 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',5)->where('dh_thoigiannhanhang','<>',null)->sum('dh_tongtien');
        //Tháng 6
        $dt6 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',6)->sum('dh_tongtien');
        //Tháng 7
        $dt7 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',7)->sum('dh_tongtien');
        //Tháng 8
        $dt8 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',8)->sum('dh_tongtien');
        //Tháng 9
        $dt9 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',9)->sum('dh_tongtien');
        //Tháng 10
        $dt10 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',10)->sum('dh_tongtien');
        //Tháng 11
        $dt11 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',11)->sum('dh_tongtien');
        //Tháng 12
        $dt12 = DB::table('donhang')->whereYear('dh_thoigiandathang','=',Carbon::now())->whereMonth('dh_thoigiannhanhang','=',12)->sum('dh_tongtien');
        
        //$countLSP = DB::table('loai')->count();
        return view('admin.index',compact([
            'countSP',
            //'countLSP',
            //'countDH',
            'countKH',
            'countDHCD',
            'countTT',
            'dt1',
            'dt2',
            'dt3',
            'dt4',
            'dt5',
            'dt6',
            'dt7',
            'dt8',
            'dt9',
            'dt10',
            'dt11',
            'dt12',
        ]));
    }
}
