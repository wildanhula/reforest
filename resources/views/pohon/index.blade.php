<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reforest</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex flex-col justify-between min-h-screen">

  <!-- Header -->
  <header class="w-full bg-[#D2E2E2] shadow-md border-b border-gray-300">
    <div class="container mx-auto flex justify-between items-center px-6 py-4">
      <img src="img/Logo.png" alt="Logo" class="w-12 h-12">

      <div class="flex items-center gap-4">
          <nav class="flex gap-6">
              <a href="{{ route('dashboard') }}" class="text-[#004C6D] font-medium hover:underline">Home</a>
              <a href="#" class="text-[#004C6D] font-medium hover:underline">Lokasi</a>
              <a href="{{ route('pohon.index') }}" class="text-[#004C6D] font-medium hover:underline">Pohonku</a>
              <a href="{{ route('artikel.index') }}" class="text-[#004C6D] font-medium hover:underline">Artikel</a>
              <a href="#" class="text-[#004C6D] font-medium hover:underline">FAQs</a>
            </nav>
        <div class="flex items-center space-x-4">
          <img src="img/IMG_1696.JPG" alt="Profile Picture" class="w-10 h-10 rounded-full">
          <div class="text-gray-700">
            <span>Rofi Pratama</span>
          </div>
          <a href="{{ route('logout') }}" class="bg-[#004C6D] text-white py-1 px-4 border rounded-full hover:border-[#004C6D] hover:bg-white hover:text-[#004C6D]">Logout</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <main class="container mx-auto px-6 py-12">
    <h1 class="text-3xl font-bold text-[#1E4D4D] mb-8">Daftar pohon yang sudah Anda tanam</h1>

   <!-- Pohon Eboni -->
    <div class="flex flex-col md:flex-row-reverse gap-6 items-center bg-gray-100 p-6 shadow-md rounded-lg mb-8">
  <!-- Gambar -->
    <img src="img/image2.png" alt="Pohon Eboni" class="w-full md:w-1/3 rounded-lg border">
  <!-- Teks -->
        <div class="flex flex-col gap-4 w-full md:w-2/3">
            <h2 class="text-2xl font-semibold text-[#1E4D4D]">Pohon Eboni</h2>
            <p class="text-lg text-gray-600">
            Pohon Eboni (Diospyros celebica) adalah salah satu jenis pohon endemik yang tumbuh di Sulawesi, Indonesia. Pohon ini dikenal dengan kayunya yang keras, padat, dan memiliki warna hitam pekat yang sering diselingi garis-garis cokelat atau kuning.
            </p>
            <div class="flex gap-4">
                <button class="px-6 py-2 border border-[#004C6D] text-[#004C6D] rounded-full hover:bg-[#004C6D] hover:text-white transition">
                Edit
                </button>
                <button class="px-6 py-2 border border-[#004C6D] text-[#004C6D] rounded-full hover:bg-[#004C6D] hover:text-white transition">
                Delete
                </button>
            </div>
        </div>
    </div>



    <!-- Pohon Jati -->
    <div class="flex flex-col md:flex-row-reverse gap-6 items-center bg-gray-100 p-6 shadow-md rounded-lg mb-8">
  <!-- Gambar -->
    <img src="img/image3.png" alt="Pohon Eboni" class="w-full md:w-1/3 rounded-lg border">
  <!-- Teks -->
        <div class="flex flex-col gap-4 w-full md:w-2/3">
            <h2 class="text-2xl font-semibold text-[#1E4D4D]">Pohon Jati</h2>
            <p class="text-lg text-gray-600">
            Pohon Jati (Tectona grandis) adalah salah satu spesies pohon yang dikenal karena kualitas kayunya yang sangat baik dan tahan lama. Jati sering digunakan untuk konstruksi dan furnitur.
            </p>
            <div class="flex gap-4">
                <button class="px-6 py-2 border border-[#004C6D] text-[#004C6D] rounded-full hover:bg-[#004C6D] hover:text-white transition">
                Edit
                </button>
                <button class="px-6 py-2 border border-[#004C6D] text-[#004C6D] rounded-full hover:bg-[#004C6D] hover:text-white transition">
                Delete
                </button>
            </div>
        </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="w-full bg-[#D2E2E2] py-6">
    <div class="container mx-auto text-center">
      <nav class="flex justify-center gap-6 mb-4">
        <a href="#" class="text-[#004C6D] text-sm hover:underline">Syarat dan Ketentuan</a>
        <a href="#" class="text-[#004C6D] text-sm hover:underline">FAQs</a>
        <a href="#" class="text-[#004C6D] text-sm hover:underline">Kontak</a>
        <a href="#" class="text-[#004C6D] text-sm hover:underline">Offline</a>
      </nav>
      <p class="text-gray-700 text-sm">Copyright © 2024 Reforest. All rights reserved.</p>
    </div>
  </footer>

</body>
</html>
