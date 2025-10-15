<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="h-screen flex">
        <div class="w-full lg:w-1/2 bg-white flex items-center justify-center">
            <div class="max-w-md w-full p-6">
                <img src="{{ asset('image/logoinfra.png') }}" alt="logo" class="w-24 h-24 mx-auto mb-4">
                <h1 class="text-3xl font-semibold mb-2 text-black text-center">Welcome Back</h1>
                <p class="text-gray-500 text-center mb-6">Login to your account</p>
                <form method="POST" action="{{ route('login') }}" class="space-y-4">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" type="email" name="email" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('email') border-red-500 @enderror" placeholder="your@email.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <div class="flex justify-between items-center">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <a href="#" class="text-sm text-blue-600 hover:underline">Forgot password?</a>
                        </div>
                        <input id="password" type="password" name="password" class="mt-1 p-3 w-full border border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50 @error('password') border-red-500 @enderror" placeholder="Enter your password" required autocomplete="current-password">
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Login
                        </button>
                    </div>
                </form>
                <div class="mt-6">
                    <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">Or continue with</span>
                        </div>
                    </div>

                    <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <img class="w-5 h-5" src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google">
                                <span class="ml-2">Google</span>
                            </a>
                        </div>

                        <div>
                            <a href="#" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <img class="w-5 h-5" src="https://www.svgrepo.com/show/512317/github-142.svg" alt="Github">
                                <span class="ml-2">GitHub</span>
                            </a>
                        </div>
                    </div>
                </div>
                <p class="mt-6 text-center text-sm text-gray-500">
                    Don't have an account?
                    <a href="#" class="font-medium text-blue-600 hover:underline">
                        Sign up
                    </a>
                </p>
            </div>
        </div>
        <div class="hidden lg:flex w-1/2 h-full items-center justify-center bg-gray-200">
            <img src="{{ asset('image/auth/auth.png') }}" alt="Login Image" class="object-cover w-3/4 h-3/4">
        </div>
    </div>
</body>
</html>