@extends('layouts.app')

@section('title', 'Tambah Produk')

@section('content')

<div class="form-card card">

    <div class="form-header">

        <div class="eyebrow">
            Product Management
        </div>

        <h1>
            Tambah Produk
        </h1>

        <p>
            Masukkan informasi produk baru ke dalam sistem.
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
        action="{{ route('products.store') }}"
        method="POST"
    >

        @csrf

        <div class="form-grid">

            <div class="form-group">

                <label class="form-label">
                    Kode Produk <span>*</span>
                </label>

                <input
                    type="text"
                    name="kode_produk"
                    class="form-control"
                    value="{{ old('kode_produk') }}"
                    placeholder="Contoh: PRD-001"
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
                    value="{{ old('nama_produk') }}"
                    placeholder="Nama produk"
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
                    value="{{ old('kategori') }}"
                    placeholder="Contoh: Elektronik"
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
                    value="{{ old('harga') }}"
                    placeholder="Contoh: 150000"
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
                    value="{{ old('stok') }}"
                    placeholder="Contoh: 25"
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
                    placeholder="Tambahkan deskripsi produk..."
                >{{ old('deskripsi') }}</textarea>

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
                Simpan Produk
            </button>

        </div>

    </form>

</div>

@endsection
