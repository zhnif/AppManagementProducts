@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')

<div class="hero">

    <div>
        <div class="eyebrow">
            Inventory Management System
        </div>

        <h1 class="page-title">
            Daftar Produk
        </h1>

        <p class="page-description">
            Aplikasi Manajemen Produk dibuat menggunakan laravel 13 oleh Zaim Hanif Murtadlo >_<
        </p>
    </div>

    <a href="{{ route('products.create') }}" class="btn btn-primary">
        + Tambah Produk
    </a>

</div>


<div class="card">

    <div class="card-header">

        <div>
            <h2 class="card-title">
                Semua Produk
            </h2>

            <p class="card-subtitle">
                {{ $products->count() }} produk tersimpan
            </p>
        </div>

    </div>


    @if($products->count() > 0)

        <div class="table-wrap">

            <table class="product-table">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ($products as $product)

                        <tr>

                            <td>
                                {{ $loop->iteration }}
                            </td>

                            <td>
                                <span class="product-code">
                                    {{ $product->kode_produk }}
                                </span>
                            </td>

                            <td>
                                <span class="product-name">
                                    {{ $product->nama_produk }}
                                </span>
                            </td>

                            <td>
                                {{ $product->kategori }}
                            </td>

                            <td>
                                <span class="price">
                                    Rp{{ number_format($product->harga, 0, ',', '.') }}
                                </span>
                            </td>

                            <td>
                                {{ $product->stok }}
                            </td>

                            <td>

                                <div class="actions">

                                    <a
                                        href="{{ route('products.show', $product) }}"
                                        class="action-btn"
                                    >
                                        Detail
                                    </a>

                                    <a
                                        href="{{ route('products.edit', $product) }}"
                                        class="action-btn edit"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('products.destroy', $product) }}"
                                        method="POST"
                                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"
                                    >

                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="action-btn delete"
                                        >
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                    @endforeach

                </tbody>

            </table>

        </div>

    @else

        <div class="empty-state">

            <div class="empty-icon">
                +
            </div>

            <h3>
                Belum ada produk
            </h3>

            <p>
                Data produk belum tersedia.
            </p>

            <a
                href="{{ route('products.create') }}"
                class="btn btn-primary"
            >
                + Tambah Produk
            </a>

        </div>

    @endif

</div>

@endsection
