<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MediWell Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-900">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto h-16 px-4 flex items-center justify-between">
      <!-- Logo -->
      <a href="#beranda" class="flex items-center">
        <img src="{{ asset('img/mediawell 3.png') }}" alt="Logo MediWell" class="h-10 md:h-12 w-auto"/>
      </a>

      <!-- Navigasi -->
      <nav class="hidden md:flex items-center gap-8">
        <a href="#beranda" class="text-slate-700 hover:text-cyan-800 transition">Beranda</a>
        <a href="#artikel-kesehatan" class="text-slate-700 hover:text-cyan-800 transition">Artikel Kesehatan</a>
        <a href="{{ url('chat') }}" class="text-slate-700 hover:text-cyan-800 transition">Chat dengan Dokter</a>
        <a href="{{ url('obat') }}" class="text-slate-700 hover:text-cyan-800 transition">Toko Kesehatan</a>

        <!-- Ikon Akun -->
        <button id="profileBtn" class="relative flex items-center justify-center w-10 h-10 rounded-full border border-slate-300 hover:border-cyan-600 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-cyan-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A8 8 0 1112 20a8 8 0 01-6.879-2.196z" />
          </svg>
        </button>
      </nav>
    </div>
  </header>

  <!-- Modal Profile -->
  <div id="profileModal" class="hidden fixed inset-0 z-50 bg-black/50 flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-xl max-w-sm w-full p-6 text-center relative">
      <!-- Tombol Close -->
      <button id="closeProfile" class="absolute top-3 right-3 text-slate-500 hover:text-red-500">✕</button>

      <!-- Foto Profil -->
      <div class="flex justify-center">
        <img src="{{ asset('img/akun.png') }}" alt="Foto Profil" class="w-24 h-24 rounded-full border-4 border-cyan-700"/>
      </div>

      <h2 class="mt-4 text-xl font-semibold">Logged In</h2>
      <p class="mt-2 font-medium">{{ Auth::user()->name ?? 'Guest' }}</p>
      <p class="text-slate-600">{{ Auth::user()->email ?? 'Belum login' }}</p>

      <!-- Password -->
      <div class="mt-5 flex items-center justify-between border border-cyan-700 rounded-full px-4 py-2 bg-slate-100">
        <span class="text-slate-800">Password</span>
        <a href="#" class="text-cyan-700 font-medium hover:underline">Change</a>
      </div>

      <!-- Tombol Edit -->
      <button class="mt-6 px-6 py-2 border-2 border-cyan-700 text-cyan-700 rounded-full hover:bg-cyan-700 hover:text-white transition">
        Edit Profile
      </button>
    </div>
  </div>

  <!-- Konten Dashboard -->
  <main id="beranda" class="scroll-mt-24">
    <!-- Hero -->
    <section class="relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 py-16 md:py-24 grid md:grid-cols-2 gap-10 items-center">
        <div>
          <h1 class="text-3xl md:text-4xl lg:text-5xl font-semibold leading-tight text-cyan-900">
            Semua tenaga medis di MediWell dipastikan memenuhi standar regulasi dan etika layanan
          </h1>
          <p class="mt-4 text-slate-600 md:text-lg">
            Punya pertanyaan terkait kondisi kesehatan kamu, konsultasikan dengan tenaga medis MediWell
            yang sudah terverifikasi dan berpengalaman.
          </p>

          <div class="mt-8 flex flex-wrap gap-4">
            <a href="#chat-dokter" class="inline-flex items-center justify-center rounded-full bg-cyan-800 text-white px-6 py-2.5 hover:bg-cyan-900 transition">
              Mulai Konsultasi
            </a>
            <a href="#artikel-kesehatan" class="inline-flex items-center justify-center rounded-full border-2 border-cyan-800 text-cyan-900 px-6 py-2.5 hover:bg-cyan-800 hover:text-white transition">
              Baca Artikel
            </a>
          </div>
        </div>

        <div class="relative">
          <img src="{{ asset('img/Rectangle 68.png') }}" alt="Ilustrasi Dokter MediWell" class="w-full max-w-md mx-auto"/>
        </div>
      </div>
    </section>

    <!-- (lanjutan section lainnya persis seperti file HTML lu, tinggal ganti src gambar ke {{ asset('img/...') }}) -->
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-200 bg-white">
      <main id="beranda" class="scroll-mt-24">
    
       <!-- Mengapa Memilih Kami -->
       <section id="mengapa-kami" class="scroll-mt-24 bg-slate-50">
         <div class="max-w-7xl mx-auto px-4 py-16 md:py-24">
           <h2 class="text-3xl md:text-4xl font-semibold text-cyan-900">Mengapa Memilih Kami?</h2>
           <p class="mt-2 text-slate-600 md:text-lg">Kami menghadirkan layanan kesehatan yang terpercaya</p>
    
           <div class="mt-10 grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
             <!-- Card 1 -->
             <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
               <div class="h-12 w-12 rounded-full bg-cyan-50 text-cyan-700 flex items-center justify-center">
                 <!-- Icon check -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round" d="m5 13 4 4L19 7"/>
                 </svg>
               </div>
               <h3 class="mt-4 text-xl font-semibold text-slate-900">Tenaga Medis Terverifikasi</h3>
               <p class="mt-2 text-slate-600">
                 Tenaga medis MediWell telah melalui proses verifikasi ketat dan memiliki pengalaman di bidangnya.
               </p>
             </div>
    
             <!-- Card 2 -->
             <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
               <div class="h-12 w-12 rounded-full bg-cyan-50 text-cyan-700 flex items-center justify-center">
                 <!-- Icon shield -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round"
                         d="M12 6.253l7.5 3.248v4.246A7.5 7.5 0 0112 21a7.5 7.5 0 01-7.5-7.253V9.5L12 6.253z"/>
                 </svg>
               </div>
               <h3 class="mt-4 text-xl font-semibold text-slate-900">Privasi Terjamin</h3>
               <p class="mt-2 text-slate-600">
                 Data dan informasi yang kamu berikan akan dijaga kerahasiaannya sesuai dengan regulasi yang berlaku.
               </p>
             </div>
    
             <!-- Card 3 -->
             <div class="rounded-2xl border border-slate-200 bg-white p-6 shadow-sm hover:shadow-md transition">
               <div class="h-12 w-12 rounded-full bg-cyan-50 text-cyan-700 flex items-center justify-center">
                 <!-- Icon lightning -->
                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                      viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                   <path stroke-linecap="round" stroke-linejoin="round"
                         d="M13 10V3L4 14h7v7l9-11h-7z"/>
                 </svg>
               </div>
               <h3 class="mt-4 text-xl font-semibold text-slate-900">Respon Cepat</h3>
               <p class="mt-2 text-slate-600">
                 Kami berkomitmen untuk memberikan respon yang cepat dan tanggap terhadap kebutuhan kesehatan kamu.
               </p>
             </div>
           </div>
         </div>
       </section>
    
       <!-- Artikel Kesehatan -->
       <section id="artikel-kesehatan" class="scroll-mt-24">
         <div class="max-w-3xl mx-auto px-4 py-16 md:py-24">
           <h2 class="text-3xl md:text-4xl font-semibold text-cyan-900">Artikel Kesehatan</h2>
           <h3 class="mt-2 text-xl md:text-2xl font-medium text-slate-900">
             Pentingnya Menjaga Kesehatan Sejak Dini
           </h3>
           <p class="mt-4 text-slate-700">
             Menjaga kesehatan sejak dini membantu mencegah penyakit, meningkatkan kualitas hidup, dan membuat tubuh
             lebih siap menghadapi aktivitas sehari-hari. Kebiasaan baik yang dibangun sekarang akan menjadi investasi
             jangka panjang bagi kesehatan fisik dan mental.
           </p>
           <ul class="mt-6 space-y-3 text-slate-700 list-disc list-inside">
             <li><span class="font-semibold">Olahraga teratur:</span> pilih aktivitas yang kamu suka untuk menjaga konsistensi.</li>
             <li><span class="font-semibold">Pola makan sehat:</span> perbanyak sayur, buah, dan protein berkualitas, kurangi gula & lemak trans.</li>
             <li><span class="font-semibold">Tidur cukup:</span> jaga jam tidur teratur agar proses pemulihan tubuh optimal.</li>
             <li><span class="font-semibold">Cek kesehatan rutin:</span> lakukan pemeriksaan berkala untuk deteksi dini.</li>
           </ul>
         </div>
       </section>
    
       <!-- Placeholder anchor: Chat & Toko -->
       <section id="chat-dokter" class="scroll-mt-24">
         <div class="max-w-7xl mx-auto px-4 pb-10">
           <div class="rounded-2xl border border-slate-200 bg-cyan-50/60 p-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
             <div>
               <h3 class="text-xl font-semibold text-cyan-900">Butuh jawaban cepat dari dokter?</h3>
               <p class="text-slate-700 mt-1">Mulai chat untuk konsultasi langsung dengan tenaga medis terverifikasi.</p>
             </div>
             <a href="chat.html"
                class="inline-flex items-center justify-center rounded-full bg-cyan-800 text-white px-6 py-2.5 hover:bg-cyan-900 transition">
               Chat dengan Dokter
             </a>
           </div>
         </div>
       </section>
    
       <section id="toko-kesehatan" class="scroll-mt-24">
         <div class="max-w-7xl mx-auto px-4 pb-16">
           <div class="rounded-2xl border border-slate-200 p-6">
             <h3 class="text-xl font-semibold text-slate-900">Toko Kesehatan</h3>
             <p class="mt-2 text-slate-700">Temukan produk kesehatan pilihan. Segera hadir.</p>
           </div>
         </div>
       </section>
    
     </main>
    
     <!-- Footer -->
     <footer class="border-t border-slate-200 bg-white">
       <div class="max-w-7xl mx-auto px-4 py-12 grid gap-8 md:grid-cols-3">
         <div>
           <a href="#beranda" class="inline-flex items-center">
             <img src="{{ asset('img/mediawell 3.png') }}" alt="Logo MediWell" class="h-10 w-auto"/>
           </a>
           <p class="mt-4 text-sm text-slate-600">
             Layanan kesehatan tepercaya dengan tenaga medis terverifikasi.
           </p>
           <div class="mt-4 flex items-center gap-3">
             <!-- Socials -->
             <a href="#" class="h-9 w-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-cyan-800 hover:border-cyan-300 transition" aria-label="Instagram">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M7 2C4.243 2 2 4.243 2 7v10c0 2.757 2.243 5 5 5h10c2.757 0 5-2.243 5-5V7c0-2.757-2.243-5-5-5H7zm10 2c1.654 0 3 1.346 3 3v10c0 1.654-1.346 3-3 3H7c-1.654 0-3-1.346-3-3V7c0-1.654 1.346-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2.1a2.9 2.9 0 110 5.8 2.9 2.9 0 010-5.8zM17.5 6.75a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z"/>
               </svg>
             </a>
             <a href="#" class="h-9 w-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-cyan-800 hover:border-cyan-300 transition" aria-label="Twitter">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M22 5.92c-.77.35-1.6.58-2.46.69a4.26 4.26 0 001.87-2.35 8.49 8.49 0 01-2.7 1.03 4.24 4.24 0 00-7.23 3.86A12.03 12.03 0 013 4.9a4.24 4.24 0 001.31 5.66 4.2 4.2 0 01-1.92-.53v.05a4.24 4.24 0 003.4 4.15 4.26 4.26 0 01-1.91.07 4.25 4.25 0 003.96 2.95A8.5 8.5 0 012 19.54a12.02 12.02 0 006.51 1.91c7.82 0 12.1-6.48 12.1-12.1 0-.18 0-.36-.01-.54A8.58 8.58 0 0022 5.92z"/>
               </svg>
             </a>
             <a href="#" class="h-9 w-9 rounded-full border border-slate-200 flex items-center justify-center text-slate-500 hover:text-cyan-800 hover:border-cyan-300 transition" aria-label="Facebook">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
                 <path d="M13.5 9H15V6.5h-1.5c-1.1 0-2 .9-2 2V10H10v2.5h1.5V21h3v-8.5H16L16.5 10H13.5V9z"/>
               </svg>
             </a>
           </div>
         </div>
    
         <div class="md:col-span-2 grid grid-cols-2 sm:grid-cols-3 gap-8">
           <div>
             <h4 class="text-sm font-semibold text-slate-900">Navigasi</h4>
             <ul class="mt-3 space-y-2 text-slate-700">
               <li><a href="#beranda" class="hover:text-cyan-800 transition">Beranda</a></li>
               <li><a href="#artikel-kesehatan" class="hover:text-cyan-800 transition">Artikel Kesehatan</a></li>
               <li><a href="#chat-dokter" class="hover:text-cyan-800 transition">Chat dengan Dokter</a></li>
               <li><a href="#toko-kesehatan" class="hover:text-cyan-800 transition">Toko Kesehatan</a></li>
             </ul>
           </div>
           <div>
             <h4 class="text-sm font-semibold text-slate-900">Perusahaan</h4>
             <ul class="mt-3 space-y-2 text-slate-700">
               <li><a href="#tentang" class="hover:text-cyan-800 transition">Tentang Kami</a></li>
               <li><a href="#kontak" class="hover:text-cyan-800 transition">Kontak</a></li>
             </ul>
           </div>
         </div>
       </div>
    
       <div class="border-t border-slate-200">
         <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-slate-600 flex items-center justify-between">
           <span>© 2025 MediWell. All rights reserved.</span>
           <div class="hidden sm:flex gap-4">
             <a href="#" class="hover:text-cyan-800 transition">Kebijakan Privasi</a>
             <a href="#" class="hover:text-cyan-800 transition">Syarat & Ketentuan</a>
           </div>
         </div>
       </div>
     </footer>

    
  <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileModal = document.getElementById('profileModal');
    const closeProfile = document.getElementById('closeProfile');

    profileBtn.addEventListener('click', () => profileModal.classList.remove('hidden'));
    closeProfile.addEventListener('click', () => profileModal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if (e.target === profileModal) profileModal.classList.add('hidden'); });
  </script>



</body>
</html>
