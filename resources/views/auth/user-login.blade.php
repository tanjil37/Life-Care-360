<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login Coming Soon - Life Care 360</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full text-center">
        <!-- Logo or Branding -->
        <h1 class="text-3xl font-bold text-blue-600 mb-4">Life Care 360</h1>
        <p class="text-lg text-gray-600 mb-6">Medical Management</p>

        <!-- Coming Soon Message -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">User Login Coming Soon</h2>
        <p class="text-gray-600 mb-6">
            We're working hard to bring you a seamless login experience. Stay tuned for updates!
        </p>

        <!-- Optional Countdown or Placeholder -->
        <div class="text-gray-500 text-sm mb-6">
            <p>Check back soon for access to your medical management portal.</p>
        </div>

        <!-- Back to Home Link -->
        <a href="/"
            class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition">
            Return to Home
        </a>

        <!-- Footer -->
        <footer class="mt-8 text-gray-500 text-sm">
            &copy; {{ date('Y') }} Life Care 360. All rights reserved.
        </footer>
    </div>
</body>

</html>
