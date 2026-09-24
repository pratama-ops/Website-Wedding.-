document.addEventListener('DOMContentLoaded', () => {
	const mobileMenuBtn = document.getElementById('mobile-menu-btn');
	const mobileMenu = document.getElementById('mobile-menu');
	const navbar = document.getElementById('navbar');
	const modal = document.getElementById('custom-modal');
	const modalContainer = document.getElementById('modal-container');
	const tabContentData = {
		desc: 'Kehadiran wedding organizer (WO) merupakan solusi untuk para pasangan yang ingin melangsungkan wedding dream tanpa perlu repot mengurus semuanya. Tanggung jawab utamanya adalah memastikan semua agenda pada hari-H pernikahan mulai dari awal hingga akhir acara berjalan dengan lancar.',
		terms: 'Ketentuan Layanan: 1. Pembayaran DP minimal 30% saat konfirmasi booking. 2. Pelunasan dilakukan selambat-lambatnya H-14 sebelum acara. 3. Reschedule jadwal dapat dilakukan maksimal 2 bulan sebelum hari-H dengan ketersediaan vendor.',
		vendors: 'Daftar Vendor Rekanan: • MUA: By Amira & Team • Dekorasi: Orie Decor & Florist • Catering: Rasa Nusantara • Photography: FrameStory Studio • Sound & Lighting: ProSound Jakarta',
	};
	let currentSelectedPackage = 'Konsultasi Umum';

	mobileMenuBtn?.addEventListener('click', () => {
		mobileMenu?.classList.toggle('hidden');
	});

	window.addEventListener('scroll', () => {
		navbar?.classList.toggle('bg-[#2c2420]/95', window.scrollY > 50);
		navbar?.classList.toggle('shadow-md', window.scrollY > 50);
		navbar?.classList.toggle('backdrop-blur-md', window.scrollY > 50);
	});

	document.querySelectorAll('[data-fallback]').forEach((image) => {
		image.addEventListener('error', () => {
			image.src = image.dataset.fallback;
		}, { once: true });
	});

	document.querySelectorAll('[data-tab]').forEach((button) => {
		button.addEventListener('click', () => {
			document.querySelectorAll('[data-tab]').forEach((tab) => {
				tab.classList.remove('border-goldAccent', 'text-darkBg');
				tab.classList.add('border-transparent', 'text-textMuted');
			});
			button.classList.remove('border-transparent', 'text-textMuted');
			button.classList.add('border-goldAccent', 'text-darkBg');
			document.getElementById('tab-content').innerText = tabContentData[button.dataset.tab];
		});
	});

	document.getElementById('date-checker-form')?.addEventListener('submit', (event) => {
		event.preventDefault();
		const dateInput = document.getElementById('wedding-date-input').value;
		const resultDiv = document.getElementById('date-result');
		if (!dateInput) return;
		resultDiv.classList.remove('hidden');
		const dateObj = new Date(dateInput);
		const today = new Date();
		if (dateObj < today) {
			resultDiv.innerHTML = '<span class="text-red-500">❌ Tanggal tersebut sudah terlewat. Silakan pilih tanggal yang akan datang.</span>';
		} else if (dateObj.getDate() % 2 === 0) {
			resultDiv.innerHTML = `<span class="text-green-700 bg-green-100 p-3 block border border-green-300">✨ Selamat! Tanggal <strong class="underline">${dateInput}</strong> masih tersedia untuk wedding booking. Yuk amankan tanggalmu sekarang!</span>`;
		} else {
			resultDiv.innerHTML = `<span class="text-amber-700 bg-amber-100 p-3 block border border-amber-300">⚠️ Maaf, pada tanggal <strong class="underline">${dateInput}</strong> jadwal kami sudah fully booked. Silakan pilih tanggal terdekat lainnya.</span>`;
		}
	});

	const openModal = (packageName) => {
		currentSelectedPackage = packageName;
		document.getElementById('modal-title').innerText = packageName.includes('Package') ? `Booking ${packageName}` : 'Konsultasi Pernikahan';
		document.getElementById('consultation-form').classList.remove('hidden');
		document.getElementById('modal-success').classList.add('hidden');
		modal.classList.remove('hidden');
		setTimeout(() => {
			modal.classList.remove('opacity-0');
			modalContainer.classList.remove('scale-95');
			modalContainer.classList.add('scale-100');
		}, 10);
	};

	const closeModal = () => {
		modal.classList.add('opacity-0');
		modalContainer.classList.remove('scale-100');
		modalContainer.classList.add('scale-95');
		setTimeout(() => modal.classList.add('hidden'), 300);
	};

	document.querySelectorAll('[data-modal-package]').forEach((button) => {
		button.addEventListener('click', () => openModal(button.dataset.modalPackage));
	});
	document.querySelectorAll('[data-close-modal]').forEach((button) => button.addEventListener('click', closeModal));
	document.getElementById('consultation-form')?.addEventListener('submit', (event) => {
		event.preventDefault();
		const name = document.getElementById('modal-name').value;
		const phone = document.getElementById('modal-phone').value;
		const date = document.getElementById('modal-date').value;
		if (!name || !phone || !date) return;
		document.getElementById('success-package-name').innerText = currentSelectedPackage;
		document.getElementById('consultation-form').classList.add('hidden');
		document.getElementById('modal-success').classList.remove('hidden');
	});
	modal?.addEventListener('click', (event) => {
		if (event.target === modal) closeModal();
	});
});
