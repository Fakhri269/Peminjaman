<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .bg-animated-gradient {
            background: linear-gradient(-45deg, #52c4eeff, #2617cfff, #6716daff, #23d5c3ff);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }
        .floating {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-animated-gradient min-h-screen flex items-center justify-center p-4">

    <div class="relative w-full max-w-md bg-white/20 backdrop-blur-lg shadow-2xl rounded-2xl px-10 py-12 text-center border border-white/30 floating transition-all duration-300 hover:shadow-3xl">

        <h1 class="text-4xl font-extrabold text-white mb-4">Laravel Fakhri</h1>
        <p class="text-white/80 mb-8">
            Welcome to <span class="font-semibold text-white">Fakhri Web</span><br>
            ........... Enjoyyyyyyyy ...........
        </p>

        <div class="flex flex-col gap-4">
            <a href="/login" class="w-full py-3 rounded-lg bg-white text-indigo-600 font-semibold text-lg shadow hover:bg-white/90 transition">Login</a>
            <a href="/register" class="w-full py-3 rounded-lg bg-white text-purple-600 font-semibold text-lg shadow hover:bg-white/90 transition">Register</a>
        </div>

    </div>

</body>
</html>