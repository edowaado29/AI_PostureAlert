<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function controller(){
        return view('admin.controller');
    }
    public function laporan(){
        return view('admin.laporanp');
    }
}
