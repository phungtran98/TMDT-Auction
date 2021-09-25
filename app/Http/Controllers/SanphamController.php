<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Session;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($optionSort)
    {
        switch ($optionSort) {
            case 'danh-sach':
                # code...
                // Sắp sếp bình thường theo id sản phẩm tăng dần ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_id', 'desc')->paginate(10);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                $congdungphu = DB::table('congdungphu')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung','congdungphu']));
                break;
            
            case 'gia-tang':
                //Trường hợp giá tăng ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_giaban', 'desc')->paginate(10);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                $congdungphu = DB::table('congdungphu')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung','congdungphu']));
                break;
            case 'gia-giam':
                //Trường hợp giá giảm ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_giaban', 'asc')->paginate(10);
                // $sanphamcon = DB::table('sanpham')->join('chitietlo','chitietlo.sp_id','=','sanpham.sp_id')->distinct()->get();
                // dd($sanphamcon);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;




            case 'sl-tang':
                //Trường hợp sl tăng ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_soluong', 'desc')->paginate(10);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    
            case 'sl-giam':
                //Trường hợp sl giảm ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_soluong', 'asc')->paginate(10);
                // $sanphamcon = DB::table('sanpham')->join('chitietlo','chitietlo.sp_id','=','sanpham.sp_id')->distinct()->get();
                // dd($sanphamcon);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    




            case 'km-tang':
                //Trường hợp km tăng ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_giakhuyenmai', 'desc')->paginate(10);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    
            case 'km-giam':
                //Trường hợp km giảm ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_giakhuyenmai', 'asc')->paginate(10);
                // $sanphamcon = DB::table('sanpham')->join('chitietlo','chitietlo.sp_id','=','sanpham.sp_id')->distinct()->get();
                // dd($sanphamcon);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    




            case 'tt-tang':
                //Trường hợp km tăng ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_trangthai', 'desc')->paginate(10);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    
            case 'tt-giam':
                //Trường hợp km giảm ===> để ý hàm orderBy
                $sanpham = DB::table('sanpham')->join('loai','loai.l_id','=','sanpham.l_id')->orderBy('sp_trangthai', 'asc')->paginate(10);
                // $sanphamcon = DB::table('sanpham')->join('chitietlo','chitietlo.sp_id','=','sanpham.sp_id')->distinct()->get();
                // dd($sanphamcon);
                $loai = DB::table('loai')->get();
                $congdung = DB::table('congdung')->get();
                return view('admin.sanpham.index', compact(['sanpham','loai','congdung']));
                break;    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $loai = DB::table('loai')->get();
        $congdung = DB::table('congdung')->get();
        $congdungphu = DB::table('congdungphu')->get();
        $xuatxu = DB::table('xuatxu')->get();
        return view('admin.sanpham.add-product',compact(['loai','congdung','congdungphu','xuatxu']));
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
        $sanpham = DB::table('sanpham')
                ->insertGetId(
                    [
                        'sp_ten' => $request->tenSP,
                        'sp_giaban' => $request->giaBan,
                        'sp_thongtin' => $request->thongTin,
                        'l_id' => $request->loai,
                        'cd_id' => $request->congDung,
                        'cdp_id' => $request->congDungPhu,
                        'xx_id' => $request->xuatXu,
                        'created_at' => $now,
                        'updated_at' => $now,
                    ]
                );
        $acutionTime = [
            'sp_id'=>$sanpham,
            'dgsp_ngaybatdau'=>date('Y-m-d H:i:s' , strtotime($request->ngayBD)),
            'dgsp_ngayketthuc'=>date('Y-m-d H:i:s', strtotime($request->ngayKT)),
            'dgsp_trangthai'=>0
        ];
        $daugia = DB::table('dau_gia_san_pham')->insert($acutionTime);

        if($sanpham)
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('danhsachsanpham', ['sort'=> 'danh-sach']);
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachsanpham', ['sort'=> 'danh-sach']);
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
        $sanpham = DB::table('sanpham')->where('sanpham.sp_id',$id)
                    ->join('loai','loai.l_id','=','sanpham.l_id')
                    ->join('congdung','congdung.cd_id','=','sanpham.cd_id')
                    ->join('congdungphu','congdungphu.cdp_id','=','sanpham.cdp_id')
                    ->join('dau_gia_san_pham','dau_gia_san_pham.sp_id','=','sanpham.sp_id')
                    ->first();
        $lo = DB::table('chitietlo')->where('sp_id',$id)->get()->sum('ctl_soluong');
        $chitietlo = DB::table('lo')->join('chitietlo','chitietlo.lo_id','=','lo.lo_id')
                    ->where('sp_id',$id)
                    ->get()->sortBy('ctl_dongia')->first();
        $hsd = DB::table('chitietlo')->where('sp_id',$id)->first();
        // if($chitietlo && $lo)
        // {
            $count = Collection::make(DB::table('chitietlo')->where('sp_id',$id)->get('ctl_soluong'))->sum();
            $anhsanpham = DB::table('hinhanh')->where('sp_id',$id)->get();
            return view('admin.sanpham.detail', compact(['sanpham','anhsanpham','lo','chitietlo','hsd']));
        // }
        // dd($chitietlo);
        // return dd('Binhhh');
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $loai = DB::table('loai')->get();
        $congdung = DB::table('congdung')->get();
        $congdungphu = DB::table('congdungphu')->get();
        $xuatxu = DB::table('xuatxu')->get();
        
        $sanpham = DB::table('sanpham')->where('sanpham.sp_id','=',$id)
        ->join('dau_gia_san_pham','dau_gia_san_pham.sp_id','=','sanpham.sp_id')->first();
        return view('admin.sanpham.edit', compact(['loai','congdung','congdungphu','xuatxu', 'sanpham']));
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
                $data = DB::table('sanpham')->where('sp_id',$id)
                    ->update(
                        [
                            'sp_ten' => $request->tensanpham,
                            //'sp_giagoc' => $request->tenSanpham,
                            'sp_giaban' => $request->giaban,
                            //'sp_giakhuyenmai' => $request->tenSanpham,
                            'sp_thongtin' => $request->thongtin,
                            //'sp_ten' => $request->tenSanpham,
                            'l_id' => $request->loai,
                            'cd_id' => $request->congdung,
                            'cdp_id' => $request->congdungphu,
                            'xx_id' =>$request->xuatxu,
                            'updated_at' => $now
                        ]
                    );  
                $acutionTime = [
                    'dgsp_ngaybatdau'=>date('Y-m-d H:i:s' , strtotime($request->ngayBD)),
                    'dgsp_ngayketthuc'=>date('Y-m-d H:i:s', strtotime($request->ngayKT)),
                    'dgsp_trangthai'=>0
                ];
                $daugia = DB::table('dau_gia_san_pham')->where('sp_id',$id)->update($acutionTime);

        //Cập nhật xong cập nhật lại loại để show ra kèm theo thông báo
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
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
        //
    }

    public function getAvata($id, $tenHA)
    {
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_anhdaidien'=> $tenHA]);
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }
 
    public function khuyenmai($id, Request $request)
    {
        $sanpham = DB::table('sanpham')->where('sp_id',$id)->first();
        $giaban = $sanpham->sp_giaban;
        $giakm =  $giaban - ($giaban * $request->giatri / 100);
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_giakhuyenmai' => $giakm]);
        $success = Session::put('alert-info', 'Cập nhật giá thành công');
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }

    public function resetGia ($id)
    {
        DB::table('sanpham')->where('sp_id',$id)->update(['sp_giakhuyenmai' => NULL]);
        return redirect()->route('chitietsanpham', ['id' => $id]);
    }

    public function addShipment ($id) {
        return view('admin.sanpham.addshipment');
    }

    public function CapNhatGiaBan ($id, Request $request) {
        $giacu = DB::table('sanpham')->where('sp_id','=',$id)->first();
        if($request->giaban <= $giacu->sp_giagoc){
            $success = Session::put('alert-del', 'Không được thấp hơn giá gốc');
            return redirect()->route('chitietsanpham', ['id' => $id]);
        }
        else
        {
            DB::table('sanpham')->where('sp_id','=',$id)->update([
                'sp_giaban' => $request->giaban
            ]);
            $success = Session::put('alert-info', 'Cập nhật giá thành công');
            return redirect()->route('chitietsanpham', ['id' => $id]);
        }
    }

    public function nhapHang(Request $request)
    {
        
        $now = Carbon::now();
        // $timsanpham = DB::table('chitietlo')->where('sp_id','=',$request->id_sp)->where('ctl_soluong','>',0)->first();
        // if($timsanpham){ 
        //     return dd('Sản phẩm còn hàng');
        // }
        $ngaysanxuat = Carbon::parse($request->ngaysanxuat)->format('d/m/Y');
        $hansudung = Carbon::parse($request->hansudung)->format('d/m/Y');
            $lo = DB::table('lo')
                ->insertGetId(
                    [
                        'lo_ten' =>$request->tenLo,
                        'created_at' => $now,
                        'updated_at' => $now,
                        'lo_hansudung' => $hansudung,
                        'lo_ngaysanxuat' => $ngaysanxuat
                    ]
                );
            $ctl = DB::table('chitietlo')->insert([
                'lo_id' => $lo,
                'sp_id' => $request->id_sp,
                'ctl_dongia' => $request->dongia,
                'ctl_soluong' => $request->soluong,
                'created_at' => $now->toDateString(),
                'updated_at' => $now->toDateString()
            ]);
        if($lo)
        {
            $soluongcu = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->first();
            $sp_trangthai = DB::table('sanpham')->where('sp_id','=',$request->id_sp)->update([
                'sp_trangthai' => '1',
                'sp_giagoc' => $request->dongia,
                'sp_soluong' => $soluongcu->sp_soluong+$request->soluong,
            ]);
            $success = Session::put('alert-info', 'Thêm dữ liệu thành công');
            return redirect()->route('chitietsanpham', ['id' => $request->id_sp]);
        }
        else
        {
            $success = Session::put('alert-info', 'Thêm dữ liệu không thành công');
            return redirect()->route('danhsachlo');
        }
    }

    public function editProduct($idsp)
    { 
        $data = DB::table('sanpham')->where('sp_id','=',$idsp)->get();
        return response()->json($data, 200);
    }

    // public function removeSale(){
    //     DB::table('sanpham')->update(['sp_giakhuyenmai' => null]);
    //     return redirect()->route('danhsachsanpham', ['sort' => 'danh-sach']);
    // }
}
