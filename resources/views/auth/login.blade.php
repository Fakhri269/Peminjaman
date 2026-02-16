<x-guest-layout>
    <div class="h-screen bg-gradient-to-br from-blue-600 to-cyan-300 flex justify-center items-center w-full">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="bg-white px-10 py-8 rounded-xl w-screen shadow-xl max-w-sm">
                <div class="space-y-4">
                    <h1 class="text-center text-2xl font-semibold text-gray-600">Login</h1>
                    <hr>

                    <!-- Email -->
                    <div class="flex items-center border-2 py-2 px-3 rounded-md mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input id="email" name="email" type="email"
                            class="pl-2 outline-none border-none w-full"
                            value="{{ old('email') }}" placeholder="Email" required autofocus autocomplete="username"/>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-sm text-red-500" />

                    <!-- Password -->
                    <div class="flex items-center border-2 py-2 px-3 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <input id="password" name="password" type="password"
                            class="pl-2 outline-none border-none w-full"
                            placeholder="Password" required autocomplete="current-password"/>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-sm text-red-500" />

                </div>

                <!-- Remember Me -->
                <div class="flex justify-center items-center mt-4">
                    <label for="remember_me" class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                        <input id="remember_me" type="checkbox" name="remember" class="mr-2">
                        <span class="text-xs font-semibold">Remember me?</span>
                    </label>
                </div>

                <!-- Login button -->
                <button type="submit"
                    class="mt-6 w-full shadow-xl bg-gradient-to-tr from-blue-600 to-red-400 hover:to-red-700 text-indigo-100 py-2 rounded-md text-lg tracking-wide transition duration-700">
                    Login
                </button>
                <hr>

                <!-- Register -->
                <div class="flex justify-center items-center mt-4">
                    <p class="inline-flex items-center text-gray-700 font-medium text-xs text-center">
                        <span class="ml-2">
                            You don't have an account?
                            <a href="{{ route('register') }}" class="text-xs ml-2 text-blue-500 font-semibold">Register now →</a>
                        </span>
                    </p>
                </div>
            </div>

            <!-- Back to home -->
            <div class="pt-6 text-base font-semibold leading-7">
                <a href="{{ url('/') }}" class="absolute text-red-500 text-md hover:text-red-800">&larr; Home</a>
            </div>
        </form>
    </div>
</x-guest-layout>
