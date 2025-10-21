<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-blue-50">

  <!-- Navbar -->
  <nav class="flex justify-between items-center py-4 px-20 bg-white shadow-md">
  <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-auto">

  <!-- Right side: links + login button -->
  <div class="flex items-center space-x-16 text-black-700 font-medium">
    <ul class="hidden md:flex space-x-16">
    <a href="/" 
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

<section class="min-h-screen py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">About Online Voting System</h1>
        <p class="text-gray-600 leading-relaxed mb-10">
            Our <span class="font-semibold">Online Voting System</span> is a secure and efficient platform designed 
            to simplify the election process. It allows registered voters to cast their votes digitally, ensuring 
            transparency, accessibility, and real-time accuracy.
        </p>

        <div class="grid md:grid-cols-2 gap-8 text-left">
            <div class="p-6 bg-white shadow rounded-2xl">
                <h2 class="text-xl font-semibold mb-3 text-indigo-600">🗳️ Easy to Use</h2>
                <p class="text-gray-600">Simple interface for voters and administrators to manage elections with ease.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-2xl">
                <h2 class="text-xl font-semibold mb-3 text-indigo-600">🔒 Secure & Encrypted</h2>
                <p class="text-gray-600">All votes are encrypted and securely stored to maintain integrity and privacy.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-2xl">
                <h2 class="text-xl font-semibold mb-3 text-indigo-600">📊 Real-Time Results</h2>
                <p class="text-gray-600">Votes are counted instantly, ensuring accurate and transparent results.</p>
            </div>
            <div class="p-6 bg-white shadow rounded-2xl">
                <h2 class="text-xl font-semibold mb-3 text-indigo-600">🌐 Accessible Anywhere</h2>
                <p class="text-gray-600">Voters can securely access the system using any device with internet access.</p>
            </div>
        </div>

        
        <div class="mt-12 text-gray-500 text-sm">
            <p>Developed by <span class="font-semibold">[Your Name/Team]</span> — for educational purposes.</p>
        </div>
        
    </div>
</section>


    
</body>
</html>