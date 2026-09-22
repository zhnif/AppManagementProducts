@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<div class="form-card card">

    <div class="form-header">

        <div class="eyebrow">
            Product Management
        </div>

        <h1>
            Edit Produk
        </h1>

        <p>
            Perbarui informasi produk yang dipilih.
        </p>

    </div>


    @if($errors->any())

        <div class="validation-box">

            <strong>
                Terdapat kesalahan:
            </strong>

            <ul>

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>

        </div>

    @endif


    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <div class="form-grid">

            <div class="form-group">

                <label class="form-label">
                    Kode Produk <span>*</span>
                </label>

                <input
                    type="text"
                    name="kode_produk"
                    class="form-control"
                    value="{{ old('kode_produk', $product->kode_produk) }}"
                    required
                >

                @error('kode_produk')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label class="form-label">
                    Nama Produk <span>*</span>
                </label>

                <input
                    type="text"
                    name="nama_produk"
                    class="form-control"
                    value="{{ old('nama_produk', $product->nama_produk) }}"
                    required
                >

                @error('nama_produk')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label class="form-label">
                    Kategori <span>*</span>
                </label>

                <input
                    type="text"
                    name="kategori"
                    class="form-control"
                    value="{{ old('kategori', $product->kategori) }}"
                    required
                >

                @error('kategori')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label class="form-label">
                    Harga <span>*</span>
                </label>

                <input
                    type="number"
                    name="harga"
                    class="form-control"
                    value="{{ old('harga', $product->harga) }}"
                    min="0"
                    required
                >

                @error('harga')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group">

                <label class="form-label">
                    Stok <span>*</span>
                </label>

                <input
                    type="number"
                    name="stok"
                    class="form-control"
                    value="{{ old('stok', $product->stok) }}"
                    min="0"
                    required
                >

                @error('stok')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            <div class="form-group full">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                >{{ old('deskripsi', $product->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="form-error">
                        {{ $message }}
                    </div>
                @enderror

            </div>

        </div>


        <div class="form-actions">

            <a
                href="{{ route('products.index') }}"
                class="btn btn-secondary"
            >
                Batal
            </a>

            <button
                type="submit"
                class="btn btn-primary"
            >
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection
