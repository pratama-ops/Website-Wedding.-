<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Wedding Organizer</title>

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rose: {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased min-h-screen flex flex-col" x-data="{ sidebarOpen: false, activeTab: 'dashboard', deleteModalOpen: false, selectedDeleteId: null }">

    <!-- OVERLAY SIDEBAR MOBILE -->
    <div x-show="sidebarOpen" 
         x-transition:enter="transition-opacity ease-linear duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-linear duration-300"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="sidebarOpen = false" 
         class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 lg:hidden" x-cloak></div>

    <div class="flex flex-1 min-h-screen">
        
        <!-- SIDEBAR -->
        <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 flex flex-col transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0"
               :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            
            <!-- Logo Brand -->
            <div class="h-16 flex items-center px-6 border-b border-slate-100 justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-rose-500 flex items-center justify-center text-white font-bold text-lg shadow-sm shadow-rose-200">
                        W
                    </div>
                    <span class="font-bold text-slate-800 text-lg tracking-tight">Eternal<span class="text-rose-600">Organizer</span></span>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- Navigasi Sidebar -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                
                <button @click="activeTab = 'dashboard'; sidebarOpen = false" 
                        :class="activeTab === 'dashboard' ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                        class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-colors duration-150">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard</span>
                </button>

                <button @click="activeTab = 'pemesanan'; sidebarOpen = false" 
                        :class="activeTab === 'pemesanan' ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                        class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm transition-colors duration-150">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>Pemesanan Paket</span>
                    </div>
                    <!-- Badge info counter (bisa diisi variabel backend nanti) -->
                    <span class="bg-rose-100 text-rose-700 text-xs font-semibold px-2 py-0.5 rounded-full">3</span>
                </button>

                                <a href="{{ route('admin.portfolio.create') }}"
                   class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-colors duration-150 text-slate-600 hover:bg-slate-50 hover:text-slate-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>Portofolio</span>
                </a>

                <button @click="activeTab = 'testimoni'; sidebarOpen = false" 
                        :class="activeTab === 'testimoni' ? 'bg-rose-50 text-rose-600 font-semibold' : 'text-slate-600 hover:bg-slate-50 hover:text-slate-900'"
                        class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm transition-colors duration-150">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    <span>Testimoni</span>
                </button>

            </nav>

            <!-- Profile Ringkas / Logout Placeholder -->
            <div class="p-4 border-t border-slate-100">
                <div class="flex items-center gap-3 p-2 rounded-xl bg-slate-50">
                    <div class="w-9 h-9 rounded-full bg-slate-300 flex items-center justify-center font-bold text-slate-600">
                        AD
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-slate-800 truncate">Admin Wedding</p>
                        <p class="text-xs text-slate-500 truncate">admin@wedding.com</p>
                    </div>
                </div>
            </div>
        </aside>

        <!-- AREA KONTEN UTAMA -->
        <div class="flex-1 flex flex-col min-w-0">
            
            <!-- HEADER STICKY -->
            <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-slate-200 px-4 sm:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = true" class="lg:hidden text-slate-500 hover:text-slate-700 p-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-rose-500">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <h1 class="text-lg sm:text-xl font-bold text-slate-800 capitalize" x-text="activeTab === 'pemesanan' ? 'Pemesanan Paket' : activeTab"></h1>
                </div>

                <div class="flex items-center gap-3">
                    <a href="#" target="_blank" class="hidden sm:inline-flex items-center gap-2 text-xs font-medium text-slate-600 bg-slate-100 hover:bg-slate-200 px-3 py-2 rounded-lg transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        Lihat Website Utama
                    </a>
                </div>
            </header>

            <!-- KONTEN BERDASARKAN TAB ACTIVE -->
            <main class="flex-1 p-4 sm:p-8 max-w-7xl w-full mx-auto space-y-8">

                <!-- ========================================================= -->
                <!-- SECTION 1: DASHBOARD -->
                <!-- ========================================================= -->
                <section x-show="activeTab === 'dashboard'" x-cloak class="space-y-8">
                    
                    <!-- Grid Kartu Statistik -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                        
                        <!-- Card 1 -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Total Pemesanan</p>
                                <!-- BACKEND: Gantilah angka statis di bawah ini -->
                                <p class="text-2xl font-bold text-slate-800 mt-1">24</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Belum Dihubungi</p>
                                <!-- BACKEND: Gantilah angka statis di bawah ini -->
                                <p class="text-2xl font-bold text-amber-600 mt-1">5</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-sky-50 text-sky-600 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Foto Portofolio</p>
                                <!-- BACKEND: Gantilah angka statis di bawah ini -->
                                <p class="text-2xl font-bold text-slate-800 mt-1">48</p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center gap-4">
                            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                            </div>
                            <div>
                                <p class="text-xs font-medium text-slate-500 uppercase tracking-wider">Total Testimoni</p>
                                <!-- BACKEND: Gantilah angka statis di bawah ini -->
                                <p class="text-2xl font-bold text-slate-800 mt-1">16</p>
                            </div>
                        </div>

                    </div>

                    <!-- Ringkasan Pemesanan Terbaru -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                            <div>
                                <h2 class="text-base font-bold text-slate-800">Pemesanan Terbaru</h2>
                                <p class="text-xs text-slate-500 mt-0.5">Daftar calon klien yang baru mengajukan paket pernikahan.</p>
                            </div>
                            <button @click="activeTab = 'pemesanan'" class="text-xs font-semibold text-rose-600 hover:text-rose-700">Lihat Semua →</button>
                        </div>

                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse text-sm">
                                <thead>
                                    <tr class="bg-slate-50/70 text-slate-500 font-semibold text-xs border-b border-slate-100">
                                        <th class="py-3.5 px-6">Klien</th>
                                        <th class="py-3.5 px-6">Paket</th>
                                        <th class="py-3.5 px-6">Tanggal Acara</th>
                                        <th class="py-3.5 px-6">Status</th>
                                        <th class="py-3.5 px-6 text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-slate-700">
                                    {{-- BACKEND: Looping data pemesanan terbatas (misal 5 data) memakai @forelse ($latestOrders as $order) --}}
                                    
                                    <!-- Empty State jika data kosong -->
                                    <tr>
                                        <td colspan="5" class="py-12 text-center">
                                            <div class="max-w-xs mx-auto text-center space-y-3">
                                                <div class="w-12 h-12 mx-auto rounded-full bg-slate-100 flex items-center justify-center text-slate-400">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/></svg>
                                                </div>
                                                <p class="text-sm font-medium text-slate-600">Belum ada pemesanan masuk</p>
                                                <p class="text-xs text-slate-400">Pemesanan dari calon klien di website akan muncul di sini.</p>
                                            </div>
                                        </td>
                                    </tr>

                                    {{-- @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


                <!-- ========================================================= -->
                <!-- SECTION 2: PEMESANAN PAKET -->
                <!-- ========================================================= -->
                <section x-show="activeTab === 'pemesanan'" x-cloak class="space-y-6">
                    
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-4">
                        
                        <!-- Toolbar Filter & Cari -->
                        <div class="flex flex-col sm:flex-row gap-4 items-center justify-between">
                            <div class="relative w-full sm:w-80">
                                <input type="text" placeholder="Cari nama atau email..." class="w-full pl-10 pr-4 py-2 text-sm border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500 focus:border-rose-500">
                                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </div>

                            <div class="flex items-center gap-3 w-full sm:w-auto">
                                <label for="filter-status" class="text-xs font-semibold text-slate-500 whitespace-nowrap">Filter Status:</label>
                                <select id="filter-status" class="w-full sm:w-auto text-sm border border-slate-200 rounded-xl px-3 py-2 bg-white focus:outline-none focus:ring-2 focus:ring-rose-500">
                                    <option value="">Semua Status</option>
                                    <option value="baru">Baru</option>
                                    <option value="dihubungi">Dihubungi</option>
                                    <option value="selesai">Selesai</option>
                                </select>
                            </div>
                        </div>

                        <!-- Tabel Pemesanan -->
                        <div class="overflow-x-auto rounded-xl border border-slate-100">
                            <table class="w-full text-left border-collapse text-sm">
                                <thead>
                                    <tr class="bg-slate-50 text-slate-500 font-semibold text-xs border-b border-slate-100">
                                        <th class="py-3.5 px-4">Nama & Informasi Klien</th>
                                        <th class="py-3.5 px-4">Paket Dipesan</th>
                                        <th class="py-3.5 px-4">Tanggal Acara</th>
                                        <th class="py-3.5 px-4">Pesan Tambahan</th>
                                        <th class="py-3.5 px-4">Status</th>
                                        <th class="py-3.5 px-4 text-right">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 text-slate-700">
                                    {{-- BACKEND: @forelse ($orders as $order) --}}
                                    
                                    <!-- Contoh Struktur Baris Data (Siap diisi loop) -->
                                    <tr class="hover:bg-slate-50/50 transition-colors">
                                        <td class="py-4 px-4">
                                            <p class="font-semibold text-slate-800">Siti Nurhaliza</p>
                                            <p class="text-xs text-slate-500 mt-0.5">081234567890 • siti@example.com</p>
                                        </td>
                                        <td class="py-4 px-4">
                                            <span class="inline-flex items-center px-2.5 py-1 rounded-md text-xs font-medium bg-slate-100 text-slate-700">
                                                Gold Wedding Package
                                            </span>
                                        </td>
                                        <td class="py-4 px-4 whitespace-nowrap text-xs font-medium text-slate-600">
                                            12 November 2026
                                        </td>
                                        <td class="py-4 px-4 text-xs text-slate-500 max-w-xs truncate">
                                            Mohon hubungi via WhatsApp di jam kerja, ingin tanya detail dekorasi outdoor.
                                        </td>
                                        <td class="py-4 px-4 whitespace-nowrap">
                                            <!-- Form/Dropdown Update Status -->
                                            <form action="#" method="POST">
                                                @csrf
                                                <!-- Status Badge Styling -->
                                                <select name="status" onchange="this.form.submit()" class="text-xs font-semibold px-2.5 py-1 rounded-full border-0 focus:ring-2 focus:ring-rose-500 cursor-pointer bg-amber-100 text-amber-700">
                                                    <option value="baru" selected>Baru</option>
                                                    <option value="dihubungi">Dihubungi</option>
                                                    <option value="selesai">Selesai</option>
                                                </select>
                                            </form>
                                        </td>
                                        <td class="py-4 px-4 text-right whitespace-nowrap space-x-2">
                                            <!-- Button WhatsApp -->
                                            <!-- BACKEND: Formatkan nomor telepon ke 62xxxx dan atur urlencode pesan -->
                                            <a href="https://wa.me/6281234567890?text=Halo%20Siti%20Nurhaliza,%20terima%20kasih%20telah%20menghubungi%20Eternal%20Organizer%20mengenai%20Gold%20Wedding%20Package." 
                                               target="_blank" 
                                               aria-label="Hubungi via WhatsApp"
                                               class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-xs font-medium transition-colors shadow-sm">
                                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                                <span>WhatsApp</span>
                                            </a>

                                            <!-- Button Hapus -->
                                            <button @click="deleteModalOpen = true; selectedDeleteId = 1" 
                                                    aria-label="Hapus pemesanan"
                                                    class="p-1.5 text-slate-400 hover:text-rose-600 rounded-lg hover:bg-rose-50 transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- Empty State jika data kosong -->
                                    <tr x-show="false">
                                        <td colspan="6" class="py-12 text-center text-slate-400 text-sm">
                                            Tidak ada data pemesanan ditemukan.
                                        </td>
                                    </tr>

                                    {{-- @endforelse --}}
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>


                <!-- ========================================================= -->
                <!-- SECTION 3: PORTOFOLIO -->
                <!-- ========================================================= -->
                <section x-show="activeTab === 'portfolio'" x-cloak class="space-y-6">
                    
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div>
                            <p class="text-sm text-slate-500">Kelola dokumentasi acara pernikahan yang pernah ditangani.</p>
                        </div>
                        <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center gap-2 bg-rose-600 hover:bg-rose-700 text-white text-sm font-medium px-4 py-2.5 rounded-xl transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            <span>Tambah Portofolio</span>
                        </a>
                    </div>

                    <!-- Grid Daftar Portofolio / Empty State -->
                    <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm min-h-[300px] flex items-center justify-center">
                        
                        {{-- BACKEND: Tampilkan Grid jika ada data --}}
                        {{-- 
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
                            @forelse ($portfolios as $item)
                                <div class="border rounded-xl overflow-hidden shadow-sm group">
                                    <img src="..." class="w-full h-48 object-cover">
                                    <div class="p-4">
                                        <h3 class="font-bold text-slate-800">{{ $item->title }}</h3>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        </div> 
                        --}}

                        <!-- Empty State Tampilan Portofolio Kosong -->
                        <div class="max-w-sm text-center space-y-4">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-rose-50 flex items-center justify-center text-rose-500">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-800">Belum Ada Portofolio</h3>
                                <p class="text-xs text-slate-500 mt-1">Mulai tambahkan foto dan dokumentasi pernikahan untuk ditayangkan di website publik.</p>
                            </div>
                            <a href="{{ route('admin.portfolio.create') }}" class="inline-flex items-center gap-2 text-xs font-semibold text-rose-600 bg-rose-50 hover:bg-rose-100 px-4 py-2 rounded-xl transition-colors">
                                + Input Portofolio Baru
                            </a>
                        </div>

                    </div>

                </section>


                <!-- ========================================================= -->
                <!-- SECTION 4: TESTIMONI -->
                <!-- ========================================================= -->
                <section x-show="activeTab === 'testimoni'" x-cloak class="space-y-6" x-data="{ addTestiModal: false }">
                    
                    <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
                        <div>
                            <p class="text-sm text-slate-500">Atur kualifikasi Ulasan dan kata kesan dari para pengantin.</p>
                        </div>
                        <button @click="addTestiModal = true" class="inline-flex items-center gap-2 bg-rose-600 hover:bg-rose-700 text-white text-sm font-medium px-4 py-2.5 rounded-xl transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            <span>Tambah Testimoni</span>
                        </button>
                    </div>

                    <!-- Card Container / Empty State Testimoni -->
                    <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-sm min-h-[300px] flex items-center justify-center">
                        
                        {{-- BACKEND: Looping data testimoni memakai @forelse ($testimonials as $item) --}}

                        <!-- Empty State Testimoni -->
                        <div class="max-w-sm text-center space-y-4">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-50 flex items-center justify-center text-amber-500">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                            </div>
                            <div>
                                <h3 class="text-base font-bold text-slate-800">Belum Ada Testimoni</h3>
                                <p class="text-xs text-slate-500 mt-1">Tambahkan testimoni positif dari pasangan pengantin yang puas dengan layanan Anda.</p>
                            </div>
                            <button @click="addTestiModal = true" class="inline-flex items-center gap-2 text-xs font-semibold text-rose-600 bg-rose-50 hover:bg-rose-100 px-4 py-2 rounded-xl transition-colors">
                                + Tambah Testimoni Pertama
                            </button>
                        </div>

                    </div>

                    <!-- MODAL TAMBAH TESTIMONI -->
                    <div x-show="addTestiModal" 
                         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/50 backdrop-blur-sm" x-cloak>
                        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 max-w-lg w-full p-6 space-y-5"
                             @click.outside="addTestiModal = false">
                            
                            <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                                <h3 class="font-bold text-slate-800">Tambah Testimoni Baru</h3>
                                <button @click="addTestiModal = false" class="text-slate-400 hover:text-slate-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                </button>
                            </div>

                            <form action="#" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Pasangan Pengantin</label>
                                    <input type="text" name="client_name" required placeholder="Contoh: Andi & Bunga" class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:ring-2 focus:ring-rose-500 focus:outline-none">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Paket Pernikahan</label>
                                    <input type="text" name="package_name" required placeholder="Contoh: Exclusive Platinum Package" class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:ring-2 focus:ring-rose-500 focus:outline-none">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Ulasan / Kesan Pesan</label>
                                    <textarea name="content" rows="3" required placeholder="Tuliskan ulasan memuaskan dari klien..." class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:ring-2 focus:ring-rose-500 focus:outline-none"></textarea>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Rating Bintang</label>
                                    <select name="rating" class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 bg-white focus:ring-2 focus:ring-rose-500 focus:outline-none">
                                        <option value="5">⭐⭐⭐⭐⭐ (5 / 5)</option>
                                        <option value="4">⭐⭐⭐⭐ (4 / 5)</option>
                                    </select>
                                </div>

                                <div class="pt-2 flex justify-end gap-3">
                                    <button type="button" @click="addTestiModal = false" class="px-4 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100 rounded-xl transition-colors">Batal</button>
                                    <button type="submit" class="px-4 py-2 text-xs font-medium text-white bg-rose-600 hover:bg-rose-700 rounded-xl transition-colors shadow-sm">Simpan Testimoni</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </section>

            </main>
        </div>
    </div>

    <!-- MODAL KONFIRMASI HAPUS (GLOBAL) -->
    <div x-show="deleteModalOpen" 
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/50 backdrop-blur-sm" x-cloak>
        <div class="bg-white rounded-2xl shadow-xl border border-slate-100 max-w-sm w-full p-6 text-center space-y-4"
             @click.outside="deleteModalOpen = false">
            <div class="w-12 h-12 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center mx-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <div>
                <h3 class="text-base font-bold text-slate-800">Hapus Data Ini?</h3>
                <p class="text-xs text-slate-500 mt-1">Tindakan ini tidak dapat dibatalkan. Data yang dihapus akan hilang permanen.</p>
            </div>
            
            <!-- BACKEND: Sesuaikan action URL hapus sesuai ID -->
            <form action="#" method="POST" class="flex gap-3 pt-2">
                @csrf
                @method('DELETE')
                <button type="button" @click="deleteModalOpen = false" class="flex-1 py-2 text-xs font-medium text-slate-600 bg-slate-100 hover:bg-slate-200 rounded-xl transition-colors">
                    Batal
                </button>
                <button type="submit" class="flex-1 py-2 text-xs font-medium text-white bg-rose-600 hover:bg-rose-700 rounded-xl transition-colors shadow-sm">
                    Ya, Hapus
                </button>
            </form>
        </div>
    </div>

</body>
</html>