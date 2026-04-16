@extends('layouts.app')

@section('title', 'Dashboard Staff')
@section('header', 'Dashboard Staff')

@section('content')
    <div class="alert alert-info">
        Selamat datang di panel staff. Anda dapat mengelola peminjaman barang di sini.
    </div>
    
    <div class="row">
    <div class="col-md-3">
        <div class="card bg-primary text-white shadow-sm border-0">
            <div class="card-body">
                <h6 class="card-title">Active Lendings</h6>
                <h2 class="fw-bold">{{ $activeLendings }}</h2>
                <small>Barang sedang dipinjam</small>
            </div>
        </div>
    </div>

</div>
    
@endsection