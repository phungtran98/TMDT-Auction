<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/* Phần này là các route của trang admin */
// Xử lý đăng nhập cho trang admin
Route::get('dang-nhap-admin-1', 'AuthController@getLogin')->name('getDangnhap');
Route::post('dang-nhap-admin-2','AuthController@authLogin')->name('dangnhap');


// middleware admin
Route::group(['prefix' => 'admin', 'middleware' => 'checkUser'], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin');

    //Quản lý nhân viên
    Route::get('nhan-vien','NhanvienController@index')->name('nhan-vien');
    //test ajax
    Route::get('nhan-vien/edit/{id}','NhanvienController@edit')->name('edit-nhan-vien');
    Route::post('nhan-vien/update/{id}','NhanvienController@update')->name('update-nhan-vien');
    Route::get('nhan-vien/delete/{id}','NhanvienController@destroy')->name('delete-nhan-vien');

    Route::get('/dang-xuat','AuthController@logoutAdmin')->name('dangxuat');
     Route::get('/', 'ThongkeController@index')->name('admin');
    //Các route này của Loại sản phẩm
    Route::get('loai', 'LoaiController@index')->name('danhsachloai');

    Route::post('loai','LoaiController@store')->name('themloai');

    Route::get('loai/{id}/edit','LoaiController@edit')->name('sualoai');

    Route::post('loai/{id}/edit', 'LoaiController@update')->name('capnhatloai');

    Route::get('loai/{id}/delete','LoaiController@destroy')->name('xoaloai');

    Route::get('loai/search', 'LoaiController@search')->name('search-category');


    //Các route này của Ngoại tệ
    Route::get('ngoaite', 'NgoaiteController@index')->name('danhsachngoaite');
    Route::post('ngoaite','NgoaiteController@store')->name('themngoaite');
    Route::get('ngoaite/{id}/edit','NgoaiteController@edit')->name('suangoaite');
    Route::post('ngoaite/{id}/edit', 'NgoaiteController@update')->name('capnhatngoaite');  
    Route::get('ngoaite/{id}/delete','NgoaiteController@destroy')->name('xoangoaite');  

    //Don hang
    Route::get('donhang', 'DonhangController@getOrdersAdmin')->name('danhsachdonhang');
    Route::get('donhang/{id}/{user}/detail','DonhangController@show')->name('chitietdonhang');
    Route::get('donhang/trangthai/{id}', 'DonhangController@trangthai')->name('trangthaidonhang');
    Route::get('donhang/{id}/edit', 'DonhangController@update')->name('capnhattrangthaidonhang');
    Route::get('donhang/vanchuyen/{id}', 'DonhangController@vanchuyen')->name('vanchuyendonhang');
   // Route::get('donhang/{id}/edit', 'DonhangController@capnhatvanchuyen')->name('capnhatvanchuyendonhang');

    //thương hiệu nà
    Route::get('thuonghieu', 'ThuonghieuController@index')->name('danhsachthuonghieu');

    Route::post('thuonghieu','ThuonghieuController@store')->name('themthuonghieu');

    Route::get('thuonghieu/{id}/edit','ThuonghieuController@edit')->name('suathuonghieu');

    Route::post('thuonghieu/{id}/edit', 'ThuonghieuController@update')->name('capnhatthuonghieu');

    Route::get('thuonghieu/{id}/delete','ThuonghieuController@destroy')->name('xoathuonghieu');

    //xuất xứ sản phẩm
    Route::get('xuatxu', 'XuatxuController@index')->name('danhsachxuatxu');

    Route::post('xuatxu','XuatxuController@store')->name('themxuatxu');

    Route::get('xuatxu/{id}/edit','XuatxuController@edit')->name('suaxuatxu');

    Route::post('xuatxu/{id}/edit', 'XuatxuController@update')->name('capnhatxuatxu');

    Route::get('xuatxu/{id}/delete','XuatxuController@destroy')->name('xoaxuatxu');

    //Lô hàng
    Route::get('lo', 'LoController@index')->name('danhsachlo');

    Route::post('lo','LoController@store')->name('themlo');

    Route::get('lo/{id}/edit','LoController@edit')->name('sualo');

    Route::post('lo/{id}/edit', 'LoController@update');

    Route::get('lo/{id}/detail','LoController@show')->name('chitietlo');

    Route::post('lo/{id}/update','ChitietloController@update')->name('capnhatlo');

    Route::get('lo/{id}/delete','LoController@destroy')->name('xoalo');

    //Sản phẩm truyền cái biến sort dô
    Route::get('san-pham/{sort}', 'SanphamController@index')->name('danhsachsanpham');

    //Hiển thị giao diện thêm sản phẩm
    Route::get('them-san-pham', 'SanphamController@create')->name('giao-dien-them');

    Route::post('sanpham','SanphamController@store')->name('themsanpham');

    Route::get('sanpham/{id}', 'SanphamController@show')->name('chitietsanpham');

    Route::get('sanpham/hethang/{id}', 'SanphamController@hethang')->name('hethang');
    Route::get('sanpham/conhang/{id}', 'SanphamController@conhang')->name('conhang');
    Route::get('sanpham/khuyemmai/{id}', 'SanphamController@khuyenmai')->name('khuyenmaisanpham');

    Route::get('sanpham/khuyenmai-reset/{id}' , 'SanphamController@resetGia')->name('resetGia');

    Route::get('sanpham/{id}/edit','SanphamController@edit')->name('suasanpham');

    Route::post('sanpham/{id}/edit', 'SanphamController@update')->name('capnhatsanpham');

    Route::get('sanpham/{id}/delete','SanphamController@destroy')->name('xoasanpham');
    Route::post('sanpham/nhap-hang', 'SanphamController@nhapHang')->name('nhaphang');
    Route::get('sanpham/{id}/edit','SanphamController@edit')->name('suathongtinsanpham');
    Route::get('sanpham/{id}/cap-nhat-gia-ban','SanphamController@CapNhatGiaBan')->name('capnhatgiaban');
    Route::get('sanpham/{idsp}', 'SanphamController@editProduct')->name('showproduct');
    Route::get('sanpham/remove-sale','SanphamController@removeSale')->name('remove-sale');




    //Hình ảnh cho sản phẩm
    Route::get('sanpham/{id}/hinhanh','HinhanhController@create')->name('themhinhanh');
    Route::post('sanpham/hinhanh', 'HinhanhController@store')->name('themhinhanh2222');
    Route::get('sanpham/{idHA}/{idSP}/ha-delete','HinhanhController@destroy')->name('xoahinhanh');
    Route::get('sanpham/{id}/{tenHA}','SanphamController@getAvata')->name('datanhdaidien');
    //Công dụng nà
    Route::get('congdung', 'CongdungController@index')->name('danhsachcongdung');

    Route::post('congdung','CongdungController@store')->name('themcongdung');

    Route::get('congdung/{id}/edit','CongdungController@edit')->name('suacongdung');

    Route::post('congdung/{id}/edit', 'CongdungController@update')->name('capnhatcongdung');

    Route::get('congdung/{id}/delete','CongdungController@destroy')->name('xoacongdung');
    //Công dụng phụ nà
    Route::get('congdungphu', 'CongdungphuController@index')->name('danhsachcongdungphu');  

    Route::post('congdungphu','CongdungphuController@store')->name('themcongdungphu');

    Route::get('congdungphu/{id}/edit','CongdungphuController@edit')->name('suacongdungphu');

    Route::post('congdungphu/{id}/edit', 'CongdungphuController@update')->name('capnhatcongdungphu');

    Route::get('congdungphu/{id}/delete','CongdungphuController@destroy')->name('xoacongdungphu');
    ///Hình thức thanh toán nà
    Route::get('hinhthucthanhtoan', 'HinhthucthanhtoanController@index')->name('danhsachhinhthucthanhtoan');  

    Route::post('hinhthucthanhtoan','HinhthucthanhtoanController@store')->name('themhinhthucthanhtoan');

    Route::get('hinhthucthanhtoan/{id}/edit','HinhthucthanhtoanController@edit')->name('suahinhthucthanhtoan');

    //Khuyến mãi
    Route::get('khuyenmai/voucher', 'KhuyenmaiVoucherController@index')->name('voucher');
    Route::post('khuyenmai/voucher/add-voucher', 'KhuyenmaiVoucherController@store')->name('add-voucher');




    Route::post('hinhthucthanhtoan/{id}/edit', 'HinhthucthanhtoanController@update')->name('capnhathinhthucthanhtoan');

    Route::get('hinhthucthanhtoan/{id}/delete','HinhthucthanhtoanController@destroy')->name('xoahinhthucthanhtoan');
    ///Hình thức vận chuyển nà
    Route::get('hinhthucvanchuyen', 'HinhthucvanchuyenController@index')->name('danhsachhinhthucvanchuyen');  

    Route::post('hinhthucvanchuyen','HinhthucvanchuyenController@store')->name('themhinhthucvanchuyen');

    Route::get('hinhthucvanchuyen/{id}/edit','HinhthucvanchuyenController@edit')->name('suahinhthucvanchuyen');

    Route::post('hinhthucvanchuyen/{id}/edit', 'HinhthucvanchuyenController@update')->name('capnhathinhthucvanchuyen');

    Route::get('hinhthucvanchuyen/{id}/delete','HinhthucvanchuyenController@destroy')->name('xoahinhthucvanchuyen');


    //quản lý banner
    Route::get('banner','BannerController@index')->name('banner');
    Route::get('banner/them-banner','BannerController@create')->name('them-banner');
    Route::post('banner/them-banners','BannerController@store')->name('them-banners');
    Route::get('banner/chi-tiet/{id}','BannerController@show')->name('chi-tiet-banner');
    Route::get('banner/cap-nhat-trang-thai/{id}/{trangthai}','BannerController@CapNhatTrangThai')->name('capnhattrangthai');
    //Thống kê
    Route::get('thong-ke','ThongkeController@index')->name('thongke');



    //Các route này của Ngoại tệ
    Route::get('ngoaite', 'NgoaiteController@index')->name('danhsachngoaite');
    Route::post('ngoaite','NgoaiteController@store')->name('themngoaite');
    Route::get('ngoaite/{id}/edit','NgoaiteController@edit')->name('suangoaite');
    Route::post('ngoaite/{id}/edit', 'NgoaiteController@update')->name('capnhatngoaite');  
    Route::get('ngoaite/{id}/delete','NgoaiteController@destroy')->name('xoangoaite');  

    //Don hang
    Route::get('donhang', 'DonhangController@getOrdersAdmin')->name('danhsachdonhang');
    Route::get('donhang/{id}/{user}/detail','DonhangController@show')->name('chitietdonhang');
    Route::get('donhang/trangthai/{id}/{trangthaihientai}', 'DonhangController@trangthai')->name('trangthaidonhang');
    Route::get('donhang/{id}/edit', 'DonhangController@update')->name('capnhattrangthaidonhang');

    //Khách hàng
    Route::get('khach-hang','KhachhangController@index')->name('khachhang');
});
//middleware nhân viên bình thường
// Route::group(['prefix' => 'nhan-vien', 'middleware' => 'checkUser2'], function () {
//     Route::get('/', function () {
//         return view('admin.index');
//     })->name('admin');
//      //Quản lý nhân viên
//      Route::get('nhan-vien','NhanvienController@index')->name('nhan-vien');

//      Route::get('/dang-xuat','AuthController@logoutAdmin')->name('dangxuat');
//       Route::get('/', 'ThongkeController@index')->name('admin');
//      //Các route này của Loại sản phẩm
//      Route::get('loai', 'LoaiController@index')->name('danhsachloai');
 
//      Route::post('loai','LoaiController@store')->name('themloai');
 
//      Route::get('loai/{id}/edit','LoaiController@edit')->name('sualoai');
 
//      Route::post('loai/{id}/edit', 'LoaiController@update')->name('capnhatloai');
 
//      Route::get('loai/{id}/delete','LoaiController@destroy')->name('xoaloai');
 
//      Route::get('loai/search', 'LoaiController@search')->name('search-category');
// });

//Xử lý trang chủ cho người dùng
Route::get('/', 'TrangchuController@index')->name('trangchu');
Route::get('/gioi-thieu', function () {
    return view('client.about');
})->name('gioithieu');

//Đăng nhập và đăng ký cho khách hàng
Route::get('dang-ky', 'AuthController@getClientRegister')->name('dangkykhachhang');
Route::post('dang-ky-1', 'AuthController@ClientRegister')->name('dang-ky');

Route::get('dang-nhap', 'AuthController@getClientLogin')->name('dangnhapkhachhang');
Route::post('dang-nhap-1', 'AuthController@ClientLogin')->name('dang-nhap');
Route::get('dang-nhap-1', 'AuthController@ClientLogin')->name('dang-nhap');

Route::get('thong-tin/{username}','AuthController@getInfoClient')->name('thong-tin-khach-hang');

Route::get('/dang-xuat-kh','AuthController@logoutClient')->name('dangxuatkh');

Route::get('/loai-san-pham/{idCategory}', 'TrangchuController@getCategory')->name('loaisanpham');
Route::get('/san-pham/{idProduct}', 'TrangchuController@getProduct')->name('sanpham');
Route::get('/san-pham', 'TrangchuController@getAllProduct')->name('tatcasanpham');
Route::get('/san-pham-2', 'TrangchuController@getAllProduct2')->name('tatcasanpham-2');
//Banner
Route::get('banner/{idBanner}','TrangchuController@getBanner')->name('getBanner');


// Tìm kiếm nè:
Route::get('tim-kiem','TrangchuController@searchProduct')->name('search');

//Liên hệ khách hàng với shop
Route::get('/lien-he', function () {
    return view('client.contact');
})->name('lienhe');
//Chi Tiết Khách Hàng
Route::get('/khach-hang/{username}','AuthController@getInfoClient')->name('chitietkhachhang');

//Giỏ hàng
Route::get('/add-to-cart/{idSP}','GiohangController@addCart')->name('add-cart');
Route::get('content-cart','GiohangController@getCart')->name('content-cart');
Route::get('clear-cart','GiohangController@clearCart')->name('clear-cart');
Route::get('remove-product/{id}','GiohangController@remove')->name('remove');
Route::get('thanh-toan','GiohangController@checkOut')->name('checkout');
Route::get('chon-phuong-thuc-thanh-toan','GiohangController@checkOut2')->name('checkout2');
//Sản phẩm yêu thích
Route::get('yeu-thich/{idProduct}','WishlistController@addWishList')->name('add-wish-list');
Route::get('san-pham-yeu-thich','WishlistController@getWishList')->name('wish-list');

//Viết code nhơ comment và đặt URL giống mẫu giùm cám ơn nhiều
Route::get('/khach-hang/{username}/cap-nhat','AuthController@edit')->name('suathongtintaikhoan');

Route::post('/khach-hang/{id}/cap-nhat', 'AuthController@update')->name('capnhatthongtintaikhoan');

Route::post('/khach-hang/{username}/cap-nhat-mat-khau', 'AuthController@updatepassword')->name('capnhatmatkhau');
//Đơn hàng của khách
Route::get('don-hang','DonhangController@getOrders')->name('get-orders');

//Bình luận nằm ở đây nè
Route::post('binh-luan/{sanpham}','BinhluanController@comment')->name('comment');


//Thanh toán
Route::get('select-method','GiohangController@getMethodCheckout')->name('method-checkout');
Route::get('VNPay','VNPayController@create')->name('vnpay');

//Ngoại tệ
Route::get('thay-doi-ngoai-te/{ngoaite}', 'NgoaiteController@doingoaite')->name('doingoaite');

//Áp dụng khuyến mãi
Route::get('ap-dung-voucher', 'KhuyenmaiVoucherController@useVoucher')->name('ap-dung-voucher');
Route::get('bo-voucher','KhuyenmaiVoucherController@clearVoucher')->name('bo-ap-dung-voucher');
