<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen bg-gradient-to-r from-indigo-800 to-blue-900 p-4">
        <div class="bg-white rounded-xl shadow-2xl p-8 max-w-md w-full animate-fade-in">
            <h2 class="text-2xl font-bold text-center text-indigo-800 mb-8">Create an Account</h2>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Username -->
                <div>
                    <label for="name" class="block text-indigo-900 font-semibold mb-2">Username</label>
                    <input id="name" type="text" name="name"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                        placeholder="Enter your username" value="{{ old('name') }}" required autofocus autocomplete="name">
                    <x-input-error :messages="$errors->get('name')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-indigo-900 font-semibold mb-2">Email</label>
                    <input id="email" type="email" name="email"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                        placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block text-indigo-900 font-semibold mb-2">Password</label>
                    <input id="password" type="password" name="password"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                        placeholder="Enter your password" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="block text-indigo-900 font-semibold mb-2">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation"
                        class="w-full px-4 py-2 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-800 transition-all duration-300"
                        placeholder="Confirm your password" required autocomplete="new-password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="text-red-500 text-sm mt-2" />
                </div>

                <!-- Register Button -->
                <button type="submit"
                    class="w-full bg-indigo-800 text-white py-3 rounded-lg font-semibold hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-800 focus:ring-offset-2 transition-all duration-300 transform hover:scale-[1.02]">
                    Register
                </button>
            </form>

            <!-- Link ke Login -->
            <p class="text-center text-gray-600 mt-6">
                Already have an account?
                <a href="{{ route('login') }}" class="text-indigo-800 font-semibold hover:text-blue-900 transition-colors duration-300">Sign In</a>
            </p>
        </div>
    </div>

    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
    </style>
</x-guest-layout>
