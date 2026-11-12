<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login SIM-Surat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 text-gray-800 antialiased">
    <div class="flex min-h-screen items-center justify-center px-4">
        <div class="w-full max-w-md overflow-hidden rounded-xl bg-white shadow-md">

            <div class="bg-blue-600 px-6 py-4">
                <h1 class="text-xl font-semibold text-white">Login SIM-Surat</h1>
            </div>

            <form method="POST" action="{{ route('login.submit') }}" class="space-y-5 p-6">
                @csrf

                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                           class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  @error('email') border-red-500 @else border-gray-300 @enderror">
                    @error('email')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="mb-1 block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password"
                           class="w-full rounded-lg border px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500
                                  @error('password') border-red-500 @else border-gray-300 @enderror">
                    @error('password')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                        class="w-full rounded-lg bg-blue-600 py-2.5 font-medium text-white hover:bg-blue-700">
                    Masuk
                </button>
            </form>
        </div>
    </div>
</body>
</html>