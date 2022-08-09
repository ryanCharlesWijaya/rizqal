@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-white p-3">
                <h1 class="text-center">Tambah Produk</h1>
                <form action="{{ route('EditProductProcess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @foreach($data as $datas)
                    <input type="hidden" name="id_produk" value="{{ $datas->id_produk }}">
                    <label for="nama">Nama barang</label>
                    <input type="text" name="nama" id="nama" class="form-control mb-3" value="{{ $datas->nama_produk }}">
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control mb-3" value="{{ $datas->harga }}">
                    <label for="harga">Kategori</label>
                    <select name="kategori" id="" class="form-select mb-3">
                        <option value="Jilbab">Jilbab</option>
                        <option value="Cadar">Cadar</option>
                        <option value="Baju">Baju</option>
                    </select>
                    <label for="harga">Gambar</label>
                    <img class="w-100 mb-3" src="{{ asset('storage/'.$datas->gambarProduk) }}" alt="" srcset="">
                    <input type="file" name="gambar" id="gambar" class="form-control mb-3">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                    @endforeach
                </form>
            </div>
        </div>
        
    </div>

@endsection