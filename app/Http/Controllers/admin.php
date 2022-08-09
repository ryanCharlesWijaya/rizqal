<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admin extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $data = DB::table('produk')->get();
        return view('Admin/Admin',['data'=>$data]);
    }
    public function addProduct(){
        return view('Admin/AddProduct');
    }
    public function EditProduct($id){
        $data = DB::table('produk')->where('id_produk',$id)->get();
        return view('Admin/EditProduct',['data' =>$data]);
    }
    public function EditProductProcess(Request $request){
        $data = array(
            'nama_produk' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'kategori'=>$request->input('kategori')
        );
        if (!empty($request->file('gambar'))) {
            $request->file('gambar')->storeAs('public',$request->file('gambar')->getClientOriginalName());
            $data['gambarProduk'] = $request->file('gambar')->getClientOriginalName();
        }
        DB::table('produk')->where('id_produk',$request->input('id_produk'))->update($data);
        return redirect(route('admin'));
    }
    public function addProductProcess(Request $request){
        
        DB::table('produk')->insert([
            'nama_produk' => $request->input('nama'),
            'harga' => $request->input('harga'),
            'gambarProduk'=> $request->file('gambar')->getClientOriginalName(),
            'kategori'=>$request->input('kategori')
        ]);
        $request->file('gambar')->storeAs('public',$request->file('gambar')->getClientOriginalName());
        return redirect(route('admin'));
    }
    public function DeleteProduct(Request $request){
        $delete = DB::table('produk')->where('id_produk','=',$request->deleteId)->delete();
        return redirect(route('admin'));
    }
}
