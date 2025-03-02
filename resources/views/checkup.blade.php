@extends('layouts.patient')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center">
    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">Available Checkups</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($checkups as $checkup)
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ $checkup['name'] }}</h2>
                    <div class="flex items-center justify-between mb-4">
                        <p class="text-lg text-gray-700">
                            <span class="line-through text-gray-500">৳{{ number_format($checkup['price'], 2) }}</span>
                            <span class="font-bold text-green-600">
                                ৳{{ number_format($checkup['price'] * (1 - $checkup['discount'] / 100), 2) }}
                            </span>
                        </p>
                        <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">
                            {{ $checkup['discount'] }}% OFF
                        </span>
                    </div>
                    <p class="text-gray-600 mb-2">
                        <span class="font-medium">Time:</span> {{ $checkup['available_time'] }}
                    </p>
                    <p class="text-gray-600 mb-4">
                        <span class="font-medium">Doctor:</span> {{ $checkup['checkup_doctor_name'] }}
                    </p>
                    <button class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded hover:bg-blue-700 transition-colors duration-200">
                        Purchase Now
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>


