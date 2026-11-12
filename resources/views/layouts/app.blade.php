<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Surat Masuk')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navigasi Utama -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('dashboard') }}">Manajemen Surat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surat-masuk.index') }}">Data Surat Masuk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('surat-keluar.index') }}">Data Surat Keluar</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <span class="navbar-text ms-lg-3 me-2">Masuk sebagai: {{ auth()->user()->name }}</span>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-light btn-sm">Keluar</button>
                            </form>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama Dinamis -->
    <main class="container my-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="text-center py-4 text-muted">
        <p>&copy; 2026 Praktikum Pemrograman Web</p>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>