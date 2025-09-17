<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediWell - Sign Up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

  <!-- Tombol Back -->
  <a href="{{ route('login') }}" 
     class="absolute top-6 left-6 border-2 border-cyan-800 rounded-full p-2 hover:bg-cyan-100">
    <span class="text-cyan-800">&lt;</span>
  </a>

  <!-- Card Sign Up -->
  <div class="bg-[#4f96a5] p-12 rounded-[40px] w-[900px] shadow-lg">
    <h2 class="text-white text-3xl font-semibold mb-8 text-center">Sign Up</h2>

    <form action="{{ route('signup') }}" method="POST" class="grid grid-cols-2 gap-6">
      @csrf

      <input type="text" name="name" placeholder="Full Name" 
             class="px-4 py-3 rounded-full outline-none">
      <input type="email" name="email" placeholder="Email" 
             class="px-4 py-3 rounded-full outline-none">

      <input type="password" name="password" placeholder="Password" 
             class="px-4 py-3 rounded-full outline-none">
      <input type="password" name="password_confirmation" placeholder="Confirm Password" 
             class="px-4 py-3 rounded-full outline-none">

      <input type="text" name="telephone" placeholder="Telephone" 
             class="px-4 py-3 rounded-full outline-none col-span-2">

      <div class="col-span-2">
        <button type="submit" 
                class="bg-white text-black px-8 py-2 rounded-full font-semibold hover:bg-gray-200 w-full">
          Sign Up
        </button>
      </div>
    </form>
  </div>

  <!-- Popup pesan -->
  @if(session('success'))
    <script>
      alert("{{ session('success') }}");
      window.location.href = "{{ route('login') }}"; // otomatis ke login
    </script>
  @endif

  @if(session('error'))
    <script>
      alert("{{ session('error') }}");
    </script>
  @endif

</body>
</html>
