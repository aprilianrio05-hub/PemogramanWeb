<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-800 antialiased">
<div class="flex min-h-screen">

    <!-- Panel merek (hanya di layar lebar) -->
    <div class="hidden flex-1 flex-col justify-between bg-gradient-to-br from-slate-900 via-indigo-900 to-indigo-700 p-12 text-white lg:flex">
        <div class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-white/15 text-xl font-bold">S</div>
            <span class="text-xl font-semibold">SIM-Surat</span>
        </div>
        <div>
            <h2 class="text-4xl font-bold leading-tight">Kelola surat masuk dan surat keluar dengan rapi.</h2>
            <p class="mt-4 max-w-md text-indigo-200">Sistem Informasi Pengelolaan Surat Fakultas, dengan akses sesuai peran pengguna.</p>
        </div>
        <p class="text-sm text-indigo-300">&copy; 2026 Praktikum Pemrograman Web</p>
    </div>

    <!-- Form login -->
    <div class="flex flex-1 items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="mb-8 text-center lg:text-left">
                <h1 class="text-2xl font-bold text-slate-900">Masuk ke akun Anda</h1>
                <p class="mt-1 text-sm text-slate-500">Silakan masukkan email dan password.</p>
            </div>

            <form method="POST" action="{{ route('login.submit') }}" class="card space-y-5 p-6">
                @csrf

                <div>
                    <label class="label">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="input @error('email') input-error @enderror">
                    @error('email')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="label">Password</label>
                    <input type="password" name="password"
                           class="input @error('password') input-error @enderror">
                    @error('password')
                        <p class="field-error">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-full py-2.5">Masuk</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>