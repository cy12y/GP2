<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-900 to-black text-white">
    <nav class="flex justify-between items-center p-5">
        <div class="flex items-center space-x-4">
            <img src="../images/xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-300">Home</a></li>
                <li><a href="{{ route('dashboard') }}" class="hover:text-blue-300">Dashboard</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mx-auto px-4">
        <!-- Header -->
        <header class="flex justify-between items-center py-4">
            <div class="text-left">
                <h1 class="text-3xl font-bold">Profile</h1>
            </div>
        </header>

        <!-- Profile Section -->
        <div class="flex flex-wrap -mx-4">
            <!-- Profile Sidebar (Left) -->
            <div class="w-full lg:w-1/4 px-4 mb-4 lg:mb-0">
                <div class="bg-gray-800 p-4 rounded-lg text-center">
                    <div class="mb-4">
                        <!-- Placeholder for Profile Picture -->
                        <div class="w-32 h-32 mx-auto mb-4 bg-gray-700 rounded-full"></div>
                        <h2 class="text-xl font-semibold">{{ $user->first_name }} {{ $user->last_name }}</h2>
                        <p class="text-gray-400 text-sm">{{ '@' . $user->email }}</p>
                    </div>
                    <div>
                        <p class="text-gray-400 text-sm mb-2">Member since {{ $user->created_at->format('Y') }}</p>
                        <!-- You can add more profile details here -->
                    </div>
                </div>
            </div>

            <!-- Profile Details (Right) -->
            <div class="w-full lg:w-3/4 px-4">
                <div class="bg-gray-800 p-4 rounded-lg">
                    <h2 class="text-2xl font-semibold mb-4">Account Details</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label class="text-gray-500 text-sm">Full Name</label>
                            <p class="text-white">{{ $user->first_name }} {{ $user->last_name }}</p>
                        </div>
                        <div>
                            <label class="text-gray-500 text-sm">Email</label>
                            <p class="text-white">{{ $user->email }}</p>
                        </div>
                        <!-- Add more account details here -->
                    </div>
                    <div>
                        <h2 class="text-2xl font-semibold mb-4">Security</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <!-- Add security details here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-black bg-opacity-25 py-10">
            <div class="flex justify-between items-center p-5">
                <div>
                    <img src="../images/xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
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

