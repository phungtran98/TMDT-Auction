<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Nhanvien;
use Illuminate\Support\Facades\Session;
use Validator;
use App\Khachhang;
use Carbon\Carbon;

use Hash;


class AuthController extends Controller
{
    public function getLogin() {
        if(Auth::guard('nhanvien')->check())
        {
            return redirect()->route('admin');
        }
        else
        {
            return view('admin.login');
        }
    }

    public function getLoginAdmin () {
        return view('');
    }

    public function logoutAdmin ()
    {
        Auth::guard('nhanvien')->logout();
        Session::put('username', null);
        return redirect()->back();
    }

    public function authLogin(Request $request){
        $arr = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        //ADMIN cũng là nhân viên
        // dd(Auth::guard('nhanvien')->attempt($arr, true));
        if (Auth::guard('nhanvien')->attempt($arr, true))
        {
            
                $nv_id = \Auth::guard('nhanvien')->user()->nv_id;
                $dataNV = Nhanvien::where('nv_id','=', $nv_id)->first();
                return redirect()->route('admin');
            
        }
        else {
            dd("Sai tên tài khoản hoặc mật khẩu");
        }
    }
    
    public function getClientRegister(){
        $capcha = rand(1000,9999);
        return view('client.register', compact('capcha'));
    }

    public function getClientLogin(){
        if(Session::has('kh'))
        {
            $khachhang = Session::get('kh');
            return redirect()->route('chitietkhachhang',['username' => $khachhang]);
        }
        else
        {
            return view('client.login');
        }
    }

    public function ClientRegister (Request $request) {
        $username = $request->username;
        $password = bcrypt($request->password);
        $hoten = $request->hoten;
        $gioitinh = $request->gioitinh;
        $email = $request->email;
        $diachi = $request->diachi;
        $sdt = $request->sdt;
        $capcha = $request->capcha;
        $capchacode = $request->capchacode;

        $validate = Validator::make(
            $request->all(),
            [
                'username' => 'required | min:5',
                'password' => 'required',
                'hoten' => 'required',
                'gioitinh' => 'required',
                'email' => 'required',
                'diachi' => 'required',
                'sdt' => 'required',
                'capcha' => 'required'
            ],
            [
                'required' => 'Không được để trống'
            ]
        );

        if ($validate->fails()) {
            return redirect()->route('dangkykhachhang')->withErrors($validate);
        }


        $validation_custom_username = DB::table('khachhang')->where('username','=',$username)->first();
        $validation_custom_email = DB::table('khachhang')->where('kh_email','=',$email)->first();
        
        if ($validation_custom_username)
        {
            $success = Session::put('alert-error', 'Tài khoản đã có người sử dụng');
            return redirect()->route('dangkykhachhang');
        }
        
        else if ($validation_custom_username)
        {
            $success = Session::put('alert-error', 'Tài khoản đã có người sử dụng');
            return redirect()->route('dangkykhachhang');
        }
        
        if($capcha != $capchacode || $capcha == ''){
            $success = Session::put('alert-error', 'Mã bảo vệ không chính xác');
            return redirect()->route('dangkykhachhang');
        }
        else{
            $data = DB::table('khachhang')->insert([
                'username' => $username,
                'password' => $password,
                'kh_hoten' => $hoten,
                'kh_gioitinh' => $gioitinh,
                'kh_email' => $email,
                'kh_diachi' => $diachi,
                'kh_sdt' => $sdt,
                'lkh_id' => '1'
            ]);

            $success = Session::put('alert-info', 'Đăng ký thành công');
            return redirect()->route('dangkykhachhang');
        }    
    }
    
    public function ClientLogin (Request $request){
        // $arr1 = [
        //     'username' => $request->username,
        //     'password' => $request->password,
        // ];
       
        $taikhoan = Khachhang::where('username', '=' , $request->username)->first();
        if(Hash::check($request->password,$taikhoan['password']))
        {
                 //$success = Session::put('username', $taikhoan->username);
                
                    //truyền id qua truyền bằng session v đc hk
                    //truyen di dau, truyền qua cho xuyên ssuốt quá trình sd, tại t cần gán nhân viên nào làm gì
                    //xai auth
                
            Session::put('kh', $taikhoan->username);
            return redirect()->route('trangchu');

        }else{
            Session::put('alert-info', 'Sai tài khoản hoặc mật khẩu');
            return redirect()->route('dangnhapkhachhang');
            
        }
                    // return view()->share('dataNV', $dataNV);
                    //return view('client.template.header',compact('$taikhoan'));


                    
                
        
        $taikhoan = Khachhang::where('username', '=' , $request->username)->orWhere('password', '=', $request->password)->first();
        //truyền id qua truyền bằng session v đc hk
        //truyen di dau, truyền qua cho xuyên ssuốt quá trình sd, tại t cần gán nhân viên nào làm gì
        //xai auth
        if ($taikhoan) {
            # code...
            $abc = Session::put('kh', $taikhoan->username);

            // dd($taikhoan->username);
            return redirect()->route('checkout');
        }
        else {
            return view('client.login');
        }
    }
    public function logoutClient ()
    {
        Auth::guard('khachhang')->logout();
        Session::put('kh', null);
        return redirect()->back();
    }
//get thong tin tai khoan
    public function getInfoClient($username)
    {
        $info = DB::table('khachhang')->where('username','=',$username)->first();
        //dd($info);
            return view('client.cusDetail',compact('info'));
            // return dd($loai);
    }

    public function edit($id)
    {
        $khachhang = DB::table('khachhang')->where('kh_id', $id)->first();
        return view('client.cusEdit', compact('khachhang'));
    }
// cap nhat thong tin khach hang
    public function update(Request $request, $id)
    {
        $now = Carbon::now();
        $data = DB::table('khachhang')->where('kh_id',$id)
                    ->update(
                        [
                            'kh_hoten' => $request->hoten,
                            'kh_sdt' => $request->sdt,
                            'kh_gioitinh' => $request->gioitinh,
                            'kh_diachi' => $request->diachi,
                            //'password' => $request->matkhau,
                            'updated_at' => $now,
                        ]
                    );

        
        $success = Session::put('alert-info', 'Cập nhật dữ liệu thành công');
        return redirect()->back();
    }
    //đổi pass
    public function updatepassword(Request $request, $username)
    {
        $now = Carbon::now();
        if($request->matkhau == $request->matkhau2){
            $data = DB::table('khachhang')->where('username',$username)
                        ->update(
                            [
                                'password' => bcrypt($request->matkhau2),
                                'updated_at' => $now,
                            ]
                        );
            $success = Session::put('alert-info', 'Cập nhật mật khẩu thành công');
        }else {
            $fails = Session::put('alert-info2', 'Mật khẩu không trùng khớp'); 
        }
        return redirect()->back();
    }


}
