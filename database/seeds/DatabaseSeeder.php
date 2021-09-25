<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   

        $now = Carbon::now();

        $loaikhachhang = [
            [
                'lkh_ten' => 'Khách hàng thường',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'lkh_ten' => 'Khách hàng VIP',
                'created_at' => $now,
                'updated_at' => $now
            ] 
        ];

        DB::table('loaikhachhang')->insert($loaikhachhang);

        $khachhang = [
            [
                'username' => 'ngocduc',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Lê Ngọc Đức',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'lnd240998@gmail.com',
                'kh_diachi' => 'Cần Thơ',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'ngocnguyen',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Đỗ Thị Ngọc Nguyên',
                'kh_gioitinh' => 'Nữ',
                'kh_email' => 'nguyen98@gmail.com',
                'kh_diachi' => 'An Giang',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'ngoctam',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Dương Ngọc Tâm',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'tam98@gmail.com',
                'kh_diachi' => 'Thốt Nốt',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'quocbinh',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Lương Quốc Bình',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'binh98@gmail.com',
                'kh_diachi' => 'Cần Thơ',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'tranphung',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Trần Thanh Phụng',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'phung98@gmail.com',
                'kh_diachi' => 'Trà Vinh',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'tuongvy',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Đặng Thị Tường Vy',
                'kh_gioitinh' => 'Nữ',
                'kh_email' => 'vy98@gmail.com',
                'kh_diachi' => 'Vĩnh Long',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'minhnghia',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Lê Minh Nghĩa',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'nghia98@gmail.com',
                'kh_diachi' => 'Cần Thơ',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'user1',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Nguyễn Văn A',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'nguyenvan98a@gmail.com',
                'kh_diachi' => 'An Giang',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'user2',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Nguyễn Văn B',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'nguyenvan98b@gmail.com',
                'kh_diachi' => 'An Giang',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'user3',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Nguyễn Thị C',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'nguyenthi98c@gmail.com',
                'kh_diachi' => 'An Giang',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
            [
                'username' => 'user4',
                'password' => bcrypt('12345'),
                'kh_hoten' => 'Nguyễn Văn ABC',
                'kh_gioitinh' => 'Nam',
                'kh_email' => 'nguyenvan98abc@gmail.com',
                'kh_diachi' => 'An Giang',
                'kh_sdt' => '0123456789',
                'lkh_id' => '1'
            ],
        ];

        DB::table('khachhang')->insert($khachhang);

        $quyen = [
            [
                'q_ten' => 'Admin',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'q_ten' => 'Nhân viên bán hàng',
                'created_at' => $now,
                'updated_at' => $now
            ] 
        ];

        DB::table('quyen')->insert($quyen);
        //Nhân viên
        $user = [
            [
                'username' => 'admin1',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Lê Ngọc Đức',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'ducb1605271',
                'q_id'     => 1
            ],
            [
                'username' => 'admin2',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Lương Quốc Bình',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'binhb1605202@student.ctu.edu.vn',
                'q_id'     => 2
            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Đỗ Thị Ngọc Nguyên',
                'nv_diachi' => 'Cần Thơ',
                'nv_sdt' => '0837068434',
                'nv_email' => 'nguyenb1605292@student.ctu.edu.vn',
                'q_id'     => 2
            ],
            [
                'username' => 'admin3',
                'password' => bcrypt('12345'),
                'nv_ten' => 'Đặng Thị Tường Vy',
                'nv_diachi' => 'Vĩnh Long',
                'nv_sdt' => '0837068434',
                'nv_email' => 'vyb1605319@student.ctu.edu.vn',
                'q_id'     => 2
            ],
        ];
        DB::table('nhanvien')->insert($user);

        //Loại sản phẩm
        $loaisp = [
            [
                'l_ten' => 'Trang Điểm',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Chăm Sóc Da',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Chăm Sóc Toàn Thân',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Chăm Sóc Tóc',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'l_ten' => 'Nước Hoa',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('loai')->insert($loaisp);


        $congdungphu = [
            [
                'cdp_ten' => 'Công dụng 1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 3',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 4',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 5',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 6',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 7',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cdp_ten' => 'Công dụng 8',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('congdungphu')->insert($congdungphu);

        $congdung = [
            [
                'cd_ten' => 'Công dụng 1',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 2',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 3',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 4',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 5',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 6',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 7',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'cd_ten' => 'Công dụng 8',
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('congdung')->insert($congdung);


        $xuatxu = [
            [
                'xx_ten' => 'Việt Nam',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Trung Quốc',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Hàn Quốc',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Nhật Bản',
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'xx_ten' => 'Thái Lan',
                'created_at' => $now,
                'updated_at' => $now
            ],
            
        ];
        DB::table('xuatxu')->insert($xuatxu);

        $sanpham = [
            [
                'sp_ten' => 'Kẻ Mắt Nước Innisfree Power Proof Brush Liner 0.6gr',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'cd_id' => rand(1,8),
                'cdp_id' => rand(1,8),
                'l_id' => 1,
                'sp_giaban' => rand(100000,500000),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 2',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cd_id' => rand(1,8),
                'cdp_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 3',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => rand(1,5),
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 4',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'xx_id' => rand(1,5),
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 5',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 6',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 7',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 8',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 9',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 10',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 11',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 12',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 13',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 14',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 15',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 16',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 17',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 18',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 19',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'sp_ten' => 'Sản phẩm 20',
                'sp_thongtin' => 'Sản phẩm số một không chỗ nào bằng',
                'sp_danhgia' => 4,
                'l_id' => rand(1,3),
                'sp_giaban' => rand(100000,500000),
                'cdp_id' => rand(1,8),
                'cd_id' => rand(1,8),
                'xx_id' => rand(1,5),
                'created_at' => $now,
                'updated_at' => $now
            ],
        ];
        DB::table('sanpham')->insert($sanpham);

        
    }
}
