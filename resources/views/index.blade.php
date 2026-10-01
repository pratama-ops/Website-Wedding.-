<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORIE THE WEDDING — Wedding Organizer</title>
    <meta name="description" content="Nikah Happy, Bebas Worry. Wujudkan pernikahan impian bersama Orie The Wedding Organizer.">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/css/index.css', 'resources/js/index.js'])
    @endif
</head>
<body class="min-h-full flex flex-col antialiased selection:bg-[#c9a96e] selection:text-white">

    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 transition-all duration-500 bg-transparent">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex items-center justify-between h-16 lg:h-20">
            <a href="#" class="font-display text-lg lg:text-xl tracking-wide text-[#faf6f1]">
                ORIE <span class="text-goldAccent">THE WEDDING</span>
            </a>
            
            <div class="hidden md:flex items-center gap-8">
                <a href="#beranda" class="nav-link text-sm font-medium tracking-widest uppercase text-[#faf6f1] hover:text-[#c9a96e] transition-colors">Beranda</a>
                <a href="#portfolio" class="nav-link text-sm font-medium tracking-widest uppercase text-[#faf6f1] hover:text-[#c9a96e] transition-colors">Portfolio</a>
                <a href="#booking" class="nav-link text-sm font-medium tracking-widest uppercase text-[#faf6f1] hover:text-[#c9a96e] transition-colors">Booking</a>
                <a href="https://wa.me/628884732380?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20Wedding%20Organizer" target="_blank" rel="noopener noreferrer" class="btn-gold text-xs tracking-widest uppercase font-medium px-6 py-2.5 rounded-none">Konsultasi</a>
            </div>
            
            <button id="mobile-menu-btn" class="md:hidden p-2 text-[#faf6f1]" aria-label="Menu">
                <div class="space-y-1.5">
                    <span class="block h-px w-6 bg-current transition-all"></span>
                    <span class="block h-px w-6 bg-current transition-all"></span>
                    <span class="block h-px w-6 bg-current transition-all"></span>
                </div>
            </button>
        </div>
        
        <!-- Mobile Dropdown Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-[#2c2420] border-t border-[#3d2f2a] px-6 py-6 space-y-4">
            <a href="#beranda" class="block text-sm font-medium tracking-widest uppercase text-[#faf6f1]">Beranda</a>
            <a href="#portfolio" class="block text-sm font-medium tracking-widest uppercase text-[#faf6f1]">Portfolio</a>
            <a href="#booking" class="block text-sm font-medium tracking-widest uppercase text-[#faf6f1]">Booking</a>
            <a href="https://wa.me/628884732380?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20Wedding%20Organizer" target="_blank" rel="noopener noreferrer" class="w-full btn-gold text-xs tracking-widest uppercase font-medium py-3 text-center block">Konsultasi</a>
        </div>
    </nav>

    <main class="flex-1">
        
        <!-- Hero Section -->
        <section id="beranda" class="relative h-screen min-h-[600px] flex items-center justify-center overflow-hidden">
            <div class="hero-background absolute inset-0 bg-center bg-cover"></div>
            <div class="hero-overlay absolute inset-0"></div>
            
            <div class="relative z-10 text-center text-white px-6 max-w-4xl mx-auto">
                <p class="font-cormorant italic text-xl lg:text-2xl tracking-[0.3em] text-[#e8d5c4] mb-4 opacity-0 animate-fade-up delay-100">— Wujudkan Impian Pernikahanmu —</p>
                <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-medium mb-6 leading-tight opacity-0 animate-fade-up delay-200">
                    Wedding<br><span class="text-goldAccent">Organizer</span>
                </h1>
                <p class="text-base md:text-lg text-[#e8d5c4] max-w-xl mx-auto mb-10 font-light leading-relaxed opacity-0 animate-fade-up delay-300">
                    Nikah Happy, Bebas Worry. Kami hadir untuk mewujudkan setiap detail pernikahan impian Anda.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center opacity-0 animate-fade-up delay-400">
                    <a href="https://wa.me/628884732380?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20Wedding%20Organizer" target="_blank" rel="noopener noreferrer" class="btn-gold px-10 py-4 text-sm font-medium tracking-widest uppercase">Konsultasi Sekarang</a>
                    <a href="#portfolio" class="btn-outline-gold px-10 py-4 text-sm font-medium tracking-widest uppercase inline-flex items-center justify-center">Lihat Portfolio</a>
                </div>
            </div>
            
            <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-white/60 animate-bounce">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 5v14M5 12l7 7 7-7"></path></svg>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="bg-darkBg py-8 px-6">
            <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-8 md:gap-16 text-center">
                <div>
                    <div class="font-display text-2xl md:text-3xl text-goldAccent">500+</div>
                    <div class="text-xs tracking-widest uppercase text-textMuted mt-1">Pernikahan Sukses</div>
                </div>
                <div>
                    <div class="font-display text-2xl md:text-3xl text-goldAccent">8+</div>
                    <div class="text-xs tracking-widest uppercase text-textMuted mt-1">Tahun Pengalaman</div>
                </div>
                <div>
                    <div class="font-display text-2xl md:text-3xl text-goldAccent">50+</div>
                    <div class="text-xs tracking-widest uppercase text-textMuted mt-1">Vendor Terpercaya</div>
                </div>
                <div>
                    <div class="font-display text-2xl md:text-3xl text-goldAccent">4.9★</div>
                    <div class="text-xs tracking-widest uppercase text-textMuted mt-1">Rating Kepuasan</div>
                </div>
            </div>
        </section>

        <!-- Featured Service Section -->
        <section class="py-20 lg:py-28 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
                    <div class="relative">
                        <img alt="Wedding couple" class="service-image w-full object-cover shadow-lg" src="https://images.unsplash.com/photo-1596457221755-b96bc3a6df18?w=800&h=800&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Wedding+Couple">
                        <div class="absolute -bottom-6 -right-6 w-40 h-40 bg-neutralLight p-4 flex flex-col items-center justify-center text-center border border-goldLight hidden lg:flex shadow-md">
                            <div class="font-display text-3xl text-goldAccent">500+</div>
                            <div class="text-xs tracking-widest uppercase text-textMuted mt-1">Happy Couples</div>
                        </div>
                    </div>
                    <div>
                        <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-3 font-semibold">Featured Service</p>
                        <h2 class="font-display text-4xl md:text-5xl text-darkBg mb-4 gold-underline-left">Wedding Organizer</h2>
                        
                        <div class="flex items-center gap-1 mt-6 mb-4">
                            <span class="text-goldAccent">★</span><span class="text-goldAccent">★</span><span class="text-goldAccent">★</span><span class="text-goldAccent">★</span><span class="text-goldAccent">★</span>
                            <span class="text-sm text-textMuted ml-2">(128 ulasan)</span>
                        </div>
                        
                        <div class="flex items-baseline gap-3 mb-6">
                            <span class="font-display text-3xl text-goldAccent font-semibold">Rp 5.000.000</span>
                            <span class="text-[#b8a89a] line-through text-lg">Rp 5.500.000</span>
                        </div>
                        
                        <ul class="space-y-2 mb-8">
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>Efektif Bekerja Di H-30</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>6 Orang PIC Di Hari H</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>Rundown Acara</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>1x Meeting Keluarga & Vendor</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>Koordinasi Vendor</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>HT Dan Seragam</li>
                            <li class="flex items-center gap-3 text-sm text-textDark"><span class="w-4 h-4 rounded-full bg-goldAccent/20 flex items-center justify-center"><span class="text-goldAccent text-xs font-bold">✓</span></span>Report Event</li>
                        </ul>
                        
                        <!-- Tab Navigation for Details -->
                        <div class="border-b border-goldLight mb-6">
                            <div class="flex gap-0">
                                <button data-tab="desc" id="tab-btn-desc" class="px-6 py-3 text-sm font-medium border-b-2 transition-colors border-goldAccent text-darkBg">Deskripsi</button>
                                <button data-tab="terms" id="tab-btn-terms" class="px-6 py-3 text-sm font-medium border-b-2 transition-colors border-transparent text-textMuted hover:text-darkBg">Ketentuan</button>
                                <button data-tab="vendors" id="tab-btn-vendors" class="px-6 py-3 text-sm font-medium border-b-2 transition-colors border-transparent text-textMuted hover:text-darkBg">List Vendor</button>
                            </div>
                        </div>
                        
                        <div id="tab-content" class="text-sm text-textDark leading-relaxed mb-8">
                            Kehadiran wedding organizer (WO) merupakan solusi untuk para pasangan yang ingin melangsungkan wedding dream tanpa perlu repot mengurus semuanya. Tanggung jawab utamanya adalah memastikan semua agenda pada hari-H pernikahan mulai dari awal hingga akhir acara berjalan dengan lancar.
                        </div>
                        
                        <a href="https://wa.me/628884732380?text=Halo,%20saya%20ingin%20konsultasi%20mengenai%20Paket%20Utama%20Wedding%20Organizer" target="_blank" rel="noopener noreferrer" class="btn-gold px-10 py-4 text-sm font-medium tracking-widest uppercase">Konsultasi Sekarang</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Interactive Date Checker Section -->
        <section class="date-checker-background py-20 lg:py-28 px-6 relative bg-center bg-cover">
            <div class="absolute inset-0 bg-[#2c2420]/85"></div>
            <div class="relative z-10 max-w-2xl mx-auto text-center text-white">
                <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-3 font-semibold">Cek Sekarang</p>
                <h2 class="font-display text-4xl md:text-5xl mb-4">Cek <span class="text-goldAccent italic">Tanggal Pernikahan</span></h2>
                <p class="text-[#e8d5c4] mb-10 text-sm leading-relaxed">Cek dulu yuk ketersediaan tanggal pernikahanmu :)</p>
                
                <form id="date-checker-form" class="flex flex-col sm:flex-row gap-0 max-w-md mx-auto shadow-2xl">
                    <input id="wedding-date-input" class="form-input flex-1 px-5 py-4 text-sm text-darkBg bg-white focus:outline-none" type="date" required>
                    <button type="submit" class="btn-gold px-8 py-4 text-sm font-medium tracking-widest uppercase whitespace-nowrap">Cek Tanggal →</button>
                </form>
                
                <div id="date-result" class="mt-6 text-sm font-medium hidden"></div>
            </div>
        </section>

        <!-- Pricing / Package Section -->
        <section id="booking" class="py-20 lg:py-28 px-6 bg-neutralSubtle">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-3 font-semibold">Pilihan Paket</p>
                    <h2 class="font-display text-4xl md:text-5xl text-darkBg gold-underline">Paket Pernikahan</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6 lg:gap-8 mt-8">
                    <!-- Silver Package -->
                    <div class="package-card p-8 relative bg-white border border-goldLight shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-display text-xl mb-2 text-darkBg font-semibold">Silver Package</h3>
                        <div class="mb-1"><span class="font-display text-2xl text-darkBg font-semibold">Rp 3.500.000</span></div>
                        <p class="text-xs mb-6 text-[#b8a89a] line-through">Rp 4.500.000</p>
                        <div class="h-px mb-6 bg-goldLight"></div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Efektif Bekerja Di H-14</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>4 Orang PIC Di Hari H</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Rundown Acara</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>1x Meeting Keluarga</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Koordinasi Vendor</li>
                        </ul>
                        <button data-modal-package="Silver Package" class="w-full py-3.5 text-sm font-medium tracking-widest uppercase transition-all btn-outline-gold">Pilih Paket</button>
                    </div>

                    <!-- Gold Package (Popular) -->
                    <div class="package-card p-8 relative bg-darkBg text-white shadow-xl transform md:-translate-y-2 border border-goldAccent">
                        <div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-goldAccent text-white text-xs tracking-widest uppercase px-5 py-1.5 font-semibold">Most Popular</div>
                        <h3 class="font-display text-xl mb-2 text-goldAccent font-semibold">Gold Package</h3>
                        <div class="mb-1"><span class="font-display text-2xl text-white font-semibold">Rp 5.000.000</span></div>
                        <p class="text-xs mb-6 text-textMuted line-through">Rp 5.500.000</p>
                        <div class="h-px mb-6 bg-[#3d2f2a]"></div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Efektif Bekerja Di H-30</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>6 Orang PIC Di Hari H</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Rundown Acara</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>1x Meeting Keluarga</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>1x Meeting Vendor</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Koordinasi Vendor</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>HT Dan Seragam</li>
                            <li class="flex items-start gap-3 text-sm text-goldLight"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Report Event</li>
                        </ul>
                        <button data-modal-package="Gold Package" class="w-full py-3.5 text-sm font-medium tracking-widest uppercase transition-all btn-gold">Pilih Paket</button>
                    </div>

                    <!-- Platinum Package -->
                    <div class="package-card p-8 relative bg-white border border-goldLight shadow-sm hover:shadow-md transition-shadow">
                        <h3 class="font-display text-xl mb-2 text-darkBg font-semibold">Platinum Package</h3>
                        <div class="mb-1"><span class="font-display text-2xl text-darkBg font-semibold">Rp 8.000.000</span></div>
                        <p class="text-xs mb-6 text-[#b8a89a] line-through">Rp 9.500.000</p>
                        <div class="h-px mb-6 bg-goldLight"></div>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Efektif Bekerja Di H-60</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>8 Orang PIC Di Hari H</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Rundown Acara</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>2x Meeting Keluarga</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>2x Meeting Vendor</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Koordinasi Vendor Penuh</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>HT Dan Seragam Premium</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Report Event + Album</li>
                            <li class="flex items-start gap-3 text-sm text-textDark"><span class="text-goldAccent mt-0.5 shrink-0 font-bold">✓</span>Dokumentasi Eksklusif</li>
                        </ul>
                        <button data-modal-package="Platinum Package" class="w-full py-3.5 text-sm font-medium tracking-widest uppercase transition-all btn-outline-gold">Pilih Paket</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio Gallery Section -->
        <section id="portfolio" class="py-20 lg:py-28 px-6">
            <div class="max-w-7xl mx-auto">
                <div class="flex items-end justify-between mb-12">
                    <div>
                        <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-3 font-semibold">Karya Kami</p>
                        <h2 class="font-display text-4xl md:text-5xl text-darkBg">Portfolio</h2>
                    </div>
                    <button data-modal-package="Galeri Portfolio Lengkap" class="hidden sm:flex items-center gap-2 text-sm text-goldAccent border-b border-goldAccent pb-0.5 hover:text-[#a67c52] transition-colors">Lihat Semua <span>→</span></button>
                </div>
                
                <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4">
                    <div class="gallery-item aspect-[3/4] overflow-hidden group relative">
                        <img alt="Wedding photography 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1606216794050-6ff7db8cb43d?w=800&h=1000&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+1">
                    </div>
                    <div class="gallery-item aspect-square overflow-hidden group relative">
                        <img alt="Wedding photography 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1469371670807-013ccf25f16a?w=800&h=800&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+2">
                    </div>
                    <div class="gallery-item aspect-square overflow-hidden group relative">
                        <img alt="Wedding photography 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1712068534065-f56c36e21759?w=800&h=800&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+3">
                    </div>
                    <div class="gallery-item aspect-[3/4] overflow-hidden group relative">
                        <img alt="Wedding photography 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1606217239582-d9f72323bcd7?w=800&h=1000&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+4">
                    </div>
                    <div class="gallery-item aspect-square overflow-hidden group relative">
                        <img alt="Wedding photography 5" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1524777313293-86d2ab467344?w=800&h=800&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+5">
                    </div>
                    <div class="gallery-item aspect-square overflow-hidden group relative">
                        <img alt="Wedding photography 6" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="https://images.unsplash.com/photo-1606490208247-b65be3d94cd1?w=800&h=800&fit=crop&auto=format" data-fallback="https://placehold.co/600x800/2c2420/c9a96e?text=Portfolio+6">
                    </div>
                </div>
                
                <div class="text-center mt-10 sm:hidden">
                    <button data-modal-package="Galeri Portfolio Lengkap" class="btn-outline-gold px-10 py-3.5 text-sm font-medium tracking-widest uppercase">Lihat Semua</button>
                </div>
            </div>
        </section>


        <!-- Testimonials Section -->
        <section class="py-20 lg:py-28 px-6 bg-neutralSubtle">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-14">
                    <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-3 font-semibold">Kata Mereka</p>
                    <h2 class="font-display text-4xl md:text-5xl text-darkBg gold-underline">Testimoni</h2>
                </div>
                
                <div class="grid md:grid-cols-3 gap-6 mt-8">
                    <!-- Testimonial 1 -->
                    <div class="testimonial-card p-8 bg-white border border-goldLight/60 shadow-sm">
                        <div class="flex gap-1 mb-4 text-goldAccent">★<span>★</span><span>★</span><span>★</span><span>★</span></div>
                        <p class="text-sm text-textDark leading-relaxed mb-6 italic font-cormorant text-base">"Orie The Wedding benar-benar membuat hari pernikahan kami jadi sempurna. Tim mereka sangat profesional dan memperhatikan setiap detail kecil."</p>
                        <div class="border-t border-[#f0e6d6] pt-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-goldLight flex items-center justify-center text-goldAccent font-display text-sm font-bold">R</div>
                            <div>
                                <div class="text-sm font-medium text-darkBg">Rizky & Fatimah</div>
                                <div class="text-xs text-textMuted">Maret 2026</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="testimonial-card p-8 bg-white border border-goldLight/60 shadow-sm">
                        <div class="flex gap-1 mb-4 text-goldAccent">★<span>★</span><span>★</span><span>★</span><span>★</span></div>
                        <p class="text-sm text-textDark leading-relaxed mb-6 italic font-cormorant text-base">"Kami sangat puas dengan pelayanannya. Dari persiapan hingga hari H, semua berjalan sangat lancar tanpa hambatan apapun."</p>
                        <div class="border-t border-[#f0e6d6] pt-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-goldLight flex items-center justify-center text-goldAccent font-display text-sm font-bold">B</div>
                            <div>
                                <div class="text-sm font-medium text-darkBg">Bintang & Ayu</div>
                                <div class="text-xs text-textMuted">Januari 2026</div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="testimonial-card p-8 bg-white border border-goldLight/60 shadow-sm">
                        <div class="flex gap-1 mb-4 text-goldAccent">★<span>★</span><span>★</span><span>★</span><span>★</span></div>
                        <p class="text-sm text-textDark leading-relaxed mb-6 italic font-cormorant text-base">"Luar biasa! Dekorasi dan koordinasi sangat memukau. Tamu-tamu kami pun takjub dengan keindahan dekorasi yang disusun dengan penuh cinta."</p>
                        <div class="border-t border-[#f0e6d6] pt-4 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-goldLight flex items-center justify-center text-goldAccent font-display text-sm font-bold">D</div>
                            <div>
                                <div class="text-sm font-medium text-darkBg">Dimas & Sari</div>
                                <div class="text-xs text-textMuted">November 2025</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Banner -->
        <section class="py-20 px-6 bg-darkBg text-center">
            <div class="max-w-4xl mx-auto">
                <p class="text-xs tracking-[0.3em] uppercase text-goldAccent mb-4 font-semibold">Siap Melangsungkan Pernikahan?</p>
                <h2 class="font-display text-4xl md:text-5xl text-white mb-6">Wujudkan Hari <span class="text-goldAccent italic">Istimewa</span> Anda</h2>
                <p class="text-[#b8a89a] mb-10 max-w-lg mx-auto text-sm leading-relaxed">Hubungi kami sekarang dan dapatkan konsultasi gratis untuk merencanakan pernikahan impian Anda.</p>
                <a href="https://wa.me/628884732380?text=Halo,%20saya%20ingin%20memulai%20konsultasi%20mengenai%20Wedding%20Organizer" target="_blank" rel="noopener noreferrer" class="btn-gold px-14 py-5 text-sm font-medium tracking-widest uppercase">Mulai Konsultasi</a>
            </div>
        </section>
        
    </main>

    <footer class="bg-darkBg text-goldLight border-t border-[#3d2f2a]">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 py-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <div>
                <div class="font-display text-xl text-white mb-2">ORIE <span class="text-goldAccent">THE WEDDING</span></div>
                <p class="text-xs tracking-widest text-goldAccent uppercase mb-4">Nikah Happy Bebas Worry</p>
                <p class="text-sm leading-relaxed text-[#b8a89a] mb-6">Wujudkan pernikahan impian Anda bersama kami. Kami hadir untuk membuat momen spesial Anda menjadi tak terlupakan.</p>
                <div class="flex gap-4">
                    <a href="#" class="w-8 h-8 border border-textDark flex items-center justify-center text-xs hover:border-goldAccent hover:text-goldAccent transition-colors">FB</a>
                    <a href="#" class="w-8 h-8 border border-textDark flex items-center justify-center text-xs hover:border-goldAccent hover:text-goldAccent transition-colors">IG</a>
                    <a href="#" class="w-8 h-8 border border-textDark flex items-center justify-center text-xs hover:border-goldAccent hover:text-goldAccent transition-colors">TT</a>
                    <a href="#" class="w-8 h-8 border border-textDark flex items-center justify-center text-xs hover:border-goldAccent hover:text-goldAccent transition-colors">YT</a>
                </div>
            </div>
            
            <div>
                <h4 class="font-display text-white text-base mb-4 gold-underline-left">Layanan Kami</h4>
                <ul class="space-y-2.5 mt-6">
                    <li><button data-modal-package="Wedding Package" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Wedding Package</button></li>
                    <li><button data-modal-package="Venue Package" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Venue Package</button></li>
                    <li><button data-modal-package="Custom Package" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Custom Package</button></li>
                    <li><button data-modal-package="Wedding Organizer" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Wedding Organizer</button></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-display text-white text-base mb-4 gold-underline-left">Navigasi</h4>
                <ul class="space-y-2.5 mt-6">
                    <li><a href="#beranda" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Beranda</a></li>
                    <li><a href="#portfolio" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Portfolio</a></li>
                    <li><a href="#booking" class="text-sm text-[#b8a89a] hover:text-goldAccent transition-colors flex items-center gap-2"><span class="text-goldAccent">›</span> Booking</a></li>
                </ul>
            </div>
            
            <div>
                <h4 class="font-display text-white text-base mb-4 gold-underline-left">Kontak</h4>
                <ul class="space-y-3 mt-6 text-sm text-[#b8a89a]">
                    <li class="flex gap-3"><span class="text-goldAccent mt-0.5">📍</span> Jl. Sudirman No. 88, Jakarta Selatan</li>
                    <li class="flex gap-3"><span class="text-goldAccent">📞</span> +62 812-3456-7890</li>
                    <li class="flex gap-3"><span class="text-goldAccent">✉</span> hello@oriethewedding.com</li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-[#3d2f2a] py-6">
            <p class="text-center text-xs text-[#7a6a62] tracking-wider">© 2026 ORIETHEWEDDING. All rights reserved.</p>
        </div>
    </footer>

    <div id="custom-modal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm hidden opacity-0 transition-opacity duration-300">
        <div class="bg-white rounded-none border border-goldLight w-full max-w-md p-8 relative shadow-2xl transform scale-95 transition-transform duration-300" id="modal-container">
            <button data-close-modal class="absolute top-4 right-4 text-textDark hover:text-goldAccent font-bold text-xl" aria-label="Close">&times;</button>
            <div class="font-display text-2xl text-darkBg mb-2" id="modal-title">Konsultasi Pernikahan</div>
            <p class="text-xs tracking-wider text-goldAccent mb-6 font-semibold uppercase">Orie The Wedding Organizer</p>
            
            <form id="consultation-form" class="space-y-4">
                <div>
                    <label class="block text-xs font-medium uppercase tracking-wider text-textDark mb-1">Nama Lengkap</label>
                    <input type="text" id="modal-name" required class="w-full px-4 py-3 text-sm border border-goldLight focus:outline-none focus:border-goldAccent bg-neutralLight" placeholder="Contoh: Budi & Siska">
                </div>
                <div>
                    <label class="block text-xs font-medium uppercase tracking-wider text-textDark mb-1">Nomor WhatsApp / Telepon</label>
                    <input type="tel" id="modal-phone" required class="w-full px-4 py-3 text-sm border border-goldLight focus:outline-none focus:border-goldAccent bg-neutralLight" placeholder="Contoh: 08123456789">
                </div>
                <div>
                    <label class="block text-xs font-medium uppercase tracking-wider text-textDark mb-1">Rencana Tanggal Acara</label>
                    <input type="date" id="modal-date" required class="w-full px-4 py-3 text-sm border border-goldLight focus:outline-none focus:border-goldAccent bg-neutralLight">
                </div>
                <div>
                    <label class="block text-xs font-medium uppercase tracking-wider text-textDark mb-1">Catatan / Kebutuhan Khusus</label>
                    <textarea id="modal-note" rows="3" class="w-full px-4 py-3 text-sm border border-goldLight focus:outline-none focus:border-goldAccent bg-neutralLight" placeholder="Ceritakan konsep pernikahan impian Anda..."></textarea>
                </div>
                <button type="submit" class="w-full btn-gold py-3.5 text-xs font-medium tracking-widest uppercase mt-2">Kirim Permintaan Konsultasi</button>
            </form>
            
            <div id="modal-success" class="hidden text-center py-8">
                <div class="w-16 h-16 bg-goldAccent/20 rounded-full flex items-center justify-center mx-auto mb-4 text-goldAccent text-2xl font-bold">✓</div>
                <div class="font-display text-2xl text-darkBg mb-2">Terima Kasih!</div>
                <p class="text-sm text-textDark">Permintaan konsultasi Anda untuk <span id="success-package-name" class="font-semibold text-goldAccent"></span> telah kami terima. Tim kami akan segera menghubungi Anda via WhatsApp.</p>
                <button data-close-modal class="mt-6 btn-outline-gold px-8 py-2.5 text-xs tracking-widest uppercase">Tutup</button>
            </div>
        </div>
    </div>

</body>
</html>             



