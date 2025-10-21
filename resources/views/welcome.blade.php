<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Voting System</title>
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


  <!-- Hero Section -->
  <section class="flex flex-col md:flex-row items-center justify-between flex-1 px-10 md:px-20 py-16">
    <!-- Left: Text Content -->
    <div class="max-w-xl text-center md:text-left ml-20 mb-10 md:mb-0">
      <h1 class="text-5xl font-extrabold text-gray-800 leading-tight mb-4">
        Online Voting
      </h1>
      <p class="text-gray-600 text-lg mb-8">
        The Online Voting System provides a safe and efficient platform for conducting school elections digitally. It promotes transparency and fairness, ensuring every vote is counted accurately. Experience a more reliable and accessible way to vote.
      </p>
      <a href="/register" class="bg-blue-700 text-white px-6 py-3 rounded-xl font-semibold hover:bg-blue-800 transition">
        Get Started
      </a>
    </div>

    <!-- Right: Voting Preview -->
    <div class="max-w-md mr-20">
      <img src="images/ballot_box.png" alt="ballot box">
    </div>
  </section>

 
  <!-- Features Section -->
  <!--
  <section class="bg-white py-16 px-8">
    <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-12">Why Choose Our Voting System?</h2>
    <div class="grid md:grid-cols-3 gap-10 max-w-5xl mx-auto text-center">
      <div class="p-6 bg-blue-50 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold text-blue-700 mb-2">🔒 Secure</h3>
        <p class="text-gray-600">Your vote is encrypted and protected, ensuring full election integrity.</p>
      </div>
      <div class="p-6 bg-blue-50 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold text-blue-700 mb-2">⚡ Fast</h3>
        <p class="text-gray-600">Real-time vote counting with instant, accurate results.</p>
      </div>
      <div class="p-6 bg-blue-50 rounded-2xl shadow hover:shadow-lg transition">
        <h3 class="text-xl font-bold text-blue-700 mb-2">💡 Easy to Use</h3>
        <p class="text-gray-600">Simple, user-friendly interface designed for everyone.</p>
      </div>
    </div>
  </section>
-->

  <!-- Footer 
  <footer class="text-center py-6 text-white-500 text-sm bg-blue-800 text-white">
    © 2025 Online Voting System. All rights reserved.
  </footer>-->

</body>
</html>
