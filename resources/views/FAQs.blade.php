<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FAQs</title>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.4/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-bnVhS5ZxD6bMOBb3P7U+zEplv2wR2ukHsEDa2K5M9F6bP5FZjR8DnGThb0PqH1blb5PnT60exXz0mXG3dU8Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-blue-50">

        <!-- FAQs Section -->
    <section class="max-w-4xl mx-auto py-16 px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mt-4">Frequently Asked Questions</h1>
        <p class="text-center text-gray-800 mb-12">View commonly asked questions regarding the Online Voting System.</p>

        <div class="space-y-4" x-data="{ open: null }">

            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl shadow-sm p-5" x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="flex justify-between items-center w-full text-left text-blue-900 font-semibold text-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-question text-blue-900"></i>
                        <span>How do I register to vote?</span>
                    </div>
                    <svg :class="expanded ? 'rotate-180' : ''" class="w-5 h-5 text-blue-900 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="expanded" x-transition class="mt-3 text-gray-600">
                    You can register by creating an account using your valid ID or student credentials.
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl shadow-sm p-5" x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="flex justify-between items-center w-full text-left text-blue-900 font-semibold text-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-question text-blue-900"></i>
                        <span>Can I change my vote after submitting? </span>
                    </div>
                    <svg :class="expanded ? 'rotate-180' : ''" class="w-5 h-5 text-blue-900 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="expanded" x-transition class="mt-3 text-gray-600">
                    No. Once a vote is submitted, it cannot be changed to maintain fairness.
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl shadow-sm p-5" x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="flex justify-between items-center w-full text-left text-blue-900 font-semibold text-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-question text-blue-900"></i>
                        <span>How will I know that my vote has been counted?</span>
                    </div>
                    <svg :class="expanded ? 'rotate-180' : ''" class="w-5 h-5 text-blue-900 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="expanded" x-transition class="mt-3 text-gray-600">
                    You will receive a confirmation message after submitting your vote.
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl shadow-sm p-5" x-data="{ expanded: false }">
                <button @click="expanded = !expanded" class="flex justify-between items-center w-full text-left text-blue-900 font-semibold text-lg">
                    <div class="flex items-center space-x-2">
                        <i class="fa-solid fa-question text-blue-900"></i>
                        <span>Who can use this system?</span>
                    </div>
                    <svg :class="expanded ? 'rotate-180' : ''" class="w-5 h-5 text-blue-900 transition-transform duration-200" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="expanded" x-transition class="mt-3 text-gray-600">
                    Only registered voters who have valid credentials for the election.
                </div>
            </div>

        </div>
    </section>

</body>
</html>


    
</body>
</html>