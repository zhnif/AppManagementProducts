@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')

<div class="detail-card card">

    <div class="detail-header">

        <div>

            <div class="detail-code">
                {{ $product->kode_produk }}
            </div>

            <h1 class="detail-title">
                {{ $product->nama_produk }}
            </h1>

        </div>

        <a
            href="{{ route('products.edit', $product) }}"
            class="btn btn-primary"
        >
            Edit Produk
        </a>

    </div>


    <div class="detail-grid">

        <div class="detail-item">

            <div class="detail-label">
                Kode Produk
            </div>

            <div class="detail-value">
                {{ $product->kode_produk }}
            </div>

        </div>


        <div class="detail-item">

            <div class="detail-label">
                Nama Produk
            </div>

            <div class="detail-value">
                {{ $product->nama_produk }}
            </div>

        </div>


        <div class="detail-item">

            <div class="detail-label">
                Kategori
            </div>

            <div class="detail-value">
                {{ $product->kategori }}
            </div>

        </div>


        <div class="detail-item">

            <div class="detail-label">
                Harga
            </div>

            <div class="detail-value">
                Rp{{ number_format($product->harga, 0, ',', '.') }}
            </div>

        </div>


        <div class="detail-item">

            <div class="detail-label">
                Stok
            </div>

            <div class="detail-value">
                {{ $product->stok }}
            </div>

        </div>

    </div>


    <div class="detail-description">

        <div class="detail-label">
            Deskripsi
        </div>

        <p>
            {{ $product->deskripsi ?: 'Tidak ada deskripsi untuk produk ini.' }}
        </p>

    </div>


    <div class="detail-actions">

        <a
            href="{{ route('products.index') }}"
            class="btn btn-secondary"
        >
            ← Kembali
        </a>

        <a
            href="{{ route('products.edit', $product) }}"
            class="btn btn-primary"
        >
            Edit Produk
        </a>

    </div>

</div>

@endsection
