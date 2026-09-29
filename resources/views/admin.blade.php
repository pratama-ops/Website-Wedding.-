<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin WO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.1/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        [x-cloak] { display: none !important; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800">

@php
    $menus = [
        'dashboard'  => ['Dashboard', 'M3 12l9-9 9 9M5 10v10h5v-6h4v6h5V10'],
        'portofolio' => ['Portofolio', 'M4 16l4-4 4 4 4-6 4 6M4 20h16M4 4h16v12H4z'],
        'testimoni'  => ['Testimoni', 'M8 10h8M8 14h5M21 12a9 9 0 11-4.2-7.6L21 3v6'],
        'pemesanan'  => ['Pemesanan Paket', 'M16 7a4 4 0 11-8 0 4 4 0 018 0zM4 21v-1a6 6 0 0112 0v1'],
    ];

    $stats = [
        ['Total Pemesanan', 'bg-rose-50 text-rose-600'],
        ['Belum Dihubungi', 'bg-amber-50 text-amber-600'],
        ['Foto Portofolio', 'bg-sky-50 text-sky-600'],
        ['Testimoni', 'bg-emerald-50 text-emerald-600'],
    ];
@endphp

<div x-data="{ page: 'dashboard', sidebar: false, modalFoto: false, modalTesti: false }" class="min-h-screen lg:flex">

    {{-- Overlay mobile --}}
    <div x-show="sidebar" x-cloak @click="sidebar = false" class="fixed inset-0 z-30 bg-black/40 lg:hidden"></div>

    {{-- SIDEBAR --}}
    <aside :class="sidebar ? 'translate-x-0' : '-translate-x-full'"
           class="fixed inset-y-0 left-0 z-40 w-64 transform border-r border-slate-200 bg-white transition-transform lg:static lg:translate-x-0">
        <div class="flex h-16 items-center gap-2 border-b border-slate-200 px-6">
            <div class="grid h-9 w-9 place-items-center rounded-lg bg-rose-500 font-bold text-white">W</div>
            <span class="font-semibold">Admin WO</span>
        </div>
        <nav class="space-y-1 p-4">
            @foreach ($menus as $key => [$label, $icon])
                <button @click="page = '{{ $key }}'; sidebar = false"
                        :class="page === '{{ $key }}' ? 'bg-rose-50 text-rose-600' : 'text-slate-600 hover:bg-slate-100'"
                        class="flex w-full items-center gap-3 rounded-lg px-3 py-2.5 text-sm font-medium transition">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="{{ $icon }}"/>
                    </svg>
                    {{ $label }}
                </button>
            @endforeach
        </nav>
    </aside>

    {{-- KONTEN --}}
    <div class="min-w-0 flex-1">
        <header class="sticky top-0 z-20 flex h-16 items-center justify-between border-b border-slate-200 bg-white/90 px-4 backdrop-blur lg:px-8">
            <div class="flex items-center gap-3">
                <button @click="sidebar = true" class="rounded-lg p-2 hover:bg-slate-100 lg:hidden">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <h1 class="text-lg font-semibold"
                    x-text="{dashboard:'Dashboard', portofolio:'Portofolio', testimoni:'Testimoni', pemesanan:'Pemesanan Paket'}[page]"></h1>
            </div>
            <div class="flex items-center gap-3">
                <div class="hidden text-right sm:block">
                    <p class="text-sm font-medium">Admin</p>
                </div>
                <div class="grid h-9 w-9 place-items-center rounded-full bg-rose-100 font-semibold text-rose-600">A</div>
            </div>
        </header>

        <main class="p-4 lg:p-8">

            {{-- ============ DASHBOARD ============ --}}
            <section x-show="page === 'dashboard'">
                <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-4">
                    @foreach ($stats as [$label, $color])
                        <div class="rounded-xl border border-slate-200 bg-white p-5">
                            <div class="mb-3 inline-flex h-10 w-10 items-center justify-center rounded-lg font-bold {{ $color }}">#</div>
                            <p class="text-sm text-slate-500">{{ $label }}</p>
                            <p class="mt-1 text-3xl font-bold">0</p>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6 rounded-xl border border-slate-200 bg-white">
                    <div class="flex items-center justify-between border-b border-slate-200 p-5">
                        <h2 class="font-semibold">Pemesanan Terbaru</h2>
                        <button @click="page = 'pemesanan'" class="text-sm text-rose-600 hover:underline">Lihat semua</button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                                <tr>
                                    <th class="px-5 py-3">Nama</th>
                                    <th class="px-5 py-3">No. Telepon</th>
                                    <th class="px-5 py-3">Paket</th>
                                    <th class="px-5 py-3">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td colspan="4" class="px-5 py-10 text-center text-slate-400">Belum ada pemesanan.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            {{-- ============ PORTOFOLIO ============ --}}
            <section x-show="page === 'portofolio'" x-cloak>
                <div class="mb-6 flex items-center justify-between">
                    <p class="text-sm text-slate-500">Kelola foto portofolio yang tampil di website.</p>
                    <button @click="modalFoto = true" class="rounded-lg bg-rose-500 px-4 py-2 text-sm font-medium text-white hover:bg-rose-600">+ Tambah Foto</button>
                </div>

                <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    <div class="col-span-full rounded-xl border border-dashed border-slate-300 bg-white py-16 text-center text-slate-400">
                        Belum ada foto portofolio.
                    </div>
                </div>
            </section>

            {{-- ============ TESTIMONI ============ --}}
            <section x-show="page === 'testimoni'" x-cloak>
                <div class="mb-6 flex items-center justify-between">
                    <p class="text-sm text-slate-500">Atur testimoni yang ditampilkan di website.</p>
                    <button @click="modalTesti = true" class="rounded-lg bg-rose-500 px-4 py-2 text-sm font-medium text-white hover:bg-rose-600">+ Tambah Testimoni</button>
                </div>

                <div class="grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    <div class="col-span-full rounded-xl border border-dashed border-slate-300 bg-white py-16 text-center text-slate-400">
                        Belum ada testimoni.
                    </div>
                </div>
            </section>

            {{-- ============ PEMESANAN PAKET ============ --}}
            <section x-show="page === 'pemesanan'" x-cloak>
                <div class="rounded-xl border border-slate-200 bg-white">
                    <div class="flex flex-col gap-3 border-b border-slate-200 p-5 sm:flex-row sm:items-center sm:justify-between">
                        <input type="text" placeholder="Cari nama / nomor..."
                               class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-rose-500 focus:outline-none focus:ring-1 focus:ring-rose-500 sm:w-72">
                        <select class="rounded-lg border border-slate-300 px-3 py-2 text-sm">
                            <option>Semua Status</option>
                            <option>Baru</option>
                            <option>Dihubungi</option>
                            <option>Selesai</option>
                        </select>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-sm">
                            <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                                <tr>
                                    <th class="px-5 py-3">Nama</th>
                                    <th class="px-5 py-3">Kontak</th>
                                    <th class="px-5 py-3">Paket</th>
                                    <th class="px-5 py-3">Tgl. Acara</th>
                                    <th class="px-5 py-3">Pesan</th>
                                    <th class="px-5 py-3">Status</th>
                                    <th class="px-5 py-3 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100">
                                <tr>
                                    <td colspan="7" class="px-5 py-10 text-center text-slate-400">Belum ada pemesanan paket.</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

    {{-- ============ MODAL TAMBAH FOTO ============ --}}
    <div x-show="modalFoto" x-cloak class="fixed inset-0 z-50 grid place-items-center bg-black/50 p-4">
        <div @click.outside="modalFoto = false" class="w-full max-w-md rounded-xl bg-white p-6">
            <h3 class="mb-4 text-lg font-semibold">Tambah Foto Portofolio</h3>
            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="mb-1 block text-sm font-medium">Judul</label>
                    <input type="text" name="title" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-rose-500 focus:outline-none focus:ring-1 focus:ring-rose-500">
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium">Foto</label>
                    <input type="file" name="image" accept="image/*" class="w-full rounded-lg border border-slate-300 p-2 text-sm">
                </div>
                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" @click="modalFoto = false" class="rounded-lg px-4 py-2 text-sm hover:bg-slate-100">Batal</button>
                    <button type="submit" class="rounded-lg bg-rose-500 px-4 py-2 text-sm font-medium text-white hover:bg-rose-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    {{-- ============ MODAL TAMBAH TESTIMONI ============ --}}
    <div x-show="modalTesti" x-cloak class="fixed inset-0 z-50 grid place-items-center bg-black/50 p-4">
        <div @click.outside="modalTesti = false" class="w-full max-w-md rounded-xl bg-white p-6">
            <h3 class="mb-4 text-lg font-semibold">Tambah Testimoni</h3>
            <form action="#" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="mb-1 block text-sm font-medium">Nama</label>
                    <input type="text" name="name" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-rose-500 focus:outline-none focus:ring-1 focus:ring-rose-500">
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium">Rating</label>
                    <select name="rating" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm">
                        @for ($r = 5; $r >= 1; $r--)
                            <option value="{{ $r }}">{{ $r }} bintang</option>
                        @endfor
                    </select>
                </div>
                <div>
                    <label class="mb-1 block text-sm font-medium">Testimoni</label>
                    <textarea name="content" rows="3" class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm focus:border-rose-500 focus:outline-none focus:ring-1 focus:ring-rose-500"></textarea>
                </div>
                <div class="flex justify-end gap-2 pt-2">
                    <button type="button" @click="modalTesti = false" class="rounded-lg px-4 py-2 text-sm hover:bg-slate-100">Batal</button>
                    <button type="submit" class="rounded-lg bg-rose-500 px-4 py-2 text-sm font-medium text-white hover:bg-rose-600">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>