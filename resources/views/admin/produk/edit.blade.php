@extends('layouts.admin.app')
@section('title')
Edit Produk
@endsection
@section('content')
<title>Admin - Edit Produk</title>

<div class="py-4">
    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
            <li class="breadcrumb-item">
                <a href="#">
                    <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </a>
            </li>
            <li class="breadcrumb-item"><a href="#">Produk</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Produk</li>
        </ol>
    </nav>

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Edit Produk</h1>
            <p class="mb-0">Form untuk mengubah data produk.</p>
        </div>
        <div>
            <a href="{{ route('produk.index') }}" class="btn btn-primary">
                <i class="far fa-question-circle me-1"></i> Kembali
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-12">
                            <!-- Nama Produk -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Produk</label>
                                <input name="name" type="text" id="name" class="form-control"
                                    value="{{ $produk->name }}" required>
                            </div>

                            <!-- Harga Produk -->
                            <div class="mb-3">
                                <label for="price" class="form-label">Harga (Rp)</label>
                                <input name="price" type="number" id="price" class="form-control"
                                    value="{{ $produk->price }}" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-12">
                            <!-- Deskripsi Produk -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Deskripsi Produk</label>
                                <textarea name="description" id="description" rows="5" class="form-control"
                                    placeholder="Tuliskan deskripsi produk...">{{ $produk->description }}</textarea>
                            </div>

                            <!-- Tombol -->
                            <div class="">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('produk.index') }}" class="btn btn-outline-secondary ms-2">Batal</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
