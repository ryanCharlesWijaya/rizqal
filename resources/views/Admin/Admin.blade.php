@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Admin</h1>
    <a href="{{ route('addProduct') }}" class="btn btn-success">Add Product</a>
    <a href="/home" class="btn btn-info">View Website</a>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Kategori</th>
            <th>Edit</th>
            <th>Hapus</th>
        </tr>
        @foreach($data as $datas)
        <tr>
            <td>{{ $datas->id_produk }}</td>
            <td>{{ $datas->nama_produk }}</td>
            <td>{{ $datas->harga }}</td>
            <td><img style="width: 200px" src="{{ asset('storage/'.$datas->gambarProduk) }}" alt="" srcset=""></td>
            <td>{{ $datas->kategori }}</td>
            <td><a href="{{ route('EditProduct',$datas->id_produk) }}" class="btn btn-warning">Edit</a></td>
            <td>
            <form action="{{ route('DeleteProduct') }}" method="post" onsubmit="if(!confirm('Ingin Menghapus data ini?')){return false;}" >
                @csrf
                <input type="hidden" name="deleteId" value="{{ $datas->id_produk }}" >
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>

@endsection