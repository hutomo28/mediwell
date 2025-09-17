<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chat dengan Dokter - MediWell</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-slate-900">

  <!-- Navbar -->
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-slate-200">
    <div class="max-w-7xl mx-auto h-16 px-4 flex items-center justify-between">
      <a href="{{ url('mediawell 3.png') }}" class="flex items-center">
        <img src="{{ asset('mediawell 3.png') }}" alt="Logo MediWell" class="h-10 md:h-12 w-auto"/>
      </a>

      <nav class="hidden md:flex items-center gap-8">
        <a href="{{ route('dashboard') }}" class="text-slate-700 hover:text-cyan-800 transition">Beranda</a>
        <a href="{{ url('/#artikel-kesehatan') }}" class="text-slate-700 hover:text-cyan-800 transition">Artikel Kesehatan</a>
        <a href="{{ route('chat') }}" class="text-cyan-800 font-semibold border-b-2 border-cyan-800">Chat dengan Dokter</a>
        <a href="{{ url('/toko-kesehatan') }}" class="text-slate-700 hover:text-cyan-800 transition">Toko Kesehatan</a>
    </nav>

    </div>
  </header>

  <!-- Konten utama -->
  <main class="max-w-7xl mx-auto px-4 py-12 grid md:grid-cols-2 gap-10">
    
    <!-- Bagian kiri -->
    <div>
      <div class="bg-slate-100 rounded-xl p-6 flex flex-col items-center text-center">
        <img src="{{ asset('Group 26.png') }}" alt="Ilustrasi Chat" class="w-40 mx-auto mb-4"/>
        <h2 class="text-lg font-semibold text-slate-800">
          Silakan jelaskan kondisi dan dapatkan solusi dari dokter terpercaya
        </h2>
      </div>

      <div class="mt-8">
        <h3 class="text-lg font-semibold text-cyan-900 mb-4">Cara chat dokter :</h3>
        <ul class="space-y-3 text-slate-700">
          <li class="flex items-start gap-2"><span class="text-cyan-700">➤</span> Pilih dokter spesialis sesuai gejala</li>
          <li class="flex items-start gap-2"><span class="text-cyan-700">➤</span> Klik chat dokter untuk berkomunikasi</li>
          <li class="flex items-start gap-2"><span class="text-cyan-700">➤</span> Ceritakan kondisi terkini</li>
          <li class="flex items-start gap-2"><span class="text-cyan-700">➤</span> Dokter akan memberi solusi & saran obat</li>
        </ul>
      </div>
    </div>

    <!-- Bagian kanan -->
    <div>
      <h2 class="text-2xl font-semibold text-cyan-900 mb-6">Rekomendasi Dokter</h2>

      @foreach($doctors as $doctor)
<div class="bg-slate-100 rounded-xl p-6 flex items-center justify-between mb-6">
  <div class="flex items-center gap-4">
    <img src="{{ asset($doctor->foto ?? 'default-doctor.png') }}" 
         alt="{{ $doctor->name }}" 
         class="w-16 h-16 rounded-full bg-slate-300"/>

    <div>
      <h3 class="text-lg font-semibold text-slate-800">{{ $doctor->name }}</h3>
      <p class="text-sm text-slate-600">{{ $doctor->spesialis }}</p>
    </div>
  </div>

  <div class="flex flex-col gap-2">
    <a href="{{ route('chatroom', $doctor->id) }}" 
       class="px-4 py-2 rounded bg-cyan-800 text-white hover:bg-cyan-900 transition">
       Chat
    </a>
    <a href="{{ route('doctor.detail', $doctor->id) }}" 
       class="px-4 py-2 rounded bg-slate-200 text-slate-700 hover:bg-slate-300 transition">
       Lihat Detail
    </a>
  </div>
</div>
@endforeach

    </div>
  </main>

  <!-- Footer -->
  <footer class="border-t border-slate-200 bg-white mt-12">
    <div class="max-w-7xl mx-auto px-4 py-6 text-sm text-slate-600 flex items-center justify-between">
      <span>© 2025 MediWell. All rights reserved.</span>
      <a href="{{ url('/') }}" class="hover:text-cyan-800 transition">Kembali ke Beranda</a>
    </div>
  </footer>

</body>
</html>
