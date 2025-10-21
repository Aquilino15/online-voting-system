<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Online Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

  
  <!-- Navbar -->
  <nav class="flex justify-between items-center py-4 px-20 bg-white shadow-md">
  <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-auto">

  <!-- Right side: links + login button -->
  <div class="flex items-center space-x-16 text-black-700 font-medium">
    <ul class="hidden md:flex space-x-16">
      <a href="/welcome" 
        class="{{ request()->routeIs('welcome') ? 'border-b-2 border-blue-500 text-blue-600' : 'hover:border-b-2 hover:border-gray-300' }}">
        Home
    </a>

    <a href="{{ route('about') }}"
        class="{{ request()->routeIs('about') ? 'border-b-2 border-blue-500 text-blue-600' : 'hover:border-b-2 hover:border-gray-300' }}">
        About
    </a>

    <a href="{{ route('FAQs') }}"
        class="{{ request()->routeIs('FAQs') ? 'border-b-2 border-blue-500 text-blue-600' : 'hover:border-b-2 hover:border-gray-300' }}">
        FAQs
    </a>
    </ul>
    <a href="{{ route('user_dashboard') }}" class="bg-blue-800 text-white px-5 py-2 rounded-xl font-semibold hover:bg-blue-700 transition">
      Login
    </a>
  </div>
</nav>

     <main class="flex-grow flex items-center justify-center">
    <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold text-center font-sans text-black-700 mb-6">Create an Account</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-1">Student ID</label>
                <input type="text" name="student_id" class="w-full p-2 border rounded" required>
                @error('student_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Fullname</label>
                <input type="name" name="name" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Email</label>
                <input type="email" name="email" class="w-full p-2 border rounded" required>
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Password</label>
                <input type="password" name="password" class="w-full p-2 border rounded" required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-1">Confirm Password</label>
                <input type="password" name="password_confirmation" class="w-full p-2 border rounded" required>
                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button class="bg-blue-700 text-white w-full py-2 rounded-lg font-semibold hover:bg-blue-800">
                Register
            </button>
        </form>

        <p class="text-center text-sm mt-4">
            Already have an account? 
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a>
        </p>
    </div>
    </main>

    
</body>
</html>
