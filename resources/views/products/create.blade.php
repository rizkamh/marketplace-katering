<!-- resources/views/products/create.blade.php -->

@extends('layout')

@section('content')
    <div class="form-container">
        <h2>Tambah Produk Baru</h2>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama Produk:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="description">Deskripsi Produk:</label>
                <textarea name="description" id="description" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Harga Produk:</label>
                <input type="number" name="price" id="price" required>
            </div>

            <div class="form-group">
                <label for="quantity">Jumlah Produk:</label>
                <input type="number" name="quantity" id="quantity" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Produk</button>
        </form>
    </div>
@endsection
