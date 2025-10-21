<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System - Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 min-h-screen flex flex-col">

  
  <!-- Navbar -->
  <nav class="flex justify-between items-center py-4 px-20 bg-white shadow-md">
  <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-auto">

  <!-- Right side: links + login button -->
  <div class="flex items-center space-x-16 text-black-700 font-medium">
    <ul class="hidden md:flex space-x-16">
      <a href="{{ route('welcome') }}"
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

  <!-- Login Container -->
  <main class="flex-grow flex items-center justify-center">
    <div class="bg-white p-8 rounded-2xl w-full max-w-md border-t-4">
      <!-- LNU Logo -->
      <div class="flex flex-col items-center mb-4">
        
        <h1 class="text-2xl font-bold text-blue-900 text-center">Online Voting System</h1>
      </div>

      <p class="text-center text-gray-600 mb-6">Login to cast your vote</p>

      <!-- Flash Messages -->
      @if (session('error'))
      <div class="mb-4 text-sm text-red-600 bg-red-100 p-2 rounded-md text-center">
        {{ session('error') }}
      </div>
      @endif
      @if (session('success'))
      <div class="mb-4 text-sm text-green-600 bg-green-100 p-2 rounded-md text-center">
        {{ session('success') }}
      </div>
      @endif

      <!-- Login Form -->
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Student ID -->
        <div class="mb-4">
          <label for="student_id" class="block text-sm font-semibold text-gray-700">Student ID</label>
          <input 
            type="text" 
            id="student_id" 
            name="student_id" 
            value="{{ old('student_id') }}"
            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none" 
            placeholder="Enter your Student ID" 
            required
          >
          @error('student_id')
          <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password -->
        <div class="mb-6">
          <label for="password" class="block text-sm font-semibold text-gray-700">Password</label>
          <input 
            type="password" 
            id="password" 
            name="password"
            class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-blue-800 focus:border-blue-800 outline-none" 
            placeholder="Enter your password" 
            required
          >
          @error('password')
          <span class="text-sm text-red-500">{{ $message }}</span>
          @enderror
        </div>

        <!-- Login Button -->
        <button 
          type="submit" 
          class="w-full bg-blue-800 hover:bg-blue-700 text-white font-semibold py-2 rounded-lg transition duration-200 shadow-md">
          Login
        </button>

        <p class="text-center text-sm text-gray-600 mt-4">
        Don't have an account? 
        <a href="/register" class="text-blue-700 hover:underline font-semibold">Register</a>
      </p>
      </form>

      <!-- Footer -->
      <div class="mt-6 border-t pt-4 text-center text-xs text-gray-400">
        © {{ date('Y') }} Online Voting System
      </div>
    </div>
  </main>

</body>
</html>
