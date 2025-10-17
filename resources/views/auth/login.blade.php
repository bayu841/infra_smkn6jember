<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMK Administration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .card-shadow {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1), 0 10px 20px rgba(0, 0, 0, 0.06);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        /* @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        } */

        .slide-in {
            animation: slideIn 0.8s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col lg:flex-row">
        <!-- Left Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="max-w-md w-full space-y-8 slide-in">
                <!-- Header -->
                <div class="text-center">
                    <div class="flex justify-center mb-6">
                        <div class="relative">
                            <img src="{{ asset('image/logosmk.png') }}" alt="logo" class="w-20 h-20">
                        </div>
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-2">Welcome Back</h1>
                    <p class="text-gray-500 text-lg">Sign in to your admin account</p>
                </div>

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="mt-8 space-y-6">
                    @csrf

                    <!-- Email Input -->
                    <div class="space-y-2">
                        <label for="email" class="flex items-center text-sm font-medium text-gray-700">
                            <i class="fas fa-envelope text-blue-500 mr-2"></i>
                            Email Address
                        </label>
                        <div class="relative">
                            <input id="email" type="email" name="email"
                                class="w-full px-4 py-4 border border-gray-200 rounded-xl input-focus transition-all duration-200 bg-white text-gray-900 placeholder-gray-400 @error('email') border-red-500 @enderror"
                                placeholder="your@email.com" value="{{ old('email') }}" required autocomplete="email"
                                autofocus>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-user text-gray-400"></i>
                            </div>
                        </div>
                        @error('email')
                            <div class="flex items-center gap-2 text-red-500 text-sm mt-1">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label for="password" class="flex items-center text-sm font-medium text-gray-700">
                                <i class="fas fa-lock text-blue-500 mr-2"></i>
                                Password
                            </label>
                            <a href="#"
                                class="text-sm text-blue-600 hover:text-blue-700 transition-colors duration-200 flex items-center gap-1">
                                <i class="fas fa-key"></i>
                                Forgot password?
                            </a>
                        </div>
                        <div class="relative">
                            <input id="password" type="password" name="password"
                                class="w-full px-4 py-4 border border-gray-200 rounded-xl input-focus transition-all duration-200 bg-white text-gray-900 placeholder-gray-400 @error('password') border-red-500 @enderror"
                                placeholder="Enter your password" required autocomplete="current-password">
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                <i class="fas fa-eye-slash text-gray-400 cursor-pointer hover:text-gray-600"
                                    id="togglePassword"></i>
                            </div>
                        </div>
                        @error('password')
                            <div class="flex items-center gap-2 text-red-500 text-sm mt-1">
                                <i class="fas fa-exclamation-circle"></i>
                                <span>{{ $message }}</span>
                            </div>
                        @enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                Remember me
                            </label>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                            class="group relative w-full flex justify-center py-4 px-4 border border-transparent rounded-xl shadow-sm text-sm font-semibold text-white bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-200 transform hover:-translate-y-0.5 hover:shadow-lg">
                            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                <i class="fas fa-sign-in-alt text-blue-200 group-hover:text-white"></i>
                            </span>
                            Masuk Ke Dashboard
                        </button>
                    </div>
                </form>

                <!-- Social Login -->
                <div class="mt-8">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-200"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-4 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-4">
                        <a href="#"
                            class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-200 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-all duration-200 transform hover:-translate-y-0.5 hover:shadow-md">
                            <img class="w-5 h-5" src="https://www.svgrepo.com/show/475656/google-color.svg"
                                alt="Google">
                            <span class="ml-3 font-medium">Google</span>
                        </a>

                        <a href="#"
                            class="w-full inline-flex justify-center items-center py-3 px-4 border border-gray-200 rounded-xl shadow-sm bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 transition-all duration-200 transform hover:-translate-y-0.5 hover:shadow-md">
                            <img class="w-5 h-5" src="https://www.svgrepo.com/show/512317/github-142.svg"
                                alt="Github">
                            <span class="ml-3 font-medium">GitHub</span>
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <div class="mt-8 text-center">
                    <p class="text-sm text-gray-600">
                        Don't have an account?
                        <a href="#"
                            class="font-medium text-blue-600 hover:text-blue-700 transition-colors duration-200 ml-1">
                            Contact Administrator
                        </a>
                    </p>
                    <p class="text-xs text-gray-400 mt-4">
                        © 2024 SMK Administration. All rights reserved.
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Hero Image -->
        <div class="hidden lg:flex lg:w-1/2 gradient-bg items-center justify-center p-12 relative overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute inset-0 opacity-10">
                <div class="absolute top-0 left-0 w-72 h-72 bg-white rounded-full -translate-x-1/2 -translate-y-1/2">
                </div>
                <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/2 translate-y-1/2">
                </div>
            </div>

            <!-- Content -->
            <div class="relative z-10 text-center text-white max-w-2xl">
                <div class="animate-float mb-8">
                    <img src="{{ asset('image/auth/auth.png') }}" alt="Login Illustration"
                        class="w-380 h-380 mx-auto object-contain">
                </div>
                <!-- Decorative Elements -->
                <div class="absolute top-10 left-10 w-4 h-4 bg-white rounded-full opacity-20 animate-pulse"></div>
                <div class="absolute top-20 right-20 w-6 h-6 bg-white rounded-full opacity-30 animate-pulse"
                    style="animation-delay: 0.5s;"></div>
                <div class="absolute bottom-20 left-20 w-3 h-3 bg-white rounded-full opacity-40 animate-pulse"
                    style="animation-delay: 1s;"></div>
            </div>
        </div>

        <script>
            // Toggle password visibility
            document.getElementById('togglePassword').addEventListener('click', function() {
                const passwordInput = document.getElementById('password');
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Toggle eye icon
                this.classList.toggle('fa-eye');
                this.classList.toggle('fa-eye-slash');
            });

            // Add loading state to submit button
            document.querySelector('form').addEventListener('submit', function() {
                const button = this.querySelector('button[type="submit"]');
                button.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Signing In...';
                button.disabled = true;
            });
        </script>
</body>

</html>
