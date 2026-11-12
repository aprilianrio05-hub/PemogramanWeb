<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Surat Masuk')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-800 antialiased">

    <!-- Navigasi Utama -->
    <nav class="bg-blue-600 shadow-md">
        <div class="mx-auto flex max-w-6xl items-center justify-between px-4 py-3">
            <a href="{{ route('dashboard') }}" class="text-lg font-semibold text-white">Manajemen Surat</a>

            <button type="button" id="menu-toggle"
                    class="rounded p-2 text-white hover:bg-blue-700 lg:hidden"
                    aria-label="Buka menu">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <div id="menu" class="hidden w-full flex-col gap-1 pt-3 lg:flex lg:w-auto lg:flex-row lg:items-center lg:gap-2 lg:pt-0">
                <a href="{{ route('dashboard') }}"
                   class="rounded px-3 py-2 text-sm text-blue-100 hover:bg-blue-700 hover:text-white">Dashboard</a>
                <a href="{{ route('surat-masuk.index') }}"
                   class="rounded px-3 py-2 text-sm text-blue-100 hover:bg-blue-700 hover:text-white">Data Surat Masuk</a>
                <a href="{{ route('surat-keluar.index') }}"
                   class="rounded px-3 py-2 text-sm text-blue-100 hover:bg-blue-700 hover:text-white">Data Surat Keluar</a>

                @auth
                    <span class="px-3 py-2 text-sm text-blue-100 lg:ml-4">
                        Masuk sebagai: {{ auth()->user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="rounded bg-white px-3 py-1.5 text-sm font-medium text-blue-700 hover:bg-blue-50">
                            Keluar
                        </button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Konten Utama Dinamis -->
    <main class="mx-auto my-6 max-w-6xl px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="py-6 text-center text-sm text-gray-500">
        <p>&copy; 2026 Praktikum Pemrograman Web</p>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            document.getElementById('menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>