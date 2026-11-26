<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIM-Surat')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 antialiased">

<div class="min-h-screen lg:flex">

    <!-- Overlay untuk menu mobile -->
    <div id="overlay" class="fixed inset-0 z-30 hidden bg-slate-900/50 lg:hidden"></div>

    <!-- Sidebar -->
    <aside id="sidebar"
           class="fixed inset-y-0 left-0 z-40 flex w-64 -translate-x-full flex-col bg-slate-900 transition-transform duration-200 lg:static lg:translate-x-0">

        <div class="flex items-center gap-3 px-5 py-5">
            <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600 text-lg font-bold text-white">S</div>
            <div>
                <p class="text-base font-semibold leading-tight text-white">SIM-Surat</p>
                <p class="text-xs text-slate-400">Manajemen Surat</p>
            </div>
        </div>

        <nav class="flex-1 space-y-1 px-3 py-2">
            <a href="{{ route('dashboard') }}"
               class="nav-link {{ request()->routeIs('dashboard') ? 'nav-link-active' : '' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M5 10v10h5v-6h4v6h5V10" />
                </svg>
                Dashboard
            </a>

            <a href="{{ route('surat-masuk.index') }}"
               class="nav-link {{ request()->routeIs('surat-masuk.*') ? 'nav-link-active' : '' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l9 6 9-6M5 5h14a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2z" />
                </svg>
                Surat Masuk
            </a>

            <a href="{{ route('surat-keluar.index') }}"
               class="nav-link {{ request()->routeIs('surat-keluar.*') ? 'nav-link-active' : '' }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                </svg>
                Surat Keluar
            </a>
        </nav>

        <div class="border-t border-slate-800 px-5 py-4 text-xs text-slate-500">
            &copy; 2026 Praktikum Pemrograman Web
        </div>
    </aside>

    <!-- Area utama -->
    <div class="flex min-w-0 flex-1 flex-col">

        <!-- Bilah atas -->
        <header class="sticky top-0 z-20 flex items-center justify-between border-b border-slate-200 bg-white px-4 py-3 sm:px-6">
            <div class="flex items-center gap-3">
                <button type="button" id="menu-toggle" aria-label="Buka menu"
                        class="rounded-lg p-2 text-slate-600 hover:bg-slate-100 lg:hidden">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <p class="hidden text-sm font-medium text-slate-500 sm:block">Sistem Informasi Pengelolaan Surat</p>
            </div>

            @auth
                <div class="flex items-center gap-3">
                    <div class="flex h-9 w-9 items-center justify-center rounded-full bg-indigo-100 text-sm font-semibold text-indigo-700">
                        {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                    </div>
                    <div class="hidden text-right leading-tight sm:block">
                        <p class="text-sm font-medium text-slate-800">{{ auth()->user()->name }}</p>
                        <p class="text-xs capitalize text-slate-500">{{ auth()->user()->role }}</p>
                    </div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-secondary btn-sm">Keluar</button>
                    </form>
                </div>
            @endauth
        </header>

        <!-- Konten -->
        <main class="flex-1 p-4 sm:p-6 lg:p-8">
            @yield('content')
        </main>
    </div>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');

    function toggleMenu() {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    }

    document.getElementById('menu-toggle').addEventListener('click', toggleMenu);
    overlay.addEventListener('click', toggleMenu);
</script>
</body>
</html>