<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MediWell - Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen">

  <!-- Tombol Back -->
  <a href="{{ url('/') }}" class="absolute top-6 left-6 border-2 border-cyan-800 rounded-full p-2">
    <span class="text-cyan-800">&lt;</span>
  </a>

  <!-- Card Login -->
  <div class="bg-[#4f96a5] p-12 rounded-[40px] w-[500px]">
    <h2 class="text-white text-3xl font-semibold mb-8">Login</h2>

    <form action="{{ route('login') }}" method="POST">
      @csrf
      <input type="email" name="email" placeholder="Email" class="w-full mb-4 px-4 py-3 rounded-full outline-none">

      <input type="password" name="password" placeholder="Password" class="w-full mb-6 px-4 py-3 rounded-full outline-none">

      <button type="submit" class="bg-white text-black px-8 py-2 rounded-full font-semibold hover:bg-gray-200 w-full">
        Login
      </button>
    </form>

    <p class="text-sm text-white mt-6">
      Don’t have account?
      <a href="{{ route('signup') }}" class="underline">Sign Up</a>
    </p>
  </div>
</body>
</html>
