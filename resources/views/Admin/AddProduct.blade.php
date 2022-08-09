@extends('layouts.app')

@section('content')

    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-4 bg-white p-3">
                <h1 class="text-center">Tambah Produk</h1>
                <form action="{{ route('addProductProcess') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="nama">Nama barang</label>
                    <input type="text" name="nama" id="nama" class="form-control mb-3" required>
                    <label for="harga">Harga</label>
                    <input type="number" name="harga" id="harga" class="form-control mb-3" required>
                    <label for="harga">Kategori</label>
                    <select name="kategori" id="" class="form-select mb-3" required>
                        <option value="Jilbab">Jilbab</option>
                        <option value="Cadar">Cadar</option>
                        <option value="Baju">Baju</option>
                    </select>
                    <label for="harga">Gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control mb-3" required>
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
        
    </div>

@endsection