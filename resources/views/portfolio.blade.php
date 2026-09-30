<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Portofolio Baru - Admin</title>
    
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

                <a href="#" class="w-full flex items-center justify-between px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        <span>Pemesanan Paket</span>
                    </div>
                </a>

                <!-- MENU PORTOFOLIO AKTIF -->
                <a href="{{ route('admin.portfolio.create') }}" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-semibold bg-rose-50 text-rose-600 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                    <span>Portofolio</span>
                </a>

                <a href="#" class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-slate-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/></svg>
                    <span>Testimoni</span>
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
                    <h1 class="text-lg font-bold text-slate-800">Input Portofolio Baru</h1>
                </div>
            </header>

            <main class="flex-1 p-4 sm:p-8 max-w-7xl w-full mx-auto space-y-6">
                <!-- FORM INPUT PORTOFOLIO -->
                <form action="#" method="POST" enctype="multipart/form-data" 
                      x-data="{ 
                          images: [], 
                          handleFileSelect(e) {
                              const files = Array.from(e.target.files);
                              files.forEach(file => {
                                  const reader = new FileReader();
                                  reader.onload = (e) => { this.images.push(e.target.result); };
                                  reader.readAsDataURL(file);
                              });
                          },
                          removeImage(index) { this.images.splice(index, 1); }
                      }">
                    @csrf

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                        
                        <!-- KOLOM KIRI (Informasi Utama & Upload) -->
                        <div class="lg:col-span-2 bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-6">
                            <div class="space-y-4">
                                <div>
                                    <label for="title" class="block text-xs font-semibold text-slate-700 mb-1">Judul Pernikahan / Nama Pasangan <span class="text-rose-500">*</span></label>
                                    <input type="text" id="title" name="title" required placeholder="Contoh: Pernikahan Raditya & Amanda" class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:ring-2 focus:ring-rose-500">
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                    <div>
                                        <label for="category" class="block text-xs font-semibold text-slate-700 mb-1">Kategori Acara <span class="text-rose-500">*</span></label>
                                        <select id="category" name="category" required class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 bg-white focus:outline-none focus:ring-2 focus:ring-rose-500">
                                            <option value="">Pilih Kategori</option>
                                            <option value="Modern Wedding">Modern Wedding</option>
                                            <option value="Traditional Wedding">Traditional Wedding</option>
                                            <option value="Intimate Outdoor">Intimate Outdoor</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label for="event_date" class="block text-xs font-semibold text-slate-700 mb-1">Tanggal Acara <span class="text-rose-500">*</span></label>
                                        <input type="date" id="event_date" name="event_date" required class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:ring-2 focus:ring-rose-500">
                                    </div>
                                </div>

                                <div>
                                    <label for="location" class="block text-xs font-semibold text-slate-700 mb-1">Lokasi Gedung / Tempat</label>
                                    <input type="text" id="location" name="location" placeholder="Contoh: Hotel Mulia, Jakarta" class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:ring-2 focus:ring-rose-500">
                                </div>

                                <div>
                                    <label for="description" class="block text-xs font-semibold text-slate-700 mb-1">Deskripsi & Konsep Pernikahan</label>
                                    <textarea id="description" name="description" rows="4" placeholder="Ceritakan konsep dekorasi, tema warna..." class="w-full text-sm border border-slate-200 rounded-xl px-3.5 py-2.5 focus:outline-none focus:ring-2 focus:ring-rose-500"></textarea>
                                </div>
                            </div>

                            <hr class="border-slate-100">

                            <!-- AREA UPLOAD FOTO -->
                            <div class="space-y-3">
                                <label class="block text-xs font-semibold text-slate-700">Dokumentasi Foto</label>
                                <div class="border-2 border-dashed border-slate-200 rounded-2xl p-6 text-center hover:bg-slate-50 transition-colors cursor-pointer relative"
                                     @dragover.prevent="" @drop.prevent="handleFileSelect($event)">
                                    <input type="file" name="photos[]" multiple accept="image/*" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" @change="handleFileSelect($event)">
                                    <div class="space-y-2 pointer-events-none">
                                        <div class="w-12 h-12 rounded-full bg-rose-50 text-rose-500 flex items-center justify-center mx-auto">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                        </div>
                                        <div class="text-xs"><span class="font-semibold text-rose-600">Klik untuk unggah</span> atau seret foto ke sini</div>
                                    </div>
                                </div>

                                <!-- PREVIEW GAMBAR -->
                                <div x-show="images.length > 0" class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-3" x-cloak>
                                    <template x-for="(img, index) in images" :key="index">
                                        <div class="relative rounded-xl overflow-hidden border border-slate-200 aspect-square bg-slate-100">
                                            <img :src="img" class="w-full h-full object-cover">
                                            <div x-show="index === 0" class="absolute top-1.5 left-1.5 bg-rose-600 text-white text-[10px] font-bold px-2 py-0.5 rounded shadow">Sampul</div>
                                            <button type="button" @click="removeImage(index)" class="absolute top-1.5 right-1.5 p-1 bg-slate-900/70 text-white rounded-full hover:bg-rose-600">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                                            </button>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <!-- KOLOM KANAN (Aksi & Status) -->
                        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-sm space-y-6">
                            <h2 class="text-sm font-bold text-slate-800 border-b border-slate-100 pb-3">Pengaturan Publikasi</h2>

                            <div class="space-y-4" x-data="{ isVisible: true, isFeatured: false }">
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-semibold text-slate-800">Tampilkan di Website</p>
                                        <p class="text-[11px] text-slate-400">Publikasikan secara langsung.</p>
                                    </div>
                                    <button type="button" @click="isVisible = !isVisible" :class="isVisible ? 'bg-rose-600' : 'bg-slate-200'" class="relative inline-flex h-6 w-11 shrink-0 rounded-full border-2 border-transparent transition-colors">
                                        <span :class="isVisible ? 'translate-x-5' : 'translate-x-0'" class="inline-block h-5 w-5 transform rounded-full bg-white shadow transition"></span>
                                    </button>
                                    <input type="hidden" name="is_visible" :value="isVisible ? 1 : 0">
                                </div>

                                <hr class="border-slate-100">

                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="text-xs font-semibold text-slate-800">Tandai Unggulan</p>
                                        <p class="text-[11px] text-slate-400">Tampilkan di halaman utama.</p>
                                    </div>
                                    <button type="button" @click="isFeatured = !isFeatured" :class="isFeatured ? 'bg-rose-600' : 'bg-slate-200'" class="relative inline-flex h-6 w-11 shrink-0 rounded-full border-2 border-transparent transition-colors">
                                        <span :class="isFeatured ? 'translate-x-5' : 'translate-x-0'" class="inline-block h-5 w-5 transform rounded-full bg-white shadow transition"></span>
                                    </button>
                                    <input type="hidden" name="is_featured" :value="isFeatured ? 1 : 0">
                                </div>
                            </div>

                            <hr class="border-slate-100">

                            <div class="space-y-2">
                                <button type="submit" class="w-full py-2.5 px-4 bg-rose-600 hover:bg-rose-700 text-white rounded-xl text-xs font-semibold transition-colors shadow-sm">
                                    Simpan Portofolio
                                </button>
                                <a href="{{ route('admin.dashboard') }}" class="block w-full text-center py-2.5 px-4 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-xl text-xs font-medium transition-colors">
                                    Batal
                                </a>
                            </div>
                        </div>

                    </div>
                </form>
            </main>
        </div>
    </div>

</body>
</html>