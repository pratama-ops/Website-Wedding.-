<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Paket - Admin</title>
    
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
</head>
<body class="bg-slate-50 font-sans text-slate-800 antialiased min-h-screen flex flex-col">

    <!-- OVERLAY MOBILE -->
    <div id="sidebarOverlay" class="hidden fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 lg:hidden"></div>

    <div class="flex flex-1 min-h-screen">
        
        <!-- SIDEBAR -->
        <aside id="sidebar" class="fixed inset-y-0 left-0 z-50 w-64 bg-white border-r border-slate-200 flex flex-col transform transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 -translate-x-full">
            
            <div class="h-16 flex items-center px-6 border-b border-slate-100 justify-between">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2">
                    <div class="w-8 h-8 rounded-full bg-rose-500 flex items-center justify-center text-white font-bold text-lg shadow-sm">W</div>
                    <span class="font-bold text-slate-800 text-lg tracking-tight">Wedding<span class="text-rose-600">Organizer</span></span>
                </a>
                <button id="closeSidebar" class="lg:hidden text-slate-400 hover:text-slate-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

            <!-- NAVIGASI SIDEBAR -->
            <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">
                <a href="{{ route('admin.dashboard') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
                    <span>Dashboard</span>
                </a>

                <!-- MENU PEMESANAN AKTIF -->
                <a href="{{ route('admin.orders.index') }}" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-semibold bg-rose-50 text-rose-600 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>Pemesanan Paket</span>
                    </div>
                </a>

                <a href="{{ route('admin.portfolio.create') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>Portofolio</span>
                </a>

                <a href="{{ route('admin.testimonials.index') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    <span>Testimoni</span>
                </a>
            </nav>
        </aside>

        <!-- KONTEN UTAMA -->
        <div class="flex-1 flex flex-col min-w-0">
            <header class="sticky top-0 z-30 bg-white/80 backdrop-blur-md border-b border-slate-200 px-4 sm:px-8 h-16 flex items-center justify-between">
                <div class="flex items-center gap-4">
                    <button id="openSidebar" class="lg:hidden text-slate-500 hover:text-slate-700 p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <h1 class="text-lg font-bold text-slate-800">Daftar Pemesanan Paket</h1>
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-8 max-w-7xl w-full mx-auto space-y-6">
                
                <!-- HEADER & RINGKASAN STATISTIK -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-slate-500">Total Pemesanan</p>
                            <p class="text-xl font-bold text-slate-800 mt-1">24 Order</p>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-slate-500">Menunggu Konfirmasi</p>
                            <p class="text-xl font-bold text-amber-600 mt-1">5 Order</p>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                    </div>

                    <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-sm flex items-center justify-between">
                        <div>
                            <p class="text-xs font-medium text-slate-500">Telah Dikonfirmasi</p>
                            <p class="text-xl font-bold text-emerald-600 mt-1">19 Order</p>
                        </div>
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                        </div>
                    </div>
                </div>

                <!-- FILTER & SEARCH BAR -->
                <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="relative flex-1">
                        <svg class="w-4 h-4 absolute left-3.5 top-1/2 -translate-y-1/2 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        <input type="text" id="searchInput" placeholder="Cari nama pemesan, paket, atau lokasi..." class="w-full pl-10 pr-4 py-2 text-xs border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-rose-500">
                    </div>

                    <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0" id="filterButtons">
                        <button data-filter="all" class="filter-btn bg-slate-900 text-white px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap">Semua</button>
                        <button data-filter="pending" class="filter-btn bg-slate-100 text-slate-600 hover:bg-slate-200 px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap">Pending</button>
                        <button data-filter="confirmed" class="filter-btn bg-slate-100 text-slate-600 hover:bg-slate-200 px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap">Dikonfirmasi</button>
                    </div>
                </div>

                <!-- TABEL DATA PEMESANAN -->
                <div class="bg-white rounded-2xl border border-slate-200/80 shadow-sm overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-slate-50 border-b border-slate-100 text-[11px] uppercase tracking-wider text-slate-400 font-semibold">
                                    <th class="py-3.5 px-6">Klien / Pemesan</th>
                                    <th class="py-3.5 px-6">Paket Wedding</th>
                                    <th class="py-3.5 px-6">Tanggal Acara</th>
                                    <th class="py-3.5 px-6">Total Biaya</th>
                                    <th class="py-3.5 px-6">Status</th>
                                    <th class="py-3.5 px-6 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-xs">
                                <!-- BARIS 1 -->
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-semibold text-slate-800">Raditya & Amanda</div>
                                        <div class="text-[11px] text-slate-400">+62 812-3456-7890</div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-lg text-[11px] font-medium bg-rose-50 text-rose-700">Royal Platinum</span>
                                    </td>
                                    <td class="py-4 px-6 text-slate-600">12 Des 2026</td>
                                    <td class="py-4 px-6 font-semibold text-slate-800">Rp 85.000.000</td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-medium bg-amber-50 text-amber-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span> Pending
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right space-x-2">
                                        <button class="px-3 py-1.5 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-[11px] font-medium transition-colors">Konfirmasi</button>
                                        <button class="px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg text-[11px] font-medium transition-colors">Detail</button>
                                    </td>
                                </tr>

                                <!-- BARIS 2 -->
                                <tr class="hover:bg-slate-50/80 transition-colors">
                                    <td class="py-4 px-6">
                                        <div class="font-semibold text-slate-800">Bagas & Intan</div>
                                        <div class="text-[11px] text-slate-400">+62 857-1122-3344</div>
                                    </td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-lg text-[11px] font-medium bg-purple-50 text-purple-700">Intimate Garden</span>
                                    </td>
                                    <td class="py-4 px-6 text-slate-600">20 Jan 2027</td>
                                    <td class="py-4 px-6 font-semibold text-slate-800">Rp 45.000.000</td>
                                    <td class="py-4 px-6">
                                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[11px] font-medium bg-emerald-50 text-emerald-700">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Dikonfirmasi
                                        </span>
                                    </td>
                                    <td class="py-4 px-6 text-right space-x-2">
                                        <button class="px-3 py-1.5 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg text-[11px] font-medium transition-colors">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <script>
        // Sidebar Logic
        const sidebar = document.getElementById('sidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const openSidebarBtn = document.getElementById('openSidebar');
        const closeSidebarBtn = document.getElementById('closeSidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            sidebarOverlay.classList.remove('hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            sidebarOverlay.classList.add('hidden');
        }

        if (openSidebarBtn) openSidebarBtn.addEventListener('click', openSidebar);
        if (closeSidebarBtn) closeSidebarBtn.addEventListener('click', closeSidebar);
        if (sidebarOverlay) sidebarOverlay.addEventListener('click', closeSidebar);

        // Filter Logic Mockup
        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => {
                    b.className = 'filter-btn bg-slate-100 text-slate-600 hover:bg-slate-200 px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap';
                });
                if (btn.dataset.filter === 'all') {
                    btn.className = 'filter-btn bg-slate-900 text-white px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap';
                } else if (btn.dataset.filter === 'pending') {
                    btn.className = 'filter-btn bg-amber-600 text-white px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap';
                } else if (btn.dataset.filter === 'confirmed') {
                    btn.className = 'filter-btn bg-emerald-600 text-white px-3.5 py-2 rounded-xl text-xs font-medium transition-colors whitespace-nowrap';
                }
            });
        });
    </script>
</body>
</html>