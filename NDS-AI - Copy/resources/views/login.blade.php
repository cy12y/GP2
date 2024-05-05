<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - XDEFENSE</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
        body {
            font-family: 'Open Sans', sans-serif;
        }
        .testimonial-quote {
            font-size: 0.875rem; /* 14px */
            line-height: 1.25rem; /* 20px */
        }
    </style>
</head>

<body class="bg-gradient-to-br from-gray-900 to-black text-white">
    <!-- Navigation (same as the previous page, for consistency) -->
    <nav class="flex justify-between items-center p-5">
        <div class="flex items-center space-x-4">
            <img src="..\images\xdef.png" alt="XDEFENSE logo placeholder" class="h-12">
            <ul class="flex space-x-4">
                <li><a href="{{ route('home') }}" class="hover:text-blue-300">Home</a></li>
                <li><a href="{{ route('trynow') }}" class="hover:text-blue-300">Try now</a></li>
            </ul>
        </div>
    </nav>

    <!-- Login Section -->
    <section class="bg-black bg-opacity-25 py-10">
        <div class="max-w-lg mx-auto bg-gray-800 bg-opacity-50 rounded-xl p-8">
            <h2 class="text-3xl font-bold text-center mb-6">Login</h2>
            <p class="text-center mb-6">Welcome back! Please log in to access your account.</p>
            <form>
                <div class="mb-4">
                    <input type="email" placeholder="Enter your Email" class="w-full p-3 rounded bg-gray-700 text-white placeholder-gray-300">
                </div>
                <div class="mb-4">
                    <input type="password" placeholder="Enter your Password" class="w-full p-3 rounded bg-gray-700 text-white placeholder-gray-300">
                </div>
                <div class="text-center mb-6">
                    <a href="#" class="text-blue-400">Forgot Password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-900 hover:bg-blue-900 text-white font-bold py-3 px-4 rounded mb-4">Login</button>
                <a href="{{ route('signup') }}" class="block w-full bg-gray-600 hover:bg-gray-700 text-white font-bold py-3 px-4 rounded text-center">Sign Up</a>
                <p class="text-center my-4">Or continue with</p>
                <div class="flex justify-center space-x-4">
                    <button aria-label="Continue with Google" class="bg-white text-gray-800 rounded-full p-3">
                        <i class="fab fa-google"></i>
                    </button>
                    <button aria-label="Continue with Facebook" class="bg-white text-gray-800 rounded-full p-3">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button aria-label="Continue with Apple" class="bg-white text-gray-800 rounded-full p-3">
                        <i class="fab fa-apple"></i>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-10">
        <h3 class="text-3xl font-bold text-center mb-6">Our Testimonials</h3>
        <div class="flex justify-center space-x-8">
            <!-- Testimonial 1 -->
            <div class="bg-black bg-opacity-25 p-6 rounded-xl max-w-sm">
                <blockquote class="testimonial-quote italic mb-4">"XDEFENSE exceeded our expectations. Their proactive cyber-attack detection has been a game-changer for our business. We feel confident knowing our digital assets are in safe hands."</blockquote>
                <p class="font-bold text-center">Ali</p>
            </div>
            <!-- Testimonial 2 -->
            <div class="bg-black bg-opacity-25 p-6 rounded-xl max-w-sm">
                <blockquote class="testimonial-quote italic mb-4">"XDEFENSE truly delivered on its promise. Their AI-driven approach detected and thwarted potential cyber threats seamlessly, providing us with peace of mind in the digital realm."</blockquote>
                <p class="font-bold text-center">Anos</p>
            </div>
            <!-- Testimonial 3 -->
            <div class="bg-black bg-opacity-25 p-6 rounded-xl max-w-sm">
                <blockquote class="testimonial-quote italic mb-4">"Impressive technology and unparalleled expertise. XDEFENSE not only protected our systems but also educated our team on emerging cyber threats. A valuable partner in the age of cybersecurity."</blockquote>
                <p class="font-bold text-center">Abdullah</p>
            </div>
        </div>
    </section>

    <!-- Footer (same as the previous page, for consistency) -->
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

</body>

</html>
