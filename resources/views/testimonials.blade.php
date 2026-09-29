<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Testimoni - Admin</title>
    
    <!-- Google Fonts & Tailwind CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rose: { 50: '#fff1f2', 100: '#ffe4e6', 200: '#fecdd3', 500: '#f43f5e', 600: '#e11d48', 700: '#be123c' }
                    },
                    fontFamily: { sans: ['Inter', 'sans-serif'] }
                }
            }
        }
    </script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak] { display: none !important; }</style>
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased min-h-screen flex flex-col" x-data="{ sidebarOpen: false }">

    <!-- OVERLAY MOBILE -->
    <div x-show="sidebarOpen" @click="sidebarOpen = false" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 lg:hidden" x-cloak></div>

    <div class="flex flex-1 min-h-screen">
        
        <!-- SIDEBAR -->
        <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 flex flex-col transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0"
               :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'">
            
            <div class="h-16 flex items-center px-6 border-b border-slate-100 justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-rose-500 flex items-center justify-center text-white font-bold text-lg shadow-sm">W</div>
                    <span class="font-bold text-slate-800 text-lg tracking-tight">Wedding<span class="text-rose-600">Organizer</span></span>
                </a>
                <button @click="sidebarOpen = false" class="lg:hidden text-slate-400 hover:text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- NAVIGASI SIDEBAR -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('admin.orders.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                    <span>Pemesanan Paket</span>
                </a>

                <a href="{{ route('admin.portfolio.create') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>Portofolio</span>
                </a>

                <!-- MENU TESTIMONI AKTIF -->
                <a href="{{ route('admin.testimonials.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-semibold bg-rose-50 text-rose-600 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                        <span>Testimoni</span>
                    </div>
                </a>
            </nav>
        </aside>

        <!-- KONTEN UTAMA -->
        <div class="flex-1 flex flex-col min-w-0">
            <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-slate-200 px-4 sm:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button @click="sidebarOpen = true" class="lg:hidden text-slate-500 hover:text-slate-700 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <h1 class="text-lg font-bold text-slate-800">Manajemen Testimoni Klien</h1>
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-8 max-w-7xl w-full mx-auto space-y-8" x-data="{ showModal: false, rating: 5 }">
                
                <!-- STATISTIK RINGKASAN & TOMBOL TAMBAH -->
                <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm">
                    <div class="flex items-center gap-6">
                        <div>
                            <p class="text-xs font-medium text-slate-500">Rata-rata Rating</p>
                            <div class="flex items-center gap-2 mt-1">
                                <span class="text-2xl font-bold text-slate-800">4.9</span>
                                <div class="flex text-amber-400 text-sm">
                                    ★ ★ ★ ★ ★
                                </div>
                            </div>
                        </div>
                        <div class="h-8 w-px bg-slate-200"></div>
                        <div>
                            <p class="text-xs font-medium text-slate-500">Total Ulasan</p>
                            <p class="text-2xl font-bold text-slate-800 mt-1">18 Ulasan</p>
                        </div>
                    </div>

                    <button @click="showModal = true" class="px-4 py-2.5 bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-semibold shadow-sm transition-colors flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                        <span>Tambah Testimoni</span>
                    </button>
                </div>

                <!-- GRID KARTU TESTIMONI -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    
                    <!-- KARTU 1 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex text-amber-400 text-sm">★ ★ ★ ★ ★</div>
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-50 text-emerald-700">Tampil</span>
                            </div>
                            <p class="text-xs text-slate-600 italic leading-relaxed">
                                "Sangat puas dengan Wedding Organizer! Semua detail dari dekorasi sampai jalannya acara pernikahan kami sangat rapi dan tepat waktu."
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-600">RA</div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-800">Rian & Anggi</h4>
                                    <p class="text-[10px] text-slate-400">Paket Royal Platinum</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                </button>
                                <button class="p-1.5 text-rose-500 hover:text-rose-700 rounded-lg hover:bg-rose-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- KARTU 2 -->
                    <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col justify-between space-y-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="flex text-amber-400 text-sm">★ ★ ★ ★ ★</div>
                                <span class="inline-flex items-center px-2 py-0.5 rounded-md text-[10px] font-semibold bg-emerald-50 text-emerald-700">Tampil</span>
                            </div>
                            <p class="text-xs text-slate-600 italic leading-relaxed">
                                "Tim crew WO-nya ramah banget dan sigap bantu keluarga pas hari H. Sangat direkomendasikan buat calon pengantin!"
                            </p>
                        </div>
                        <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-slate-200 flex items-center justify-center font-bold text-xs text-slate-600">DN</div>
                                <div>
                                    <h4 class="text-xs font-bold text-slate-800">Dion & Nadia</h4>
                                    <p class="text-[10px] text-slate-400">Paket Intimate Garden</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-1">
                                <button class="p-1.5 text-slate-400 hover:text-slate-600 rounded-lg hover:bg-slate-100">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
                                </button>
                                <button class="p-1.5 text-rose-500 hover:text-rose-700 rounded-lg hover:bg-rose-50">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- MODAL TAMBAH TESTIMONI -->
                <div x-show="showModal" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
                    <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                        <div @click="showModal = false" class="fixed inset-0 transition-opacity bg-slate-900/40 backdrop-blur-sm"></div>

                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen">&#8203;</span>

                        <div class="inline-block align-bottom bg-white rounded-2xl text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                            <form action="#" method="POST" class="p-6 space-y-4">
                                <div class="flex items-center justify-between border-b border-slate-100 pb-3">
                                    <h3 class="text-sm font-bold text-slate-800">Tambah Testimoni Baru</h3>
                                    <button type="button" @click="showModal = false" class="text-slate-400 hover:text-slate-600">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                    </button>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Nama Pasangan</label>
                                    <input type="text" placeholder="Contoh: Budi & Sinta" class="w-full px-3 py-2 text-xs border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Paket Pernikahan</label>
                                    <input type="text" placeholder="Contoh: Royal Platinum" class="w-full px-3 py-2 text-xs border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500">
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Rating Bintang</label>
                                    <select class="w-full px-3 py-2 text-xs border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500">
                                        <option value="5">5 Bintang (Sangat Puas)</option>
                                        <option value="4">4 Bintang (Puas)</option>
                                        <option value="3">3 Bintang (Cukup)</option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-xs font-semibold text-slate-700 mb-1">Ulasan / Pesan Testimoni</label>
                                    <textarea rows="3" placeholder="Tuliskan testimoni dari klien..." class="w-full px-3 py-2 text-xs border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500"></textarea>
                                </div>

                                <div class="pt-2 flex justify-end gap-2">
                                    <button type="button" @click="showModal = false" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-xl text-xs font-medium transition-colors">Batal</button>
                                    <button type="submit" class="px-4 py-2 bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-semibold transition-colors">Simpan Testimoni</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>
</html>