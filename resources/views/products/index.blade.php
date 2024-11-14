<!-- resources/views/products/index.blade.php -->

@extends('layout')

@section('content')
    <h2>Daftar Produk</h2>

    <div class="grid-container">
        @foreach ($products as $product)
            <div class="grid-item">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                <p>Jumlah: {{ $product->quantity }}</p>
                <a href="#" class="btn btn-primary">Lihat Detail</a>
            </div>
        @endforeach
    </div>
@endsection
