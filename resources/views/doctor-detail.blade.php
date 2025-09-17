<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Dokter</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">

    <div class="max-w-2xl w-full bg-white p-8 rounded-2xl shadow-lg">
        <!-- Profile -->
        <div class="flex items-center gap-6">
            <img src="{{ asset($doctor->foto ?? 'default-doctor.png') }}" 
                alt="{{ $doctor->name }}" 
                class="w-24 h-24 rounded-full object-cover bg-slate-200 shadow"/>

            <div>
                <h2 class="text-2xl font-bold text-gray-800">{{ $doctor->name }}</h2>
                <p class="text-gray-600"><span class="font-semibold">Spesialis:</span> {{ $doctor->spesialis }}</p>
                <p class="text-gray-600"><span class="font-semibold">Pengalaman:</span> {{ $doctor->pengalaman }} tahun</p>
                <p class="text-gray-600"><span class="font-semibold">Jadwal:</span> {{ $doctor->jadwal_praktik }}</p>
                <p class="text-gray-600"><span class="font-semibold">Biaya:</span> Rp {{ number_format($doctor->biaya_konsultasi,0,',','.') }}</p>
            </div>
        </div>

        <!-- Divider -->
        <div class="my-6 border-t border-gray-200"></div>

        <!-- Action Buttons -->
        <div class="flex justify-end gap-4">
            <a href="{{ url('/chatroom/'.$doctor->id) }}" 
                class="px-5 py-2 bg-cyan-700 text-white rounded-lg shadow hover:bg-cyan-800 transition">
                Chat
            </a>
            <a href="{{ url('/chat') }}" 
                class="px-5 py-2 bg-gray-200 text-gray-700 rounded-lg shadow hover:bg-gray-300 transition">
                Kembali
            </a>
        </div>
    </div>

</body>
</html>
