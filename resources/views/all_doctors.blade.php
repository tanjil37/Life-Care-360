@extends('layouts.patient')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Doctors</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-red-50 to-blue-50 min-h-screen">
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Our Doctors</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($doctors as $doctor)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-xl w-full">
                    <div class="relative w-80 h-48">
                        <img src="{{ $doctor['image'] }}" alt="{{ $doctor['name'] }}" class="w-full h-48 object-cover">
                    </div>
                    
                    <!-- Card Content -->
                    <div class="p-6">
                        <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $doctor['name'] }}</h2>
                        
                        <div class="space-y-2">
                            <p class="text-gray-600">
                                <span class="font-medium">Specialization:</span> {{ $doctor['specialty'] }}
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Email:</span> {{ $doctor['email'] }}
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Phone:</span> {{ $doctor['phone'] }}
                            </p>
                            <p class="text-gray-600">
                                <span class="font-medium">Available:</span> {{ $doctor['day'] }} at {{ $doctor['time'] }}
                            </p>
                        </div>
                        
                        <!-- Fancy Button -->
                        <button class="mt-4 w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition duration-200">
                            Book Appointment
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>

</html>



