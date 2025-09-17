<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Chat dengan Dokter</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white h-screen flex flex-col">

  <!-- Header Dokter -->
  <header class="flex items-center gap-3 p-4 border-b border-slate-200">
    <a href="{{ route('chat') }}" class="text-slate-700 hover:text-cyan-800">←</a>
    <img 
      src="{{ $doctor->photo ? asset($doctor->photo) : asset('default-doctor.png') }}" 
      alt="{{ $doctor->name }}" 
      class="w-10 h-10 rounded-full bg-slate-300 object-cover"
    />
    <div>
      <h2 class="font-semibold text-slate-800">{{ $doctor->name }}</h2>
      <p class="text-sm text-slate-500">{{ $doctor->spesialis }}</p>
    </div>
  </header>

  <!-- Area Chat -->
  <main id="chatBox" class="flex-1 overflow-y-auto p-4 space-y-4 bg-slate-50">
    <!-- Pesan awal dari dokter -->
    <div class="flex items-start gap-2">
      <div class="bg-slate-200 px-4 py-2 rounded-lg max-w-xs">
        Halo, saya {{ $doctor->name }}. Silakan sampaikan keluhan Anda.
      </div>
    </div>
  </main>

  <!-- Input Chat -->
  <form id="chatForm" class="p-3 border-t border-slate-200 flex items-center gap-2">
    <!-- Upload Gambar -->
    <label class="cursor-pointer">
      <input type="file" id="fileInput" accept="image/*" class="hidden">
      <span class="px-3 py-2 bg-slate-200 rounded hover:bg-slate-300">📷</span>
    </label>

    <!-- Input Teks -->
    <input 
      id="messageInput" 
      type="text" 
      placeholder="Ketik pesan..." 
      class="flex-1 border rounded-full px-4 py-2 outline-none focus:ring-2 focus:ring-cyan-700"
    />

    <!-- Tombol Kirim -->
    <button 
      type="submit" 
      class="px-4 py-2 bg-cyan-800 text-white rounded-full hover:bg-cyan-900"
    >
      ➤
    </button>
  </form>

  <!-- Script Chat -->
  <script>
    const chatBox = document.getElementById("chatBox");
    const chatForm = document.getElementById("chatForm");
    const messageInput = document.getElementById("messageInput");
    const fileInput = document.getElementById("fileInput");

    // Kirim pesan teks
    chatForm.addEventListener("submit", (e) => {
      e.preventDefault();
      const text = messageInput.value.trim();
      if (text !== "") {
        addMessage(text, "user");
        messageInput.value = "";
      }
    });

    // Kirim foto
    fileInput.addEventListener("change", (e) => {
      const file = e.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(evt) {
          addImage(evt.target.result, "user");
        };
        reader.readAsDataURL(file);
      }
    });

    // Tambah pesan teks
    function addMessage(text, sender) {
      const div = document.createElement("div");
      div.className = sender === "user" ? "flex justify-end" : "flex items-start gap-2";
      div.innerHTML = `
        <div class="${
          sender === "user" 
          ? "bg-cyan-800 text-white px-4 py-2 rounded-lg max-w-xs" 
          : "bg-slate-200 px-4 py-2 rounded-lg max-w-xs"
        }">
          ${text}
        </div>
      `;
      chatBox.appendChild(div);
      chatBox.scrollTop = chatBox.scrollHeight;
    }

    // Tambah pesan gambar
    function addImage(src, sender) {
      const div = document.createElement("div");
      div.className = sender === "user" ? "flex justify-end" : "flex items-start gap-2";
      div.innerHTML = `
        <img src="${src}" class="max-w-[200px] rounded-lg border border-slate-300"/>
      `;
      chatBox.appendChild(div);
      chatBox.scrollTop = chatBox.scrollHeight;
    }
  </script>

</body>
</html>
