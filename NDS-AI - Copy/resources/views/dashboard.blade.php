<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">
    <nav class="flex justify-between items-center p-5">
        <div class="flex items-center space-x-4">
            <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-300">Home</a></li>
                <li><a href="{{ route('home') }}" class="hover:text-blue-300">About</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto px-4">
        <!-- Header -->
        <header class="flex justify-between items-center py-4">
            <div class="text-left">
                <h1 class="text-3xl font-bold">Incident History</h1>
            </div>
            <div class="text-right">
                <div class="relative">
                    <input type="search" placeholder="Search..." class="bg-gray-800 text-sm rounded-full pl-8 pr-3 py-1 focus:outline-none">
                    <i class="fas fa-search absolute left-2 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                </div>
            </div>
        </header>

        <!-- Incident History Table -->
        <div class="bg-gray-800 p-4 rounded-lg my-4">
            <div class="overflow-x-auto">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Protocole Type
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Service
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Flag
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Source bytes
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Dest bytes
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Count
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-700 text-left text-xs font-semibold text-gray-500 uppercase tracking-wider">
                                Class
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Repeat this row for each incident -->
                        @foreach($jsonDataArray as $data)
                        <tr>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm">
                                {{$data['protocol_type']}}
                            </td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm">
                            {{$data['service']}}
                            </td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm">
                                <span class="relative inline-block px-3 py-1 font-semibold text-white-900 leading-tight">
                                    <span aria-hidden class="absolute inset-0 bg-red-400 opacity-50 rounded-full"></span>
                                    <span class="relative">Unresolved</span>
                                </span>
                            </td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm">
                            {{$data['flag']}}
                            </td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm">
                            {{$data['src_bytes']}}
                            </td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm"> {{$data['dst_bytes']}}</td>
                            <td class="px-5 py-2 border-b border-gray-700 text-sm"> {{$data['count']}}</td>
                        </tr>
                        @endforeach
                        <!-- ... other incident rows ... -->
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-black bg-opacity-25 py-10">
            <div class="flex justify-between items-center p-5">
                <div>
                    <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
                </div>
                
                <div>
                    <p class="text-sm">info@xdefense.com</p>
                    <p class="text-sm">+990 0171245342</p>
                    <p class="text-sm">ABHA</p>
                </div>
            </div>
            <div class="text-center p-5">
                <div class="flex justify-center space-x-4">
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-blue-300"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p class="text-xs">XDEFENSE All Rights Reserved</p>
                <p class="text-xs"><a href="#" class="hover:text-blue-300">Privacy Policy</a> | <a href="#" class="hover:text-blue-300">Terms of Service</a></p>
            </div>
        </footer>
    </div>
</body>

</html>