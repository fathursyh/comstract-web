<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <!-- Tambahkan CSS atau Tailwind CSS jika diperlukan -->
</head>
<body>
    <h1>Register</h1>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        
        <button type="submit">Register</button>
    </form>
    
    <a href="">Already have an account? Login here</a>
</body>
</html>
