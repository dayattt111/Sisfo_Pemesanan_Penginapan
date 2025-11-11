<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class menuController extends Controller
{
    // login & regist
    public function index(){
        return view('login');
    }
    public function register(){
        return view('register');
    }
    public function backLogin(){
        return view('/');
    }

    // Admin Role
    public function adminDashboard(){
        return view('admin/index');
    }
    public function adminDashboard(){
        return view('admin/dataPenginapan');
    }
    public function adminDashboard(){
        return view('admin/index');
    }
    public function adminDashboard(){
        return view('admin/index');
    }
    public function adminDashboard(){
        return view('admin/index');
    }



    // Users Role
    public function dashboardUser(){
        return view('users/index');
    }
    public function detail(){
        return view('users/detail');
    }
    public function ulasan(){
        return view('users/ulasan');
    }
    public function pesanan(){
        return view('users/pemesanan');
    }
    public function kirimPesanan(){
        return view('users/pembayaran');
    }
    public function detailPesanan(){
        return view('users/detailPesanan');
    }
    public function pembayaran(){
        return view('users/pembayaran');
    }
    public function kirimPembayaran(){
        return view('users/payment');
    }
    public function status(){
        return view('users/status');
    }
    public function cancel(){
        return view('users/cancel');
    }


}
