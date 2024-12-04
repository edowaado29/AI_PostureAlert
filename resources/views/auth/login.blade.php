<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md bg-white rounded-lg shadow-md p-6">
        <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>

        <!-- Menampilkan pesan error jika login gagal -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-2 rounded mb-4">
                {{ $errors->first() }}
            </div>
        @endif
        @if (session('success'))
            <div class="bg-green-100 text-green-700 p-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 mt-2 text-gray-700 bg-gray-200 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm text-gray-600">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 mt-2 text-gray-700 bg-gray-200 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-50">
            </div>

            <!-- Submit Button -->
            <button type="submit"
                class="w-full px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none">
                Login
            </button>
        </form>
    </div>
</body>

</html>
