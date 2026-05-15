<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Attempt Validator</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-lg w-full max-w-sm">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Login</h2>

        <form action="{{ route('login.attempt') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label class="block text-sm font-semibold">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" 
                       class="w-full border p-2 rounded mt-1 outline-none focus:ring-2 focus:ring-blue-500">
                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror </div>

            <div class="mb-4 relative">
                <label class="block text-sm font-semibold">Password</label>
                <input type="password" id="password" name="password" 
                       class="w-full border p-2 rounded mt-1 outline-none focus:ring-2 focus:ring-blue-500">
                
                <button type="button" onclick="togglePassword()" 
                        class="absolute right-2 top-9 text-xs font-bold text-blue-600">
                    Show/Hide
                </button>
                @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror </div>

            <div class="mb-6 flex items-center">
                <input type="checkbox" name="remember" id="remember" class="w-4 h-4 rounded">
                <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>

    <script>
        function togglePassword() {
            const field = document.getElementById('password');
            field.type = field.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>