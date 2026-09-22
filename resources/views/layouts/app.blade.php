<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Manajemen Produk')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>

    <nav class="navbar">
        <div class="navbar-inner">

            <a href="{{ route('products.index') }}" class="brand">
                <div class="brand-mark">
                    Z
                </div>

                <div class="brand-text">
                    <strong>Product Manager</strong>
                    <span>Zhnif Inventory System</span>
                </div>
            </a>

        </div>
    </nav>

    <main class="page">
        <div class="container">

            @if(session('success'))
                <div class="alert alert-success">
                    ✓
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    !
                    <span>Periksa kembali data yang kamu masukkan.</span>
                </div>
            @endif

            @yield('content')

        </div>
    </main>

    <footer class="footer">
        Aplikasi Manajemen Produk · Zaim Hanif Murtadlo
    </footer>

</body>
</html>

