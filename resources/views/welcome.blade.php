<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediWell - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex flex-col items-center justify-center h-screen relative">

    <!-- Logo -->
    <div class="absolute top-0 left-0 p-2">
        <img src="{{ asset('img/mediawell 3.png') }}" alt="Logo" class="h-[120px] w-auto">
    </div>

    <!-- Dokter -->
    <img src="{{ asset('img/Rectangle 103.png') }}" alt="Doctor" class="h-[400px] mx-auto">

    <!-- Tombol Login -->
    <a href="{{ route('login') }}" 
       class="mt-6 px-8 py-2 border-2 border-cyan-800 rounded-full text-cyan-900 hover:bg-cyan-800 hover:text-white transition">
        Login
    </a>

</body>
</html>
