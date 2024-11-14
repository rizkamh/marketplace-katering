<!-- resources/views/customers/create.blade.php -->

@extends('layout')

@section('content')
    <div class="form-container">
        <h2>Daftar Akun Customer</h2>

        <form action="{{ route('customers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
@endsection
