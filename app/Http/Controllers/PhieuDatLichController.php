<?php

namespace App\Http\Controllers;

use App\Models\BacSi;
use App\Models\BenhNhan;
use App\Models\PhieuDatLich;
use Illuminate\Http\Request;
use function Laravel\Prompts\select;

class PhieuDatLichController extends Controller
{
    public function dat_lich_kham(Request $request){
        $key = "%" . $request->ho_ten ."%";
        $data = PhieuDatLich::join("benh_nhans","benh_nhans.id","=","phieu_dat_lichs.id_benh_nhan")
                            ->join("chi_tiet_dat_lichs","phieu_dat_lichs.id","=","chi_tiet_dat_lichs.id_phieu_dat_lich")
                            ->join("bac_sis","bac_sis.id","=","chi_tiet_dat_lichs.id_bac_si")
                            ->join("phong_khams","bac_sis.id_phong_kham","=","phong_khams.id")
                            ->select("phieu_dat_lichs.*","benh_nhans.*","benh_nhans.ho_ten as ten_benh_nhan", "benh_nhans.email as email_bn",
                                    "benh_nhans.so_dien_thoai as sdt_bn","benh_nhans.ngay_sinh as ngay_sinh_bn","benh_nhans.gioi_tinh as gioi_tinh_bn",
                                    "benh_nhans.dia_chi as dia_chi_bn","chi_tiet_dat_lichs.*","bac_sis.*","bac_sis.ho_ten as ten_bac_si", "bac_sis.email as email_bs", 
                                    "bac_sis.so_dien_thoai as sdt_bs","bac_sis.gioi_tinh as gioi_tinh_bs","phong_khams.*", "phong_khams.email as email_pk",
                                    "phong_khams.so_dien_thoai as sdt_pk", "phong_khams.dia_chi as dia_chi_pk")
                            ->where("benh_nhans.ho_ten","LIKE", $key)
                            ->get();
        return response()->json([
            'data'=> $data
        ]);
    }
    public function danh_gia(Request $request){
        $key = "%" . $request->so_sao_danh_gia ."%";
        $data = PhieuDatLich::join("benh_nhans","benh_nhans.id","=","phieu_dat_lichs.id_benh_nhan")
                            ->join("chi_tiet_dat_lichs","phieu_dat_lichs.id","=","chi_tiet_dat_lichs.id_phieu_dat_lich")
                            ->join("bac_sis","bac_sis.id","=","chi_tiet_dat_lichs.id_bac_si")
                            ->select("phieu_dat_lichs.*","benh_nhans.ho_ten as ten_benh_nhan","benh_nhans.so_dien_thoai as sdt_bn",
                                    "benh_nhans.dia_chi as dia_chi_bn","chi_tiet_dat_lichs.*","bac_sis.ho_ten as ten_bac_si")
                            ->where("chi_tiet_dat_lichs.so_sao_danh_gia","LIKE", $key)
                            ->get();
        return response()->json([
            'data'=> $data
        ]);
    }
    
}
