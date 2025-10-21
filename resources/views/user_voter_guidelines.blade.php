<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voter Guidelines</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-bnVhS5ZxD6bMOBb3P7U+zEplv2wR2ukHsEDa2K5M9F6bP5FZjR8DnGThb0PqH1blb5PnT60exXz0mXG3dU8Fw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-blue-50 min-h-screen flex">

    <!-- Sidebar -->
  <aside class="w-64 bg-blue-100 min-h-screen p-6 flex flex-col justify-between shadow-lg">
    <div>
      <div class="flex flex-col items-center mb-8">
        <div class="w-20 h-20 bg-white rounded-full flex items-center justify-center border-2 border-gray-400">
          <!-- User Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c3.866 0 7 1.343 7 3v1H5v-1c0-1.657 3.134-3 7-3zm0-4a4 4 0 110-8 4 4 0 010 8z"/>
          </svg>
        </div>
        <p class="mt-3 font-semibold text-gray-800 text-center">{{ Auth::user()->name }}</p>
        <a href="#" class="text-sm text-blue-700 hover:underline">View Profile ›</a>
      </div>

      <nav class="space-y-4">
        <a href="/user_dashboard" class="flex items-center space-x-3 hover:bg-blue-200 text-gray-700 p-3 rounded-xl">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>

        <a href="/user_vote" class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
          <i class="fa-solid fa-check-to-slot"></i>
          <span>Vote</span>
        </a>

        <a href="/user_voter_guidelines" class="flex items-center space-x-3 text-white bg-blue-600 p-3 rounded-xl">
          <i class="fa-solid fa-book-open"></i>
          <span>Voters Guidelines</span>
        </a>

        <a href="/user_results" class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
          <i class="fa-solid fa-square-poll-vertical"></i>
          <span>Result</span>
        </a>

        <div class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
        <form method="POST" action="{{ route('logout') }}">
        <i class="fa-solid fa-right-from-bracket"></i>
        @csrf
        <button type="submit" class="text-grey-700 hover:bg-blue-200">Logout</button>
        </form>
      </div>

      </nav>
    </div>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-10">
    <header class="flex justify-between items-center mb-8">
      <div class="text-2xl font-bold text-gray-800">Welcome, {{ Auth::user()->name }}!</div>
      <div class="flex items-center space-x-4">
        <!-- Search -->
        <div class="relative">
          <input type="text" placeholder="Search..." class="rounded-full border border-gray-300 px-4 py-2 focus:outline-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute right-3 top-2.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m2.6-6.65a7 7 0 11-14 0 7 7 0 0114 0z"/>
          </svg>
        </div>

        <!-- Bell -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C8.67 6.165 8 7.388 8 9v5.159c0 .538-.214 1.055-.595 1.436L6 17h5m4 0v1a3 3 0 11-6 0v-1m6 0H9" />
        </svg>

        <!-- Help -->
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.257 10.25a3.002 3.002 0 015.486-1.415c.8.957 1.016 2.287.382 3.374l-.83 1.438a.75.75 0 00.643 1.122H14m-2 4h.01"/>
        </svg>

        <!-- User -->
        <div class="flex items-center space-x-2 border px-3 py-1 rounded-full">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14c3.866 0 7 1.343 7 3v1H5v-1c0-1.657 3.134-3 7-3zm0-4a4 4 0 110-8 4 4 0 010 8z"/>
          </svg>
          <span class="text-gray-700">{{ Auth::user()->name }}</span>
        </div>
      </div>
    </header>


<div class="p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fa-solid fa-book-open text-blue-600"></i> Voter Guidelines
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Step 1 -->
        <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <i class="fa-solid fa-id-card text-xl"></i>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Step 1: Registration</h2>
            </div>
            <p class="text-gray-700">
                Register using your <strong>student ID</strong> and valid information. Each voter is allowed only one account. 
                Double-check your credentials before submission.
            </p>
        </div>

        <!-- Step 2 (Replaced Verification with Technical Support) -->
        <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <i class="fa-solid fa-headset text-xl"></i>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Step 2: Technical Support</h2>
            </div>
            <p class="text-gray-700">
                If you experience any technical issues such as login errors, loading problems, or 
                vote submission failures, contact the support team immediately.
            </p>
        
        </div>
        <!-- Step 3 -->
        <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <i class="fa-solid fa-vote-yea text-xl"></i>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Step 3: Voting Process</h2>
            </div>
            <p class="text-gray-700">
                Go to the <strong>Vote</strong> section on your dashboard. Review each candidate carefully and click 
                <em>“Submit Vote”</em> once you’re sure — votes cannot be changed afterward.
            </p>
        </div>

        <!-- Step 4 -->
        <div class="bg-white shadow-md rounded-2xl p-6 hover:shadow-lg transition-all">
            <div class="flex items-center space-x-3 mb-3">
                <div class="bg-blue-100 text-blue-600 rounded-full p-3">
                    <i class="fa-solid fa-lock text-xl"></i>
                </div>
                <h2 class="text-xl font-semibold text-gray-800">Step 4: Security & Conduct</h2>
            </div>
            <p class="text-gray-700">
                Keep your account credentials private. Sharing login details or tampering with votes may lead to 
                account suspension or disqualification.
            </p>
        </div>
    </div>
</div>

</body>
</html>