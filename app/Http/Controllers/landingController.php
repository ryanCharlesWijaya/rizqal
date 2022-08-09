<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LandingController extends Controller
{
    public function index(){
        $data = DB::table('produk')->limit(4)->get();
        return view('cozzastore/index',['data'=>$data]);
    }
    public function product(){
        $data = DB::table('produk')->get();
        return view('cozzastore/product',['data'=>$data]);
    }
    public function about(){
        return view('cozzastore/about');
    }
}
