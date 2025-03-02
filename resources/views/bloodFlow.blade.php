@extends('layouts.patient')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Flow Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-br from-red-50 to-blue-50 min-h-screen">
    <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Blood Flow</h1>
    <!-- Filter Buttons -->
    <div class="container mx-auto px-4 py-4 flex justify-center gap-4">
        <button id="filterDonations" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
            Blood Donations
        </button>
        <button id="filterReceptions" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
            Blood Receptions
        </button>
    </div>
    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
            <div class="overflow-x-auto">
                <table class="w-full" id="bloodFlowTable">
                    <thead class="bg-gray-400">
                        <tr>
                            <th class="py-3 px-4 text-left text-gray-800">Name</th>
                            <th class="py-3 px-4 text-left text-gray-800">Type</th>
                            <th class="py-3 px-4 text-left text-gray-800">Group</th>
                            <th class="py-3 px-4 text-left text-gray-800">Size</th>
                            <th class="py-3 px-4 text-left text-gray-800">Date</th>
                            <th class="py-3 px-4 text-left text-gray-800">Review</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Donations -->
                        @foreach ($blood_donations as $donation)
                            <tr class="hover:bg-gray-50 transition-colors duration-200" data-type="donation">
                                <td class="py-3 px-4 border-t">{{ $donation['donate_name'] }}</td>
                                <td class="py-3 px-4 border-t">
                                    <span class="inline-block px-2 py-1 bg-red-200 text-red-800 rounded-full text-sm">
                                        Donation
                                    </span>
                                </td>
                                <td class="py-3 px-4 border-t">
                                    <span class="inline-block px-2 py-1 bg-red-200 text-red-800 rounded-full text-sm">
                                        {{ $donation['group_name'] }}
                                    </span>
                                </td>
                                <td class="py-3 px-4 border-t">{{ $donation['bag_size'] }}</td>
                                <td class="py-3 px-4 border-t">{{ $donation['donate_date'] }}</td>
                                <td class="py-3 px-4 border-t">
                                    @if (now()->gt($donation['expire_date']))
                                        <span class="text-red-600 font-medium">Expired</span>
                                    @else
                                        {{ $donation['expire_date'] }}
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                        <!-- Receptions -->
                        @foreach ($blood_receptions as $reception)
                            <tr class="hover:bg-gray-50 transition-colors duration-200" data-type="reception">
                                <td class="py-3 px-4 border-t">{{ $reception['receiver_name'] }}</td>
                                <td class="py-3 px-4 border-t">
                                    <span class="inline-block px-2 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">
                                        Reception
                                    </span>
                                </td>
                                <td class="py-3 px-4 border-t">
                                    <span class="inline-block px-2 py-1 bg-blue-200 text-blue-800 rounded-full text-sm">
                                        {{ $reception['group_name'] }}
                                    </span>
                                </td>
                                <td class="py-3 px-4 border-t">{{ $reception['bag_size'] }}</td>
                                <td class="py-3 px-4 border-t">{{ $reception['receive_date'] }}</td>
                                <td class="py-3 px-4 border-t text-sm text-gray-600">{{ $reception['review'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Initial state: show all
        let currentFilter = 'all.random';

        // Filter Donations
        document.getElementById('filterDonations').addEventListener('click', function() {
            const rows = document.querySelectorAll('#bloodFlowTable tbody tr');
            
            if (currentFilter === 'donation') {
                // Reset to show all
                rows.forEach(row => row.style.display = '');
                currentFilter = 'all';
                this.classList.remove('bg-red-800');
                document.getElementById('filterReceptions').classList.remove('bg-blue-800');
            } else {
                // Show only donations
                rows.forEach(row => {
                    row.style.display = row.getAttribute('data-type') === 'donation' ? '' : 'none';
                });
                currentFilter = 'donation';
                this.classList.add('bg-red-800');
                document.getElementById('filterReceptions').classList.remove('bg-blue-800');
            }
        });

        // Filter Receptions
        document.getElementById('filterReceptions').addEventListener('click', function() {
            const rows = document.querySelectorAll('#bloodFlowTable tbody tr');
            
            if (currentFilter === 'reception') {
                // Reset to show all
                rows.forEach(row => row.style.display = '');
                currentFilter = 'all';
                this.classList.remove('bg-blue-800');
                document.getElementById('filterDonations').classList.remove('bg-red-800');
            } else {
                // Show only receptions
                rows.forEach(row => {
                    row.style.display = row.getAttribute('data-type') === 'reception' ? '' : 'none';
                });
                currentFilter = 'reception';
                this.classList.add('bg-blue-800');
                document.getElementById('filterDonations').classList.remove('bg-red-800');
            }
        });
    </script>
</body>
</html>