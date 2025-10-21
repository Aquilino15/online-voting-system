<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Online Voting System</title>
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
        <a href="/user_dashboard" class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
          <i class="fa-solid fa-house"></i>
          <span>Dashboard</span>
        </a>

        <a href="/user_vote" class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
          <i class="fa-solid fa-check-to-slot"></i>
          <span>Vote</span>
        </a>

        <a href="/user_voter_guidelines" class="flex items-center space-x-3 text-gray-700 hover:bg-blue-200 p-3 rounded-xl">
          <i class="fa-solid fa-book"></i>
          <span>Voters Guidelines</span>
        </a>

        <a href="/user_settings" class="flex items-center space-x-3 text-white bg-blue-600 p-3 rounded-xl">
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



<!-- Main Content -->
    <main class="flex-1 p-8">
        <h1 class="text-2xl font-bold mb-4">👤 Your Profile</h1>
        <p class="text-gray-600 mb-6">Manage and view your personal voter information.</p>

        <!-- Profile Card -->
        <div class="bg-white text-blue-800 rounded-xl p-4 mb-6 items-center">
            <div class="flex flex-col md:flex-row items-center gap-8 mb-6">
                <div class="w-32 h-32 bg-gray-200 rounded-full flex items-center justify-center">
                    <span class="material-icons text-gray-500 text-6xl"></span>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                    <p class="text-gray-600">Student ID: <strong>{{ Auth::user()->student_id }}</strong></p>
                    <p class="text-gray-600">Course: <strong>{{ Auth::user()->course }}</strong></p>
                    <p class="text-gray-600">Year Level: <strong>{{ Auth::user()->year_level }}</strong></p>
                    <p class="text-gray-600">Email: <strong>{{ Auth::user()->email }}</strong></p>
                </div>
            </div>

            <!-- Divider -->
            <hr class="my-6">

            <!-- Account Settings -->
            <div class="space-y-4">
                <h3 class="text-lg font-semibold text-gray-700">Account Settings</h3>

                <div class="flex justify-between items-center bg-blue-50 p-4 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-700">Change Password</p>
                        <p class="text-sm text-gray-500">Update your password for better security.</p>
                    </div>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition">Change</a>
                </div>

                <div class="flex justify-between items-center bg-blue-50 p-4 rounded-lg">
                    <div>
                        <p class="font-medium text-gray-700">Edit Profile</p>
                        <p class="text-sm text-gray-500">Modify your personal details.</p>
                    </div>
                    <a href="#" class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 transition">Edit</a>
                </div>
            </div>
        </div>
    </main>
</div>

</main>
</body>
</html>
