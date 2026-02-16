{{-- resources/views/dashboard.blade.php --}}
<x-app-layout>

    <div class="flex min-h-screen bg-gradient-to-br from-violet-50 via-purple-50 to-fuchsia-100 dark:from-gray-950 dark:via-slate-900 dark:to-gray-900">
        
        <!-- SIDEBAR -->
        <aside class="hidden md:flex md:flex-col w-72 bg-white/80 backdrop-blur-xl 
                     dark:bg-gray-900/80 shadow-2xl border-r border-purple-200/30 
                     dark:border-gray-700/50 relative overflow-hidden">
            
            <!-- Decorative gradient overlay -->
            <div class="absolute inset-0 bg-gradient-to-b from-violet-500/5 via-transparent to-purple-500/5 pointer-events-none"></div>
            
            <div class="relative z-10 p-6 space-y-8">
                
                <!-- Logo/Brand Section -->
                <div class="text-center space-y-2 pb-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-br from-violet-500 to-purple-600 
                                rounded-2xl flex items-center justify-center shadow-lg 
                                transform hover:scale-110 transition-transform duration-300">
                        <i class="bi bi-grid-3x3-gap-fill text-white text-2xl"></i>
                    </div>
                    <h2 class="text-2xl font-bold bg-gradient-to-r from-violet-600 to-purple-600 
                               dark:from-violet-400 dark:to-purple-400 bg-clip-text text-transparent">
                        Dashboard
                    </h2>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Fakhri Website</p>
                </div>

                <!-- Navigation Menu -->
                <nav class="flex flex-col space-y-2">
                    
                    <a href="{{ route('siswa.index') }}" 
                       class="group flex items-center space-x-4 p-4 rounded-xl
                              hover:bg-gradient-to-r hover:from-violet-500 hover:to-purple-500 
                              dark:hover:from-violet-600 dark:hover:to-purple-600
                              text-gray-700 dark:text-gray-300 hover:text-white
                              transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div class="w-10 h-10 rounded-lg bg-violet-100 dark:bg-gray-800 
                                    group-hover:bg-white/20 flex items-center justify-center
                                    transition-colors duration-300">
                            <i class="bi bi-person-lines-fill text-xl text-violet-600 
                                      dark:text-violet-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-semibold">Data Siswa</span>
                    </a>

                    <a href="{{ route('guru.index') }}" 
                       class="group flex items-center space-x-4 p-4 rounded-xl
                              hover:bg-gradient-to-r hover:from-blue-500 hover:to-cyan-500 
                              dark:hover:from-blue-600 dark:hover:to-cyan-600
                              text-gray-700 dark:text-gray-300 hover:text-white
                              transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-gray-800 
                                    group-hover:bg-white/20 flex items-center justify-center
                                    transition-colors duration-300">
                            <i class="bi bi-people-fill text-xl text-blue-600 
                                      dark:text-blue-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-semibold">Data Guru</span>
                    </a>

                    <a href="{{ route('inventories.index') }}" 
                       class="group flex items-center space-x-4 p-4 rounded-xl
                              hover:bg-gradient-to-r hover:from-emerald-500 hover:to-teal-500 
                              dark:hover:from-emerald-600 dark:hover:to-teal-600
                              text-gray-700 dark:text-gray-300 hover:text-white
                              transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-gray-800 
                                    group-hover:bg-white/20 flex items-center justify-center
                                    transition-colors duration-300">
                            <i class="bi bi-box-seam-fill text-xl text-emerald-600 
                                      dark:text-emerald-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-semibold">Inventaris</span>
                    </a>

                    <a href="{{ route('peminjaman.index') }}" 
                       class="group flex items-center space-x-4 p-4 rounded-xl
                              hover:bg-gradient-to-r hover:from-amber-500 hover:to-orange-500 
                              dark:hover:from-amber-600 dark:hover:to-orange-600
                              text-gray-700 dark:text-gray-300 hover:text-white
                              transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div class="w-10 h-10 rounded-lg bg-amber-100 dark:bg-gray-800 
                                    group-hover:bg-white/20 flex items-center justify-center
                                    transition-colors duration-300">
                            <i class="bi bi-arrow-left-right text-xl text-amber-600 
                                      dark:text-amber-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-semibold">Peminjaman</span>
                    </a>

                    <a href="{{ route('pengembalian.index') }}" 
                       class="group flex items-center space-x-4 p-4 rounded-xl
                              hover:bg-gradient-to-r hover:from-amber-500 hover:to-orange-500 
                              dark:hover:from-amber-600 dark:hover:to-orange-600
                              text-gray-700 dark:text-gray-300 hover:text-white
                              transition-all duration-300 transform hover:scale-105 hover:shadow-lg">
                        <div class="w-10 h-10 rounded-lg bg-amber-100 dark:bg-gray-800 
                                    group-hover:bg-white/20 flex items-center justify-center
                                    transition-colors duration-300">
                            <i class="bi bi-arrow-left-right text-xl text-amber-600 
                                      dark:text-amber-400 group-hover:text-white"></i>
                        </div>
                        <span class="font-semibold">Pengembalian</span>
                    </a>

                </nav>

                <!-- User Info Section (Optional) -->
                <div class="mt-auto pt-6 border-t border-gray-200 dark:border-gray-700">
                    <div class="flex items-center space-x-3 p-3 rounded-lg 
                                bg-gray-100 dark:bg-gray-800">
                        <div class="w-10 h-10 rounded-full bg-gradient-to-br from-violet-500 to-purple-600 
                                    flex items-center justify-center text-white font-bold">
                            {{ substr(Auth::user()->name ?? 'U', 0, 1) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-semibold text-gray-900 dark:text-white truncate">
                                {{ Auth::user()->name ?? 'User' }}
                            </p>
                            <p class="text-xs text-gray-500 dark:text-gray-400 truncate">
                                {{ Auth::user()->email ?? 'user@example.com' }}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </aside>

        <!-- MAIN CONTENT -->
        <main class="flex-1 overflow-y-auto">
            <div class="min-h-screen p-6 lg:p-10">
                
                <!-- Header Section -->
                <div class="max-w-7xl mx-auto mb-8">
                    <div class="bg-white/70 dark:bg-gray-900/70 backdrop-blur-xl rounded-2xl 
                                shadow-xl border border-purple-200/30 dark:border-gray-700/50 
                                p-6 lg:p-8">
                        <div class="flex items-center justify-between">
                            <div>
                                <h1 class="text-3xl lg:text-4xl font-bold bg-gradient-to-r 
                                           from-violet-600 to-purple-600 dark:from-violet-400 
                                           dark:to-purple-400 bg-clip-text text-transparent">
                                    Selamat Datang Di ....
                                </h1>
                                <p class="text-gray-600 dark:text-gray-400 mt-2">
                                    Website Nya Orang Ganteng 
                                </p>
                            </div>
                            <div class="hidden lg:block">
                                <div class="text-right">
                                    <p class="text-sm text-gray-500 dark:text-gray-400">
                                        {{ now()->isoFormat('dddd, D MMMM YYYY') }}
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Area -->
                <div class="max-w-7xl mx-auto">
                    @yield('content')
                </div>

            </div>
        </main>
    
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</x-app-layout>