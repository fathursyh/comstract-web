<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-4">Login</h1>

    
        @if (session('success'))
            <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email:</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded" value="{{ old('email') }}" required>
            </div>
            
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password:</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded" required>
            </div>
            
            <button type="submit" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Login</button>
        </form>

        <div class="mt-4 text-center">
            <a href="{{ route('register') }}" class="text-blue-500 hover:underline">Don't have an account? Register here</a>
        </div>
    </div>

</body>
</html>
